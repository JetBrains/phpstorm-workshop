<?php
session_start();
$_SESSION = array();
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 300, '/');
}
session_destroy();
header("Location: logon.php");
exit;
