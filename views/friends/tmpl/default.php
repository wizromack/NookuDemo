<?php
defined('KOOWA') or die('Restricted access');?>
<?= @helper('behavior.mootools');?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />

<form action="<?= @route();?>" method="GET" class="-koowa-grid">
	<table class="adminlist">
		<thead>
			<tr>
				<td><?= @helper('grid.checkall');?></td>
				<td colspan='4'><?= @helper('grid.search');?></td>
			</tr>
			<tr>
				<th width='10'></th>
				<th><?= @helper('grid.sort', array('column' => 'first_name')); ?></th>				
				<th><?= @helper('grid.sort', array('column' => 'last_name')); ?></th>
				<th><?= @helper('grid.sort', array('column' => 'email')); ?></th>
				<th><?= @helper('grid.sort', array('column' => 'mobile')); ?></th>
				<th><?= @helper('grid.sort', array('column' => 'birthdate')); ?></th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5"><?= @helper('paginator.pagination', array('total' => count($friends)));?></td>
			</tr>
		</tfoot>
		<tbody>
			<!-- first column (<td></td>) holds the friend(object) -->
			<? foreach($friends as $friend): ?>
			<tr>			
				<td align='center'><?= @helper('grid.checkbox', array('row' => $friend));?></td>
				<td><a href="<?= @route("view=friend&id=" . $friend->id);?>"><?= $friend->first_name;?></a></td>
				<td><a href="<?= @route("view=friend&id=" . $friend->id);?>"><?= $friend->last_name; ?></a></td>
				<td><?= $friend->email; ?></td>
				<td><?= $friend->mobile; ?></td>
				<td><?= $friend->birthdate; ?></td>
			</tr>
			<? endforeach;?>
		</tbody>		
	</table>
</form>