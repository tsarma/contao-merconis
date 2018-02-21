<?php

namespace LeadingSystems\MerconisBundle\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Configures the bundle.
 *
 * @author Leading Systems GmbH
 */
class ShowMailController
{
	/**
	 * Database connection.
	 *
	 * @var Connection
	 */
	private $connection;

	/**
	 * Template engine.
	 *
	 * @var EngineInterface
	 */
	private $engine;

	/**
	 * ShowMailController constructor.
	 *
	 * @param Connection $connection
	 * @param EngineInterface $engine
	 */
	public function __construct(Connection $connection, EngineInterface $engine)
	{
		$this->connection = $connection;
		$this->engine = $engine;
	}

	/**
	 * Render the html mail body.
	 *
	 * @param int $messageId The message id.
	 * @param Request $request
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @throws \Doctrine\DBAL\DBALException
	 */
	public function htmlBodyAction($messageId, Request $request)
	{
		$htmlBody = 'Message could not be loaded';

		if ($messageId) {
			$statement = $this->connection
				->executeQuery('SELECT bodyHTML FROM tl_ls_shop_messages_sent WHERE id=:id', ['id' => $messageId]);

			if ($statement->rowCount() === 1) {
				$htmlBody = $statement->fetchColumn();
				$htmlBody = preg_replace('/(<\/title>)/', '$1<base href="'. $request->getBaseUrl() .'" />', $htmlBody);
			}
		}

		return $this->engine->renderResponse(
			'@LeadingSystemsMerconis/backend/show_mail_html_body.html.twig',
			['mailHTMLBody' => $htmlBody]
		);
	}
}
