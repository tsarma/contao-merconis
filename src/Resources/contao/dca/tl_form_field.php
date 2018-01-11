<?php

namespace Merconis\Core;

 	$GLOBALS['TL_DCA']['tl_form_field']['palettes']['ls_shop_configuratorFileUpload'] = '{type_legend},type,name,label;{fconfig_legend},mandatory,extensions,maxlength;{store_legend:hide},storeFile;{expert_legend:hide},class,accesskey,tabindex,fSize;{submit_legend},addSubmit';

	foreach ($GLOBALS['TL_DCA']['tl_form_field']['palettes'] as $k => $v) {
		if (is_array($v)) {
			continue;
		}
		$GLOBALS['TL_DCA']['tl_form_field']['palettes'][$k] = $v.';{lsShop_legend:hide},lsShop_mandatoryOnConditionField,lsShop_mandatoryOnConditionValue';
	}
	
	$GLOBALS['TL_DCA']['tl_form_field']['fields']['lsShop_mandatoryOnConditionField'] = array(
		'label'			=> &$GLOBALS['TL_LANG']['tl_form_field']['lsShop_mandatoryOnConditionField'],
		'exclude' => true,
		'inputType'		=> 'select',
		'options_callback'	=> array('Merconis\Core\ls_shop_generalHelper', 'getOtherFieldsInFormAsOptions'),
		'eval'			=> array('tl_class' => 'w50')
	);

	$GLOBALS['TL_DCA']['tl_form_field']['fields']['lsShop_mandatoryOnConditionValue'] = array(
		'label'			=> &$GLOBALS['TL_LANG']['tl_form_field']['lsShop_mandatoryOnConditionValue'],
		'exclude' => true,
		'inputType'		=> 'text',
		'eval'			=> array('tl_class' => 'w50')
	);
	
	$GLOBALS['TL_DCA']['tl_form_field']['fields']['rgxp']['options'][] = 'merconisCheckVATID';
