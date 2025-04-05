<?
/* HARSHIKA AGRAWAL
28 FEB 2025
IT202 - 004 */
?>

<?php
session_start();
include("playboxcategory.php");
include("playboxproduct.php");
?>
<!DOCTYPE html>
<html>
<head><title>PlayBox: A Toys and Games Shop</title></head>
<body>
   <header>
       <?php include("header.inc.php"); ?>
   </header>
   <section style="height: 425px;">
       <nav style="float: left; height: 100%;">
           <?php include("nav.inc.php"); ?>
       </nav>
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
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>


<!--Open http://localhost:3000/ in browser.
    Start php server>> php -S localhost:3000 -t website -->