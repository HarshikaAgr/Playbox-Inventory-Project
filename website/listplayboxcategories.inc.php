<script language="javascript">
   function listbox_dblclick() {
       document.categories.displayplayboxcategory.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this category?");
       }
       if (userConfirmed) {
           if (target == 0) categories.action = "index.php?content=displayplayboxcategory";
           if (target == 1) categories.action = "index.php?content=removeplayboxcategory";
           if (target == 2) categories.action = "index.php?content=updateplayboxcategory";
       } else {
           alert("Action canceled.");
       }
   }
</script>
<h2>Select Category</h2>
<form name="categories" method="post">
   <select ondblclick="listbox_dblclick()" name="categoryID" size="20">

      <?php
//      include("playboxcategory.php");
      $categories = Category::getCategories();
      foreach($categories as $category) {
         $categoryID = $category->categoryID;
         $name = $categoryID . " - " . $category->categoryCode . ", " . $category->categoryName;
         echo  "<option value=\"$categoryID\">$name</option>\n";
      }
      ?>
   </select>
   <br>
   <input type="submit" onClick="button_click(0)" name="displayplayboxcategory" value="View Category">
   <input type="submit" onClick="button_click(1)" name="deleteplayboxcategory" value="Delete Category">
   <input type="submit" onClick="button_click(2)" name="updateplayboxcategory" value="Update Category">
</form>