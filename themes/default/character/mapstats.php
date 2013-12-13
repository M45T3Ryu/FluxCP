<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('DSCharMapST1')) ?></h2>
<?php if ($maps): ?>
<?php $playerTotal = 0; foreach ($maps as $map) $playerTotal += $map->player_count ?>
<p><?php echo htmlspecialchars(Flux::message('DSCharMapST2')) ?></p>
<p><strong><?php echo number_format($playerTotal) ?></strong> <?php echo htmlspecialchars(Flux::message('DSCharMapST3')) ?>
<?php echo htmlspecialchars(Flux::message('DSCharMapST4')) ?> <strong><?php echo number_format(count($maps)) ?></strong> <?php echo htmlspecialchars(Flux::message('DSCharMapST5')) ?></p>
<div class="generic-form-div">
	<table class="generic-form-table">
		<?php foreach ($maps as $map): ?>
		<tr>
			<td align="right"><p class="important"><strong><?php echo htmlspecialchars(basename($map->map_name, '.gat')) ?></strong></p></td>
			<td><p><strong><em><?php echo number_format($map->player_count) ?></em></strong> <?php echo htmlspecialchars(Flux::message('DSCharMapST6')) ?></p></td>
		</tr>
		<?php endforeach ?>
	</table>
</div>
<?php else: ?>
<p><?php echo htmlspecialchars(Flux::message('DSCharMapST7')) ?> <a href="javascript:history.go(-1)"><?php echo htmlspecialchars(Flux::message('DSCharMapST8')) ?></a>.</p>
<?php endif ?>