var obj_classdef_model = {
	name: 'main',
	
	data: {
		json_data: '[]',
		arr_data: []
	},

	obj_dataFunctionBindings: {
		/*
		 * The data object holds the value in JSON format and in an array.
		 * The following data function bindings make sure that each gets updated when the other is changed.
		 */
		'json_data': 'saveJsonData',
		'arr_data': 'saveArrData'
	},

	start: function() {
		/*
		 * In order to load the original json data from the input field, we need the view to be
		 * initialized and therefore we need to call the module's onModelLoad method first.
		 */
		this.__module.onModelLoaded();
	},

	loadOriginalJsonData: function() {
		this.writeData('json_data', this.__view.el_originalInputField.getProperty('value'));
	},

	saveJsonData: function(var_newData, str_registeredDataPath, var_originalData, str_actualDataPath) {
		this.writeData('arr_data', JSON.parse(var_newData), true, false);
	},

	saveArrData: function(var_newData, str_registeredDataPath, var_originalData, str_actualDataPath) {
		this.writeData('json_data', JSON.stringify(var_newData), true, false);
	},

	updateData: function(els_inputs) {
		var el_lastParent = null;
		var int_arrKeyCounterLevel1 = -1;
		var int_arrKeyCounterLevel2 = 0;
		var arr_dataToStore = [];

		Array.each(
			els_inputs,
			function(el_input) {
				var el_parent = el_input.getParent();

				if (el_parent !== el_lastParent) {
					int_arrKeyCounterLevel1++;
					int_arrKeyCounterLevel2 = 0;
				} else {
					int_arrKeyCounterLevel2++;
				}

				if (typeOf(arr_dataToStore[int_arrKeyCounterLevel1]) !== 'array') {
					arr_dataToStore[int_arrKeyCounterLevel1] = [];
				}

				arr_dataToStore[int_arrKeyCounterLevel1][int_arrKeyCounterLevel2] = el_input.getProperty('value');

				el_lastParent = el_parent;
			}
		);

		this.writeData('arr_data', arr_dataToStore);
		this.__view.drawAttributeValueFields();
	}
};