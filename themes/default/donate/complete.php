<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('DSDComplete1')) ?></h2>
<p class="important"><?php echo htmlspecialchars(Flux::message('DSDComplete2')) ?></p>
<?php $hoursHeld = +(int)Flux::config('HoldUntrustedAccount'); ?>
<?php if ($hoursHeld): ?>
	<p>
		<?php echo htmlspecialchars(Flux::message('DSDComplete3')) ?> <?php echo number_format($hoursHeld) ?> <?php echo htmlspecialchars(Flux::message('DSDComplete4')) ?>
	</p>
<?php endif ?>
<p><?php echo htmlspecialchars(Flux::message('DSDComplete5')) ?></p>
<p><?php echo htmlspecialchars(Flux::message('DSDComplete6')) ?></p>

<br />
<br />
<p class="important" style="text-align: center; font-weight: bold"><?php echo htmlspecialchars(Flux::message('DSDComplete7')) ?></p>
<p class="important" style="text-align: center">&mdash; <?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?></p>