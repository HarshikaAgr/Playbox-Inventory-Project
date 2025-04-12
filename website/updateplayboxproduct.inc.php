<?php
if (!isset($_POST['productID']) or (!is_numeric($_POST['productID']))) {
?>
   <h2>You did not select a valid productID value</h2>
   <a href="index.php?content=listplayboxproducts">List products</a>
   <?php
} else {
   $productID = htmlspecialchars ($_POST['productID']);
   $product = Product::findProduct($productID);
   if ($product) {
   ?>
       <h2>Update product <?php echo htmlspecialchars($product->productID); ?></h2><br>
       <form name="products" action="index.php" method="post">
           <table>
               <tr>
                   <td>productID</td>
                   <td><?php echo htmlspecialchars($product->productID); ?></td>
               </tr>
               <tr>
                   <td>Name</td>
                   <td><input type="text" name="productName" value="<?php echo htmlspecialchars($product->productName); ?>"minlength="1" maxlength="100" required></td>
               </tr>
               <tr>
                   <td>Code</td>
               <td><input type="text" name="productCode" value="<?php echo htmlspecialchars($product->productCode); ?>"minlength="3" maxlength="10" required></td>
               </tr>
               <tr>
                   <td>Description</td>
               <td><input type="text" name="description" value="<?php echo htmlspecialchars($product->description); ?>"minlength="5" maxlength="300" required></td>
               </tr>
               <tr>
                   <td>Model</td>
               <td><input type="text" name="model" value="<?php echo htmlspecialchars($product->model); ?>"minlength="5" maxlength="100"  required></td>
               </tr>
               <tr>
                   <td>Category ID</td>
               <td><input type="text" name="categoryID" value="<?php echo htmlspecialchars($product->categoryID); ?>"min="100" max="999" required></td>
               </tr>
               <tr>
                   <td>WholeSale Price</td>
               <td><input type="text" name="wholeSalePrice" value="<?php echo htmlspecialchars($product->wholeSalePrice); ?>"min="0" max="10000" required></td>
               </tr>
               <tr>
                   <td>List Price</td>
                 <td><input type="text" name="listPrice" value="<?php echo htmlspecialchars($product->listPrice); ?>"min="0" max="10000" required></td>
               </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update product">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="productID" value="<?php echo htmlspecialchars($productID); ?>">
           <input type="hidden" name="content" value="changeplayboxproduct">
       </form>
   <?php
   } else {
    ?>
        <h2>Sorry, product <?php echo htmlspecialchars($productID); ?> not found</h2>
        <a href="index.php?content=listplayboxproducts">List products</a>
<?php
   }
}
?>
 