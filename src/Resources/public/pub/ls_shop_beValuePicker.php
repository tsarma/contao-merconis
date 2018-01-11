<?php

namespace Merconis\Core;

/**
 * Initialize the system
 */
define('TL_MODE', 'BE');
require_once('../../../initialize.php');


class ls_shop_beValuePicker extends \Backend
{

	/**
	 * Current Ajax object
	 * @var object
	 */
	protected $objAjax;


	/**
	 * Initialize the controller
	 * 
	 * 1. Import the user
	 * 2. Call the parent constructor
	 * 3. Authenticate the user
	 * 4. Load the language files
	 * DO NOT CHANGE THIS ORDER!
	 */
	public function __construct()
	{
		$this->import('BackendUser', 'User');
		parent::__construct();

		$this->User->authenticate();

		$this->loadLanguageFile('default');
		$this->loadLanguageFile('modules');
	}



	/**
	 * Run the controller and parse the template
	 */
	public function run()
	{
		$this->Template = new \BackendTemplate('be_valuePicker');

		$this->Template->theme = $this->getTheme();
		$this->Template->base = \Environment::get('base');
		$this->Template->language = $GLOBALS['TL_LANGUAGE'];
		$this->Template->title = $GLOBALS['TL_CONFIG']['websiteTitle'];
		$this->Template->headline = \Input::get('pickerHeadline');
		$this->Template->charset = $GLOBALS['TL_CONFIG']['characterSet'];
		$this->Template->options = ls_shop_generalHelper::createValueList(\Input::get('requestedTable'),\Input::get('requestedValue'),\Input::get('requestedLanguage'));

		$this->Template->output();
	}
}


/**
 * Instantiate the controller
 */
$obj_ls_shop_beValuePicker = new ls_shop_beValuePicker();
$obj_ls_shop_beValuePicker->run();

?>