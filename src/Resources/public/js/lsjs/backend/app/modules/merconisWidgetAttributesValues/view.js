(function() {
	
// ### ENTER MODULE NAME HERE ######
var str_moduleName = '__moduleName__';
// #################################

var obj_classdef = 	{
	el_originalInputField: null,
	el_originalLabel: null,
	str_transferInputFieldName: '',
	str_label: '',

	start: function() {
		this.el_originalInputField = this.__el_container.getElement('input');
		if (typeOf(this.el_originalInputField) !== 'element') {
			console.error('original input field not found.')
		}

		this.str_transferInputFieldName = this.el_originalInputField.getProperty('name');

		this.el_originalLabel = this.__el_container.getElement('label');
		if (typeOf(this.el_originalLabel) === 'element') {
			this.str_label = this.el_originalLabel.getProperty('html');
		}

		this.__models.main.loadOriginalJsonData();
		this.initializeGui();
	},

	initializeGui: function() {
		this.tplReplace({
			name: 'main'
		});

		this.drawAttributeValueFields();
	},

	drawAttributeValueFields: function() {
		if (typeOf(this.__autoElements.attributeValueAssignment) !== 'null') {
			this.__autoElements.attributeValueAssignment = null;
		}

		this.tplReplace({
			name: 'attributeValueAssignment',
			parent: this.__autoElements.main.attributeValueAssignment
		});

		this.initializeFields();
	},

	initializeFields: function() {
		this.__autoElements.attributeValueAssignment.assignmentInput.addEvent(
			'change',
			this.updateStoredData.bind(this)
		);
	},

	updateStoredData: function() {
		/*
		 * The update might lead to the value fields displaying different options than before because
		 * the options of the value field need to belong to the selected attribute.
		 * Therefore we perform a second update to make sure that the displayed value selection will
		 * actually be stored.
		 */
		this.__models.main.updateData(this.__autoElements.attributeValueAssignment.assignmentInput);
		this.__models.main.updateData(this.__autoElements.attributeValueAssignment.assignmentInput);
	}
};

lsjs.addViewClass(str_moduleName, obj_classdef);

})();