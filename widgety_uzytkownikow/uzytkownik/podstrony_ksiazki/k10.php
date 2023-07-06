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

                                         <img src="../../../img/10.jpg" width="200">
                                         <a href="Wypozyczenie.html" class="button">Wypożycz</a>

                                 </div>
                   <div class="description-container">
                           <h1>Tytuł: Zmierzch</h1>
                           <h3>Autor: Stephenie Meyer</h3>

                           <strong>Opis:</strong>
                           <p>"Zmierzch" to pierwsza część bestsellerowej serii autorstwa Stephenie Meyer, która zdobyła ogromną popularność na całym świecie. Książka opowiada historię miłosnego romansu między zwykłą dziewczyną, a tajemniczym wampirem.</p>

                           <p>Główna bohaterka, Bella Swan, przeprowadza się do małego miasteczka Forks, gdzie poznaje przystojnego Edwarda Cullena. Okazuje się, że Edward i jego rodzina są wampirami, co wprowadza element nadnaturalności i niebezpieczeństwa do fabuły.</p>

                           <p>Romans między Bellą a Edwardem rozwija się w trudnych okolicznościach, gdyż ich zakazana miłość staje się przedmiotem niebezpieczeństwa dla obojga. Autor wplecie czytelnika w pełen napięcia i emocji wampiryczny świat, w którym miłość jest testowana przez różne przeciwności losu.</p>

                           <p>Styl pisania Meyer jest lekki i płynny, co sprawia, że książka jest łatwa do czytania. Autorka potrafi budować atmosferę napięcia i wzbudzać ciekawość czytelnika co do dalszych losów bohaterów.</p>

                           <p>"Zmierzch" to połączenie romansu, tajemnicy i elementów nadprzyrodzonych, które przyciągają czytelnika i trzymają go w napięciu. Chociaż niektórzy mogą krytykować pewne aspekty fabuły, książka z pewnością przyciągnie fanów romansów i literatury fantasy.</p>

                           <p>Jeśli jesteś fanem romansów paranormalnych i poszukujesz historii pełnej namiętności i tajemniczości, "Zmierzch" jest książką, którą warto przeczytać.</p>

                       </div>
                </div>
                </body>
</html>
