<h2>Select Product</h2>
<form name="products" method="post">
   <select name="productID" size="20">

      <?php
//      include("playboxproduct.php");
      $products = Product::getProducts();

      foreach ($products as $product) {
         $productID = $product->productID;
         $productCode = $product->productCode;
         $productName = $product->productName;
         //$description = $product->description;
         //$model = $product->model;
         //$categoryID = $product->categoryID;
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
</form>