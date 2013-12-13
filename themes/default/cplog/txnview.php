<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('DSCPaypT1')) ?></h2>
<?php if ($txn): ?>
<p><?php echo htmlspecialchars(Flux::message('DSCPaypT2')) ?></p>
<table class="vertical-table">
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCPaypT3')) ?></th>
		<td><?php echo htmlspecialchars($txn->txn_id) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSCPaypT4')) ?></th>
		<td>
			<?php if ($txn->account_id): ?>
				<?php if ($auth->actionAllowed('account', 'view') && $auth->allowedToViewAccount): ?>
					<?php echo $this->linkToAccount($txn->account_id, $txn->userid) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($txn->userid) ?>
				<?php endif ?>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSCPaypT5')) ?></span>
			<?php endif ?>
		</td>
		<th><?php echo htmlspecialchars(Flux::message('DSCPaypT6')) ?></th>
		<td><?php echo number_format((int)$txn->credits) ?></td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCPaypT7')) ?></th>
		<td>
			<?php echo $txn->mc_gross ?>
			<?php echo $txn->mc_currency ?>
		</td>
		<th><?php echo htmlspecialchars(Flux::message('DSCPaypT8')) ?></th>
		<td colspan="3">
			<?php echo $txn->mc_gross - $txn->mc_fee ?>
			<?php echo $txn->mc_currency ?>
		</td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCPaypT9')) ?></th>
		<td><?php echo htmlspecialchars(date(Flux::config('DateTimeFormat'), strtotime($txn->payment_date))) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSCPaypT10')) ?></th>
		<td colspan="3"><?php echo $this->formatDateTime($txn->process_date) ?></td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCPaypT11')) ?></th>
		<td><?php echo htmlspecialchars($txn->payment_status) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSCPaypT12')) ?></th>
		<td colspan="3"><?php echo htmlspecialchars($txn->item_name) ?></td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCPaypT13')) ?></th>
		<td><?php echo htmlspecialchars($txn->first_name) ?></td>
		<th rowspan="2"><?php echo htmlspecialchars(Flux::message('DSCPaypT14')) ?></th>
		<td colspan="3" rowspan="2">
			<?php echo htmlspecialchars($txn->address_street) ?><br />
			<?php echo htmlspecialchars($txn->address_city) ?>,
			<?php echo htmlspecialchars($txn->address_state) ?>,
			<?php echo htmlspecialchars($txn->address_country) ?>
			<?php echo htmlspecialchars($txn->address_zip) ?>
		</td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSCPaypT15')) ?></th>
		<td><?php echo htmlspecialchars($txn->last_name) ?></td>
	</tr>
</table>
<?php if ($auth->allowedToViewRawTxnLogData): ?>
	<h3><?php echo htmlspecialchars(Flux::message('DSCPaypT16')) ?></h3>
	<?php if ($txnFileLog): ?>
	<pre class="raw-txn-log"><?php echo htmlspecialchars($txnFileLog) ?></pre>
	<?php else: ?>
	<p><?php echo htmlspecialchars(Flux::message('DSCPaypT17')) ?></p>
	<?php endif ?>	

	<?php else: ?>
	<p><?php echo htmlspecialchars(Flux::message('DSCPaypT18')) ?> <a href="javascript:history.go(-1)"><?php echo htmlspecialchars(Flux::message('DSCPaypT19')) ?></a>.</p>
	<?php endif ?>
<?php endif ?>