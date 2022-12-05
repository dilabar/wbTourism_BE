/**
 * @license Copyright (c) 2003-2022, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#009688b0';
	config.toolbarGroups = [
		// { 'name': 'document', 'groups': [ 'mode', 'doctools' ] },
		// { 'name': 'clipboard', 'groups': [ 'clipboard', 'undo' ] },
		// { 'name': 'editing', 'groups': [ 'find', 'selection', 'spellchecker' ] },
		{ 'name': 'paragraph', 'groups': [ 'list', 'indent', 'align' ] },
		// '/',
		{ 'name': 'basicstyles', 'groups': [ 'basicstyles', ] },
		// '/',
		{ 'name': 'links' },
		{ 'name': 'insert' },
		// '/',
		{ 'name': 'styles' },
		{ 'name': 'colors' },
		{ 'name': 'tools' },
		{ 'name': 'others' }
		
	   ];
	  
	config.removeButtons ='Image,Flash,Iframe,Table,Anchor,Smiley,Strike,Specialchar,Superscript,Subscript,Font,Styles'
		
};
