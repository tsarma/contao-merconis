(function() {
	var classdef_app = {
		obj_config: {},
		
		obj_references: {},
		
		initialize: function() {
			this.start();
		}
		,
		
		start: function() {
			lsjs.apiInterface.str_apiUrl = 'contao/main.php?do=be_mod_ls_apiReceiver';
			/*
			 * Create/start modules for autostart components
			 */
			Array.each($$('[data-merconis-component-autostart]'), function(el_autostartComponentContainer) {
				var str_moduleName = el_autostartComponentContainer.getProperty('data-merconis-component-autostart');
				lsjs.__moduleHelpers[str_moduleName].start({
					__el_container: el_autostartComponentContainer
				});
			});

			/*
			 * TESTS ->
			 *
			lsjs.__moduleHelpers.ajaxTest.start();
			/*
			 * <- TESTS
			 */
		}
	};
	
	var class_app = new Class(classdef_app);
	
	window.addEvent('domready', function() {
		lsjs.__appHelpers.merconisBackendApp = new class_app();
	});
})();