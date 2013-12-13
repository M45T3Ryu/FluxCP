<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('DSDHistory1')) ?></h2>
<h3><?php echo htmlspecialchars(Flux::message('DSDHistory2')) ?></h3>
<?php if ($completedTxn): ?>
<p><?php echo htmlspecialchars(Flux::message('DSDHistory3')) ?> <?php echo number_format($completedTotal) ?> <?php echo htmlspecialchars(Flux::message('DSDHistory4')) ?></p>
<table class="vertical-table">
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory5')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory6')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory7')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory8')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory9')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory10')) ?></th>
	</tr>
	<?php foreach ($completedTxn as $txn): ?>
	<tr>
		<td><?php echo htmlspecialchars($txn->txn_id) ?></td>
		<td><?php echo $this->formatDateTime($txn->payment_date) ?></td>
		<td><?php echo htmlspecialchars($txn->payer_email) ?></td>
		<td><?php echo htmlspecialchars($txn->mc_gross) ?></td>
		<td><?php echo htmlspecialchars($txn->mc_currency) ?></td>
		<td><?php echo number_format($txn->credits) ?></td>
	</tr>
	<?php endforeach ?>
</table>
<?php else: ?>
<p><?php echo htmlspecialchars(Flux::message('DSDHistory11')) ?></p>
<?php endif ?>

<h3><?php echo htmlspecialchars(Flux::message('DSDHistory12')) ?></h3>
<?php if ($heldTxn): ?>
<p><?php echo htmlspecialchars(Flux::message('DSDHistory13')) ?> <?php echo number_format($heldTotal) ?> <?php echo htmlspecialchars(Flux::message('DSDHistory14')) ?></p>
<table class="vertical-table">
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory5')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory6')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory7')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory8')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory9')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory10')) ?></th>
	</tr>
	<?php foreach ($heldTxn as $txn): ?>
	<tr>
		<td><?php echo htmlspecialchars($txn->txn_id) ?></td>
		<td><?php echo $this->formatDateTime($txn->payment_date) ?></td>
		<td><?php echo htmlspecialchars($txn->payer_email) ?></td>
		<td><?php echo htmlspecialchars($txn->mc_gross) ?></td>
		<td><?php echo htmlspecialchars($txn->mc_currency) ?></td>
		<td><?php echo number_format($txn->credits) ?></td>
	</tr>
	<tr>
		<td colspan="6">
			<?php echo htmlspecialchars(Flux::message('DSDHistory15')) ?>
			<strong><?php echo $this->formatDateTime($txn->hold_until) ?></strong>
		</td>
	</tr>
	<?php endforeach ?>
</table>
<?php else: ?>
<p><?php echo htmlspecialchars(Flux::message('DSDHistory16')) ?></p>
<?php endif ?>

<h3><?php echo htmlspecialchars(Flux::message('DSDHistory17')) ?></h3>
<?php if ($failedTxn): ?>
<p><?php echo htmlspecialchars(Flux::message('DSDHistory13')) ?> <?php echo number_format($failedTotal) ?> <?php echo htmlspecialchars(Flux::message('DSDHistory14')) ?></p>
<table class="vertical-table">
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory5')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory6')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory7')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory8')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory9')) ?></th>
		<th><?php echo htmlspecialchars(Flux::message('DSDHistory10')) ?></th>
	</tr>
	<?php foreach ($failedTxn as $txn): ?>
	<tr>
		<td><?php echo htmlspecialchars($txn->txn_id) ?></td>
		<td><?php echo $this->formatDateTime($txn->payment_date) ?></td>
		<td><?php echo htmlspecialchars($txn->payer_email) ?></td>
		<td><?php echo htmlspecialchars($txn->mc_gross) ?></td>
		<td><?php echo htmlspecialchars($txn->mc_currency) ?></td>
		<td><?php echo number_format($txn->credits) ?></td>
	</tr>
	<?php endforeach ?>
</table>
<?php else: ?>
<p><?php echo htmlspecialchars(Flux::message('DSDHistory18')) ?></p>
<?php endif ?>