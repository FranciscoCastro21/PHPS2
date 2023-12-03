<?php
include "C:\Users\User\Documents\PHP CRUD PROJECT\php\db2.php";
$id = $_GET["id"];
$sql = "DELETE FROM `art_gallery` WHERE artID = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>
