<?php
//Harshika Agrawal, IT202 & 004, Internet Applications, Phase 2, ha542@njit.edu
?>

<?php
include("playboxcategory.php");
$categoryID = filter_input(INPUT_POST, 'PlayboxCategoryID', FILTER_VALIDATE_INT);
if ((trim($categoryID) == '') or (!is_numeric($categoryID))) {
  echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else {
  $categoryCode = htmlspecialchars($_POST['categoryCode']);
  $categoryName = htmlspecialchars($_POST['categoryName']);
  $categoryShelfNumber = $_POST['categoryShelfNumber'];
  $DateCreated = date("Y-m-d H:i:s");
  $category = new Category($categoryID, $categoryCode, $categoryName, $categoryShelfNumber, $DateCreated);
  $result = $category->saveCategory();
  if ($result) {
      echo "<h2>New Category #$categoryID successfully added</h2>\n";
      echo "<h2>$category</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that category</h2>\n";
  }
}
?>
