<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('DSCastle1')) ?></h2>
<p><?php echo htmlspecialchars(Flux::message('DSCastle2')) ?></p>
<?php if ($castles): ?>
<table class="vertical-table">
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCastle3')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSCastle4')) ?></th>
		<th colspan="2"><?php echo htmlspecialchars(Flux::message('DSCastle5')) ?></th>
	</tr>
	<?php foreach ($castles as $castle): ?>
		<tr>
			<td align="right"><?php echo htmlspecialchars($castle->castle_id) ?></td>
			<td><?php echo htmlspecialchars($castleNames[$castle->castle_id]) ?></td>
			<?php if ($castle->guild_name): ?>
				<?php if ($castle->emblem_len): ?>
					<td width="24"><img src="<?php echo $this->emblem($castle->guild_id) ?>" /></td>
					<td>
						<?php if ($auth->actionAllowed('guild', 'view') && $auth->allowedToViewGuild): ?>
							<?php echo $this->linkToGuild($castle->guild_id, $castle->guild_name) ?>
						<?php else: ?>
							<?php echo htmlspecialchars($castle->guild_name) ?>
						<?php endif ?>
					</td>
				<?php else: ?>
					<td colspan="2"><?php echo htmlspecialchars($castle->guild_name) ?></td>
				<?php endif ?>
			<?php else: ?>
				<td colspan="2"><span class="not-applicable"><?php echo htmlspecialchars(Flux::message('NoneLabel')) ?></span></td>
			<?php endif ?>
		</tr>
	<?php endforeach ?>
</table>
<?php else: ?>
<p><?php echo htmlspecialchars(Flux::message('DSCastle6')) ?> <a href="javascript:history.go(-1)"><?php echo htmlspecialchars(Flux::message('DSCastle7')) ?></a>.</p>
<?php endif ?>