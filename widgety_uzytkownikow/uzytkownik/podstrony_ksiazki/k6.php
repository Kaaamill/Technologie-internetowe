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

                        <img src="../../../img/6.jpg" width="200">
                        <a href="Wypozyczenie.php" class="button">Wypożycz</a>

                </div>
                  <div class="description-container">
                                            <h1>Tytuł: Zbrodnia i kara</h1>
                                            <h3>Autor: Fiodor Dostojewski</h3>

                                            <strong>Opis:</strong>
                                            <p>"Zbrodnia i kara" to klasyczna powieść autorstwa Fiodora Dostojewskiego. Ta literacka arcydzieło porusza głębokie tematy moralności, winy i odkupienia.</p>

                                            <p>Główny bohater, Rodion Raskolnikow, to młody student, który wpada w spiralę zbrodni i kłamstw. Dręczony wewnętrznym konfliktem, postanawia zamordować starą lichwiarkę, wierząc, że ma prawo do jej bogactwa. Jednak zbrodnia ta pociąga za sobą konsekwencje, zarówno moralne, jak i psychologiczne, które zmuszają Raskolnikowa do zmierzenia się z własnym sumieniem.</p>

                                            <p>Powieść "Zbrodnia i kara" to głębokie studium ludzkiej psychiki i moralności. Dostojewski przedstawia nam skomplikowany świat moralny bohaterów, ukazując ich wewnętrzne rozterki i dążenie do pojednania z samym sobą. Książka porusza pytania o granicach moralności, wartości człowieka i możliwość wybaczania.</p>

                                            <p>Styl pisania Dostojewskiego jest pełen bogactwa emocjonalnego, a jego charakterystyczna narracja przyciąga czytelnika. "Zbrodnia i kara" to nie tylko opowieść o zbrodni i jej konsekwencjach, ale również o nadziei, odkupieniu i moralnej przemianie.</p>

                                            <p>Jeśli szukasz głębokiej i wpływowej literatury, "Zbrodnia i kara" jest pozycją, której nie możesz przegapić.</p>


                      </div> </div>
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
