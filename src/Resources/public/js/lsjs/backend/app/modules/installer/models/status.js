var obj_classdef_model = {
	name: 'status',
	
	data: {
        'str_currentInstallationStatus': null
	},

	start: function() {
		this.loadData();
	},

	loadData: function() {
        /*
		 * Every model needs to call the "this.__module.onModelLoaded()" method
		 * when its data is completely loaded and available or, since in some
		 * cases data is loaded later, when the model is ready for the view
		 * to be rendered.
		 */
		/*
		 * In this case we pass the onModelLoaded function as a callback
		 * to the model specific function "getCurrentStatus".
		 */
        this.getCurrentStatus(this.__module.onModelLoaded.bind(this.__module));
	},
	
	getCurrentStatus: function(func_callback) {
		lsjs.loadingIndicator.__controller.show();

		lsjs.apiInterface.request({
			str_resource: 'merconisInstaller_getStatus',
			obj_params: {
				'ls_api_key': lsjs.__appHelpers.merconisBackendApp.obj_config.API_KEY
			},
			func_onSuccess: function(obj_data) {
				this.data = obj_data;
				
				// console.log('this.data', this.data);

                if (typeOf(func_callback) === 'function') {
                    func_callback();
				}
				
				lsjs.loadingIndicator.__controller.hide();
			}.bind(this)
		});
	}
};