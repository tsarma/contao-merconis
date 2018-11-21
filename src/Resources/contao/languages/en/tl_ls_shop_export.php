<?php

/*
 * Fields
 */
$GLOBALS['TL_LANG']['tl_ls_shop_export']['title']										= array('Designation');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['template']									= array('Output template');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['customLogicFile']							    = array('File with custom data preparation logic', 'If required, please indicate the file containing the custom data preparation logic here.');

$GLOBALS['TL_LANG']['tl_ls_shop_export']['flex_parameters']								= array('Flexible Parameters', 'You can add as many parameters as you like and they can be used in templates for any purpose by referencing them with their keyword. Information about parameters supported or required by a template can be found in the template file.');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['flex_parameters_label01']						= 'Parameter key';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['flex_parameters_label02']						= 'Parameter value';

$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateFilterByStatus01']					= array('Filter by status 1');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateFilterByStatus02']					= array('Filter by status 2');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateFilterByStatus03']					= array('Filter by status 3');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateFilterByStatus04']					= array('Filter by status 4');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateFilterByStatus05']					= array('Filter by status 5');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['filterByStatus01']							= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['filterByStatus02']							= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['filterByStatus03']							= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['filterByStatus04']							= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['filterByStatus05']							= array('&nbsp;');

$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateAutomaticChangeStatus01']				= array('Change status 1 automatically after export');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateAutomaticChangeStatus02']				= array('Change status 2 automatically after export');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateAutomaticChangeStatus03']				= array('Change status 3 automatically after export');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateAutomaticChangeStatus04']				= array('Change status 4 automatically after export');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateAutomaticChangeStatus05']				= array('Change status 5 automatically after export');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['automaticChangeStatus01']						= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['automaticChangeStatus02']						= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['automaticChangeStatus03']						= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['automaticChangeStatus04']						= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['automaticChangeStatus05']						= array('&nbsp;');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['sendOrderMailsOnStatusChange']				= array('Send status related order messages instantly');

$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateFilterByPaymentMethod']				= array('Filter by payment method');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['filterByPaymentMethod']						= array('&nbsp;');

$GLOBALS['TL_LANG']['tl_ls_shop_export']['activateFilterByShippingMethod']				= array('Filter by shipping method');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['filterByShippingMethod']						= array('&nbsp;');

$GLOBALS['TL_LANG']['tl_ls_shop_export']['productDirectSelection']						= array('Product selection');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['tableName']									= array('Name of the table');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['dataSource']									= array('Data source');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['changedWithinMinutes']						= array('Orders created or changed within');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['simulateGroup']								= array('Output for the following customer group');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['createProductObjects']						= array('Create product objects', 'With this option activated, product objects will be created for all products and then passed to the template. Otherwise the product data will be passed to the template exactly as read from the database. Creating products will cause the export to take much longer.');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['activate']									= array('Use', 'Activate to apply the search criterion');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['feedActive']									= array('Feed output active');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['feedName']									= array('Name of the feed');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['feedPassword']								= array('Password for protected access');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['feedContentType']								= array('Content-Type', 'Value to be used in the HTTP header for &quot;Content-Type&quot; (e.g. &quot;application/json&quot;, &quot;text/csv&quot;, &quot;text/xml&quot;, &quot;text/plain&quot;). Enter &quot;application/json&quot; and select no output template if you want to get a standard json api response.');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['feedFileName']								= array('File name', 'File name to be used when the feed is offered as a file download (e.g. when opened in a browser). Use the place holder {{date:}} to insert a variable date indication automatically. You can note any date indication whatsoever behind the colon in the syntax of the PHP function &quot;date()&quot;. Example: &quot;export_{{date:Y-m-d_H-i-s}}&quot; results in the file name &quot;export_2016-12-15_16-21-05&quot;. Using the placeholders &quot;{{currentSegment}}&quot;, &quot;{{numSegmentsTotal}}&quot; and &quot;{{currentTurn}}&quot; with a segmented output, you can place the number of the current segment, the total number of segments and the number of the current export turn in the file name.');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['fileExportActive']							= array('File output active');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['fileName']									= array('File name', 'Define the file name to use when saving the export file. Use the place holder {{date:}} to insert a variable date indication automatically. You can note any date indication whatsoever behind the colon in the syntax of the PHP function &quot;date()&quot;. Example: &quot;export_{{date:Y-m-d_H-i-s}}&quot; results in the file name &quot;export_2016-12-15_16-21-05&quot;. Using the placeholders &quot;{{currentSegment}}&quot;, &quot;{{numSegmentsTotal}}&quot; and &quot;{{currentTurn}}&quot; with a segmented output, you can place the number of the current segment, the total number of segments and the number of the current export turn in the file name.');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['appendToFile']								= array('Append data to an already existing file instead of overwriting it');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['useSegmentedOutput']							= array('Use segmented output');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['numberOfRecordsPerSegment']					= array('Number of records per segment');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['finishSegmentedOutputWithExtraSegment']		= array('Finish with empty output');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['folder']										= array('Storage location', 'Define the folder where the export file should be saved.');

$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionNewProduct']					= array('New product');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionSpecialPrice']				= array('Special reduced price');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionCategory']					= array('Page/category');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionProducer']					= array('Manufacturer');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionProductName']					= array('Product designation');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionArticleNr']					= array('Product code');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionTags']						= array('Search keys');

/*
 * Misc
 */
$GLOBALS['TL_LANG']['tl_ls_shop_export']['headlineSearchSelectionNewProduct'] = 'Search criterion &quot;New product&quot;';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['headlineSearchSelectionSpecialPrice'] = 'Search criterion &quot;Special reduced price&quot;';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['headlineSearchSelectionCategory'] = 'Search criterion &quot;Page/category&quot;';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['subHeadlineSearchSelectionCategory'] = 'Please note that the currently called page is used for every search by default if you activate this search criterion without explicitely selecting a page/category.';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['headlineSearchSelectionProducer'] = 'Search criterion &quot;Manufacturer&quot;';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['headlineSearchSelectionProductName'] = 'Search criterion &quot;Product designation&quot;';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['headlineSearchSelectionArticleNr'] = 'Search criterion &quot;Product code&quot;';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['headlineSearchSelectionTags'] = 'Search criterion &quot;Search terms&quot;';

$GLOBALS['TL_LANG']['tl_ls_shop_export']['ERR']['feedNameExists'] = 'The feed name &quot;%s&quot; already exists. Please use another and unique name.';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ERR']['fileNameExists'] = 'The file name &quot;%s&quot; already exists. Please use another and unique name.';

$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['savedAs'] = 'Saved as &quot;{fileName}&quot;';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['confirmDeleteFile_question'] = 'Really delete file &quot;{fileName}&quot;?';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['confirmDeleteFile_yes'] = 'Yes';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['confirmDeleteFile_no'] = 'No';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['pleaseWait_write'] = 'Please wait - file is being created';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['pleaseWait_delete'] = 'Please wait - file is being deleted';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['fileDeleted'] = 'File &quot;{fileName}&quot; has been deleted.';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['anErrorOccurred'] = 'An error occurred. Please make sure that you have defined a valid storage location and file name. Missing flexible parameters in the settings of the export template can also prevent the export from being saved. Please take a look at the export template and check whether there are any mandatory parameters mentioned in a documentation section.';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['ajax']['partXOfY'] = 'Part {currentSegment} of {numSegmentsTotal}';

/*
 * Overview
 */
$GLOBALS['TL_LANG']['tl_ls_shop_export']['overview']['feedUrl'] = 'Feed URL';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['overview']['savedExportFiles'] = 'Saved export files';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['overview']['noSavedExportFilesExisting'] = 'None existing';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['overview']['createExport'] = 'Create export file';

/*
 * Legends
 */
$GLOBALS['TL_LANG']['tl_ls_shop_export']['title_legend']   = 'Designation';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['template_legend']   = 'Output format';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['customLogic_legend'] = 'Custom logic for data preparation';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['dataSource_legend']   = 'Data source';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['dataTable_legend']   = 'Data from table';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['dataOrders_legend']   = 'Data from orders';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['group_legend']   = 'Group settings';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['directSelection_legend']   = 'Simple product selection';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelection_legend']   = 'Product selection based on detailed search';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['feed_legend'] = 'Feed output';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['fileExport_legend'] = 'File output';
$GLOBALS['TL_LANG']['tl_ls_shop_export']['segmentedOutput_legend'] = 'Segmented output';

/*
 * References
 */
$GLOBALS['TL_LANG']['tl_ls_shop_export']['dataSource']['options'] = array(
	'dataTable' => array('Data from table', 'The data to be displayed in the export is being read from a table.'),
	'directSelection' => array('Direct product selection', 'This selection option enables you to directly select products.'),
	'searchSelection' => array('Product search', 'The products to be displayed in the export are determined by means of stipulated search criteria.'),
	'dataOrders' => array('Orders', 'The orders to be displayed in the export are determined by means of stipulated criteria.')
);

$GLOBALS['TL_LANG']['tl_ls_shop_export']['changedWithinMinutes']['options'] = array(
	5 => array('5 minutes'),
	10 => array('10 minutes'),
	15 => array('15 minutes'),
	30 => array('30 minutes'),
	60 => array('1 hour'),
	120 => array('2 hours'),
	720 => array('12 hours'),
	1440 => array('1 day'),
	2880 => array('2 days'),
	10080 => array('1 week'),
	20160 => array('2 weeks'),
	40320 => array('4 weeks'),
	525600 => array('1 year'),
	9999999 => array('no limitation')
);

$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionNewProduct']['options'] = array(
	'new' => array('Product has been marked new'),
	'notNew' => array('Product has not been marked new')
);

$GLOBALS['TL_LANG']['tl_ls_shop_export']['searchSelectionSpecialPrice']['options'] = array(
	'specialPrice' => array('Product has been marked special reduced price'),
	'noSpecialPrice' => array('Product has not been marked special reduced price')
);


/*
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_ls_shop_export']['new']        = array('New export model', 'Define a new export model');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['edit']        = array('Edit export model', 'Edit export model ID %s');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['delete']        = array('Delete export model', 'Delete export model ID %s');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['copy']        = array('Copy export model', 'Copy export model ID %s');
$GLOBALS['TL_LANG']['tl_ls_shop_export']['show']        = array('Show details', 'Show details of export model ID %s');
