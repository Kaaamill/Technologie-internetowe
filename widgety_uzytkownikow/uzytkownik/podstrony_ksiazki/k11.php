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

                                         <img src="../../../img/11.jpg" width="200">
                                         <a href="Wypozyczenie.html" class="button">Wypożycz</a>

                                 </div>
                     <div class="description-container">
                           <h1>Tytuł: Ostatnie życzenie</h1>
                           <h3>Autor: Andrzej Sapkowski</h3>

                           <strong>Opis:</strong>
                           <p>"Ostatnie życzenie" to pierwsza książka z cyklu "Wiedźmin" autorstwa polskiego pisarza Andrzeja Sapkowskiego. Jest to zbiór opowiadań, które wprowadzają czytelnika w mroczny i niezwykle fascynujący świat wiedźmina Geraltа z Rivii.</p>

                           <p>Opowieść rozgrywa się w świecie fantasy pełnym magii, potworów i politycznych intryg. Geralt, wiedźmin o nadludzkich zdolnościach, jest wynajmowany przez różne osoby, aby walczyć z niebezpiecznymi stworzeniami i rozwiązywać zagadki. Jego charakterystyczną cechą jest srebrny włos oraz umiejętność posługiwania się magią i orężem.</p>

                           <p>Książka "Ostatnie życzenie" prezentuje czytelnikowi różnorodne przygody Geralta, które często stawiają go w trudnych sytuacjach moralnych. Sapkowski nie tylko przedstawia nam świat fantastyczny, ale również ukazuje złożoność ludzkich relacji, zagubienie jednostek wobec postawionych przed nimi wyborów oraz ciągłe poszukiwanie własnej tożsamości.</p>

                           <p>Sapkowski wyróżnia się swoim charakterystycznym stylem pisania, który łączy w sobie elementy groteski, humoru i ciemnej atmosfery. Jego dialogi są pełne finezji i inteligentnych odniesień. Autor porusza również ważne tematy społeczne, takie jak uprzedzenia, wojny czy równość.</p>

                           <p>"Ostatnie życzenie" to znakomity początek sagi, który zapewnia czytelnikowi niezapomniane przygody, głębokie postaci i wartką akcję. Książka ta zdobyła ogromne uznanie zarówno w Polsce, jak i na arenie międzynarodowej, przyciągając fanów fantastyki z całego świata.</p>

                           <p>Jeśli jesteś miłośnikiem mrocznych, nieprzewidywalnych opowieści z niezwykłym bohaterem, "Ostatnie życzenie" to lektura, której nie możesz przegapić.</p>

                       </div>
                </div>
                </body>
</html>
