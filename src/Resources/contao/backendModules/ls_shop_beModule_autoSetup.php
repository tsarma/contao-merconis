<?php

namespace Merconis\Core;

class ls_shop_beModule_autoSetup extends \BackendModule
{
	protected $strTemplate = 'beModule_autoSetup';

	protected function compile() {
		\Controller::redirect(\Environment::get('base').'contao/main.php');
	}
}