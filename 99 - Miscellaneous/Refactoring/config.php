<?php
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWORD', '');
define('DB_HOST', '');

define('DEFAULT_ADMIN_USERNAME', 'admin');
define('DEFAULT_ADMIN_PASSWORD', 'admin');

define('SITE_TITLE', 'PhpStorm Simple CMS');
if (!defined('SITE_PATH')) {
    define('SITE_PATH', dirname(realpath(__FILE__)));

    set_include_path(get_include_path() . PATH_SEPARATOR . SITE_PATH);
}
