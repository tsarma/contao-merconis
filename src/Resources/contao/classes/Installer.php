<?php

namespace Merconis\Core;

class Installer
{
	protected $obj_template = null;

	/*
	 * Current object instance (Singleton)
	 */
	protected static $objInstance;

	/*
	 * Prevent cloning of the object (Singleton)
	 */
	final private function __clone() {}


	/*
	 * Return the current object instance (Singleton)
	 */
	public static function getInstance() {
		if (!is_object(self::$objInstance))	{
			self::$objInstance = new self();
		}
		return self::$objInstance;
	}

	/*
	 * Prevent direct instantiation (Singleton)
	 */
	protected function __construct()
	{
		\System::loadLanguageFile('lsm_installer');
		$this->obj_template = new \FrontendTemplate('lsm_installer');
	}

	public function parse()
	{
		return $this->obj_template->parse();
	}
}