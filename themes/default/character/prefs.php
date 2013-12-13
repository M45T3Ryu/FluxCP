<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('DSCharPref1')) ?></h2>
<?php if ($char): ?>
<?php if (!empty($errorMessage)): ?>
<p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
<?php endif ?>
<h3><?php echo htmlspecialchars(Flux::message('DSCharPref2')) ?> “<?php echo ($charName=htmlspecialchars($char->name))  ?>” <?php echo htmlspecialchars(Flux::message('DSCharPref3')) ?> <?php echo htmlspecialchars($server->serverName) ?></h3>
<form action="<?php echo $this->urlWithQs ?>" method="post" class="generic-form">
	<input type="hidden" name="charprefs" value="1" />
	<table class="generic-form-table">
		<tr>
			<th><label for="hide_from_whos_online"><?php echo htmlspecialchars(Flux::message('DSCharPref4')) ?></label></th>
			<td><input type="checkbox" name="hide_from_whos_online" id="hide_from_whos_online"<?php if ($hideFromWhosOnline) echo ' checked="checked"' ?> /></td>
			<td><p><?php echo htmlspecialchars(Flux::message('DSCharPref5')) ?> <?php echo $charName ?> <?php echo htmlspecialchars(Flux::message('DSCharPref6')) ?></p></td>
		</tr>
		<tr>
			<th><label for="hide_map_from_whos_online"><?php echo htmlspecialchars(Flux::message('DSCharPref7')) ?></label></th>
			<td><input type="checkbox" name="hide_map_from_whos_online" id="hide_map_from_whos_online"<?php if ($hideMapFromWhosOnline) echo ' checked="checked"' ?> /></td>
			<td><p><?php echo htmlspecialchars(Flux::message('DSCharPref5')) ?> <?php echo $charName ?><?php echo htmlspecialchars(Flux::message('DSCharPref8')) ?></p></td>
		</tr>
		<?php if ($auth->allowedToHideFromZenyRank): ?>
		<tr>
			<th><label for="hide_from_zeny_ranking"><?php echo htmlspecialchars(Flux::message('DSCharPref9')) ?></label></th>
			<td><input type="checkbox" name="hide_from_zeny_ranking" id="hide_from_zeny_ranking"<?php if ($hideFromZenyRanking) echo ' checked="checked"' ?> /></td>
			<td><p><?php echo htmlspecialchars(Flux::message('DSCharPref5')) ?> <?php echo $charName ?> <?php echo htmlspecialchars(Flux::message('DSCharPref10')) ?></p></td>
		</tr>
		<?php endif ?>
		<tr>
			<td align="right"><p><input type="submit" value="Modify Preferences" /></p></td>
			<td colspan="2"></td>
		</tr>
	</table>
</form>
<?php else: ?>
<p><?php echo htmlspecialchars(Flux::message('DSCharPref11')) ?> <a href="javascript:history.go(-1)"><?php echo htmlspecialchars(Flux::message('DSCharPref12')) ?></a>.</p>
<?php endif ?>