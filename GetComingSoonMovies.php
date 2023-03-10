<?php
header('Content-Type: application/json; charset=utf-8');
$str = file_get_contents('./response/coming_soon.json');
echo $str;
?>