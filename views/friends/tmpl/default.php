<?php
defined('KOOWA') or die('Restricted access');?>

<script src="media://lib_koowa/js/koowa.js" />
<?= @helper('behavior.tooltip');?>
<style src="media://lib_koowa/css/koowa.css" />

<form action="<?= @route();?>" method="GET" class="-koowa-grid">
	
	<table class="adminlist">
		<thead>
			<tr>
				<th width='10'></th>
				<th>
					<?= @helper('grid.sort', array('column' => 'Full Name')); ?>
				</th>
				<th>
					<?= @helper('grid.sort', array('column' => 'Email Address')); ?>
				</th>
				<th>
					<?= @helper('grid.sort', array('column' => 'Mobile Phone')); ?>
				</th>
				<th>
					<?= @helper('grid.sort', array('column' => 'Birth Date')); ?>
				</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					
				</td>
			</tr>
		</tfoot>
		<tbody>
			<!-- first column (<td></td>) holds the friend(object) -->
			<? foreach($friends as $friend): ?>
			<tr>			
				<td align='center'>
					<?= @helper('grid.checkbox', array('row' => $friend));?>
				</td>
				<td>
					<?= $friend->first_name . " " .  $friend->last_name; ?>
				</td>
				<td>
					<?= $friend->email; ?>
				</td>
				<td>
					<?= $friend->mobile; ?>
				</td>
				<td>
					<?= $friend->birthdate; ?>
				</td>
			</tr>
			<? endforeach;?>
		</tbody>
		
	</table>

</form>