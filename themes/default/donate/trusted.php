<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('DSDTrusted1')) ?></h2>
<?php if ($emails): ?>
<p><?php echo htmlspecialchars(Flux::message('DSDTrusted2')) ?></p>
<p><?php echo htmlspecialchars(Flux::message('DSDTrusted3')) ?> <strong><?php echo htmlspecialchars(Flux::message('DSDTrusted4')) ?></strong>.</p>
<table class="vertical-table">
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSDTrusted5')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSDTrusted6')) ?></th>
	</tr>
	<?php foreach ($emails as $email): ?>
	<tr>
		<td><?php echo htmlspecialchars($email->email) ?></td>
		<td><?php echo $this->formatDateTime($email->create_date) ?></td>
	</tr>
	<?php endforeach ?>
</table>
<?php else: ?>
<p><?php echo htmlspecialchars(Flux::message('DSDTrusted7')) ?></p>
<?php if (!Flux::config('HoldUntrustedAccount')): ?>
<p><?php echo htmlspecialchars(Flux::message('DSDTrusted8')) ?> <strong><?php echo htmlspecialchars(Flux::message('DSDTrusted9')) ?></strong><?php echo htmlspecialchars(Flux::message('DSDTrusted10')) ?></p>
<?php endif ?>
<?php endif ?>