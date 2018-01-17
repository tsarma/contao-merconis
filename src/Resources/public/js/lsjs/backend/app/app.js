(function() {
	var classdef_app = {
		obj_config: {},
		
		obj_references: {},
		
		initialize: function() {
			this.start();
		}
		,
		
		start: function() {
			lsjs.apiInterface.str_apiUrl = 'contao?do=be_mod_ls_apiReceiver';
			/*
			 * Create/start modules for autostart components
			 */

			// using data attributes
			Array.each($$('[data-merconis-component-autostart]'), function(el_autostartComponentContainer) {
				var str_moduleName = el_autostartComponentContainer.getProperty('data-merconis-component-autostart');
				lsjs.__moduleHelpers[str_moduleName].start({
					__el_container: el_autostartComponentContainer
				});
			});

			// using classes
			Array.each($$('[class*="merconis-component-autostart"]'), function(el_autostartComponentContainer) {
				var str_completeClassString = el_autostartComponentContainer.getProperty('class');
				if (typeOf(str_completeClassString) !== 'string') {
					return;
				}

				var arr_relevantClassNames = el_autostartComponentContainer.getProperty('class').match(/merconis-component-autostart--([^\s]*)/g);
				if (typeOf(arr_relevantClassNames) !== 'array') {
					return;
				}

				Array.each(
					arr_relevantClassNames,
					function(str_class) {
						var arr_moduleNameMatch = str_class.match(/merconis-component-autostart--([^\s]*)/);
						if (typeOf(arr_moduleNameMatch) !== 'array') {
							return;
						}

						var str_moduleName = arr_moduleNameMatch[1];
						lsjs.__moduleHelpers[str_moduleName].start({
							__el_container: el_autostartComponentContainer
						});
					}
				)
			});
		}
	};
	
	var class_app = new Class(classdef_app);
	
	window.addEvent('domready', function() {
		lsjs.__appHelpers.merconisBackendApp = new class_app();
	});
})();