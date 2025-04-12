<!-- HARSHIKA AGRAWAL
28 FEB 2025
IT202 - 004
PHASE 1: LOGIN AND LOGOUT -->

<?php
require_once('database.php');
$emailAddress =  htmlspecialchars($_POST['emailAddress']);
$password = $_POST['password'];
if (filter_var ($emailAddress, FILTER_VALIDATE_EMAIL)) {
   $query = "SELECT firstName, lastName, pronouns FROM playBoxManagers " .
         "WHERE emailAddress = ? AND password = SHA2(?,256)";
   $db = getDB();
   $stmt = $db->prepare($query);
   $stmt->bind_param("ss", $emailAddress, $password);
   $stmt->execute();
   $stmt->bind_result($firstName, $lastName, $pronouns);
   $fetched = $stmt->fetch();
   $name = "$firstName $lastName";
   if ($fetched && isset($name)) {
      echo "<h2>Welcome to PlayBox: A Toys and Games Shop, $name</h2>\n";
      $_SESSION['login'] = $firstName;
      $_SESSION['emailAddress'] = $emailAddress;
      $_SESSION['firstName'] = $firstName;
      $_SESSION['lastName'] = $lastName;
      $_SESSION['pronouns'] = $pronouns;

      header("Location: index.php");
   } else {
      echo "<h2>Sorry, login incorrect for PlayBox.</h2>\n";
      echo "<a href=\"index.php\">Please try again</a>\n";
   }
} else {
   echo "<h2>Please enter a valid email address</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}
?>
