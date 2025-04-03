<?php
//Harshika Agrawal, IT202 & 004, Internet Applications, Phase 2, ha542@njit.edu
?>

<?php
error_log("\$_POST " . print_r($_POST, true));
include("playboxcategory.php");
$categoryID = $_POST['PlayboxCategoryID'];
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

?>
