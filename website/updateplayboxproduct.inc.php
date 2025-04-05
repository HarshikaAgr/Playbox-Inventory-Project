<?php
if (!isset($_POST['productID']) or (!is_numeric($_POST['productID']))) {
?>
   <h2>You did not select a valid productID value</h2>
   <a href="index.php?content=listplayboxproducts">List products</a>
   <?php
} else {
   $productID = $_POST['productID'];
   $product = Product::findProduct($productID);
   if ($product) {
   ?>
       <h2>Update product <?php echo $product->productID; ?></h2><br>
       <form name="products" action="index.php" method="post">
           <table>
               <tr>
                   <td>productID</td>
                   <td><?php echo $product->productID; ?></td>
               </tr>
               <tr>
                   <td>Name</td>
                   <td><input type="text" name="productName" value="<?php echo $product->productName; ?>"></td>
               </tr>
               <tr>
                   <td>Code</td>
               <td><input type="text" name="productCode" value="<?php echo $product->productCode; ?>"></td>
               </tr>
               <tr>
                   <td>Description</td>
               <td><input type="text" name="description" value="<?php echo $product->description; ?>"></td>
               </tr>
               <tr>
                   <td>Model</td>
               <td><input type="text" name="model" value="<?php echo $product->model; ?>"></td>
               </tr>
               <tr>
                   <td>Category ID</td>
               <td><input type="text" name="categoryID" value="<?php echo $product->categoryID; ?>"></td>
               </tr>
               <tr>
                   <td>WholeSale Price</td>
               <td><input type="text" name="wholeSalePrice" value="<?php echo $product->wholeSalePrice; ?>"></td>
               </tr>
               <tr>
                   <td>List Price</td>
                 <td><input type="text" name="listPrice" value="<?php echo $product->listPrice; ?>"></td>
               </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update product">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="productID" value="<?php echo $productID; ?>">
           <input type="hidden" name="content" value="changeplayboxproduct">
       </form>
   <?php
   } else {
    ?>
        <h2>Sorry, product <?php echo $productID; ?> not found</h2>
        <a href="index.php?content=listplayboxproducts">List products</a>
<?php
   }
}
?>
 