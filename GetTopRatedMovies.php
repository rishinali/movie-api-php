<?php
header('Content-Type: application/json; charset=utf-8');
$str = file_get_contents('./response/top_rated.json');
echo $str;
?>