(function() {
	
// ### ENTER MODULE NAME HERE ######
var str_moduleName = '__moduleName__';
// #################################

var obj_classdef = 	{
	el_originalInputField: null,

	start: function() {
		this.el_originalInputField = this.__el_container.getElement('input');
		if (typeOf(this.el_originalInputField) !== 'element') {
			console.error('original input field not found.')
		}

		this.__models.main.loadOriginalJsonData();
		this.initializeGui();
	},

	initializeGui: function() {
		var el_mainGui = this.tplPure({
			name: 'main'
		});

		el_mainGui.replaces(this.el_originalInputField);

		this.__autoElements.main.btn_addRow.addEvent(
			'click',
			this.addRow.bind(this)
		);

		this.drawAttributeValueFields();
	},

	drawAttributeValueFields: function() {
		if (typeOf(this.__autoElements.attributeValueAssignment) !== 'null') {
			this.__autoElements.attributeValueAssignment = null;
		}

		this.tplReplace(
			{
				name: 'attributeValueAssignment',
				parent: this.__autoElements.main.attributeValueAssignment
			},
			null,
			true
		);

		this.initializeFields();
	},

	initializeFields: function() {
		if (typeOf(this.__autoElements.attributeValueAssignment.assignmentInput) !== 'elements') {
			return;
		}
		this.__autoElements.attributeValueAssignment.assignmentInput.addEvent(
			'change',
			this.updateStoredData.bind(this)
		);

		/*
		 * The following events can not be added to the whole element list but instead has to be added
		 * to each element individually because we want to pass the element as an attribute to the callback function
		 */
		Array.each(
			this.__autoElements.attributeValueAssignment.btn_copyRow,
			function(el_btn_copyRow) {
				el_btn_copyRow.addEvent(
					'click',
					this.copyRow.bind(this, el_btn_copyRow)
				);
			}.bind(this)
		);

		Array.each(
			this.__autoElements.attributeValueAssignment.btn_delRow,
			function(el_btn_delRow) {
				el_btn_delRow.addEvent(
					'click',
					this.delRow.bind(this, el_btn_delRow)
				);
			}.bind(this)
		);

		Array.each(
			this.__autoElements.attributeValueAssignment.btn_rowUp,
			function(el_btn_rowUp) {
				el_btn_rowUp.addEvent(
					'click',
					this.rowUp.bind(this, el_btn_rowUp)
				);
			}.bind(this)
		);

		Array.each(
			this.__autoElements.attributeValueAssignment.btn_rowDown,
			function(el_btn_rowDown) {
				el_btn_rowDown.addEvent(
					'click',
					this.rowDown.bind(this, el_btn_rowDown)
				);
			}.bind(this)
		);
	},

	addRow: function() {
		if (this.__models.main.addDataRow()) {
			this.drawAttributeValueFields();
		}
	},

	copyRow: function(el_buttonClicked) {
		if (this.__models.main.copyDataRow(this.getFieldRowKeyForElement(el_buttonClicked))) {
			this.drawAttributeValueFields();
		}
	},

	delRow: function(el_buttonClicked) {
		if (this.__models.main.deleteDataRow(this.getFieldRowKeyForElement(el_buttonClicked))) {
			this.drawAttributeValueFields();
		}
	},

	rowUp: function(el_buttonClicked) {
		if (this.__models.main.moveDataRowUp(this.getFieldRowKeyForElement(el_buttonClicked))) {
			this.drawAttributeValueFields();
		}
	},

	rowDown: function(el_buttonClicked) {
		if (this.__models.main.moveDataRowDown(this.getFieldRowKeyForElement(el_buttonClicked))) {
			this.drawAttributeValueFields();
		}
	},

	getFieldRowKeyForElement: function(el) {
		var int_key = null;
		var el_parentFieldsContainer = el.getParent('.fields-container');
		if (typeOf(el_parentFieldsContainer) !== 'element') {
			return int_key;
		}
		return parseInt(el_parentFieldsContainer.getProperty('data-misc-field-row-key'), 10);
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