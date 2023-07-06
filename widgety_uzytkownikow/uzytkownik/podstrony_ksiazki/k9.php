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

                                         <img src="../../../img/9.jpg" width="200">
                                         <a href="Wypozyczenie.html" class="button">Wypożycz</a>

                                 </div>
                   <div class="description-container">
                           <h1>Tytuł: Igrzyska śmierci</h1>
                           <h3>Autor: Suzanne Collins</h3>

                           <strong>Opis:</strong>
                           <p>"Igrzyska śmierci" to pierwsza część bestsellerowej trylogii Suzanne Collins, która przenosi nas do mrocznego i niebezpiecznego świata Panem. Akcja rozgrywa się w postapokaliptycznym kraju, w którym rządzi tyraniczny Kapitol, a mieszkańcy są poddani brutalnym igrzyskom.</p>

                           <p>Historia skupia się na siedemnastoletniej bohaterce, Katniss Everdeen, która dobrowolnie zgłasza się jako ochotniczka, aby wziąć udział w Igrzyskach Śmierci. Igrzyska to bezlitosny turniej, w którym dwudziestu czterech nastolatków, reprezentujących dwanaście dystryktów Panem, musi walczyć o przetrwanie na arenie. Tylko jeden z nich może wyjść z igrzysk żywy.</p>

                           <p>Katniss staje przed niezwykłym wyzwaniem, gdyż nie tylko musi walczyć z innymi uczestnikami, ale również zmierzyć się z politycznymi intrygami, manipulacją mediów i kaprysem publiczności. Wszystko jest kontrolowane przez Kapitol, a igrzyska służą jako narzędzie do utrzymania władzy i zastraszenia społeczeństwa.</p>

                           <p>"Igrzyska śmierci" to powieść pełna suspensu, emocji i nieprzewidywalnych zwrotów akcji. Collins przedstawia nam surową rzeczywistość Panem, z jej biedą, niesprawiedliwością i walką o przetrwanie. Katniss, jako niezależna i silna bohaterka, staje się symbolem oporu przeciwko okrutnemu reżimowi Kapitolu.</p>

                           <p>Książka porusza ważne tematy, takie jak przemoc, manipulacja, władza i solidarność. W świecie igrzysk śmierci nie ma miejsca na słabość, ale Katniss stawia czoła wyzwaniom i stara się zachować swoje ludzkie wartości.</p>

                           <p>Jeśli interesujesz się literaturą dystopijną, w której akcja miesza się z głębszym przekazem społecznym, "Igrzyska śmierci" to powieść, która wciągnie cię od pierwszych stron i nie pozwoli oderwać się od lektury.</p>

                       </div>
                </div>
                </body>
</html>
