<?php

//This file is autogenerated. See modules.json and autogenerator.py for details

/*
    get_pagepropnames.php

    MediaWiki API Demos
    Demo of `Pagepropnames` module: List page property names on the given wiki.

    MIT License
*/

$endPoint = "https://en.wikipedia.org/w/api.php";
$params = [
    "action" => "query",
    "list" => "pagepropnames",
    "format" => "json"
];

$url = $endPoint . "?" . http_build_query( $params );

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$output = curl_exec( $ch );
curl_close( $ch );

$result = json_decode( $output, true );

foreach( $result["query"]["pagepropnames"] as $k => $v ) {
    echo( $v["propname"] . "\n" );
}