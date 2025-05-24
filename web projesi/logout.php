<?php session_start(); /* Starts the session */
$filename = 'legal';
if (unlink($filename)) {
} else {
}
session_destroy(); /* Destroy started session */
header("location:login.php");
exit;