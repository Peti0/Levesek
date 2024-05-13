<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
$kereSzoveg = explode('/', $_SERVER['QUERY_STRING']);
if ($kereSzoveg[0]=== "levesek") {
    require_once 'levesek/index.php';
} else {
    http_response_code(405);
    $errorJson = array('message' =>'Nincs ilyen Adatbázis');
    return json_encode($errorJson);
}