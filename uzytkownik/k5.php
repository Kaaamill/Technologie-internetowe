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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>
    <body>
          <a href="strona_glowna_uzytkownik.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
          <nav class="menu">

                      <ul>
                          <li><a href="strona_glowna_uzytkownik.php">Strona Główna</a></li>
                          <li class="special"><a href="ksiazki_uzytkownik.php">Książki</a></li>
                          <li><a href="historia_uzytkownik.php">Historia</a></li>
                          <li><a href="wylogowanie.php">Wyloguj</a></li>
                      </ul>
                  </nav>
        <br><br><br>
         <div class="trzecia">
                 <div class="image-container_2">

                                         <img src="img/5.jpg" width="200">
                                         <a href="Wypozyczenie.html" class="button">Wypożycz</a>

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

                        </div>
                </div>
                </body>
</html>
