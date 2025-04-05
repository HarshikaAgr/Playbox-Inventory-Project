<?php
if (!isset($_REQUEST['categoryID']) or (!is_numeric($_REQUEST['categoryID']))) {
?>
<h2>You did not select a valid categoryID to view.</h2>
<a href="index.php?content=listplayboxcategories">List Categories</a>
<?php
} else {
$categoryID = $_REQUEST['categoryID'];
$category = Category::findCategory($categoryID);
if ($category) {
echo $category;
$products = Product::getProductsByCategory($categoryID);
if ($products) {
?>
    <br><br>
    <b>Products:</b><br>
    <table>
    <tr>
        <th>Product</th>
        <th>Name</th>
        <th>Model</th>
        <th>Description</th>
        <th>WholeSale Price</th>
        <th>List Price</th>
    </tr>
    <?php
    $producttotal = 0;
    foreach ($products as $product) {
    ?>
        <tr>
        <td><?php echo $product->productID; ?></td>
        <td><?php echo $product->productName; ?></td>
        <td><?php echo $product->model; ?></td>
        <td><?php echo $product->description; ?></td>
        <td><?php echo $product->wholeSalePrice; ?></td>
        <td><?php echo $product->listPrice; ?></td>
        </tr>
    <?php
    }
    ?>
    </table>
<?php
} else {
    echo "<h2>There are no products for this category</h2>\n";
}
} else {
echo "<h2>Sorry, category $categoryID not found</h2>\n";
}
}
?>
