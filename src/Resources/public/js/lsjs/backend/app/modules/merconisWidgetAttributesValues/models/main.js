var obj_classdef_model = {
	name: 'main',
	
	data: {
		json_data: '[]',
		arr_data: []
	},

	obj_dataFunctionBindings: {
		/*
		 * The data object holds the value in JSON format and in an array.
		 * The following data function bindings make sure that each of them gets updated when the other is changed.
		 */
		'json_data': 'saveJsonData',
		'arr_data': 'saveArrData'
	},

	start: function() {
		/*
		 * In order to load the original json data from the input field, we need the view to be
		 * initialized and therefore, we need to call the module's onModelLoad method first.
		 */
		this.__module.onModelLoaded();

		this.loadOriginalJsonData();

		this.__view.initializeGui();
	},

	loadOriginalJsonData: function() {
		this.writeData('json_data', this.__view.el_originalInputField.getProperty('value'));
	},

	saveJsonData: function(var_newData, str_registeredDataPath, var_originalData, str_actualDataPath) {
		this.writeData('arr_data', JSON.parse(var_newData), false, false);
	},

	saveArrData: function(var_newData, str_registeredDataPath, var_originalData, str_actualDataPath) {
		this.writeData('json_data', JSON.stringify(var_newData), false, false);
	}
};