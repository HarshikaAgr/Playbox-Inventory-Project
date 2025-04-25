<style>
  form[name="category"] {
    display: grid;
    grid-template-columns: 125px 1fr;
    gap: 10px 5px;
    align-items: left;
    max-width: 300px;
    margin: 0px;
  }

  form[name="category"] label {
    text-align: left;
    padding-right: 5px;
  }

  form[name="category"] input[type="text"] {
    width: 100%;
  }

  form[name="category"] input[type="submit"] {
    grid-column: 2;
    justify-self: start;
  }
</style>
<?php
if (!isset($_POST['categoryID']) or (!is_numeric($_POST['categoryID']))) {
?>
  <h2>You did not select a valid categoryID to update.</h2>
  <a href="index.php?content=listplayboxcategories">List Categories</a>
  <?php
} else {
  $categoryID = $_POST['categoryID'];
  $category = Category::findCategory($categoryID);
  if ($category) {
  ?>
    <h2>Update Category <?php echo $categoryID; ?></h2><br>
    <form name="category" action="index.php" method="post">
      <label for="categoryCode">Category Code:</label>
      <input type="text" name="categoryCode" id="categoryCode" value="<?php echo $category->categoryCode; ?>" minlength="3" maxlength="10" required>
      <label for="categoryName">Category Name:</label>
      <input type="text" name="categoryName" id="categoryName" value="<?php echo $category->categoryName; ?>" minlength="10" maxlength="1000" required>
      <label for="categoryShelfNumber">Shelf Number:</label>
      <input type="number" name="categoryShelfNumber" id="categoryShelfNumber" value="<?php echo $category->categoryShelfNumber; ?>" min="1" max="999" required>
      <input type="submit" name="answer" value="Update Category">
      <input type="submit" name="answer" value="Cancel">
      <input type="hidden" name="PlayboxCategoryID" value="<?php echo $categoryID; ?>">
      <input type="hidden" name="content" value="changeplayboxcategory">
    </form>
  <?php
  } else {
  ?>
    <h2>Sorry, category <?php echo $categoryID; ?> not found</h2>
    <a href="index.php?content=listplayboxcategories">List Categories</a>
<?php
  }
}
?>
<script language="javascript">
  document.category.categoryCode.focus();
  document.category.categoryCode.select();
</script>