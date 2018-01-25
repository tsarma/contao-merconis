var obj_classdef_model = {
	name: 'config',
	
	data: {
		obj_allAttributesAndValues: {}
	},

	start: function() {
		lsjs.apiInterface.request({
			str_resource: 'backend_loadAttributesAndValues',
			obj_params: {},
			func_onSuccess: function(obj_data, obj_request) {
				this.data.obj_allAttributesAndValues = obj_data;
				this.__module.onModelLoaded();
			}.bind(this),
			obj_additionalRequestOptions: {
				onFailure: function(obj_request) {
					lsjs.__moduleHelpers.messageBox.open({
						str_msg: 'request failed'
					});

					lsjs.loadingIndicator.__controller.hide(true);
				}.bind(this)
			}
		});
	},

	getAttributeObjectForId: function(int_id) {
		var obj_attribute = null;

		var obj_filtered = this.data.obj_allAttributesAndValues.filter(
			function(obj_filterValue) {
				return obj_filterValue.id == int_id;
			}
		);

		if (typeOf(obj_filtered[0]) === 'object') {
			obj_attribute = obj_filtered[0];
		}

		return obj_attribute;
	}
};