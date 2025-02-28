
<!-- HARSHIKA AGRAWAL
28 FEB 2025
IT202 - 004
PHASE 1: LOGIN AND LOGOUT -->

<?php
session_start();

if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
   unset($_SESSION['emailAddress']);
   unset($_SESSION['firstName']);
   unset($_SESSION['lastName']);
   unset($_SESSION['pronouns']);
}

session_destroy();

header("Location: index.php");
?>
