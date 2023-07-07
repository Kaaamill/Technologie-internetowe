<?php
include "baza.php";
$ID = $_GET["ID"];
$sql = "DELETE FROM `ksiazki` WHERE ID = $ID";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: ksiazki_administrator.php?msg=Książka usunięta.");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>
