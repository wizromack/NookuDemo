<?php
class ComNookudemoViewFriendsHtml extends ComNookudemoViewHtml
{
	public function display()
	{
		$model = KService::get('com://admin/nookudemo.model.friends');
		return parent::display();
	}
}
