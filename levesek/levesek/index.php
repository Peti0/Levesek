<?php
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        require_once 'levesek/getlevesek.php';
        break;
    case 'POST':
        require_once 'levesek/postlevesek.php';
        break;
    case 'DELETE':
        require_once 'levesek/deletelevesek.php';
        break;
    case 'PUT':
        require_once 'levesek/putlevesek.php';
        break;
    default:
        break;
}