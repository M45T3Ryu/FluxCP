<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('DSGIndex1')) ?></h2>
<p class="toggler"><a href="javascript:toggleSearchForm()"><?php echo htmlspecialchars(Flux::message('DSGIndex2')) ?></a></p>
<form action="<?php echo $this->url ?>" method="get" class="search-form">
	<?php echo $this->moduleActionFormInputs($params->get('module')) ?>
	<p>
		<label for="id"><?php echo htmlspecialchars(Flux::message('DSGIndex3')) ?></label>
		<input type="text" name="id" id="id" value="<?php echo htmlspecialchars($params->get('id')) ?>" />
		...
		<label for="guild_name"><?php echo htmlspecialchars(Flux::message('DSGIndex4')) ?></label>
		<input type="text" name="guild_name" id="guild_name" value="<?php echo htmlspecialchars($params->get('guild_name')) ?>" />
		...
		<label for="char_id"><?php echo htmlspecialchars(Flux::message('DSGIndex5')) ?></label>
		<input type="text" name="char_id" id="char_id" value="<?php echo htmlspecialchars($params->get('char_id')) ?>" />
		...
		<label for="master"><?php echo htmlspecialchars(Flux::message('DSGIndex6')) ?></label>
		<input type="text" name="master" id="master" value="<?php echo htmlspecialchars($params->get('master')) ?>" />
	</p>
	<p>
		<label for="guild_level"><?php echo htmlspecialchars(Flux::message('DSGIndex7')) ?></label>
		<select name="guild_level_op">
			<option value="eq"<?php if (($guild_level_op=$params->get('guild_level_op')) == 'eq') echo ' selected="selected"' ?>><?php echo htmlspecialchars(Flux::message('DSGIndex8')) ?></option>
			<option value="gt"<?php if ($guild_level_op == 'gt') echo ' selected="selected"' ?>><?php echo htmlspecialchars(Flux::message('DSGIndex9')) ?></option>
			<option value="lt"<?php if ($guild_level_op == 'lt') echo ' selected="selected"' ?>><?php echo htmlspecialchars(Flux::message('DSGIndex10')) ?></option>
		</select>
		<input type="text" name="guild_level" id="guild_level" value="<?php echo htmlspecialchars($params->get('guild_level')) ?>" />
		...
		<label for="connect_member"><?php echo htmlspecialchars(Flux::message('DSGIndex11')) ?></label>
		<select name="connect_member_op">
			<option value="eq"<?php if (($connect_member_op=$params->get('connect_member_op')) == 'eq') echo ' selected="selected"' ?>><?php echo htmlspecialchars(Flux::message('DSGIndex8')) ?></option>
			<option value="gt"<?php if ($connect_member_op == 'gt') echo ' selected="selected"' ?>><?php echo htmlspecialchars(Flux::message('DSGIndex9')) ?></option>
			<option value="lt"<?php if ($connect_member_op == 'lt') echo ' selected="selected"' ?>><?php echo htmlspecialchars(Flux::message('DSGIndex10')) ?></option>
		</select>
		<input type="text" name="connect_member" id="connect_member" value="<?php echo htmlspecialchars($params->get('connect_member')) ?>" />
		...
		<label for="max_member"><?php echo htmlspecialchars(Flux::message('DSGIndex12')) ?></label>
		<select name="max_member_op">
			<option value="eq"<?php if (($max_member_op=$params->get('max_member_op')) == 'eq') echo ' selected="selected"' ?>><?php echo htmlspecialchars(Flux::message('DSGIndex8')) ?></option>
			<option value="gt"<?php if ($max_member_op == 'gt') echo ' selected="selected"' ?>><?php echo htmlspecialchars(Flux::message('DSGIndex9')) ?></option>
			<option value="lt"<?php if ($max_member_op == 'lt') echo ' selected="selected"' ?>><?php echo htmlspecialchars(Flux::message('DSGIndex10')) ?></option>
		</select>
		<input type="text" name="max_member" id="max_member" value="<?php echo htmlspecialchars($params->get('max_member')) ?>" />
	</p>
	<p>
		<label for="average_lv"><?php echo htmlspecialchars(Flux::message('DSGIndex13')) ?></label>
		<select name="average_lv_op">
			<option value="eq"<?php if (($average_lv_op=$params->get('average_lv_op')) == 'eq') echo ' selected="selected"' ?>><?php echo htmlspecialchars(Flux::message('DSGIndex8')) ?></option>
			<option value="gt"<?php if ($average_lv_op == 'gt') echo ' selected="selected"' ?>><?php echo htmlspecialchars(Flux::message('DSGIndex9')) ?></option>
			<option value="lt"<?php if ($average_lv_op == 'lt') echo ' selected="selected"' ?>><?php echo htmlspecialchars(Flux::message('DSGIndex10')) ?></option>
		</select>
		<input type="text" name="average_lv" id="average_lv" value="<?php echo htmlspecialchars($params->get('average_lv')) ?>" />

		<input type="submit" value="Search" />
		<input type="button" value="Reset" onclick="reload()" />
	</p>
</form>
<?php if ($guilds): ?>
<?php echo $paginator->infoText() ?>
<table class="horizontal-table">
	<tr>
		<th><?php echo $paginator->sortableColumn('guild.guild_id', htmlspecialchars(Flux::message('DSGIndex14'))) ?></th>
		<th colspan="2"><?php echo $paginator->sortableColumn('guildName', htmlspecialchars(Flux::message('DSGIndex15'))) ?></th>
		<th><?php echo $paginator->sortableColumn('charID', htmlspecialchars(Flux::message('DSGIndex16'))) ?></th>
		<th><?php echo $paginator->sortableColumn('charName', htmlspecialchars(Flux::message('DSGIndex17'))) ?></th>
		<th><?php echo $paginator->sortableColumn('guildLevel', htmlspecialchars(Flux::message('DSGIndex18'))) ?></th>
		<th><?php echo $paginator->sortableColumn('connectMem', htmlspecialchars(Flux::message('DSGIndex19'))) ?></th>
		<th><?php echo $paginator->sortableColumn('maxMem', htmlspecialchars(Flux::message('DSGIndex20'))) ?></th>
		<th><?php echo $paginator->sortableColumn('avgLevel', htmlspecialchars(Flux::message('DSGIndex21'))) ?></th>
	</tr>
	<?php foreach ($guilds as $guild): ?>
	<tr>
		<td align="right">
			<?php if ($auth->actionAllowed('guild', 'view') && $auth->allowedToViewGuild): ?>
				<?php echo $this->linkToGuild($guild->guild_id, $guild->guild_id) ?>
			<?php else: ?>
				<?php echo htmlspecialchars($guild->guild_id) ?>
			<?php endif ?>
		</td>
		<?php if ($guild->emblem_len): ?>
		<td width="24"><img src="<?php echo $this->emblem($guild->guild_id) ?>" /></td>
		<td><?php echo htmlspecialchars($guild->guildName) ?></td>
		<?php else: ?>
		<td colspan="2"><?php echo htmlspecialchars($guild->guildName) ?></td>
		<?php endif ?>
		<td>
			<?php if ($auth->allowedToViewCharacter): ?>
				<?php echo $this->linkToCharacter($guild->charID, $guild->charID) ?>
			<?php else: ?>
				<?php echo htmlspecialchars($guild->charID) ?>
			<?php endif ?>
		</td>
		<td><?php echo htmlspecialchars($guild->charName) ?></td>
		<td><?php echo number_format($guild->guildLevel) ?></td>
		<td><?php echo number_format($guild->connectMem) ?></td>
		<td><?php echo number_format($guild->maxMem) ?></td>
		<td><?php echo number_format($guild->avgLevel) ?></td>
		
	</tr>
	<?php endforeach ?>
</table>
<?php echo $paginator->getHTML() ?>
<?php else: ?>
<p><?php echo htmlspecialchars(Flux::message('DSGIndex22')) ?> <a href="javascript:history.go(-1)"><?php echo htmlspecialchars(Flux::message('DSGIndex23')) ?></a>.</p>
<?php endif ?>