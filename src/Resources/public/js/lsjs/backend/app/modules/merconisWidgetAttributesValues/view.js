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
	},

	initializeGui: function() {
		this.tplReplace({
			name: 'main'
		});

		this.updateAttributeValueAssignmentFields();
	},

	updateAttributeValueAssignmentFields: function() {
		this.tplReplace({
			name: 'attributeValueAssignment',
			parent: this.__autoElements.main.attributeValueAssignment
		});
	}
};

lsjs.addViewClass(str_moduleName, obj_classdef);

})();