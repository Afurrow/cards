<?php
session_start();
require 'vendor/autoload.php';
$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'http://deckofcardsapi.com/api/deck/new/shuffle/?deck_count=1');
$response_data = json_decode($response->getBody(), TRUE);
$response2 = $client->request('GET', 'https://deckofcardsapi.com/api/deck/'.$response_data['deck_id'].'/draw/?count=2');
$response_data2 = json_decode($response2->getBody(), TRUE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>