<?php
//include('playboxproduct.php');
if (isset($_SESSION['login'])) {
    $productID = $_POST['productID'];
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
} else {
    echo "<h2>Please log in first</h2>\n";
} 
?>
