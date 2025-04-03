<?php
//Harshika Agrawal, IT202 & 004, Internet Applications, Phase 2, ha542@njit.edu
?>

<?php
include('playboxproduct.php');
$productID = $_POST['PlayboxProductID'];
$product = Product::findProduct($productID);
$product->productID = $_POST['PlayboxProductID'];
$product->productName = $_POST['productName'];
$product->productCode = $_POST['productCode'];
$product->description = $description = $_POST['description'];
$product->model = $_POST['model'];
$product->categoryID = $_POST['categoryID'];
$product->wholeSalePrice = $_POST['wholeSalePrice'];
$product->listPrice = $_POST['listPrice'];
$DateCreated = date('Y-m-d H:i:s');
$result = $product->updateProduct();
if ($result) {
   echo "<h2>Item $productID updated</h2>\n";
} else {
   echo "<h2>Problem updating item $productID</h2>\n";
}
?>
