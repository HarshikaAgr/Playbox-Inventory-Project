<?php
//Harshika Agrawal, IT202 & 004, Internet Applications, Phase 2, ha542@njit.edu
?>

<?php
include("playboxcategory.php");
$categoryID = $_POST['PlayboxCategoryID'];
$category = Category::findCategory($categoryID);
/* echo $category-> categoryCode;
echo $category== null; */
$category->categoryCode = $_POST['categoryCode'];
$category->categoryName = $_POST['categoryName'];
$category->categoryShelfNumber = $_POST['categoryShelfNumber'];
$category->DateCreated = date('Y-m-d H:i:s');
$result = $category->updateCategory();
if ($result) {
   echo "<h2>Category $categoryID updated</h2>\n";
} else {
   echo "<h2>Problem updating category $categoryID</h2>\n";
} 
?>
