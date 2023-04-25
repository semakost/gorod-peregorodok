<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);;

if($uri === '/') {
    require_once $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'temp' . DIRECTORY_SEPARATOR . 'main.php';
}
elseif($uri === '/admin/') {
    require_once $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'index.html';
}
else
    require 'pages/error404.php';
