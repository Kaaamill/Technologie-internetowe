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

                        <img src="../../../img/wp.jpg" width="200">
                        <a href="Wypozyczenie.php" class="button">Wypożycz</a>

                </div>
                <div class="description-container">
                    <h1>Tytuł: Władca Pierścieni</h1>
                    <h3>Autor: J.R.R. Tolkien</h3>

                    <strong>Opis:</strong>
                    <p>"Władca Pierścieni" to niesamowita epicka saga fantasy, która przenosi czytelnika do magicznego świata pełnego przygód, bohaterów i tajemnic. Autor, J.R.R. Tolkien, stworzył niezwykłe uniwersum, w którym elfowie, krasnoludy, ludzie i hobbiti łączą siły, by powstrzymać rosnące zło.</p>

                    <p>Książka opowiada historię młodego hobbita imieniem Frodo Baggins, który zostaje wybrany, aby wyruszyć w niebezpieczną podróż, mającą na celu zniszczenie potężnego Pierścienia Władzy. W towarzystwie wiernych przyjaciół i bohaterów, Frodo musi stawić czoła przeciwnościom, pokonać mroczne siły i przemierzyć krainy, aby dotrzeć do Zagubionego Mordoru i zgubić Pierścień.</p>

                    <p>"Władca Pierścieni" to nie tylko historia walki dobra ze złem, ale także opowieść o przyjaźni, odwadze i poświęceniu. Tolkien mistrzowsko tworzy niesamowity świat, opisując szczegółowo krajobrazy, rasy, kultury i mitologię. Jego narracja wciąga czytelnika od pierwszych stron i nie pozwala oderwać się od książki.</p>

                    <p>Ta trzymająca w napięciu powieść oferuje niezapomniane przygody, wspaniałych bohaterów i pełen emocji finał. "Władca Pierścieni" to klasyka literatury fantasy, która zachwyca czytelników już od wielu lat.</p>

                    <p>Jeśli jesteś miłośnikiem fantastycznych opowieści pełnych magii i przygód, nie możesz przegapić tej niesamowitej sagi. Wejdź do świata Władcy Pierścieni i pozwól się zabrać w niezapomnianą podróż przez ten wciągający świat.</p>

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
