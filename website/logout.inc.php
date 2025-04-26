<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
   unset($_SESSION['emailAddress']);
   unset($_SESSION['firstName']);
   unset($_SESSION['lastName']);
   unset($_SESSION['pronouns']);
   session_destroy();
}
if (headers_sent()) {
   echo "Click <a href=\"index.php?content=logout\"><strong>here</strong></a> to logout.";
} else {
   header("Location: index.php");
}
//session_destroy();
?>
