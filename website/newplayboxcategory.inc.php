<h2>Enter New Category Information</h2>
<form name="newplayboxcategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="PlayboxCategoryID" size="4"></td>
       </tr>
       <tr>
           <td>Category Code:</td>
           <td><input type="text" name="categoryCode" size="20"></td>
       </tr>
       <tr>
           <td>Category Name:</td>
           <td><input type="text" name="categoryName" size="50"></td>
       </tr>
       <tr>
           <td>Category Shelf Number:</td>
           <td><input type="text" name="categoryShelfNumber" size="30"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Category">
   <input type="hidden" name="content" value="addplayboxcategory">
</form>
