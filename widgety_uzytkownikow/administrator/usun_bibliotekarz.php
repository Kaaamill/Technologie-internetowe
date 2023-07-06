<?php
include "baza.php";
$ID = $_GET["ID"];
$sql = "DELETE FROM `bibliotekarze` WHERE ID = $ID";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: bibliotekarze_administrator.php?msg=Bibliotekarz usunięty.");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>
