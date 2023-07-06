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

                        <img src="../../../img/hpkf.jpg" width="200">
                        <a href="Wypozyczenie.php" class="button">Wypożycz</a>

                </div>
                <div class="description-container">
                    <h1>Tytuł: Harry Potter i Kamień Filozoficzny</h1>
                           <h3>Autor: J.K. Rowling</h3>

                           <strong>Opis:</strong>
                           <p>"Harry Potter i Kamień Filozoficzny" to pierwsza część niesamowitej serii powieści fantasy autorstwa J.K. Rowling. Książka przenosi czytelnika do magicznego świata pełnego czarodziejów, czarów i przygód.</p>

                           <p>Historia skupia się na młodym chłopcu o imieniu Harry Potter, który dowiaduje się, że jest czarodziejem i został zaproszony do Szkoły Magii i Czarodziejstwa Hogwart. Tam poznaje nowych przyjaciół, odkrywa sekrety magicznego świata i staje w obliczu niebezpieczeństw.</p>

                           <p>Kamień Filozoficzny, tajemniczy artefakt, odgrywa ważną rolę w fabule. Harry i jego przyjaciele wyruszają w niebezpieczną podróż, aby go odnaleźć i zapobiec jego wpadnięciu w złe ręce. Podczas swojej przygody Harry musi pokonać trudności, stawić czoła ciemnym siłom i odkryć swoje prawdziwe dziedzictwo.</p>

                           <p>"Harry Potter i Kamień Filozoficzny" to nie tylko historia czarów i magii, ale także opowieść o przyjaźni, odwadze i szukaniu swojego miejsca w świecie. J.K. Rowling stworzyła bogaty i fascynujący świat, który wciąga czytelnika od pierwszych stron i zapewnia niezapomniane emocje.</p>

                           <p>Ta powieść stała się światowym fenomenem, zdobywając serca czytelników na całym świecie. Jeśli jesteś fanem magii, przygód i niezwykłych historii, "Harry Potter i Kamień Filozoficzny" to pozycja, którą musisz przeczytać.</p>
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
            </div>

            </body>
</html>
