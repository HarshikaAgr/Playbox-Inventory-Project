<table width="100%" cellpadding="3">
   <?php
   if (!isset($_SESSION['login'])) {
   ?>
       <tr>
           <td>
               <hr />
           </td>
       </tr>
   <?php
   } else {
       echo "<td><h3>Welcome, {$_SESSION['login']}</h3></td>\n";
   ?>
       <tr>
           <td><a href="index.php"><strong>Home</strong></a></td>
       </tr>
       <tr>
           <td><strong>Categories</strong></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listplayboxcategories">
                   <strong>List Categories</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newplayboxcategory">
                   <strong>Add New Category</strong></a></td>
       </tr>
       <tr>
           <td><strong>Products</strong></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listplayboxproducts">
                   <strong>List Products</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newplayboxproduct">
                   <strong>Add New Product</strong></a></td>
       </tr>
       <tr>
           <td>
               <hr />
           </td>
       </tr>
       <tr>
           <td><a href="index.php?content=logout">
                   <strong>Logout</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;</td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Product:</label><br>
                   <input type="text" name="productID" size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="updateplayboxproduct" />
                   </form>
           </td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Category:</label><br>
                   <input type="text" name="categoryID" size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="displayplayboxcategory" />
               </form>
           </td>
       </tr>
   <?php
   }
   ?>
</table>
