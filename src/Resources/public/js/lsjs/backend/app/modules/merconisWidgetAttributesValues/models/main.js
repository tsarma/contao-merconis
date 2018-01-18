var obj_classdef_model = {
	name: 'main',
	
	data: {
		json_value: '[]',
		arr_value: []
	},

	obj_dataFunctionBindings: {
		/*
		 * The data object holds the value in JSON format and in an array.
		 * The following data function bindings make sure that each of them gets updated when the other is changed.
		 */
		'json_value': 'saveJsonValue',
		'arr_value': 'saveArrValue'
	},

	start: function() {
		/*
		 * In order to load the original json data from the input field, we need the view to be
		 * initialized and therefore, we need to call the module's onModelLoad method first.
		 */
		this.__module.onModelLoaded();

		this.loadOriginalJsonData();
	},

	loadOriginalJsonData: function() {
		this.writeData('json_value', this.__view.el_originalInputField.getProperty('value'));
	},

	saveJsonValue: function(var_newData, str_registeredDataPath, var_originalData, str_actualDataPath) {
		this.writeData('arr_value', JSON.parse(var_newData), false, false);
	},

	saveArrValue: function(var_newData, str_registeredDataPath, var_originalData, str_actualDataPath) {
		this.writeData('json_value', JSON.stringify(var_newData), false, false);
	}
};