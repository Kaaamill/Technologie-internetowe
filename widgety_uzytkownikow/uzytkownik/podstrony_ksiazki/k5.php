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

                        <img src="../../../img/5.jpg" width="200">
                        <a href="Wypozyczenie.php" class="button">Wypożycz</a>

                </div>
                  <div class="description-container">
                          <h1>Tytuł: Oskar i pani Róża</h1>
                          <h3>Autor: Éric-Emmanuel Schmitt</h3>

                          <strong>Opis:</strong>
                          <p>"Oskar i pani Róża" to wzruszająca i pełna nadziei powieść autorstwa Érica-Emmanuela Schmitta. Ta opowieść porusza trudne tematy życia, śmierci i nadziei, skupiając się na losach małego chłopca, który zmaga się z nieuleczalną chorobą.</p>

                          <p>Główny bohater, Oskar, jest dziesięcioletnim chłopcem, który spędza swoje ostatnie dni w szpitalu. Jednak jego życie zmienia się, gdy poznaje tajemniczą postać - panią Różę, wolontariuszkę, która odwiedza ciężko chorych dzieci. Pani Róża proponuje Oskarowi grę, w której każdy dzień ma znaczenie tygodnia. Dzięki tej grze Oskar odkrywa siłę wyobraźni, odwagę i prawdziwą wartość życia.</p>

                          <p>Powieść "Oskar i pani Róża" porusza ważne pytania o sens życia, śmierci, cierpienia i nadziei. Schmitt z głębią i wrażliwością opowiada historię, która skłania do refleksji nad wartościami, które naprawdę się liczą. Książka ukazuje, jak ważne jest wspieranie się nawzajem w trudnych chwilach i odnajdywanie radości w małych rzeczach.</p>

                          <p>Éric-Emmanuel Schmitt doskonale oddaje emocje bohaterów, a jego piękne słowa i przemyślane obrazy pobudzają wyobraźnię czytelnika. "Oskar i pani Róża" to książka, która porusza serca i przypomina nam o wartościach, które czasem zapominamy doceniać w codziennym życiu.</p>

                          <p>Jeśli szukasz inspirującej powieści, która pobudzi Twoje myśli i otworzy Twoje serce, "Oskar i pani Róża" to lektura, którą z pewnością docenisz.</p>

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
