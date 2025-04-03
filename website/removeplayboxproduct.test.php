<?php
//Harshika Agrawal, IT202 & 004, Internet Applications, Phase 2, ha542@njit.edu
?>

<?php
include("playboxproduct.php");
$productID = $_POST['PlayboxProductID'];
$product = Product::findProduct($productID);
/* echo $product->productID;
echo $category== null; */
$result = $product->removeProduct();
if ($result)
   echo "<h2>Item $productID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing item $productID</h2>\n"; 
?>



 