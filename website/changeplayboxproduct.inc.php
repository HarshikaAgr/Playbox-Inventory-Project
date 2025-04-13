<?php
//include('playboxproduct.php');
if (isset($_SESSION['login'])) {
   $productID = $_POST['productID'];
   $answer = $_POST['answer'];
   if ($answer == "Update product") {
//    $productID = $_POST['productID'];
      $product = Product::findProduct($productID);
      $product->productID = $_POST['productID'];
      $product->productName = $_POST['productName'];
      $product->productCode = $_POST['productCode'];
      $product->description = $description = $_POST['description'];
      $product->model = $_POST['model'];
      $product->categoryID = $_POST['categoryID'];
      $product->wholeSalePrice = $_POST['wholeSalePrice'];
      $product->listPrice = $_POST['listPrice'];
      $DateCreated = date('Y-m-d H:i:s');
      if (!(Category::findCategory($product->categoryID))) {
         echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
      }
      else if (!(is_numeric($product->wholeSalePrice))) {
         echo "<h2>Sorry, you must enter a valid wholesale price</h2>\n";
      }
      else if (!(is_numeric($product->listPrice))) {
         echo "<h2>Sorry, you must enter a valid list price</h2>\n";
      }
      else{
         $result = $product->updateProduct();
         echo "<h2>Product $productID updated</h2>\n";
      } 
   }
   else {
      echo "<h2>Update Canceled for product $productID</h2>\n";
   }
} else {
echo "<h2>Please login first</h2>\n";
}
?>

<!--  $result = $product->updateProduct();
      if ($result) {
         echo "<h2>product $productID updated</h2>\n";
      } else {
         echo "<h2>Problem updating product $productID</h2>\n";
      }
   } else {
       echo "<h2>Update Canceled for product $productID</h2>\n";
      }
} else {
   echo "<h2>Please log in first</h2>\n";
}
?> --> 
