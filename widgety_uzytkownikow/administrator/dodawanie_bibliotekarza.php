<?php
include "baza.php";

if (isset($_POST["submit"])) {
   $login = $_POST['login'];
   $email = $_POST['email'];
   $haslo2 = $_POST['haslo2'];
   $uprawnienia = $_POST['uprawnienia'];

   $sql = "INSERT INTO `bibliotekarze`(`ID`, `login`, `email`, `haslo2`, `uprawnienia`) VALUES (NULL,'$login','$email','$haslo2','bibliotekarz')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: bibliotekarze_administrator.php?msg=Udało się dodać nowego Klienta!");
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
    <title>Dodawanie Bibliotekarza</title>
    <meta name="description" content="Biblioteka VaDinci">
    <link rel="stylesheet" href="../../css_styles/adminstrator_bibliotekarz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>

<body>

    <div class="main">
        <a href="dodawanie_bibliotekarza.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
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

    <div id="dodawanie_klienta">
        <h1>DODAWANIE NOWEGO BIBLIOTEKARZA</h1>
      </div>

      <div class="dodawanie_klienta">
         <form action="" method="post" style="width:50vw; min-width:300px;">
                  <label class="form-label">Login dla nowego Bibliotekarza: </label><br />
                  <input type="text" class="form-control" name="login" placeholder="Login">
               </div>

               <div class="col">
               <br /><label class="form-label">Adres e-mail dla nowego Bibliotekarza</label><br />
                  <input type="email" class="form-control" name="email" placeholder="email@example.com">
               </div>
            </div>

            <div class="mb-3">
            <br /><label class="form-label">Hasło dla nowego Bibliotekarza</label><br />
               <input type="password" class="form-control" name="haslo2" placeholder="Hasło">
            </div>

            <div>
            <br /><button type="submit" name="submit">Zapisz</button>
               <a href="bibliotekarze_administrator.php"><input type="button" value="Anuluj"></a>
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