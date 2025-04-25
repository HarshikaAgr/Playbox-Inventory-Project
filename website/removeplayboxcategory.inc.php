<?php
error_log("\$_POST " . print_r($_POST, true));
//include("playboxcategory.php");
require_once("playboxcategory.php");
if (isset($_SESSION['login'])) {
   if (!isset($_POST['categoryID']) or (!is_numeric($_POST['categoryID']))) {
  ?>
         <h2>You did not select a valid categoryID to delete.</h2>
         <a href="index.php?content=listplayboxcategories">List Categories</a>
  <?php
} else {
   $categoryID = $_POST['categoryID'];
   $category = Category::findCategory($categoryID);
/* if($category){
   $result = $category->removeCategory();
   if ($result)
      echo "<h2>Category $categoryID removed</h2>\n";
   else
      echo "<h2>Problem removing category $categoryID</h2>\n";
      error_log("Error removing category: " . $stmt->error); 
   }
else{
   echo "<h2>Category $categoryID not found</h2>\n";
} */
   $result = $category->removeCategory();
   if ($result)
      echo "<h2>Category $categoryID removed</h2>\n";
   else
      echo "<h2>Sorry, problem removing category $categoryID</h2>\n";
   }
} else {
   echo "<H2>Please log in first</h2>\n";
}
?>
