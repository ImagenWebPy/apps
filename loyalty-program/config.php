<?php

function getHost() {
    $host = $_SERVER['HTTP_HOST'];
    return $host;
}

$host = getHost();
switch ($host) {
    case 'imagenwebhq.com':
        define('URL', 'https://www.imagenwebhq.com/appsfb/loyalty-program/');
        define('DB_USER', 'root');
        define('DB_PASS', '2544386');
        define('DB_NAME', 'intranet');
        break;
    case 'localhost':
        define('URL', 'http://localhost/apps/loyalty-program/');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'loyalty');
        break;
}
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
