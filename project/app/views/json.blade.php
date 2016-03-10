<?php 
header('Cache-Control: no-cache, must-revalidate');
header('Content-Type: application/json;charset=utf-8');
header('Accept: application/json');
echo stripslashes(json_encode($data));
?>