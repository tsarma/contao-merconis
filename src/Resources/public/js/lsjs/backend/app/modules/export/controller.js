(function() {
	
// ### ENTER MODULE NAME HERE ######
var str_moduleName = '__moduleName__';
// #################################

var obj_classdef = {
	start: function() {
	},
	
	ajaxReloadSavedExportFilesList: function() {
		if (typeOf(this.__view.__autoElements.main.savedExportFilesList) !== 'elements') {
			return;
		}

		lsjs.loadingIndicator.__controller.show();

		var el_toReload = this.__view.__autoElements.main.savedExportFilesList[0];

		new Request.cajax({
			url: document.location.href,
			method: 'get',
			noCache: true,
			data: 'cajaxRequestData[requestedElementID]=' + el_toReload.getProperty('id'),
			onComplete: function () {
				lsjs.loadingIndicator.__controller.hide();
				this.__view.reinitializeDeleteFileButtons();
			}.bind(this)
		}).send();
	},

	writeExportFile: function(int_currentSegment, int_numSegmentsTotal) {
		int_currentSegment = int_currentSegment !== undefined && int_currentSegment !== null ? int_currentSegment : 0;
		int_numSegmentsTotal = int_numSegmentsTotal !== undefined && int_numSegmentsTotal !== null ? int_numSegmentsTotal : 0;

		lsjs.loadingIndicator.__controller.show(
				this.__models.lang.readData('tl_ls_shop_export.ajax.pleaseWait_write')
			+ 	(
					int_numSegmentsTotal ? (' (' + this.__models.lang.readData('tl_ls_shop_export.ajax.partXOfY').substitute({currentSegment: int_currentSegment, numSegmentsTotal: int_numSegmentsTotal}) + ')') : '')
				);

		lsjs.apiInterface.request({
			str_resource: 'writeExportFile',
			obj_params: {
				exportId: this.__view.__autoElements.main.btn_createExport[0].getProperty('data-merconis-exportId')
			},
			func_onSuccess: function(obj_data, obj_request) {
				this.ajaxReloadSavedExportFilesList();

				if (obj_request.getHeader('merconisExport-useSegmentation') == 'no' || obj_request.getHeader('merconisExport-isLastSegment') == 'yes') {
					lsjs.loadingIndicator.__controller.overwriteText(
							this.__models.lang.readData('tl_ls_shop_export.ajax.pleaseWait_write')
						+	(obj_request.getHeader('merconisExport-numSegmentsTotal') ? (' (' + this.__models.lang.readData('tl_ls_shop_export.ajax.partXOfY').substitute({currentSegment: obj_request.getHeader('merconisExport-currentSegment'), numSegmentsTotal: obj_request.getHeader('merconisExport-numSegmentsTotal')}) + ')') : '')
					);

					lsjs.__moduleHelpers.messageBox.open({
						str_msg: this.__models.lang.readData('tl_ls_shop_export.ajax.savedAs').substitute({fileName: obj_data.fileName})
					});
					setTimeout(
						function() {
							lsjs.loadingIndicator.__controller.hide(true);
						},
						1000
					);
				} else {
					lsjs.loadingIndicator.__controller.hide(true);
					this.writeExportFile(obj_request.getHeader('merconisExport-currentSegment'), obj_request.getHeader('merconisExport-numSegmentsTotal'));
				}
			}.bind(this),
			obj_additionalRequestOptions: {
				onFailure: function(obj_request) {
					lsjs.__moduleHelpers.messageBox.open({
						str_msg: this.__models.lang.readData('tl_ls_shop_export.ajax.anErrorOccurred')
					});

					lsjs.loadingIndicator.__controller.hide(true);
				}.bind(this)
			}
		});
	},

	deleteExportFile: function(fileName, bln_confirmed) {
		bln_confirmed = bln_confirmed !== undefined && bln_confirmed ? true : false;

		if (!bln_confirmed) {
			lsjs.__moduleHelpers.messageBox.open({
				str_msg: this.__models.lang.readData('tl_ls_shop_export.ajax.confirmDeleteFile_question').substitute({fileName: fileName}),
				obj_buttons: {
					default: {
						str_label: this.__models.lang.readData('tl_ls_shop_export.ajax.confirmDeleteFile_no')
					},

					cool: {
						str_label: this.__models.lang.readData('tl_ls_shop_export.ajax.confirmDeleteFile_yes'),
						func_callback: function () {
							this.deleteExportFile(fileName, true);
						}
						.bind(this)
					}
				}
			});

			return;
		}

		lsjs.loadingIndicator.__controller.show(this.__models.lang.readData('tl_ls_shop_export.ajax.pleaseWait_delete'));
		lsjs.apiInterface.request({
			str_resource: 'deleteExportFile',
			obj_params: {
				exportId: this.__view.__autoElements.main.btn_createExport[0].getProperty('data-merconis-exportId'),
				fileName: fileName
			},
			func_onSuccess: function(obj_data) {
				this.ajaxReloadSavedExportFilesList();
				lsjs.loadingIndicator.__controller.hide();
				lsjs.__moduleHelpers.messageBox.open({
					str_msg: this.__models.lang.readData('tl_ls_shop_export.ajax.fileDeleted').substitute({fileName: obj_data.fileName})
				});
			}.bind(this),
			obj_additionalRequestOptions: {
				onFailure: function(obj_request) {
					lsjs.__moduleHelpers.messageBox.open({
						str_msg: this.__models.lang.readData('tl_ls_shop_export.ajax.anErrorOccurred')
					});

					lsjs.loadingIndicator.__controller.hide(true);
				}.bind(this)
			}
		});
	}

};

lsjs.addControllerClass(str_moduleName, obj_classdef);

lsjs.__moduleHelpers[str_moduleName] = {
	self: null,

	start: function(obj_args, obj_options) {
		obj_args = typeOf(obj_args) === 'object' ? obj_args : {};
		obj_options = typeOf(obj_options) === 'object' ? obj_options : {};

		/*
		 * Only allow one single instance of this module to be started!
		 *

		if (this.self !== null) {
			console.error('module ' + str_moduleName + ' has already been started');
			return;
		}

		/* */

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