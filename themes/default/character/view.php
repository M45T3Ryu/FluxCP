<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('DSCharView1')) ?></h2>
<?php if ($char): ?>
<h3><?php echo htmlspecialchars(Flux::message('DSCharView2')) ?> <?php echo htmlspecialchars($char->char_name) ?></h3>
<table class="vertical-table">
	<tr>
		<?php if ($image=$this->jobImage($char->gender, $char->char_class)): ?>
			<td rowspan="11" style="width: 150px; text-align: center; vertical-alignment: middle">
				<img src="<?php echo $image ?>" />
			</td>
		<?php endif ?>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView3')) ?></th>
		<td colspan="2"><?php echo htmlspecialchars($char->char_id) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView4')) ?></th>
		<td>
			<?php if ($auth->allowedToSeeAccountID): ?>
				<?php echo htmlspecialchars($char->char_account_id) ?>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView5')) ?></span>
			<?php endif ?>
		</td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView6')) ?></th>
		<td><?php echo number_format($char->char_num+1) ?></td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView7')) ?></th>
		<td colspan="2"><?php echo htmlspecialchars($char->char_name) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView8')) ?></th>
		<td>
			<?php if ($isMine): ?>
				<a href="<?php echo $this->url('account', 'view') ?>"><?php echo htmlspecialchars($char->userid) ?></a>
			<?php else: ?>
				<?php echo $this->linkToAccount($char->char_account_id, $char->userid) ?>
			<?php endif ?>
		</td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView9')) ?></th>
		<td>
			<?php if ($job=$this->jobClassText($char->char_class)): ?>
				<?php echo htmlspecialchars($job) ?>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView10')) ?></span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView11')) ?></th>
		<td colspan="2"><?php echo number_format((int)$char->char_base_level) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView12')) ?></th>
		<td><?php echo number_format($char->char_base_exp) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView13')) ?></th>
		<td>
			<?php if ($char->partner_name): ?>
				<?php if ($auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($char->partner_id, $char->partner_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($char->partner_name) ?>
				<?php endif ?>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView15')) ?></th>
		<td colspan="2"><?php echo number_format((int)$char->char_job_level) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView16')) ?></th>
		<td><?php echo number_format($char->char_job_exp) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView17')) ?></th>
		<td>
			<?php if ($char->child_name): ?>
				<?php if ($auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($char->child_id, $char->child_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($char->child_name) ?>
				<?php endif ?>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView18')) ?></th>
		<td colspan="2"><?php echo number_format((int)$char->char_hp) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView19')) ?></th>
		<td><?php echo number_format((int)$char->char_max_hp) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView20')) ?></th>
		<td>
			<?php if ($char->mother_name): ?>
				<?php if ($auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($char->mother_id, $char->mother_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($char->mother_name) ?>
				<?php endif ?>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView21')) ?></th>
		<td colspan="2"><?php echo number_format((int)$char->char_sp) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView22')) ?></th>
		<td><?php echo number_format((int)$char->char_max_sp) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView23')) ?></th>
		<td>
			<?php if ($char->father_name): ?>
				<?php if ($auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($char->father_id, $char->father_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($char->father_name) ?>
				<?php endif ?>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView24')) ?></th>
		<td colspan="2"><?php echo number_format((int)$char->char_zeny) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView25')) ?></th>
		<td><?php echo number_format((int)$char->char_status_point) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView26')) ?></th>
		<td><?php echo number_format((int)$char->char_skill_point) ?></td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView27')) ?></th>
			<?php if ($char->guild_name): ?>
				<?php if ($char->guild_emblem_len): ?>
				<td><img src="<?php echo $this->emblem($char->guild_id) ?>" /></td>
				<?php endif ?>
				<td<?php if (!$char->guild_emblem_len) echo ' colspan="2"' ?>>
					<?php if ($auth->actionAllowed('guild', 'view')): ?>
						<?php echo $this->linkToGuild($char->guild_id, $char->guild_name) ?>
					<?php else: ?>
						<?php echo htmlspecialchars($char->guild_name) ?>
					<?php endif ?>
				</td>
			<?php else: ?>	
				<td colspan="2"><span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span></td>
			<?php endif ?>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView28')) ?></th>
		<td>
			<?php if ($char->guild_position): ?>
				<?php echo htmlspecialchars($char->guild_position) ?>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
			<?php endif ?>
		</td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView29')) ?></th>
		<td><?php echo number_format($char->guild_tax) ?>%</td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView30')) ?></th>
		<td colspan="2">
			<?php if ($char->party_name): ?>
				<?php echo htmlspecialchars($char->party_name) ?>
			<?php else: ?>	
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
			<?php endif ?>
		</td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView31')) ?></th>
		<td>
			<?php if ($char->party_leader_name): ?>
				<?php if ($auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($char->party_leader_id, $char->party_leader_name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($char->party_leader_name) ?>
				<?php endif ?>
			<?php else: ?>	
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
			<?php endif ?>
		</td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView32')) ?></th>
		<td>
			<?php if ($char->pet_name): ?>
				<?php echo htmlspecialchars($char->pet_name) ?>
				(<?php echo htmlspecialchars($char->pet_mob_name) ?>)
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView33')) ?></th>
		<td colspan="2"><?php echo number_format((int)$char->death_count) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView34')) ?></th>
		<td>
			<?php if ($char->char_online): ?>
				<span class="online"><?php echo htmlspecialchars(Flux::message('DSCharView35')) ?></span>
			<?php else: ?>
				<span class="offline"><?php echo htmlspecialchars(Flux::message('DSCharView36')) ?></span>
			<?php endif ?>
		</td>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView37')) ?></th>
		<td>
			<?php if ($char->homun_name): ?>
				<?php echo htmlspecialchars($char->homun_name) ?>
				(<?php echo htmlspecialchars($this->homunClassText($char->homun_class)) ?>)
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCharView38')) ?></th>
		<td colspan="6">
			<table class="character-stats">
				<tr>
					<td><span class="stat-name"><?php echo htmlspecialchars(Flux::message('DSCharView39')) ?></span></td>
					<td><span class="stat-value"><?php echo number_format((int)$char->char_str) ?></span></td>
					<td><span class="stat-name"><?php echo htmlspecialchars(Flux::message('DSCharView40')) ?></span></td>
					<td><span class="stat-value"><?php echo number_format((int)$char->char_agi) ?></span></td>
					<td><span class="stat-name"><?php echo htmlspecialchars(Flux::message('DSCharView41')) ?></span></td>
					<td><span class="stat-value"><?php echo number_format((int)$char->char_vit) ?></span></td>
				</tr>
				<tr>
					<td><span class="stat-name"><?php echo htmlspecialchars(Flux::message('DSCharView42')) ?></span></td>
					<td><span class="stat-value"><?php echo number_format((int)$char->char_int) ?></span></td>
					<td><span class="stat-name"><?php echo htmlspecialchars(Flux::message('DSCharView43')) ?></span></td>
					<td><span class="stat-value"><?php echo number_format((int)$char->char_dex) ?></span></td>
					<td><span class="stat-name"><?php echo htmlspecialchars(Flux::message('DSCharView44')) ?></span></td>
					<td><span class="stat-value"><?php echo number_format((int)$char->char_luk) ?></span></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<?php if ($char->party_name): ?>
<h3><?php echo htmlspecialchars(Flux::message('DSCharView45')) ?> <?php echo htmlspecialchars($char->party_name) ?></h3>
	<?php if ($partyMembers): ?>
		<p><?php echo htmlspecialchars($char->party_name) ?> <?php echo htmlspecialchars(Flux::message('DSCharView46')) ?> <?php echo count($partyMembers) ?> <?php echo htmlspecialchars(Flux::message('DSCharView47')) ?> <?php echo htmlspecialchars($char->char_name) ?>.</p>
		<table class="vertical-table">
			<tr>
				<th><?php echo htmlspecialchars(Flux::message('DSCharView48')) ?></th>
				<th><?php echo htmlspecialchars(Flux::message('DSCharView49')) ?></th>
				<th><?php echo htmlspecialchars(Flux::message('DSCharView50')) ?></th>
				<th><?php echo htmlspecialchars(Flux::message('DSCharView51')) ?></th>
				<th colspan="2"><?php echo htmlspecialchars(Flux::message('DSCharView52')) ?></th>
				<th><?php echo htmlspecialchars(Flux::message('DSCharView53')) ?></th>
			</tr>
			<?php foreach ($partyMembers as $partyMember): ?>
			<tr>
				<td align="right">
					<?php if ($auth->allowedToViewCharacter): ?>
						<?php echo $this->linkToCharacter($partyMember->char_id, $partyMember->name) ?>
					<?php else: ?>
						<?php echo htmlspecialchars($partyMember->name) ?>
					<?php endif ?>
				</td>
				<td>
					<?php if ($job=$this->jobClassText($partyMember->class)): ?>
						<?php echo htmlspecialchars($job) ?>
					<?php else: ?>
						<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView10')) ?></span>
					<?php endif ?>
				</td>
				<td><?php echo number_format((int)$partyMember->base_level) ?></td>
				<td><?php echo number_format((int)$partyMember->job_level) ?></td>
				<?php if ($partyMember->guild_name): ?>
					<td><img src="<?php echo $this->emblem($partyMember->guild_id) ?>" /></td>
					<td>
						<?php if (($auth->actionAllowed('guild', 'view') && $partyMember->guild_id == $char->guild_id) || $auth->allowedToViewGuild): ?>
							<?php echo $this->linkToGuild($partyMember->guild_id, $partyMember->guild_name) ?>
						<?php else: ?>
							<?php echo htmlspecialchars($partyMember->guild_name) ?>
						<?php endif ?>
					</td>
				<?php else: ?>	
					<td colspan="2" align="center"><span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span></td>
				<?php endif ?>
				<td>
					<?php if ($partyMember->online): ?>
						<span class="online"><?php echo htmlspecialchars(Flux::message('DSCharView35')) ?></span>
					<?php else: ?>
						<span class="offline"><?php echo htmlspecialchars(Flux::message('DSCharView36')) ?></span>
					<?php endif ?>
				</td>
			</tr>
			<?php endforeach ?>
		</table>
	<?php else: ?>
		<p><?php echo htmlspecialchars(Flux::message('DSCharView54')) ?></p>
	<?php endif ?>
<?php endif ?>
<h3><?php echo htmlspecialchars(Flux::message('DSCharView55')) ?> <?php echo htmlspecialchars($char->char_name) ?></h3>
<?php if ($friends): ?>
	<p><?php echo htmlspecialchars($char->char_name) ?> <?php echo htmlspecialchars(Flux::message('DSCharView46')) ?> <?php echo count($friends) ?> friend(s).</p>
	<table class="vertical-table">
		<tr>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView48')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView49')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView50')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView51')) ?></th>
			<th colspan="2"><?php echo htmlspecialchars(Flux::message('DSCharView52')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView53')) ?></th>
		</tr>
		<?php foreach ($friends as $friend): ?>
		<tr>
			<td align="right">
				<?php if ($auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($friend->char_id, $friend->name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($friend->name) ?>
				<?php endif ?>
			</td>
			<td>
				<?php if ($job=$this->jobClassText($friend->class)): ?>
					<?php echo htmlspecialchars($job) ?>
				<?php else: ?>
					<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView10')) ?></span>
				<?php endif ?>
			</td>
			<td><?php echo number_format((int)$friend->base_level) ?></td>
			<td><?php echo number_format((int)$friend->job_level) ?></td>
			<?php if ($friend->guild_name): ?>
				<?php if ($friend->guild_emblem_len): ?>
				<td><img src="<?php echo $this->emblem($friend->guild_id) ?>" /></td>
				<?php endif ?>
				<td<?php if (!$friend->guild_emblem_len) echo ' colspan="2"' ?>>
					<?php if (($auth->actionAllowed('guild', 'view') && $friend->guild_id == $char->guild_id) || $auth->allowedToViewGuild): ?>
						<?php echo $this->linkToGuild($friend->guild_id, $friend->guild_name) ?>
					<?php else: ?>
						<?php echo htmlspecialchars($friend->guild_name) ?>
					<?php endif ?>
				</td>
			<?php else: ?>	
				<td colspan="2"><span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span></td>
			<?php endif ?>
			<td>
				<?php if ($friend->online): ?>
					<span class="online"><?php echo htmlspecialchars(Flux::message('DSCharView35')) ?></span>
				<?php else: ?>
					<span class="offline"><?php echo htmlspecialchars(Flux::message('DSCharView36')) ?></span>
				<?php endif ?>
			</td>
		</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	<p><?php echo htmlspecialchars($char->char_name) ?> <?php echo htmlspecialchars(Flux::message('DSCharView63')) ?></p>
<?php endif ?>

<h3><?php echo htmlspecialchars(Flux::message('DSCharView64')) ?> <?php echo htmlspecialchars($char->char_name) ?></h3>
<?php if ($items): ?>
	<p><?php echo htmlspecialchars($char->char_name) ?> <?php echo htmlspecialchars(Flux::message('DSCharView46')) ?> <?php echo count($items) ?> <?php echo htmlspecialchars(Flux::message('DSCharView65')) ?></p>
	<table class="vertical-table">
		<tr>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView66')) ?></th>
			<th colspan="2"><?php echo htmlspecialchars(Flux::message('DSCharView67')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView68')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView69')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView70')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView71')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView72')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView73')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView74')) ?></th>
		</tr>
		<?php foreach ($items AS $item): ?>
		<?php $icon = $this->iconImage($item->nameid) ?>
		<tr<?php if ($item->equip) echo ' class="equipped"' ?>>
			<td align="right"><?php echo $this->linkToItem($item->nameid, $item->nameid) ?></td>
			<?php if ($icon): ?>
				<td><img src="<?php echo htmlspecialchars($icon) ?>" /></td>
			<?php endif ?>
			<td<?php if (!$icon) echo ' colspan="2"' ?><?php if ($item->cardsOver) echo ' class="overslotted' . $item->cardsOver . '"'; else echo ' class="normalslotted"' ?>>
				<?php if ($item->refine > 0): ?>
					+<?php echo htmlspecialchars($item->refine) ?>
				<?php endif ?>
				<?php if ($item->card0 == 255 && intval($item->card1/1280) > 0): ?>
					<?php for ($i = 0; $i < intval($item->card1/1280); $i++): ?>
						<?php echo htmlspecialchars(Flux::message('DSCharView75')) ?>
					<?php endfor ?>
					<?php echo htmlspecialchars(Flux::message('DSCharView76')) ?>
				<?php endif ?>
				<?php if ($item->card0 == 254 || $item->card0 == 255): ?>
					<?php if ($item->char_name): ?>
						<?php if ($auth->actionAllowed('character', 'view') && ($isMine || (!$isMine && $auth->allowedToViewCharacter))): ?>
							<?php echo $this->linkToCharacter($item->char_id, $item->char_name, $session->serverName) . "'s" ?>
						<?php else: ?>
							<?php echo htmlspecialchars($item->char_name . "'s") ?>
						<?php endif ?>
					<?php else: ?>
						<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('UnknownLabel')) ?></span>'s
					<?php endif ?>
				<?php endif ?>
				<?php if ($item->card0 == 255 && array_key_exists($item->card1%1280, $itemAttributes)): ?>
					<?php echo htmlspecialchars($itemAttributes[$item->card1%1280]) ?>
				<?php endif ?>
				<?php if ($item->name_japanese): ?>
					<span class="item_name"><?php echo htmlspecialchars($item->name_japanese) ?></span>
				<?php else: ?>
					<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView77')) ?></span>
				<?php endif ?>
				<?php if ($item->slots): ?>
					<?php echo htmlspecialchars(' [' . $item->slots . ']') ?>
				<?php endif ?>
			</td>
			<td><?php echo number_format($item->amount) ?></td>
			<td>
				<?php if ($item->identify): ?>
					<span class="identified yes"><?php echo htmlspecialchars(Flux::message('DSCharView78')) ?></span>
				<?php else: ?>
					<span class="identified no"><?php echo htmlspecialchars(Flux::message('DSCharView79')) ?></span>
				<?php endif ?>
			</td>
			<td>
				<?php if ($item->attribute): ?>
					<span class="broken yes"><?php echo htmlspecialchars(Flux::message('DSCharView78')) ?></span>
				<?php else: ?>
					<span class="broken no"><?php echo htmlspecialchars(Flux::message('DSCharView79')) ?></span>
				<?php endif ?>
			</td>
			<td>
				<?php if($item->card0 && ($item->type == 4 || $item->type == 5) && $item->card0 != 254 && $item->card0 != 255 && $item->card0 != -256): ?>
					<?php if (!empty($cards[$item->card0])): ?>
						<?php echo $this->linkToItem($item->card0, $cards[$item->card0]) ?>
					<?php else: ?>
						<?php echo $this->linkToItem($item->card0, $item->card0) ?>
					<?php endif ?>
				<?php else: ?>
					<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
				<?php endif ?>
			</td>
			<td>
				<?php if($item->card1 && ($item->type == 4 || $item->type == 5) && $item->card0 != 255 && $item->card0 != -256): ?>
					<?php if (!empty($cards[$item->card1])): ?>
						<?php echo $this->linkToItem($item->card1, $cards[$item->card1]) ?>
					<?php else: ?>
						<?php echo $this->linkToItem($item->card1, $item->card1) ?>
					<?php endif ?>
				<?php else: ?>
					<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
				<?php endif ?>
			</td>
			<td>
				<?php if($item->card2 && ($item->type == 4 || $item->type == 5) && $item->card0 != 254 && $item->card0 != 255 && $item->card0 != -256): ?>
					<?php if (!empty($cards[$item->card2])): ?>
						<?php echo $this->linkToItem($item->card2, $cards[$item->card2]) ?>
					<?php else: ?>
						<?php echo $this->linkToItem($item->card2, $item->card2) ?>
					<?php endif ?>
				<?php else: ?>
					<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
				<?php endif ?>
			</td>
			<td>
				<?php if($item->card3 && ($item->type == 4 || $item->type == 5) && $item->card0 != 254 && $item->card0 != 255 && $item->card0 != -256): ?>
					<?php if (!empty($cards[$item->card3])): ?>
						<?php echo $this->linkToItem($item->card3, $cards[$item->card3]) ?>
					<?php else: ?>
						<?php echo $this->linkToItem($item->card3, $item->card3) ?>
					<?php endif ?>
				<?php else: ?>
					<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
				<?php endif ?>
			</td>
		</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	<p><?php echo htmlspecialchars(Flux::message('DSCharView80')) ?></p>
<?php endif ?>

<h3><?php echo htmlspecialchars(Flux::message('DSCharView81')) ?> <?php echo htmlspecialchars($char->char_name) ?></h3>
<?php if ($cart_items): ?>
	<p><?php echo htmlspecialchars($char->char_name) ?> <?php echo htmlspecialchars(Flux::message('DSCharView46')) ?> <?php echo count($cart_items) ?> <?php echo htmlspecialchars(Flux::message('DSCharView82')) ?></p>
	<table class="vertical-table">
		<tr>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView66')) ?></th>
			<th colspan="2"><?php echo htmlspecialchars(Flux::message('DSCharView67')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView68')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView69')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView70')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView71')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView72')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView73')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSCharView74')) ?></th>
			</th>
		</tr>
		<?php foreach ($cart_items AS $cart_item): ?>
		<?php $icon = $this->iconImage($cart_item->nameid) ?>
		<tr>
			<td align="right"><?php echo $this->linkToItem($cart_item->nameid, $cart_item->nameid) ?></td>
			<?php if ($icon): ?>
			<td><img src="<?php echo htmlspecialchars($icon) ?>" /></td>
			<?php endif ?>
			<td<?php if (!$icon) echo ' colspan="2"' ?><?php if ($item->cardsOver) echo ' class="overslotted' . $item->cardsOver . '"'; else echo ' class="normalslotted"' ?>>
				<?php if ($cart_item->refine > 0): ?>
					+<?php echo htmlspecialchars($cart_item->refine) ?>
				<?php endif ?>
				<?php if ($cart_item->card0 == 255 && intval($cart_item->card1/1280) > 0): ?>
					<?php for ($i = 0; $i < intval($cart_item->card1/1280); $i++): ?>
						<?php echo htmlspecialchars(Flux::message('DSCharView75')) ?>
					<?php endfor ?>
					<?php echo htmlspecialchars(Flux::message('DSCharView76')) ?>
				<?php endif ?>
				<?php if ($cart_item->card0 == 254 || $cart_item->card0 == 255): ?>
					<?php if ($cart_item->char_name): ?>
						<?php if ($auth->actionAllowed('character', 'view') && ($isMine || (!$isMine && $auth->allowedToViewCharacter))): ?>
							<?php echo $this->linkToCharacter($cart_item->char_id, $cart_item->char_name, $session->serverName) . "'s" ?>
						<?php else: ?>
							<?php echo htmlspecialchars($cart_item->char_name . "'s") ?>
						<?php endif ?>
					<?php else: ?>
						<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('UnknownLabel')) ?></span>'s
					<?php endif ?>
				<?php endif ?>
				<?php if ($item->card0 == 255 && array_key_exists($item->card1%1280, $itemAttributes)): ?>
					<?php echo htmlspecialchars($itemAttributes[$item->card1%1280]) ?>
				<?php endif ?>
				<?php if ($cart_item->name_japanese): ?>
					<span class="item_name"><?php echo htmlspecialchars($cart_item->name_japanese) ?></span>
				<?php else: ?>
					<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView77')) ?></span>
				<?php endif ?>
				<?php if ($cart_item->slots): ?>
					<?php echo htmlspecialchars(' [' . $cart_item->slots . ']') ?>
				<?php endif ?>
			</td>
			<td><?php echo number_format($cart_item->amount) ?></td>
			<td>
				<?php if ($cart_item->identify): ?>
					<span class="identified yes"><?php echo htmlspecialchars(Flux::message('DSCharView78')) ?></span>
				<?php else: ?>
					<span class="identified no"><?php echo htmlspecialchars(Flux::message('DSCharView79')) ?></span>
				<?php endif ?>
			</td>
			<td>
				<?php if ($cart_item->attribute): ?>
					<span class="broken yes"><?php echo htmlspecialchars(Flux::message('DSCharView78')) ?></span>
				<?php else: ?>
					<span class="broken no"><?php echo htmlspecialchars(Flux::message('DSCharView79')) ?></span>
				<?php endif ?>
			</td>
			<td>
				<?php if($cart_item->card0 && ($cart_item->type == 4 || $cart_item->type == 5) && $cart_item->card0 != 254 && $cart_item->card0 != 255 && $cart_item->card0 != -256): ?>
					<?php if (!empty($cart_cards[$cart_item->card0])): ?>
						<?php echo $this->linkToItem($cart_item->card0, $cart_cards[$cart_item->card0]) ?>
					<?php else: ?>
						<?php echo $this->linkToItem($cart_item->card0, $cart_item->card0) ?>
					<?php endif ?>
				<?php else: ?>
					<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
				<?php endif ?>
			</td>
			<td>
				<?php if($cart_item->card1 && ($cart_item->type == 4 || $cart_item->type == 5) && $cart_item->card0 != 255 && $cart_item->card0 != -256): ?>
					<?php if (!empty($cart_cards[$cart_item->card1])): ?>
						<?php echo $this->linkToItem($cart_item->card1, $cart_cards[$cart_item->card1]) ?>
					<?php else: ?>
						<?php echo $this->linkToItem($cart_item->card1, $cart_item->card1) ?>
					<?php endif ?>
				<?php else: ?>
					<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
				<?php endif ?>
			</td>
			<td>
				<?php if($cart_item->card2 && ($cart_item->type == 4 || $cart_item->type == 5) && $cart_item->card0 != 254 && $cart_item->card0 != 255 && $cart_item->card0 != -256): ?>
					<?php if (!empty($cart_cards[$cart_item->card2])): ?>
						<?php echo $this->linkToItem($cart_item->card2, $cart_cards[$cart_item->card2]) ?>
					<?php else: ?>
						<?php echo $this->linkToItem($cart_item->card2, $cart_item->card2) ?>
					<?php endif ?>
				<?php else: ?>
					<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
				<?php endif ?>
			</td>
			<td>
				<?php if($cart_item->card3 && ($cart_item->type == 4 || $cart_item->type == 5) && $cart_item->card0 != 254 && $cart_item->card0 != 255 && $cart_item->card0 != -256): ?>
					<?php if (!empty($cart_cards[$cart_item->card3])): ?>
						<?php echo $this->linkToItem($cart_item->card3, $cart_cards[$cart_item->card3]) ?>
					<?php else: ?>
						<?php echo $this->linkToItem($cart_item->card3, $cart_item->card3) ?>
					<?php endif ?>
				<?php else: ?>
					<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCharView14')) ?></span>
				<?php endif ?>
			</td>
		</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	<p><?php echo htmlspecialchars(Flux::message('DSCharView83')) ?></p>
<?php endif ?>

<?php else: ?>
<p><?php echo htmlspecialchars(Flux::message('DSCharView84')) ?> <a href="javascript:history.go(-1)"><?php echo htmlspecialchars(Flux::message('DSCharView85')) ?></a>.</p>
<?php endif ?>