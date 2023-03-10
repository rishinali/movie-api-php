<?php 
header('Content-Type: application/json; charset=utf-8');
$movieId = $_GET['movieId'];
$url = "http://www.omdbapi.com/?apikey=278b882&i=".$movieId;
$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($client);
echo $response;
?>