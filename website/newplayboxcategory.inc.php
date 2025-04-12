<h2>Enter New Category Information</h2>
<form name="newplayboxcategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Category ID:</td>
           <td><input type="number" name="PlayboxCategoryID" size="4" min="100" max="999" required></td>
       </tr>
       <tr>
           <td>Category Code:</td>
           <td><input type="text" name="categoryCode" size="20" placeholder="XXX" minlength="3" maxlength="10" required></td>
       </tr>
       <tr>
           <td>Category Name:</td>
           <td><input type="text" name="categoryName" size="50" minlength="10" maxlength="1000" required></td>
       </tr>
       <tr>
           <td>Category Shelf Number:</td>
           <td><input type="text" name="categoryShelfNumber" size="30" size="4" min="100" max="999" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Category">
   <input type="hidden" name="content" value="addplayboxcategory">
</form>
