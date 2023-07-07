<?php
    session_start();
    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: ../../index.html');
        exit();
    }
?>

<?php
include "baza.php";
$ID = $_GET["ID"];

if (isset($_POST["submit"])) {
  $czy_wypozyczona = $_POST['czy_wypozyczona'];
  $data_wypozyczenia = $_POST['data_wypozyczenia'];
  $czy_zwrocona = $_POST['czy_zwrocona'];
  $data_zwrotu = $_POST['data_zwrotu'];

  $sql = "UPDATE `id_ksiazki` SET `czy_wypozyczona`='$czy_wypozyczona', `data_wypozyczenia`='$data_wypozyczenia', `czy_zwrocona`='$czy_zwrocona', `data_zwrotu`='$data_zwrotu' WHERE ID = $ID";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: rezerwacje_bibliotekarz.php?msg=Informacje zostały zmienione.");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edycja rezerwacji</title>
    <meta name="description" content="Biblioteka VaDinci">
    <link rel="stylesheet" href="../../css_styles/adminstrator_bibliotekarz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
</head>

<body>
    <div class="main">
        <a href="strona_glowna_bibliotekarz.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
        <nav class="menu">
            <ul>
                <li><a href="strona_glowna_bibliotekarz.php">Strona Główna</a></li>
                <li><a href="ksiazki_bibliotekarz.php">Książki</a></li>
                <li><a href="rezerwacje_bibliotekarz.php">Rezerwacje</a></li>
                <li><a href="historia_bibliotekarz.php">Historia</a></li>
                <li><a href="wylogowanie.php">Wyloguj</a></li>
            </ul>
        </nav>

    <?php
    $sql = "SELECT czy_wypozyczona, data_wypozyczenia, czy_zwrocona, data_zwrotu FROM `id_ksiazki` WHERE ID = $ID LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
          <br /><label class="form-label">Czy wypożyczona: </label><br />
          <input type="text" class="form-control" name="czy_wypozyczona" placeholder="Tak/Nie">
          </div>

          <div class="col">
          <br /><label class="form-label">Data wypożyczenia: </label><br />
          <input type="date" class="form-control" name="data_wypozyczenia" placeholder="Wpisz dzisiejszą datę">
          </div>

          <div class="col">
          <br /><label class="form-label">Czy Klient zwrócił książkę?: </label><br />
          <input type="text" class="form-control" name="czy_zwrocona" placeholder="Tak/Nie">
          </div>

          <div class="col">
          <br /><label class="form-label">Data zwrotu: </label><br />
          <input type="date" class="form-control" name="data_zwrotu" placeholder="Wpisz dzisiejszą datę">
          </div>


        <div>
            <br /><button type="submit" name="submit">Zaktualizuj informacje</button>
               <a href="rezerwacje_bibliotekarz.php"><input type="button" value="Anuluj"></a>
            </div>
         </form>
      </div>
   </div>

</div>
<footer>
  <footer>
        <nav class="nav">
            <h4 class="sm-header">Śledź nas na</h4>
            <div class="line"></div>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="https://www.facebook.com/collegiumdavinci" target ="_blank" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a href="https://twitter.com/CDV_Poznan" target ="_blank" class="nav-link"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a href="https://www.instagram.com/collegium_da_vinci/" target ="_blank" class="nav-link"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a href="https://cdv.pl" target ="_blank" class="nav-link"><i class="fab fa-google"></i></a>
                </li>
            </ul>
        </nav>
        Bilbioteka Publiczna VaDinci<br />
        VaDinci@gmail.com<br />
        ul. Tadeusza Kutrzeby 1, 61-710 Poznań<br />
        &copy; 2023 VaDinci
    
</footer>
</body>
</html>