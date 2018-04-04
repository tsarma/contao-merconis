(function() {
	
// ### ENTER MODULE NAME HERE ######
var str_moduleName = '__moduleName__';
// #################################

var obj_classdef = 	{
	start: function() {
		this.initializeGui();
	},

	initializeGui: function() {
		var self = this;

		var el_mainGui = this.tplReplace({
			parent: this.__el_container,
			name: 'main'
		});

		if (typeOf(this.__autoElements.main.btn_installStep01) === 'element') {
            this.__autoElements.main.btn_installStep01.addEvent(
                'click',
                function() {
                    self.__controller.callInstallationResource_step01();
                }
            );
		}
	}
};

lsjs.addViewClass(str_moduleName, obj_classdef);

})();