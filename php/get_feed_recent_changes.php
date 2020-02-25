<?php

//This file is autogenerated. See modules.json and autogenerator.py for details

/*
    get_feed_recent_changes.php

    MediaWiki API Demos
    Demo of `Feedrecentchanges` module: Show recent changes as an RSS feed.

    MIT License
*/

$endPoint = "https://en.wikipedia.org/w/api.php";
$params = [
    "action" => "feedrecentchanges",
    "format" => "json"
];

$url = $endPoint . "?" . http_build_query( $params );

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$output = curl_exec( $ch );
curl_close( $ch );

var_dump( $output );