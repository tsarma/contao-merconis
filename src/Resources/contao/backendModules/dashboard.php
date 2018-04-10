<?php

namespace Merconis\Core;

class dashboard extends \BackendModule {

	protected $strTemplate = 'lsm_dashboard';
	
	
	protected function compile() {
		$obj_installer = Installer::getInstance();
		$this->Template->str_installerOutput = $obj_installer->parse();
	}
}
?>