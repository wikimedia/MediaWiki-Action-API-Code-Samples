// This file is autogenerated. See modules.json and autogenerator.py for details

/*
	get_feed_recent_changes.js

	MediaWiki API Demos
	Demo of `Feedrecentchanges` module: Show recent changes as an RSS feed.

	MIT License
*/

var params = {
		action: 'feedrecentchanges',
		format: 'json'
	},
	api = new mw.Api();

api.get( params ).done( function ( data ) {
	console.log( data );
} );