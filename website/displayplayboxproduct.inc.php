<?php
if (!isset($_REQUEST['productID']) or (!is_numeric($_REQUEST['productID']))) {
?>
   <h2>You did not select a valid productID to view.</h2>
   <a href="index.php?content=listplayboxproducts">List Products</a>
   <?php
} else {
   $productID = $_REQUEST['productID'];
   $product = Product::findProduct($productID);
   if ($product) {
   ?>
      <h2>Product ID: <?php echo $product->productID; ?></h2>
      <h2>Product Name: <?php echo $product->productName; ?></h2>
      <h2>Product Code: <?php echo $product->productCode; ?></h2>
      <h2>Product Description: <?php echo $product->description; ?></h2>
      <h2>Product Model: <?php echo $product->model; ?></h2>
      <h2>Product CategoryId: <?php echo $product->categoryID; ?></h2>
      <h2>Product WholeSalePrice: <?php echo $product->wholeSalePrice; ?></h2>
      <h2>Product ListPrice: <?php echo $product->listPrice; ?></h2>
      <h2>Date Created: <?php echo $product->DateCreated; ?></h2>
      <br>
<?php
   } else {
      echo "<h2>Sorry, product not found.</h2>\n";
   }
}
?>