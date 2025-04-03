<?php
//Harshika Agrawal, IT202 & 004, Internet Applications, Phase 2, ha542@njit.edu
?>

<?php
require_once('database.php');
class Product
{
   public $productID;
   public $productCode;
   public $productName;
   public $description;
   public $model;
   public $categoryID;
   public $wholeSalePrice;
   public $listPrice;
   public $DateCreated;
   function __construct($productID, $productCode, $productName, $description, $model, $categoryID, $wholeSalePrice, $listPrice, $DateCreated)
   {
       $this->productID = $productID;
       $this->productCode = $productCode;
       $this->productName = $productName;
       $this->description = $description;
       $this->model = $model;
       $this->categoryID = $categoryID;
       $this->wholeSalePrice = $wholeSalePrice;
       $this->listPrice = $listPrice;
       $this->DateCreated = $DateCreated;
   }

   function __toString()
   {
       $output = "<h2>Item : $this->productID</h2>" .
           "<h2>Name: $this->productName</h2>\n";
       "<h2>Category ID: $this->categoryID at $this->listPrice</h2>\n";
       return $output;
   }

   function saveProduct()
   {
       $db = getDB();
       $query = "INSERT INTO PlayboxProducts VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issssidds", 
           $this->productID,
           $this->productCode,
           $this->productName,
           $this->description,
           $this->model,
           $this->categoryID,
           $this->wholeSalePrice,
           $this->listPrice,
           $this->DateCreated  
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
    
    static function getProducts() 
    { 
        $db = getDB(); 
        $query = "SELECT * FROM PlayboxProducts"; 
        $result = $db->query($query); 

        if (mysqli_num_rows($result) > 0) { 
            $products = array(); 
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) { 
                $product = new Product(
                    $row['PlayboxProductID'],
                    $row['PlayboxProductCode'],
                    $row['PlayboxProductName'],
                    $row['PlayboxDescription'],
                    $row['PlayboxModel'],
                    $row['PlayboxCategoryID'],
                    $row['PlayboxWholesalePrice'],
                    $row['PlayboxListPrice'],
                    $row['DateCreated'] 
                ); 
                array_push($products, $product); 
            } 
            $db->close(); 
            return $products; 
        } else { 
            $db->close(); 
            return NULL; 
        } 
    }

    static function findProduct($productID)
    {
        $db = getDB();
        $query = "SELECT * FROM PlayboxProducts WHERE PlayboxProductID = $productID";
        $result = $db->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($row) {
            $product = new Product(
                $row['PlayboxProductID'],
                $row['PlayboxProductCode'],
                $row['PlayboxProductName'],
                $row['PlayboxDescription'],
                $row['PlayboxModel'],
                $row['PlayboxCategoryID'],
                $row['PlayboxWholesalePrice'],
                $row['PlayboxListPrice'],
                $row['DateCreated']
            );
            $db->close();
            return $product;
        } else {
            $db->close();
            return NULL;
        }
    }

    function updateProduct()
    {
        $db = getDB();
        $query = "UPDATE PlayboxProducts SET 
        PlayboxProductCode = ?, 
        PlayboxProductName = ?, 
        PlayboxDescription = ?, 
        PlayboxModel = ?, 
        PlayboxCategoryID = ?, 
        PlayboxWholesalePrice = ?, 
        PlayboxListPrice = ?, 
        DateCreated = ? 
        WHERE PlayboxProductID = ?";
/*
"UPDATE PlayboxProducts SET PlayboxProductCode = ?, PlayboxProductName = ?, ".
         " PlayboxDescription = ?, PlayboxModel = ?, PlayboxCategoryID= ?, PlayboxWholesalePrice = ?, PlayboxListPrice= ?, DateCreated = ? " .
         " WHERE PlayboxProductID = $this->productID = ?";
*/
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "ssssiddsi",
            $this->productCode,
            $this->productName,
            $this->description,
            $this->model,
            $this->categoryID,
            $this->wholeSalePrice,
            $this->listPrice,
            $this->DateCreated, 
            $this->productID
        );
        $result = $stmt->execute();
        $db->close(); 
        return $result;
    }

    function removeProduct()
    {
        $db = getDB();
        $query = "DELETE FROM PlayboxProducts WHERE PlayboxProductID = $this->productID";
        $result = $db->query($query); 
        $db->close(); 
        return $result;
    }

}
?>