<?php
//Harshika Agrawal, IT202 & 004, Internet Applications, Phase 2, ha542@njit.edu
?>

<?php
include("playboxproduct.php");
$products = Product::getProducts();

foreach ($products as $product) {
   $productID = $product->productID;
   $productCode = $product->productCode;
   $productName = $product->productName;
   $listPrice = $product->listPrice;
   $option = $productID . " - " . $productCode . ", " . $productName . " - " . $listPrice;
   echo "$option<br>";
}
?>
