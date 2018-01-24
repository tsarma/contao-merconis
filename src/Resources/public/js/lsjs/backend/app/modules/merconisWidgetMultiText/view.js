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

		/*
		 * If the original input field has an options attribute, we read these attributes and store them in the options model
		 */
		if (this.el_originalInputField.hasAttribute('data-merconis-widget-options')) {
			this.__models.options.set(JSON.parse(this.el_originalInputField.getAttribute('data-merconis-widget-options')), false);
		}

		this.__models.main.loadOriginalJsonData();
		this.initializeGui();
	},

	initializeGui: function() {
		if (typeOf(this.__models.options.data.cssClass) === 'string' && this.__models.options.data.cssClass != '') {
			this.__el_container.addClass(this.__models.options.data.cssClass);
		}

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
		if (typeOf(this.__autoElements.valueAssignment) !== 'null') {
			this.__autoElements.valueAssignment = null;
		}

		this.tplReplace(
			{
				name: 'valueAssignment',
				parent: this.__autoElements.main.valueAssignment
			},
			null,
			true
		);

		this.initializeFields();
	},

	initializeFields: function() {
		if (typeOf(this.__autoElements.valueAssignment.assignmentInput) !== 'elements') {
			return;
		}

		/*
		 * The following events can not be added to the whole element list but instead has to be added
		 * to each element individually because we want to pass the element as an attribute to the callback function
		 */
		Array.each(
			this.__autoElements.valueAssignment.assignmentInput,
			function(el_assignmentInput) {
				el_assignmentInput.addEvent(
					'change',
					this.updateStoredData.bind(this, el_assignmentInput)
				);
			}.bind(this)
		);

		Array.each(
			this.__autoElements.valueAssignment.btn_copyRow,
			function(el_btn_copyRow) {
				el_btn_copyRow.addEvent(
					'click',
					this.copyRow.bind(this, el_btn_copyRow)
				);
			}.bind(this)
		);

		Array.each(
			this.__autoElements.valueAssignment.btn_delRow,
			function(el_btn_delRow) {
				el_btn_delRow.addEvent(
					'click',
					this.delRow.bind(this, el_btn_delRow)
				);
			}.bind(this)
		);

		Array.each(
			this.__autoElements.valueAssignment.btn_rowUp,
			function(el_btn_rowUp) {
				el_btn_rowUp.addEvent(
					'click',
					this.rowUp.bind(this, el_btn_rowUp)
				);
			}.bind(this)
		);

		Array.each(
			this.__autoElements.valueAssignment.btn_rowDown,
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

	updateStoredData: function(el_inputFieldChanged) {
		var int_rowNumber_lastChange = parseInt(el_inputFieldChanged.getProperty('data-misc-row-number'), 10);
		var int_fieldNumber_lastChange = parseInt(el_inputFieldChanged.getProperty('data-misc-field-number'), 10);

		/*
		 * The update might lead to the value fields displaying different options than before because
		 * the options of the value field need to belong to the selected attribute.
		 * Therefore we perform a second update to make sure that the displayed value selection will
		 * actually be stored.
		 */
		this.__models.main.updateData(this.__autoElements.valueAssignment.assignmentInput);
		this.__models.main.updateData(this.__autoElements.valueAssignment.assignmentInput);

		var el_toFocus = this.__el_container.getElement('[data-lsjs-element="assignmentInput"][data-misc-row-number="' + int_rowNumber_lastChange + '"][data-misc-field-number="' + (int_fieldNumber_lastChange + 1) + '"]');
		if (typeOf(el_toFocus) !== 'element') {
			el_toFocus = this.__el_container.getElement('[data-lsjs-element="assignmentInput"][data-misc-row-number="' + (int_rowNumber_lastChange + 1) + '"][data-misc-field-number="' + 0 + '"]');
		}
		if (typeOf(el_toFocus) !== 'element') {
			el_toFocus = this.__el_container.getElement('[data-lsjs-element="assignmentInput"][data-misc-row-number="' + int_rowNumber_lastChange + '"][data-misc-field-number="' + int_fieldNumber_lastChange + '"]');
		}

		el_toFocus.select();
	}
};

lsjs.addViewClass(str_moduleName, obj_classdef);

})();