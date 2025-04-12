<h2>Enter New Product Information</h2>
<form name="newplayboxproduct" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Product ID:</td>
           <td><input type="number" name="productID" size="4" placeholder="XXX" min="100" max="999" required></td>
       </tr>
       <tr>
           <td>Product <Code></Code>:</td>
           <td><input type="text" name="productCode" size="6" minlength="3" maxlength="10" required></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="productName" size="20" minlength="1" maxlength="100" required></td>
       </tr>
       <tr>
           <td>Description:</td>
           <td><input type="text" name="description" size="20" minlength="5" maxlength="300" required></td>
       </tr>
       <tr>
           <td>Model:</td>
           <td><input type="text" name="model" size="20" minlength="5" maxlength="100"  required></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="number" name="categoryID" size="3" placeholder="XXX" min="100" max="999" required></td>
       </tr>
       <tr>
           <td>WholeSale Price:</td>
           <td><input type="number" name="wholeSalePrice" step="0.01" size="20" min="0" max="10000" required></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="number" name="listPrice" step="0.01" size="10" min="0" max="10000" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New product">
   <input type="hidden" name="content" value="addplayboxproduct">
</form>
