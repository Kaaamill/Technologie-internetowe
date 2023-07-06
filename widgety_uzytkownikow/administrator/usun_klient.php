<?php
include "baza.php";
$ID = $_GET["ID"];
$sql = "DELETE FROM `klienci` WHERE ID = $ID";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: klienci_administrator.php?msg=Klient usunięty.");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>
