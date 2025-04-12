<?php
//include('playboxproduct.php');
if (isset($_SESSION['login'])) {
    $productID = filter_input (INPUT_POST, 'productID', FILTER_VALIDATE_INT);
    if ((trim($productID) == '') or (!is_int($productID))) {
    echo "<h2>Sorry, you must enter a valid product ID number</h2>\n";
    } else if (Product::findProduct($productID)) {
        echo "<h2>Sorry, A product with the ID #$productID already exists</h2>\n";
    } else {
        $productCode = htmlspecialchars ($_POST['productCode']);
        $productName = htmlspecialchars ($_POST['productName']);
        $description = htmlspecialchars ($_POST['description']);
        $model = htmlspecialchars ($_POST["model"]);
        $categoryID = htmlspecialchars ($_POST['categoryID']);
        $wholeSalePrice = htmlspecialchars ($_POST['wholeSalePrice']);
        $listPrice = htmlspecialchars ($_POST['listPrice']);
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
