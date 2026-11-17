<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$scriptName = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$path = trim(str_replace($scriptName, '', $uri), '/');

$parts = explode('?', $path);
$page = $parts[0] == '' ? 'beranda' : $parts[0];

require_once __DIR__ . '/../routes/web.php';
