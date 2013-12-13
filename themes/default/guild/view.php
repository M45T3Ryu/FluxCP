<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('DSGView1')) ?></h2>
<?php if ($guild): ?>
<h3><?php echo htmlspecialchars(Flux::message('DSGView2')) ?> “<?php echo htmlspecialchars($guild->name) ?>”</h3>
<table class="vertical-table">
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSGView3')) ?></th>
		<td><?php echo htmlspecialchars($guild->guild_id) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSGView4')) ?></th>
		<td><?php echo htmlspecialchars($guild->name) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSGView5')) ?></th>
		<td><?php echo number_format($guild->emblem_id) ?></td>
		<td><img src="<?php echo $this->emblem($guild->guild_id) ?>" /></td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSGView6')) ?></th>
		<td><?php echo htmlspecialchars($guild->char_id) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSGView7')) ?></th>
		<td>
			<?php if ($auth->allowedToViewCharacter): ?>
				<?php echo $this->linkToCharacter($guild->char_id, $guild->guild_master) ?>
			<?php else: ?>
				<?php echo htmlspecialchars($guild->guild_master) ?>
			<?php endif ?>
		</td>
		<th><?php echo htmlspecialchars(Flux::message('DSGView8')) ?></th>
		<td colspan="2"><?php echo number_format($guild->guild_lv) ?></td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSGView9')) ?></th>
		<td><?php echo number_format($guild->connect_member) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSGView10')) ?></th>
		<td><?php echo number_format($guild->max_member) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSGView11')) ?></th>
		<td colspan="2"><?php echo number_format($guild->average_lv) ?></td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSGView12')) ?></th>
		<td><?php echo number_format($guild->exp) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSGView13')) ?></th>
		<td><?php echo number_format($guild->next_exp) ?></td>
		<th><?php echo htmlspecialchars(Flux::message('DSGView14')) ?></th>
		<td colspan="2"><?php echo number_format($guild->skill_point) ?></td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSGView15')) ?></th>
		<td colspan="6">
			<?php if (trim($guild->mes1)): ?>
				<?php echo htmlspecialchars($guild->mes1) ?>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSGView16')) ?></span>
			<?php endif ?>
		</td>
	</tr>
	<tr>
		<th><?php echo htmlspecialchars(Flux::message('DSGView17')) ?></th>
		<td colspan="6">
			<?php if (trim($guild->mes2)): ?>
				<?php echo htmlspecialchars($guild->mes2) ?></td>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSGView16')) ?></span>
			<?php endif ?>
		</td>
	</tr>
</table>
<h3><?php echo htmlspecialchars(Flux::message('DSGView18')) ?> “<?php echo htmlspecialchars($guild->name) ?>”</h3>
<?php if ($alliances): ?>
	<p><?php echo htmlspecialchars($guild->name) ?> <?php echo htmlspecialchars(Flux::message('DSGView19')) ?> <?php echo count($alliances) ?> <?php echo htmlspecialchars(Flux::message('DSGView20')) ?></p>
	<table class="vertical-table">
		<tr>
			<th><?php echo htmlspecialchars(Flux::message('DSGView3')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSGView4')) ?></th>
		</tr>
		<?php foreach ($alliances AS $alliance): ?>
		<tr>
			<td align="right">
				<?php if ($auth->allowedToViewGuild): ?>
					<?php echo $this->linkToGuild($alliance->alliance_id, $alliance->alliance_id) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($alliance->alliance_id) ?>
				<?php endif ?>
			</td>
			<td><?php echo htmlspecialchars($alliance->name) ?></td>
		</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	<p><?php echo htmlspecialchars(Flux::message('DSGView21')) ?></p>
<?php endif ?>
<h3><?php echo htmlspecialchars(Flux::message('DSGView22')) ?> “<?php echo htmlspecialchars($guild->name) ?>”</h3>
<?php if ($oppositions): ?>
	<p><?php echo htmlspecialchars($guild->name) ?> <?php echo htmlspecialchars(Flux::message('DSGView19')) ?> <?php echo count($oppositions) ?> <?php echo htmlspecialchars(Flux::message('DSGView23')) ?></p>
	<table class="vertical-table">
		<tr>
			<th><?php echo htmlspecialchars(Flux::message('DSGView3')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSGView4')) ?></th>
		</tr>
		<?php foreach ($oppositions AS $opposition): ?>
		<tr>
			<td align="right">
				<?php if ($auth->allowedToViewGuild): ?>
					<?php echo $this->linkToGuild($opposition->alliance_id, $opposition->alliance_id) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($opposition->alliance_id) ?>
				<?php endif ?>
			</td>
			<td><?php echo htmlspecialchars($opposition->name) ?></td>
		</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	<p><?php echo htmlspecialchars(Flux::message('DSGView24')) ?></p>
<?php endif ?>
<h3><?php echo htmlspecialchars(Flux::message('DSGView25')) ?> “<?php echo htmlspecialchars($guild->name) ?>”</h3>
<?php if ($members): ?>
	<p><?php echo htmlspecialchars($guild->name) ?> <?php echo htmlspecialchars(Flux::message('DSGView19')) ?> <?php echo count($members) ?> <?php echo htmlspecialchars(Flux::message('DSGView26')) ?></p>
	<table class="vertical-table">
		<tr>
			<th><?php echo htmlspecialchars(Flux::message('DSGView27')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSGView28')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSGView29')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSGView30')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSGView31')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSGView32')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSGView33')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSGView34')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSGView35')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSGView36')) ?></th>
		</tr>
		<?php foreach ($members AS $member): ?>
		<tr>
			<td align="right">
				<?php if ($auth->allowedToViewCharacter): ?>
					<?php echo $this->linkToCharacter($member->char_id, $member->name) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($member->name) ?>
				<?php endif ?>
			</td>
			<td>
				<?php if ($job=$this->jobClassText($member->class)): ?>
					<?php echo htmlspecialchars($job) ?>
				<?php else: ?>
					<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSGView37')) ?></span>
				<?php endif ?>
			</td>
			<td><?php echo htmlspecialchars($member->base_level) ?></td>
			<td><?php echo htmlspecialchars($member->job_level) ?></td>
			<td><?php echo number_format($member->devotion) ?></td>
			<td><?php echo htmlspecialchars($member->position) ?></td>
			<td><?php echo htmlspecialchars($member->position_name) ?></td>
			<td>
				<?php if ($member->mode == 17): ?>
					<?php echo htmlspecialchars("Invite/Expel") ?>
				<?php elseif ($member->mode == 16): ?>
					<?php echo htmlspecialchars("Expel") ?>
				<?php elseif ($member->mode == 1): ?>
					<?php echo htmlspecialchars("Invite") ?>
				<?php elseif ($member->mode == 0): ?>
					<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSGView16')) ?></span>
				<?php else: ?>
					<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSGView37')) ?></span>
				<?php endif ?>
			</td>
			<td><?php echo number_format($member->guild_tax) ?>%</td>
			<td><?php echo htmlspecialchars($member->lastlogin) ?></td>
		</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	<p><?php echo htmlspecialchars(Flux::message('DSGView38')) ?></p>
<?php endif ?>
<h3><?php echo htmlspecialchars(Flux::message('DSGView39')) ?> “<?php echo htmlspecialchars($guild->name) ?>”</h3>
<?php if ($expulsions): ?>
	<p><?php echo htmlspecialchars($guild->name) ?> <?php echo htmlspecialchars(Flux::message('DSGView19')) ?> <?php echo count($expulsions) ?> <?php echo htmlspecialchars(Flux::message('DSGView40')) ?></p>
	<table class="vertical-table">
		<tr>
			<th><?php echo htmlspecialchars(Flux::message('DSGView41')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSGView42')) ?></th>
			<th><?php echo htmlspecialchars(Flux::message('DSGView43')) ?></th>
		</tr>
		<?php foreach ($expulsions AS $expulsion): ?>
		<tr>
			<td align="right">
				<?php if ($auth->allowedToViewAccount): ?>
					<?php echo $this->linkToAccount($expulsion->account_id, $expulsion->account_id) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($expulsion->account_id) ?>
				<?php endif ?>
			</td>
			<td><?php echo htmlspecialchars($expulsion->name) ?></td>
			<td>
			<?php if($expulsion->mes): ?>
				<?php echo htmlspecialchars($expulsion->mes) ?>
			<?php else: ?>
				<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSGView16')) ?></span>
			<?php endif ?>
			</td>
		</tr>
		<?php endforeach ?>
	</table>
<?php else: ?>
	<p><?php echo htmlspecialchars(Flux::message('DSGView44')) ?></p>
<?php endif ?>
<?php if (!Flux::config('GStorageLeaderOnly') || $amOwner || $auth->allowedToViewGuild): ?>
	<h3><?php echo htmlspecialchars(Flux::message('DSGView45')) ?> “<?php echo htmlspecialchars($guild->name) ?>”</h3>
	<?php if (Flux::config('GStorageLeaderOnly')): ?>
		<p><?php echo htmlspecialchars(Flux::message('DSGView46')) ?></p>
	<?php endif ?>
	<?php if ($items): ?>
		<p><?php echo htmlspecialchars($guild->name) ?> <?php echo htmlspecialchars(Flux::message('DSGView19')) ?> <?php echo count($items) ?> <?php echo htmlspecialchars(Flux::message('DSGView47')) ?></p>
		<table class="vertical-table">
			<tr>
				<th><?php echo htmlspecialchars(Flux::message('DSGView48')) ?></th>
				<th colspan="2"><?php echo htmlspecialchars(Flux::message('DSGView49')) ?></th>
				<th><?php echo htmlspecialchars(Flux::message('DSGView50')) ?></th>
				<th><?php echo htmlspecialchars(Flux::message('DSGView51')) ?></th>
				<th><?php echo htmlspecialchars(Flux::message('DSGView52')) ?></th>
				<th><?php echo htmlspecialchars(Flux::message('DSGView53')) ?></th>
				<th><?php echo htmlspecialchars(Flux::message('DSGView54')) ?></th>
				<th><?php echo htmlspecialchars(Flux::message('DSGView55')) ?></th>
				<th><?php echo htmlspecialchars(Flux::message('DSGView56')) ?></th>
				</th>
			</tr>
			<?php foreach ($items AS $item): ?>
			<?php $icon = $this->iconImage($item->nameid) ?>
			<tr>
				<td align="right"><?php echo $this->linkToItem($item->nameid, $item->nameid) ?></td>
				<?php if ($icon): ?>
				<td><img src="<?php echo htmlspecialchars($icon) ?>" /></td>
				<?php endif ?>
				<td<?php if (!$icon) echo ' colspan="2"' ?><?php if ($item->cardsOver) echo ' class="overslotted' . $item->cardsOver . '"'; else echo ' class="normalslotted"' ?>>
					<?php if ($item->refine > 0): ?>
						+<?php echo htmlspecialchars($item->refine) ?>
					<?php endif ?>
					<?php if ($item->card0 == 255 && intval($item->card1/1280) > 0): ?>
						<?php for ($i = 0; $i < intval($item->card1/1280); $i++): ?>
							<?php echo htmlspecialchars(Flux::message('DSGView57')) ?>
						<?php endfor ?>
						<?php echo htmlspecialchars(Flux::message('DSGView58')) ?>
					<?php endif ?>
					<?php if ($item->card0 == 254 || $item->card0 == 255): ?>
						<?php if ($item->char_name): ?>
							<?php if ($auth->actionAllowed('character', 'view') && ($isMine || (!$isMine && $auth->allowedToViewCharacter))): ?>
								<?php echo $this->linkToCharacter($item->char_id, $item->char_name, $session->serverName) . "'s" ?>
							<?php else: ?>
								<?php echo htmlspecialchars($item->char_name . "'s") ?>
							<?php endif ?>
						<?php else: ?>
							<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('UnknownLabel')) ?></span>'s
						<?php endif ?>
					<?php endif ?>
					<?php if ($item->card0 == 255 && array_key_exists($item->card1%1280, $itemAttributes)): ?>
						<?php echo htmlspecialchars($itemAttributes[$item->card1%1280]) ?>
					<?php endif ?>
					<?php if ($item->name_japanese): ?>
						<span class="item_name"><?php echo htmlspecialchars($item->name_japanese) ?></span>
					<?php else: ?>
						<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSGView59')) ?></span>
					<?php endif ?>
					<?php if ($item->slots): ?>
						<?php echo htmlspecialchars(' [' . $item->slots . ']') ?>
					<?php endif ?>
				</td>
				<td><?php echo number_format($item->amount) ?></td>
				<td>
					<?php if ($item->identify): ?>
						<span class="identified yes"><?php echo htmlspecialchars(Flux::message('DSGView60')) ?></span>
					<?php else: ?>
						<span class="identified no"><?php echo htmlspecialchars(Flux::message('DSGView61')) ?></span>
					<?php endif ?>
				</td>
				<td>
					<?php if ($item->attribute): ?>
						<span class="broken yes"><?php echo htmlspecialchars(Flux::message('DSGView60')) ?></span>
					<?php else: ?>
						<span class="broken no"><?php echo htmlspecialchars(Flux::message('DSGView61')) ?></span>
					<?php endif ?>
				</td>
				<td>
					<?php if($item->card0 && ($item->type == 4 || $item->type == 5) && $item->card0 != 254 && $item->card0 != 255 && $item->card0 != -256): ?>
						<?php if (!empty($cards[$item->card0])): ?>
							<?php echo $this->linkToItem($item->card0, $cards[$item->card0]) ?>
						<?php else: ?>
							<?php echo $this->linkToItem($item->card0, $item->card0) ?>
						<?php endif ?>
					<?php else: ?>
						<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSGView16')) ?></span>
					<?php endif ?>
				</td>
				<td>
					<?php if($item->card1 && ($item->type == 4 || $item->type == 5) && $item->card0 != 255 && $item->card0 != -256): ?>
						<?php if (!empty($cards[$item->card1])): ?>
							<?php echo $this->linkToItem($item->card1, $cards[$item->card1]) ?>
						<?php else: ?>
							<?php echo $this->linkToItem($item->card1, $item->card1) ?>
						<?php endif ?>
					<?php else: ?>
						<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSGView16')) ?></span>
					<?php endif ?>
				</td>
				<td>
					<?php if($item->card2 && ($item->type == 4 || $item->type == 5) && $item->card0 != 254 && $item->card0 != 255 && $item->card0 != -256): ?>
						<?php if (!empty($cards[$item->card2])): ?>
							<?php echo $this->linkToItem($item->card2, $cards[$item->card2]) ?>
						<?php else: ?>
							<?php echo $this->linkToItem($item->card2, $item->card2) ?>
						<?php endif ?>
					<?php else: ?>
						<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSGView16')) ?></span>
					<?php endif ?>
				</td>
				<td>
					<?php if($item->card3 && ($item->type == 4 || $item->type == 5) && $item->card0 != 254 && $item->card0 != 255 && $item->card0 != -256): ?>
						<?php if (!empty($cards[$item->card3])): ?>
							<?php echo $this->linkToItem($item->card3, $cards[$item->card3]) ?>
						<?php else: ?>
							<?php echo $this->linkToItem($item->card3, $item->card3) ?>
						<?php endif ?>
					<?php else: ?>
						<span class="not-applicable"><?php echo htmlspecialchars(Flux::message('DSGView16')) ?></span>
					<?php endif ?>
				</td>
			</tr>
			<?php endforeach ?>
		</table>
	<?php else: ?>
		<p><?php echo htmlspecialchars(Flux::message('DSGView63')) ?></p>
	<?php endif ?>
<?php endif ?>
<?php else: ?>
<p><?php echo htmlspecialchars(Flux::message('DSGView63')) ?> <a href="javascript:history.go(-1)"><?php echo htmlspecialchars(Flux::message('DSGView64')) ?></a>.</p>
<?php endif ?>