
<!-- HARSHIKA AGRAWAL
28 FEB 2025
IT202 - 004
PHASE 1: LOGIN AND LOGOUT -->

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>PlayBox: A Toys and Games Shop</title></head>
<body>
   <section id="container">
       <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
</body>
</html>


<!--Open http://localhost:3000/ in browser.
    Start php server>> php -S localhost:3000 -t website -->