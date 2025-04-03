<!--Harshika Agrawal, IT202 & 004, Internet Applications, Phase 2, ha542@njit.edu-->

<?php
include('playboxproduct.php');
$productID = $_POST['PlayboxProductID'];
if ((trim($productID) == '') or (!is_numeric($productID))) {
   echo "<h2>Sorry, you must enter a valid item ID number</h2>\n";
} else {
    $productCode = $_POST['productCode'];
    $productName = $_POST['productName'];
    $description = $_POST['description'];
    $model = $_POST["model"];
    $categoryID = $_POST['categoryID'];
    $wholeSalePrice = $_POST['wholeSalePrice'];
    $listPrice = $_POST['listPrice'];
    $DateCreated = date('Y-m-d H:i:s');
    $product = new Product($productID, $productCode, $productName, $description, $model, $categoryID, $wholeSalePrice, $listPrice, $DateCreated);
    $result = $product->saveProduct();
    if ($result)
        echo "<h2>New Product #$productID successfully added</h2>\n";
    else
        echo "<h2>Sorry, there was a problem adding that product</h2>\n";
}
?>
