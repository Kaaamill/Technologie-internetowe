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

                                         <img src="../../../img/8.jpg" width="200">
                                         <a href="Wypozyczenie.html" class="button">Wypożycz</a>

                                 </div>
                    <div class="description-container">
                           <h1>Tytuł: Mężczyźni, którzy nienawidzą kobiet</h1>
                           <h3>Autor: Stieg Larsson</h3>

                           <strong>Opis:</strong>
                           <p>"Mężczyźni, którzy nienawidzą kobiet" jest pierwszą częścią bestsellerowej serii "Millennium" autorstwa Stiega Larssona. Ta szwedzka powieść kryminalna wciąga czytelnika w mroczny świat zbrodni, korupcji i skrywanych tajemnic.</p>

                           <p>Głównym bohaterem jest Mikael Blomkvist, znany dziennikarz i redaktor naczelny czasopisma "Millennium". Po nieudanej walce w sądzie z potężnym finansistą, Blomkvist zostaje zrezygnowany i wpada w osobiste kryzysy. Jednak pewnego dnia otrzymuje niezwykłą propozycję. Henrik Vanger, przedstawiciel potężnej szwedzkiej rodziny, prosi go o rozwiązanie zagadki zniknięcia swojej siostrzenicy sprzed wielu lat. Blomkvist zaczyna prowadzić dochodzenie, ale szybko odkrywa, że nie jest sam.</p>

                           <p>Lisbeth Salander, młoda i niezwykle zdolna hakerka z trudną przeszłością, staje się nieodłącznym towarzyszem Blomkvista w śledztwie. Razem próbują odkryć mroczne sekrety rodziny Vangerów oraz tropią seryjnego mordercę, który ukrywa się w cieniu.</p>

                           <p>"Mężczyźni, którzy nienawidzą kobiet" to powieść pełna napięcia, zaskakujących zwrotów akcji i misternie skonstruowanej intrygi. Larsson mistrzowsko ukazuje społeczne nierówności, przemoc wobec kobiet oraz korupcję w szwedzkim społeczeństwie. Jego bohaterowie są niezwykle wyrazistymi postaciami, z własnymi demonami i motywacjami.</p>

                           <p>Powieść porusza również tematykę związaną z wykorzystaniem technologii, szpiegostwem i manipulacją informacjami. Larsson przedstawia świat pełen tajemnic, w którym prawda często ukrywa się pod powierzchnią pozornej normalności.</p>

                           <p>Jeśli lubisz intrygujące powieści kryminalne, które poruszają ważne tematy społeczne, "Mężczyźni, którzy nienawidzą kobiet" to lektura, której nie możesz przegapić.</p>
                       </div>
                </div>
                </body>
</html>
