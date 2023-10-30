<?php

$client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'https://deezerdevs-deezer.p.rapidapi.com/track/%7Bid%7D', [
	'headers' => [
		'X-RapidAPI-Host' => 'deezerdevs-deezer.p.rapidapi.com',
		'X-RapidAPI-Key' => 'c5ff962d00msh45a837601fad0dbp1ca058jsne79fda541215',
	],
]);

echo $response->getBody();