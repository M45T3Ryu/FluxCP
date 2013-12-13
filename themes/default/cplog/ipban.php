<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('DSCIPBan1')) ?></h2>
<p class="toggler"><a href="javascript:toggleSearchForm()"><?php echo htmlspecialchars(Flux::message('DSCIPBan2')) ?></a></p>
<form action="<?php echo $this->url ?>" method="get" class="search-form">
	<?php echo $this->moduleActionFormInputs($params->get('module'), $params->get('action')) ?>
	<p>
		<label for="ip"><?php echo htmlspecialchars(Flux::message('DSCIPBan3')) ?></label>
		<input type="text" name="ip" id="ip" value="<?php echo htmlspecialchars($params->get('ip')) ?>" />
		...
		<label for="banned_by"><?php echo htmlspecialchars(Flux::message('DSCIPBan4')) ?></label>
		<input type="text" name="banned_by" id="banned_by" value="<?php echo htmlspecialchars($params->get('banned_by')) ?>" />
		...
		<label for="ban_type"><?php echo htmlspecialchars(Flux::message('DSCIPBan5')) ?></label>
		<select name="ban_type" id="ban_type">
			<option value=""<?php if (!($ban_type=$params->get('ban_type'))) echo ' selected="selected"' ?>><?php echo htmlspecialchars(Flux::message('AllLabel')) ?></option>
			<option value="unban"<?php if ($ban_type == 'unban') echo ' selected="selected"' ?>><?php echo htmlspecialchars(Flux::message('DSCIPBan6')) ?></option>
			<option value="ban"<?php if ($ban_type == 'ban') echo ' selected="selected"' ?>><?php echo htmlspecialchars(Flux::message('DSCIPBan7')) ?></option>
		</select>
	</p>
	<p>
		<label for="use_ban"><?php echo htmlspecialchars(Flux::message('DSCIPBan8')) ?></label>
		<input type="checkbox" name="use_ban" id="use_ban"<?php if ($params->get('use_ban')) echo ' checked="checked"' ?> />
		<?php echo $this->dateTimeField('ban') ?>
		...
		<label for="use_ban_until"><?php echo htmlspecialchars(Flux::message('DSCIPBan9')) ?></label>
		<input type="checkbox" name="use_ban_until" id="use_ban_until"<?php if ($params->get('use_ban_until')) echo ' checked="checked"' ?> />
		<?php echo $this->dateTimeField('ban_until') ?>
	</p>
	<p>
		<input type="submit" value="Search" />
		<input type="button" value="Reset" onclick="reload()" />
	</p>
</form>
<?php if ($ipbans): ?>
<?php echo $paginator->infoText() ?>
<table class="horizontal-table">
	<tr>
		<th><?php echo $paginator->sortableColumn('ip', htmlspecialchars(Flux::message('DSCIPBan10'))) ?></th>
		<th><?php echo $paginator->sortableColumn('banned_by', htmlspecialchars(Flux::message('DSCIPBan11'))) ?></th>
		<th><?php echo $paginator->sortableColumn('ban_type', htmlspecialchars(Flux::message('DSCIPBan12'))) ?></th>
		<th><?php echo $paginator->sortableColumn('ban_date', htmlspecialchars(Flux::message('DSCIPBan13'))) ?></th>
		<th><?php echo $paginator->sortableColumn('ban_until', htmlspecialchars(Flux::message('DSCIPBan14'))) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSCIPBan15')) ?></th>
	</tr>
	<?php foreach ($ipbans as $ipban): ?>
	<tr>
		<td align="right">
			<?php if ($auth->actionAllowed('account', 'index')): ?>
				<?php echo $this->linkToAccountSearch(array('last_ip' => $ipban->ip_address), $ipban->ip_address) ?>
			<?php else: ?>
				<?php echo htmlspecialchars($ipban->ip_address) ?>
			<?php endif ?>
		</td>
		<td>
			<?php if ($auth->actionAllowed('account', 'view') && $auth->allowedToViewAccount): ?>
				<?php echo $this->linkToAccount($ipban->banned_by, $ipban->userid) ?>
			<?php else: ?>
				<?php echo $ipban->banned_by ?>
			<?php endif ?>
		</td>
		<td>
			<?php if (!$ipban->ban_type): ?>
				<?php echo htmlspecialchars(Flux::message('DSCIPBan6')) ?>
			<?php elseif ($ipban->ban_type == 1): ?>
				<span class="account-state state-banned"><?php echo htmlspecialchars(Flux::message('DSCIPBan7')) ?></span>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCIPBan16')) ?></span>
			<?php endif ?>
		</td>
		<td>
			<?php if ($ipban->ban_date == '0000-00-00 00:00:00'): ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCIPBan17')) ?></span>
			<?php else: ?>
				<?php echo $this->formatDateTime($ipban->ban_date) ?>
			<?php endif ?>
		</td>
		<td>
			<?php if ($ipban->ban_until == '0000-00-00 00:00:00'): ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCIPBan17')) ?></span>
			<?php else: ?>
				<?php echo $this->formatDateTime($ipban->ban_until) ?>
			<?php endif ?>
		</td>
		<td>
			<?php if ($ipban->ban_reason == ''): ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCIPBan18')) ?></span>
			<?php else: ?>
				<?php echo htmlspecialchars($ipban->ban_reason) ?>
			<?php endif ?>
		</td>
	</tr>
	<?php endforeach ?>
</table>
<?php echo $paginator->getHTML() ?>
<?php else: ?>
<p><?php echo htmlspecialchars(Flux::message('DSCIPBan19')) ?> <a href="javascript:history.go(-1)"><?php echo htmlspecialchars(Flux::message('DSCIPBan20')) ?></a>.</p>
<?php endif ?>