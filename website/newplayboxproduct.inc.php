<h2>Enter New Product Information</h2>
<form name="newplayboxproduct" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Product ID:</td>
           <td><input type="text" name="productID" size="4"></td>
       </tr>
       <tr>
           <td>Product <Code></Code>:</td>
           <td><input type="text" name="productCode" size="6"></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="productName" size="20"></td>
       </tr>
       <tr>
           <td>Description:</td>
           <td><input type="text" name="description" size="20"></td>
       </tr>
       <tr>
           <td>Model:</td>
           <td><input type="text" name="model" size="20"></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="categoryID" size="4"></td>
       </tr>
       <tr>
           <td>WholeSale Price:</td>
           <td><input type="text" name="wholeSalePrice" size="20"></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="text" name="listPrice" size="10"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New product">
   <input type="hidden" name="content" value="addplayboxproduct">
</form>
