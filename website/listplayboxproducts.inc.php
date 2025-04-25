<script language="javascript">
   function listbox_dblclick() {
       document.products.displayplayboxproduct.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this product?");
       }
       if (userConfirmed) {
           if (target == 0) products.action = "index.php?content=displayplayboxproduct";
           if (target == 1) products.action = "index.php?content=removeplayboxproduct";
           if (target == 2) products.action = "index.php?content=updateplayboxproduct";
       } else {
           alert("Action canceled.");
       }
   }
</script>
<h2>Select Product</h2>
<form name="products" method="post">
   <select ondblclick="listbox_dblclick()" name="productID" size="20">

      <?php
//      include("playboxproduct.php");
      $products = Product::getProducts();

      foreach ($products as $product) {
         $productID = $product->productID;
         $productCode = $product->productCode;
         $productName = $product->productName;
         //$description = $product->description;
         //$model = $product->model;
         //$productID = $product->productID;
         //$wholeSalePrice = $product->wholeSalePrice;
         //$listPrice = $product->listPrice;
         $option = $productID . "  -  " . $productCode . ",  " . $productName; 
     /*  . " - " . $description . 
         ", " . $model .
         ", WholeSale Price:" . $wholeSalePrice . 
         ", List Price:" . $listPrice; 
      */
         echo "<option value=\"$productID\">$option</option>\n";
      }
      ?>
   </select>
   <br>
   <input type="submit" onClick="button_click(0)" name="displayplayboxproduct" value="View Product">
   <input type="submit" onClick="button_click(1)" name="deleteplayboxproduct" value="Delete Product">
   <input type="submit" onClick="button_click(2)" name="updateplayboxproduct" value="Update Product">
</form>