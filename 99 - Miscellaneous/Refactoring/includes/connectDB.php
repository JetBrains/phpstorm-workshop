<?php
require_once SITE_PATH . '/functions/database.php';

// Create database connection
$databaseConnection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($databaseConnection->connect_error) {
    die("Database selection failed: " . $databaseConnection->connect_error);
}

// Create tables if needed.
if (!defined('IN_TEST') || IN_TEST == false) {
    prep_DB_content();
}
