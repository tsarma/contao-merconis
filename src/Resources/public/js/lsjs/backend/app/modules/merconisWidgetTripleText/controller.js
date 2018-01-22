(function() {
	
// ### ENTER MODULE NAME HERE ######
var str_moduleName = '__moduleName__';
// #################################

/*
 * This module isn't actually a real module but instead only provides a special caller for the module
 * "merconisWidgetMultiText" with predefined options.
 *
 * Therefore adding the controller class isn't necessary but we still keep the code in here as a reminder
 * of how a regular controller script is constructed in case someone would use this controller as some kind
 * of template when building a new module.
 */
var obj_classdef = {
	start: function() {
	}
};

lsjs.addControllerClass(str_moduleName, obj_classdef);

lsjs.__moduleHelpers[str_moduleName] = {
	self: 'ulf',

	start: function(obj_args) {
		obj_args = typeOf(obj_args) === 'object' ? obj_args : {};

		var obj_argsDefault = {
			__name: 'merconisWidgetMultiText'
		};

		lsjs.__moduleHelpers['merconisWidgetMultiText'].start(
			Object.merge(obj_argsDefault, obj_args),
			{
				int_numValuesPerRow: 3
			}
		);
	}
};

})();