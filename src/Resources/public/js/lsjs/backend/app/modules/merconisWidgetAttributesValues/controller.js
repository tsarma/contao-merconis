(function() {

// ### ENTER MODULE NAME HERE ######
var str_moduleName = '__moduleName__';
// #################################

var obj_classdef = {
	start: function() {
	}
};

lsjs.addControllerClass(str_moduleName, obj_classdef);

lsjs.__moduleHelpers[str_moduleName] = {
	self: null,

	start: function(obj_args, obj_options) {
		obj_args = typeOf(obj_args) === 'object' ? obj_args : {};
		obj_options = typeOf(obj_options) === 'object' ? obj_options : {};

		var obj_argsDefault = {
			__name: str_moduleName
		};

		this.self = lsjs.createModule(Object.merge(obj_argsDefault, obj_args));

		if (typeOf(obj_options) === 'object' && this.self.__models.options !== undefined && this.self.__models.options !== null) {
			this.self.__models.options.set(obj_options);
		}
	}
};

})();