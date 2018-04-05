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

		if (typeOf(this.__autoElements.main.btn_test) === 'element') {
            this.__autoElements.main.btn_test.addEvent(
                'click',
                function() {
                    self.__controller.callDashboardResource_test01();
                }
            );
		}

		if (typeOf(this.__autoElements.main.btn_themeExporterTest) === 'element') {
            this.__autoElements.main.btn_themeExporterTest.addEvent(
                'click',
                function() {
                    self.__controller.callThemeExporter_test01();
                }
            );
		}
	}
};

lsjs.addViewClass(str_moduleName, obj_classdef);

})();