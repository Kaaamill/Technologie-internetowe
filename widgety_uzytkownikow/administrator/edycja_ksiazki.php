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
  $tytul_ksiazki = $_POST['tytul_ksiazki'];
  $gatunek = $_POST['gatunek'];

  $sql = "UPDATE `ksiazki` SET `tytul_ksiazki`='$tytul_ksiazki', `gatunek`='$gatunek' WHERE ID = $ID";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: ksiazki_administrator.php?msg=Informacje zostały zmienione.");
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
    <title>Edycja książki</title>
    <meta name="description" content="Biblioteka VaDinci">
    <link rel="stylesheet" href="../../css_styles/adminstrator_bibliotekarz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
</head>

<body>
<div class="container">
    <div class="main">
        <a href="strona_glowna_administrator.php"><img class="logo" src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
        <nav class="menu">
            <ul>
                <li><a href="strona_glowna_administrator.php">Strona Główna</a></li>
                <li><a href="klienci_administrator.php">Zarządzanie Klientami</a></li>
                <li><a href="bibliotekarze_administrator.php">Zarządzanie Bibliotekarzami</a></li>
                <li><a href="ksiazki_administrator.php">Książki</a></li>
                <li><a href="historia_administrator.php">Historia</a></li>
                <li><a href="wylogowanie.php">Wyloguj się</a></li>
</ul>
</nav>

    <?php
    $sql = "SELECT * FROM `ksiazki` WHERE ID = $ID LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
  <div id="dodawanie_klienta"><h1>Dodawanie książki</h1>
    <div class="dodawanie_klienta">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
          <br /><label class="form-label">Nowy tytuł: </label><br />
            <input type="text" class="form-control" name="tytul_ksiazki" value="<?php echo $row['tytul_ksiazki'] ?>">
          </div>

          <div class="col">
          <br /><label class="form-label">Edytuj gatunek: </label><br />
            <input type="text" class="form-control" name="gatunek" value="<?php echo $row['gatunek'] ?>">
          </div>


          <div>
            <br /><button type="submit" name="submit">Zaktualizuj dane</button>
               <a href="ksiazki_administrator.php"><input type="button" value="Anuluj"></a>
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
</div>
</body>
</html>