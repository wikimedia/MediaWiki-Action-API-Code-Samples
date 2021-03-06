// This file is autogenerated. See modules.json and autogenerator.py for details

/*
	templates.js

	MediaWiki API Demos
	Demo of `Templates` module: Get a list of templates used on a page

	MIT License
*/

var params = {
		action: 'query',
		titles: 'Albert Einstein',
		prop: 'templates',
		format: 'json'
	},
	api = new mw.Api();

api.get( params ).done( function ( data ) {
	console.log( data );
} );
