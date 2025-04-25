<?php
error_log("\$_POST " . print_r($_POST, true));
//include("playboxproduct.php");
require_once("playboxproduct.php");
if (isset($_SESSION['login'])) {
   if (!isset($_POST['productID']) or (!is_numeric($_POST['productID']))) {
?>
      <h2>You did not select a valid productID to delete.</h2>
      <a href="index.php?content=listplayboxproducts">List Products</a>
<?php
   } else {
      $productID = $_POST['productID'];
      $product = Product::findProduct($productID);
      /* echo $product->productID;
   echo $category== null; */
      $result = $product->removeProduct();
      if ($result)
         echo "<h2>Product $productID removed</h2>\n";
      else
         echo "<h2>Sorry, problem removing product $productID</h2>\n";
   }
} else {
   echo "<H2>Please log in first</h2>\n";
}
?>