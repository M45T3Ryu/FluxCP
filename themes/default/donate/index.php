<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('DSDIndex1')) ?></h2>
<?php if (Flux::config('AcceptDonations')): ?>
	<?php if (!empty($errorMessage)): ?>
		<p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
	<?php endif ?>
	
	<p><?php echo htmlspecialchars(Flux::message('DSDIndex2')) ?> <em><?php echo htmlspecialchars(Flux::message('DSDIndex19')) ?></em> <?php echo htmlspecialchars(Flux::message('DSDIndex20')) ?> <em><?php echo htmlspecialchars(Flux::message('DSDIndex21')) ?></em> <?php echo htmlspecialchars(Flux::message('DSDIndex22')) ?> <span class="keyword"><?php echo htmlspecialchars(Flux::message('DSDIndex23')) ?></span> <?php echo htmlspecialchars(Flux::message('DSDIndex24')) ?> <a href="<?php echo $this->url('purchase') ?>"><?php echo htmlspecialchars(Flux::message('DSDIndex3')) ?></a>.</p>
	<h3><?php echo htmlspecialchars(Flux::message('DSDIndex4')) ?></h3>
	<p><?php echo htmlspecialchars(Flux::message('DSDIndex5')) ?></p>
		
	<?php
	$currency         = Flux::config('DonationCurrency');
	$dollarAmount     = (float)+Flux::config('CreditExchangeRate');
	$creditAmount     = 1;
	$rateMultiplier   = 10;
	$hoursHeld        = +(int)Flux::config('HoldUntrustedAccount');
	
	while ($dollarAmount < 1) {
		$dollarAmount  *= $rateMultiplier;
		$creditAmount  *= $rateMultiplier;
	}
	?>
	
	<?php if ($hoursHeld): ?>
		<p><?php echo htmlspecialchars(Flux::message('DSDIndex6')) ?>
			<span class="hold-hours"><?php echo number_format($hoursHeld) ?> <?php echo htmlspecialchars(Flux::message('DSDIndex7')) ?></span>
			<?php echo htmlspecialchars(Flux::message('DSDIndex8')) ?></p>
		<p><?php echo htmlspecialchars(Flux::message('DSDIndex9')) ?></p>
	<?php endif ?>

	<div class="generic-form-div" style="margin-bottom: 10px">
		<table class="generic-form-table">
			<tr>
				<th><label><?php echo htmlspecialchars(Flux::message('DSDIndex10')) ?></label></th>
				<td><p><?php echo $this->formatCurrency($dollarAmount) ?> <?php echo htmlspecialchars($currency) ?>
				= <?php echo number_format($creditAmount) ?> <?php echo htmlspecialchars(Flux::message('DSDIndex11')) ?></p></td>
			</tr>
			<tr>
				<th><label><?php echo htmlspecialchars(Flux::message('DSDIndex12')) ?></label></th>
				<td><p><?php echo $this->formatCurrency(Flux::config('MinDonationAmount')) ?> <?php echo htmlspecialchars($currency) ?></p></td>
			</tr>
		</table>
	</div>
		
	<?php if (!$donationAmount): ?>
	<form action="<?php echo $this->url ?>" method="post">
		<?php echo $this->moduleActionFormInputs($params->get('module')) ?>
		<input type="hidden" name="setamount" value="1" />
		<p class="enter-donation-amount">
			<label>
				<?php echo htmlspecialchars(Flux::message('DSDIndex13')) ?>
				<input class="money-input" type="text" name="amount"
					value="<?php echo htmlspecialchars($params->get('amount')) ?>"
					size="<?php echo (strlen((string)+Flux::config('CreditExchangeRate')) * 2) + 2 ?>" />
				<?php echo htmlspecialchars(Flux::config('DonationCurrency')) ?>
			</label>
			<?php echo htmlspecialchars(Flux::message('DSDIndex18')) ?>
			<label>
				<input class="credit-input" type="text" name="credit-amount"
					value="<?php echo htmlspecialchars(intval($params->get('amount') / Flux::config('CreditExchangeRate'))) ?>"
					size="<?php echo (strlen((string)+Flux::config('CreditExchangeRate')) * 2) + 2 ?>" />
				<?php echo htmlspecialchars(Flux::message('DSDIndex14')) ?>
			</label>
		</p>
		<input type="submit" value="Confirm Donation Amount" class="submit_button" />
	</form>
	<?php else: ?>
	<p><?php echo htmlspecialchars(Flux::message('DSDIndex15')) ?></p>
		
	<p class="credit-amount-text">
		&mdash;
		<span class="credit-amount"><?php echo number_format(floor($donationAmount / Flux::config('CreditExchangeRate'))) ?></span> credits
		&mdash;
	</p>
		
	<p class="donation-amount-text"><?php echo htmlspecialchars(Flux::message('DSDIndex16')) ?>
		<span class="donation-amount">
		<?php echo $this->formatCurrency($donationAmount) ?>
		<?php echo htmlspecialchars(Flux::config('DonationCurrency')) ?>
		</span>
	</p>
	<p class="reset-amount-text">
		<a href="<?php echo $this->url('donate', 'index', array('resetamount' => true)) ?>"><?php echo htmlspecialchars(Flux::message('DSDIndex17')) ?></a>
	</p>
	<p><?php echo $this->donateButton($donationAmount) ?></p>
	<?php endif ?>
<?php else: ?>
	<p><?php echo Flux::message('NotAcceptingDonations') ?></p>
<?php endif ?>