<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('DSGExport1')) ?></h2>
<p><?php echo htmlspecialchars(Flux::message('DSGExport2')) ?></p>
<form action="<?php echo $this->url ?>" method="post">
	<input type="hidden" name="post" value="1" />
	<?php foreach ($serverNames as $serverName): ?>
	<p class="emblem-server"><label>
		&raquo;
		<input type="checkbox" name="server[]" checked="checked" value="<?php echo htmlspecialchars($serverName) ?>" />
		<span><?php echo htmlspecialchars($serverName) ?></span>
	</label></p>
	<?php endforeach ?>
	<button type="submit" class="submit_button"><?php echo htmlspecialchars(Flux::message('DSGExport3')) ?></button>
</form>