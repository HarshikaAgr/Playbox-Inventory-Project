<?php
//Harshika Agrawal, IT202 & 004, Internet Applications, Phase 2, ha542@njit.edu
?>

<?php
include("playboxcategory.php");
$categories = Category::getCategories();
foreach($categories as $category) {
   $categoryID = $category->categoryID;
   $name = $categoryID . " - " . $category->categoryCode . ", " . $category->categoryName;
   echo "$name<br>";
}
?>

