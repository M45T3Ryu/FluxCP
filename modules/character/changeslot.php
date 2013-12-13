<?php
if (!defined('FLUX_ROOT')) exit;

$this->loginRequired();

$charID = $params->get('id');

if (!$charID) {
	$this->deny();
}

$char = $server->getCharacter($charID);
if (!$char || ($char->account_id != $session->account->account_id && !$auth->allowedToChangeSlot)) {
	$this->deny();
}

$title = htmlspecialchars(Flux::message('DMCharCSlot1'))." {$char->name}";

if ($char->online) {
	$session->setMessageData(htmlspecialchars(Flux::message('DMCharCSlot2'))." {$char->name}".htmlspecialchars(Flux::message('DMCharCSlot3')));
	$this->redirect();
}

if (count($_POST)) {
	if (!$params->get('changeslot')) {
		$this->deny();
	}
	
	$slot = (int)$params->get('slot');
	
	if ($slot > $server->maxCharSlots) {
		$errorMessage = htmlspecialchars(Flux::message('DMCharCSlot4'))." {$server->maxCharSlots}.";
	}
	elseif ($slot < 1) {
		$errorMessage = htmlspecialchars(Flux::message('DMCharCSlot5'));
	}
	elseif ($slot === (int)$char->char_num+1) {
		$errorMessage = htmlspecialchars(Flux::message('DMCharCSlot6'));
	}
	else {
		$sql  = "SELECT char_id, name, online FROM {$server->charMapDatabase}.`char` AS ch ";
		$sql .= "WHERE account_id = ? AND char_num = ? AND char_id != ?";
		$sth  = $server->connection->getStatement($sql);
		
		$sth->execute(array($char->account_id, $slot-1, $charID));
		
		$otherChar = $sth->fetch();
		
		if ($otherChar) {
			if ($otherChar->online) {
				$errorMessage = "{$otherChar->name} ".htmlspecialchars(Flux::message('DMCharCSlot7'));
			}
			else {
				$sql  = "UPDATE {$server->charMapDatabase}.`char` SET `char`.char_num = ?";
				$sql .= "WHERE `char`.char_id = ?";
				$sth  = $server->connection->getStatement($sql);
				
				$sth->execute(array($char->char_num, $otherChar->char_id));
			}
		}
		
		if (empty($errorMessage)) {
			$sql  = "UPDATE {$server->charMapDatabase}.`char` SET `char`.char_num = ?";
			$sql .= "WHERE `char`.char_id = ?";
			$sth  = $server->connection->getStatement($sql);
			
			$sth->execute(array($slot-1, $charID));
			
			if ($otherChar) {
				$otherNum = $char->char_num + 1;
				$session->setMessageData(htmlspecialchars(Flux::message('DMCharCSlot8'))." {$char->name}".htmlspecialchars(Flux::message('DMCharCSlot9'))." {$otherChar->name} (#$otherNum and #$slot).");
			}
			else {
				$session->setMessageData(htmlspecialchars(Flux::message('DMCharCSlot10'))." {$char->name}".htmlspecialchars(Flux::message('DMCharCSlot11'))." #$slot.");
			}
			
			$isMine = $char->account_id == $session->account->account_id;
			if ($auth->actionAllowed('character', 'view') && ($isMine || $auth->allowedToViewCharacter)) {
				$this->redirect($this->url('character', 'view', array('id' => $char->char_id)));
			}
			else {
				$this->redirect();
			}
		}
	}
}
?>