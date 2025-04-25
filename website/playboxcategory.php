<?php
//Harshika Agrawal, IT202 & 004, Internet Applications, Phase 2, ha542@njit.edu
?>

<?php
require_once('database.php');
class Category
{
   public $categoryID;
   public $categoryCode;
   public $categoryName;
   public $categoryShelfNumber;
   public $DateCreated;
   function __construct($categoryID, $categoryCode, $categoryName, $categoryShelfNumber, $DateCreated)
   {
       $this->categoryID = $categoryID;
       $this->categoryCode = $categoryCode;
       $this->categoryName = $categoryName;
       $this->categoryShelfNumber = $categoryShelfNumber;
       $this->DateCreated = $DateCreated;
   }
   function __toString()
   {
       $output = "<h2>Category Number: $this->categoryID</h2>\n" .
           "<h2>$this->categoryCode, $this->categoryName, $this->categoryShelfNumber</h2>\n";
       return $output;
   }
   function saveCategory()
   {
       $db = getDB();
       $query = "INSERT INTO PlayboxCategories VALUES (?, ?, ?, ?, ?)";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issis",
           $this->categoryID,
           $this->categoryCode,
           $this->categoryName,
           $this->categoryShelfNumber, 
           $this->DateCreated
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   static function getCategories()
   {
       $db = getDB();
       $query = "SELECT * FROM PlayboxCategories";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $categories = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $category = new Category(
                   $row['PlayboxCategoryID'],
                   $row['PlayboxCategoryCode'],
                   $row['PlayboxCategoryName'],
                   $row['PlayboxShelfNumber'],
                   $row['DateCreated']
               );
               array_push($categories, $category);
               unset($category);
           }
           $db->close();
           return $categories;
       } else {
           $db->close();
           return NULL;
       }
   }
   static function findCategory($categoryID)
   {
       $db = getDB();
       $query = "SELECT * FROM PlayboxCategories WHERE PlayboxCategoryID = $categoryID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $category = new Category(
                $row['PlayboxCategoryID'],
                $row['PlayboxCategoryCode'],
                $row['PlayboxCategoryName'],
                $row['PlayboxShelfNumber'],
                $row['DateCreated']
           );
           $db->close();
           return $category;
       } else {
           $db->close();
           return NULL;
       }
   }
   function updateCategory()
   {
       $db = getDB();
       $query = "UPDATE PlayboxCategories SET PlayboxCategoryID = ?, PlayboxCategoryCode = ?, " .
           "PlayboxCategoryName = ?, PlayboxShelfNumber = ? " .
           "WHERE PlayboxCategoryID = $this->categoryID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issi",
           $this->categoryID,
           $this->categoryCode,
           $this->categoryName,
           $this->categoryShelfNumber
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   function removeCategory()
   {
       $db = getDB();
       $query = "DELETE FROM PlayboxCategories WHERE PlayboxCategoryID = $this->categoryID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }
   static function getTotalCategories(){
    $db = getDB();
    $query = "SELECT count(PlayboxCategoryID) FROM PlayboxCategories";
    $result = $db->query($query);
    $row = $result->fetch_array();
    if ($row) {
        return $row[0];
    } else {
        return NULL;
    }
    }
}
?>