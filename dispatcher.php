<?php
class ComNookudemoDispatcher extends ComDefaultDispatcher
{
	protected function _initialize(KConfig $config)
	{
		$config->append(array('controller' => 'dashboard'));
		parent::_initialize($config);
	}
}
