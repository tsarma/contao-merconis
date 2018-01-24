var obj_classdef_model = {
	name: 'options',

	data: {},

	start: function() {
		/*
		 * Initializing the options in the data object with default values which
		 * can later be overwritten when the "set" method is called with other options
		 */
		this.data = {
			arr_fields: [
				{
					'type': 'text',
					'label': 'Text field example'
				},
				{
					'type': 'textarea',
					'label': 'Textarea example'
				},
				{
					'type': 'select',
					'label': 'Select field example',
					'options': [
						{
							"value": "Value 1",
							"label": "Label 1"
						},
						{
							"value": "Value 2",
							"label": "Label 2"
						}
					]
				}
			],

			cssClass: ""
		};
	},

	set: function(obj_options, bln_callOnModelLoaded) {
		bln_callOnModelLoaded = bln_callOnModelLoaded !== undefined && bln_callOnModelLoaded !== null ? Boolean(bln_callOnModelLoaded) : true;

		Object.merge(this.data, obj_options);

		if (bln_callOnModelLoaded) {
			this.__module.onModelLoaded();
		}
	}
};