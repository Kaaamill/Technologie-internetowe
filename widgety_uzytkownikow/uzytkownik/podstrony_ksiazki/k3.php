<?php
    session_start();
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==false))
    {
        header('Location: strona_glowna_uzytkownik.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="podstrona.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Strona główna</title>
    <meta name="description" content="Biblioteka VaDinci">
    <link rel="stylesheet" href="../../../css_styles/uzytkownik.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>
    <body>
      <div class="container">
          <a href="../strona_glowna_uzytkownik.php"><img class="logo " src="../../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
          <nav class="menu">

                      <ul>
                          <li><a href="../strona_glowna_uzytkownik.php">Strona Główna</a></li>
                          <li class="special"><a href="../ksiazki_uzytkownik.php">Książki</a></li>
                          <li><a href="../historia_uzytkownik.php">Historia</a></li>
                          <li><a href="../wylogowanie.php">Wyloguj</a></li>
                      </ul>
                  </nav>
        <br><br><br>
         <div class="trzecia">
                <div class="image-container_2">

                        <img src="../../../img/3.jpg" width="200">
                        <a href="Wypozyczenie.php" class="button">Wypożycz</a>

                </div>
                 <div class="description-container">
                        <h1>Tytuł: Gra o tron edycja ilustrowana</h1>
                        <h3>Autor: George R.R. Martin</h3>

                        <strong>Opis:</strong>
                        <p>"Gra o tron edycja ilustrowana" to wyjątkowe wydanie bestsellerowej sagi fantasy autorstwa George'a R.R. Martina. Książka przenosi czytelnika do pełnego intryg i magii świata Westeros, gdzie szlachetne rody rywalizują o władzę i przeżycie.</p>

                        <p>Historia skupia się na losach wielu bohaterów, którzy stają przed niebezpieczeństwami i wyzwaniami w brutalnym świecie pełnym intryg, zdrad i walki o tron Żelaznych Wysp. Intrygi polityczne, walki wojowników, tajemnicze istoty i magia splatają się w tej niesamowitej opowieści.</p>

                        <p>Edycja ilustrowana dostarcza czytelnikowi wizualnych wrażeń, prezentując ilustracje i grafiki, które dodatkowo ożywiają świat przedstawiony przez autora. Szczegółowe rysunki postaci, miejsc i ważnych wydarzeń wzbogacają doświadczenie czytelnika i pomagają mu lepiej zrozumieć opisywaną historię.</p>

                        <p>"Gra o tron edycja ilustrowana" to połączenie doskonałej narracji George'a R.R. Martina z artystycznym pięknem ilustracji. Ta wyjątkowa książka z pewnością przypadnie do gustu fanom sagi oraz miłośnikom fantasy, którzy chcą jeszcze głębiej zanurzyć się w świecie Westeros.</p>

                        <p>Jeśli lubisz historie pełne intryg, polityki, walki o władzę i tajemnicze tło, "Gra o tron edycja ilustrowana" to lektura, której nie możesz przegapić.</p></div>
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
            </div>

            </body>
</html>
