<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/sokmengstore/admin/');
define('HTTP_CATALOG', 'http://localhost/sokmengstore/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/sokmengstore/admin/');
define('HTTPS_CATALOG', 'http://localhost/sokmengstore/');


// DIR
define('DIR_APPLICATION', '/var/www/html/sokmengstore/admin/');
define('DIR_SYSTEM', '/var/www/html/sokmengstore/system/');
define('DIR_IMAGE', '/var/www/html/sokmengstore/image/');
define('DIR_STORAGE', '/var/www/html/sokmengstore/storage/');
define('DIR_CATALOG', '/var/www/html/sokmengstore/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'admin@168');
define('DB_DATABASE', 'opencart-dev');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');