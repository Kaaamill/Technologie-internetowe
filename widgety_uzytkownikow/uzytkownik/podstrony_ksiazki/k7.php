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
    <link rel="stylesheet" href="../../../css_styles/podstrona.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>
    <body>
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

                                         <img src="../../../img/7.jpg" width="200">
                                         <a href="Wypozyczenie.html" class="button">Wypożycz</a>

                                 </div>
                   <div class="description-container">
                           <h1>Tytuł: Krew elfów</h1>
                           <h3>Autor: Andrzej Sapkowski</h3>

                           <strong>Opis:</strong>
                           <p>"Krew elfów" to trzeci tom w serii o wiedźminie autorstwa Andrzeja Sapkowskiego. Ta epicka saga fantasy przenosi czytelnika do świata pełnego magii, potworów i politycznych intryg.</p>

                           <p>W tej części serii główny bohater, wiedźmin Geralt z Rivii, staje w obliczu nowych wyzwań. Powierzone mu zadanie polega na ochronie Ciri, tajemniczej dziewczyny z mocami magicznymi, która jest kluczem do przyszłości świata. Geralt musi szukać sojuszników i odkryć tajemnice przeszłości Ciri, by ją chronić przed siłami zła.</p>

                           <p>"Krew elfów" to pełna przygód podróż przez kontynent zamieszkały przez różne rasy, takie jak elfy, krasnoludy, czarodzieje i ludzie. Sapkowski mistrzowsko tworzy złożony świat fantasy, łączący elementy mitologii słowiańskiej z własnymi pomysłami, co nadaje opowieści unikalny charakter.</p>

                           <p>Książka nie tylko skupia się na wartkiej akcji i walkach, ale także na rozwijaniu postaci i ich relacjach. Sapkowski przedstawia skomplikowane moralne dylematy, polityczne intrygi oraz refleksje na temat natury człowieka. Dialogi są pełne inteligencji, a narracja wciąga czytelnika od pierwszych stron.</p>

                           <p>"Krew elfów" to lektura dla miłośników mrocznej fantastyki, której nie brakuje intryg, emocji i nieprzewidywalnych zwrotów akcji. Jeśli jesteś fanem serii o wiedźminie, ta książka jest kolejnym niezwykłym rozdziałem w ich przygodach.</p>


                       </div>
                </div>
                </body>
</html>
