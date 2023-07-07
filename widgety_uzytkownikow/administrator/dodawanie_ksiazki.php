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

if (isset($_POST["submit"])) {
   $tytul_ksiazki = $_POST['tytul_ksiazki'];
   $gatunek = $_POST['gatunek'];


   $sql = "INSERT INTO `ksiazki`(`ID`, `tytul_ksiazki`, `gatunek`) VALUES (NULL,'$tytul_ksiazki', '$gatunek')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: ksiazki_administrator.php?msg=Udało się dodać nową książkę.");
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
    <title>Dodawanie książki</title>
    <meta name="description" content="Biblioteka VaDinci">
    <link rel="stylesheet" href="../../css_styles/adminstrator_bibliotekarz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>

<body>

    <div class="main">
        <a href="strona_glowna_administrator.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
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

    <div id="dodawanie_ksiazki">
        <h1>DODAWANIE NOWEJ KSIĄŻKI</h1>
      </div>

      <div class="dodawanie_ksiazki">
         <form action="" method="post" style="width:50vw; min-width:300px;">
                  <label class="form-label">Tytuł nowej książki: </label><br />
                  <input type="text" class="form-control" name="tytul_ksiazki" placeholder="Tytuł">
               </div>
                    <br /><label class="form-label">Gatunek nowej książki: </label><br />
                    <input type="text" class="form-control" name="gatunek" placeholder="Gatunek">
               </div>
            <div>
            <br /><button type="submit" name="submit">Zapisz</button>
               <a href="ksiazki_administrator.php"><input type="button" value="Anuluj"></a>
            </div>
         </form>
      </div>
   </div>

</div>
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