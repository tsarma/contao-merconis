(function() {
	
// ### ENTER MODULE NAME HERE ######
var str_moduleName = '__moduleName__';
// #################################

var obj_classdef = 	{
	el_originalInputField: null,

	start: function() {
		this.initializeGui();
	},

	initializeGui: function() {
		this.__el_container.setStyle('background-color', '#FFAA00');
		console.log(this.__el_container);

		this.el_originalInputField = this.__el_container.getElement('input');
		if (typeOf(this.el_originalInputField) !== 'element') {
			console.error('original input field not found.')
		}
	}
};

lsjs.addViewClass(str_moduleName, obj_classdef);

})();