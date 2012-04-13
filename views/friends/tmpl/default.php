<script src="media://lib_koowa/js/koowa.js" />
<?= @helper('behavior.tooltip');?>

<? foreach($friends as $friend): ?>
<li><?= $friend->first_name; ?></li>
<? endforeach;?>
