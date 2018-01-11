<?php

namespace Merconis\Core;

/**
 * Initialize the system
 */
define('TL_MODE', 'BE');
require_once('../../../initialize.php');


class ls_shop_show2MailHTMLBody extends \Backend {

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
	}


	/**
	 * Run the controller and parse the template
	 */
	public function run() {
		$this->Template = new \BackendTemplate('beShowMailHTMLBody');
		$this->Template->mailHTMLBody = 'Message could not be loaded';
		
		if (\Input::get('mid')) {
			$objMessage = \Database::getInstance()->prepare("
				SELECT		*
				FROM 		`tl_ls_shop_messages_sent`
				WHERE		`id` = ?
			")
			->limit(1)
			->execute(\Input::get('mid'));
			
			if ($objMessage->numRows) {
				$htmlBody = $objMessage->first()->bodyHTML;
				$htmlBody = preg_replace('/(<\/title>)/', '$1<base href="'.\Environment::get('base').'" />', $htmlBody);
				$this->Template->mailHTMLBody = $htmlBody;
			}
		}

		$this->Template->output();
	}
}


/**
 * Instantiate the controller
 */
$obj_ls_shop_show2MailHTMLBody = new ls_shop_show2MailHTMLBody();
$obj_ls_shop_show2MailHTMLBody->run();

?>