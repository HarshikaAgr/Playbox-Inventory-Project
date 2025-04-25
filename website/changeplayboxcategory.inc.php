<?php
require_once("playboxcategory.php");
if (isset($_SESSION['login'])) {
   $categoryID = $_POST['PlayboxCategoryID'];
   $answer = $_POST['answer'];
   if ($answer == "Update Category") {
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
   } else {
      echo "<h2>Update Canceled for category $categoryID</h2>\n";
   }
} else {
   echo "<h2>Please log in first</h2>\n";
}
?>
