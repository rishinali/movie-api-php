<?php 
header('Content-Type: application/json; charset=utf-8');
$keyword = $_GET['keyword'];
$url = "http://www.omdbapi.com/?apikey=278b882&t=".$keyword;
$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($client);
echo $response;
?>