<?php
ob_start();
include("playboxcategory.php");
include("playboxproduct.php");
$totalCategories = Category::getTotalCategories();
$totalProducts = Product::getTotalProducts();
$listpricetotal = Product::getTotalListPrice();
$wholesalepricetotal = Product::getTotalWholesalePrice();
$doc = new DOMDocument("1.0");
$inventory = $doc->createElement("inventory");
$inventory = $doc->appendChild($inventory);
$categories = $doc->createElement("categories", $totalCategories);
$categories = $inventory->appendChild($categories);
$products = $doc->createElement("products", $totalProducts);
$products = $inventory->appendChild($products);
$listprice = $doc->createElement("listpricetotal", $listpricetotal);
$listprice = $inventory->appendChild($listprice);
$wholesaleprice = $doc->createElement("wholesalepricetotal", $wholesalepricetotal);
$wholesaleprice = $inventory->appendChild($wholesaleprice);
$output = $doc->saveXML();
header("Content-type: application/xml");
ob_end_clean();
echo $output;
?>