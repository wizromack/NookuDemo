<?php
defined('KOOWA') or die('Koowa not installed');?>

<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />
<?= @helper('behavior.mootools'); ?>
<?= @helper('behavior.keepalive'); ?>
<?= @helper('behavior.validator') ?>

<form action="<?= @route("id=" . $friend->id);?>" method="POST" class="-koowa-form" id="edit-form">
	<div id="title-header">
		<?= @text('First Name'); ?>
		<input id="title" name="first_name" value="<?= $friend->first_name ?>" />
	</div>
	<div>
		<?= @text('Last Name'); ?>
		<input id="title" name="last_name" value="<?= $friend->last_name ?>" />
	</div>
	<div>
		<?= @text('Email'); ?>
		<input id="title" name="email" value="<?= $friend->email ?>" />
	</div>
	<div>
		<?= @text('Mobile'); ?>
		<input id="title" name="mobile" value="<?= $friend->mobile ?>" />
	</div>
	<div>
		<?= @text('Birthdate'); ?>
		<input id="title" name="birthdate" value="<?= $friend->birthdate ?>" />
	</div>
</form>