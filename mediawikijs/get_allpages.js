// This file is autogenerated. See modules.json and autogenerator.py for details

/*
	get_allpages.js

	MediaWiki API Demos
	Demo of `Allpages` module: Get all pages whose title contains the text "Jungle,"
	in whole or part.

	MIT License
*/

var params = {
		action: 'query',
		format: 'json',
		list: 'allpages',
		apfrom: 'jungle'
	},
	api = new mw.Api();

api.get( params ).done( function ( data ) {
	var pages = data.query.allpages,
		p;
	for ( p in pages ) {
		console.log( pages[ p ].title );
	}
} );
