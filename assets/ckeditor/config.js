/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	//config.allowedContent = true;
	//config.extraAllowedContent = 'style';
	//config.extraAllowedContent: 'style;*[id,rel](*){*}';
	config.allowedContent = true;
	config.extraPlugins = 'youtube';
	config.autoParagraph = false;
    config.enterMode = CKEDITOR.ENTER_BR;
    config.entities = false;
    CKEDITOR.filter.disabled = true;
};
