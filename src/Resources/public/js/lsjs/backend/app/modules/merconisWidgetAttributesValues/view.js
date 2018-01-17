(function() {
	
// ### ENTER MODULE NAME HERE ######
var str_moduleName = '__moduleName__';
// #################################

var obj_classdef = 	{
	start: function() {
		this.initializeGui();
	},

	initializeGui: function() {
		this.__el_container.setStyle('background-color', '#FFAA00');
		console.log(this.__el_container);
	}
};

lsjs.addViewClass(str_moduleName, obj_classdef);

})();