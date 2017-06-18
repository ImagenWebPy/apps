<?php

function getHost() {
    $host = $_SERVER['HTTP_HOST'];
    return $host;
}

$host = getHost();
switch ($host) {
    case 'www.imagenwebhq.com':
        define('URL', 'https://www.imagenwebhq.com/appsfb/loyalty-program/');
        define('DB_USER', 'raulimag_garden');
        define('DB_PASS', 'DIXS8XMd*bZ)D5lV');
        define('DB_NAME', 'raulimag_loyalty');
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
