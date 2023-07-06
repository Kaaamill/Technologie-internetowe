<?php
session_start();
if (!isset($_SESSION['zalogowany'])) {
    header('Location: ../../index.html');
    exit();
}

// Obsługa formularza wyszukiwania
if (isset($_GET['fraza'])) {
    $fraza = $_GET['fraza'];

    // Przekierowanie na stronę z wynikami wyszukiwania
    header("Location: wyniki_wyszukiwania.php?fraza=$fraza");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Strona główna</title>
    <meta name="description" content="Biblioteka VaDinci">
    <link rel="stylesheet" href="../../css_styles/uzytkownik.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>
<body>
<div class="container">
    <div class="main">
        <a href="strona_glowna_uzytkownik.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
        <nav class="menu">
            <ul>
                <li class="special"><a href="strona_glowna_uzytkownik.php">Strona Główna</a></li>
                <li><a href="ksiazki_uzytkownik.php">Książki</a></li>
                <li><a href="historia_uzytkownik.php">Historia</a></li>
                <li><a href="wylogowanie.php">Wyloguj</a></li>
            </ul>
        </nav>
    </div>
    <h1>
        <form action="strona_glowna_uzytkownik.php" method="GET">
            <input type="text" name="fraza" placeholdeimgr="Wyszukaj ksiazke...">
            <button type="submit">Szukaj</button>
        </form>
    </h1>
    <h1>POLECAMY:</h1>


     <div class="books-container" style="display: flex; justify-content: center;">

          <div class="pierwsza">
              <a href="podstrony_ksiazki/k1.php" target="_blank" title="Zobacz recenzje">
                  <div class="image-container">   <img src="../../img//wp.jpg" width="100"> <a href="Wypozyczenie.html" class="rent-button">Wypożycz</a> </div>
              </a><br>
              <a href="podstrony_ksiazki/k1.php" target="_blank" title="Zobacz recenzje">Władca Pierścieni</a><br/><br/> </div>

          <div class="pierwsza">
              <a href="podstrony_ksiazki/k2.php" target="_blank" title="Zobacz recenzje">
                  <div class="image-container"> <img width="100" src="../../img/hpkf.jpg" /> <a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                  </div>
              </a><br/>
              <a href="podstrony_ksiazki/k2.php" target="_blank" title="Zobacz recenzje">Harry Potter i Kamień Filozoficzny</a>
          </div>
          <br/>
          <div class="pierwsza">
              <a href="podstrony_ksiazki/k9.php" target="_blank" title="Igrzyska śmierci">
                  <div class="image-container">   <img width="100" src="../../img/9.jpg" /><a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                  </div>
              </a><br/>
              <a href="podstrony_ksiazki/k9.php" target="_blank" title="Zobacz recenzje">Igrzyska śmierci</a>
          </div>

          <div class="pierwsza">
              <a href="podstrony_ksiazki/k10.php" target="_blank" title="Zmierzch">
                  <div class="image-container">   <img width="100" src="../../img/10.jpg" /><a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                  </div>
              </a><br/>
              <a href="podstrony_ksiazki/k10.php" target="_blank" title="Zobacz recenzje">Zmierzch</a>
          </div>
          <div class="pierwsza">
              <a href="podstrony_ksiazki/k11.php" target="_blank" title="Ostatnie życzenie">
                  <div class="image-container">   <img width="100" src="../../img/11.jpg" /><a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                  </div>
              </a><br/>
              <a href="podstrony_ksiazki/k11.php" target="_blank" title="Zobacz recenzje">Ostatnie życzenie</a>
          </div>

      </div>
      </div>
 <h1><a href="ksiazki_uzytkownik.php" target="_blank" class="button">Zobacz więcej pozycji</a></h1>

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
