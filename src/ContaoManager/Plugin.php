<?php

namespace LeadingSystems\MerconisBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Plugin for the Contao Manager.
 *
 * @author Leading Systems GmbH
 */
class Plugin implements BundlePluginInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function getBundles(ParserInterface $parser)
	{
		return [
			BundleConfig::create('LeadingSystems\MerconisBundle\LeadingSystemsMerconisBundle')
				->setLoadAfter(
					[
						'Contao\CoreBundle\ContaoCoreBundle',
						'LeadingSystems\HelpersBundle\LeadingSystemsHelpersBundle',
						'LeadingSystems\LSJS4CBundle\LeadingSystemsLSJS4CBundle',
						'LeadingSystems\ApiBundle\LeadingSystemsApiBundle',
						'LeadingSystems\CajaxBundle\LeadingSystemsCajaxBundle',
						'LeadingSystems\LanguageSelectorBundle\LeadingSystemsLanguageSelectorBundle',
						'LeadingSystems\DataCollectorBundle\LeadingSystemsDataCollectorBundle'
					]
				)
		];
	}
}
