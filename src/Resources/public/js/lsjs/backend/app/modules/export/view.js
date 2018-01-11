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

		this.registerElements(this.__el_container, 'main', true);

		if (typeOf(this.__autoElements.main.btn_createExport) === 'elements') {
			this.__autoElements.main.btn_createExport[0].addEvent('click', function () {
				self.__controller.writeExportFile();
			});
		}

		this.initializeDeleteFileButtons();
	},

	initializeDeleteFileButtons: function() {
		var self = this;

		if (typeOf(this.__autoElements.main.btn_deleteFile) === 'elements') {
			this.__autoElements.main.btn_deleteFile.addEvent('click', function () {
				self.__controller.deleteExportFile(this.getSiblings('a')[0].getProperty('html').trim());
			});
		}
	},

	reinitializeDeleteFileButtons: function() {
		delete this.__autoElements.main.btn_deleteFile;
		this.registerElements(this.__el_container, 'main', true, 'btn_deleteFile');
		this.initializeDeleteFileButtons();
	}
};

lsjs.addViewClass(str_moduleName, obj_classdef);

})();