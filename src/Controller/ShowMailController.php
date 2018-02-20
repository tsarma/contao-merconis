<?php

namespace LeadingSystems\MerconisBundle\Controller;

/**
 * Configures the bundle.
 *
 * @author Leading Systems GmbH
 */
class ShowMailController
{
	public function htmlBodyAction()
	{
		$template = new \BackendTemplate('beShowMailHTMLBody');
		$template->mailHTMLBody = 'Message could not be loaded';

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
				$template->mailHTMLBody = $htmlBody;
			}
		}

		return $template->getResponse();
	}
}
