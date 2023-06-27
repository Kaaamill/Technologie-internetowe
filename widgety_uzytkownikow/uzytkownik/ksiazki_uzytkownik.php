﻿<?php
    session_start();
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: strona_glowna_uzytkownik.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Książki</title>
    <meta name="description" content="Biblioteka VaDinci">
    <link rel="stylesheet" href="uzytkownik.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>
<body>
    <div class="main">
        <a href="ksiazki_uzytkownik.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
        <nav class="menu">
            <ul>
                <li><a href="strona_glowna_uzytkownik.php">Strona Główna</a></li>
                <li><a href="ksiazki_uzytkownik.php">Książki</a></li>
                <li><a href="historia_uzytkownik.php">Historia</a></li>
                <li><a href="wylogowanie.php">Wyloguj</a></li>
            </ul>
        </nav>
        <div class="menuKsiazki">
            <div class="container">
        <br>
        <div class="druga">
            <a href="Wypozyczenie.html" target="_blank" title="Zobacz recenzje">
                <div class="image-container">   <img src="img/wp.jpg" width="100"> <a href="Wypozyczenie.html" class="rent-button">Wypożycz</a> </div>
            </a><br>
            <a href="https://www.bryk.pl/wypracowania/jezyk-polski/recenzje/6904-recenzja-trylogii-wladca-pierscieni-autorstwa-john-ronald-reuel-tolkiena.html" target="_blank" title="Zobacz recenzje">Władca Pierścieni</a><br/><br/>
        </div>

        <div class="druga">
            <a href="Wypozyczenie.html" target="_blank" title="Zobacz recenzje">
                <div class="image-container"> <img width="100" src="img/hpkf.jpg" /> <a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                </div>
            </a><br/>
            <a href="https://www.bryk.pl/wypracowania/jezyk-polski/recenzje/1001776-recenzja-ksiazki-j-k-rowling-harry-potter-i-kamien-filozoficzny.html" target="_blank" title="Zobacz recenzje">Harry Potter i Kamień Filozoficzny</a>
        </div>

        <div class="druga">
            <a href="Wypozyczenie.html" target="_blank" title="Gra o tron (edycja ilustrowana)">
                <div class="image-container"> <img width="100" src="img/3.jpg"/><a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                </div>
            </a><br/>
            <a href="https://lubimyczytac.pl/ksiazka/3937616/gra-o-tron-edycja-ilustrowana" target="_blank" title="Zobacz recenzje">Gra o tron (edycja ilustrowana)</a>
        </div>

        <div class="druga">
            <a href="Wypozyczenie.html" target="_blank" title="Miecz przeznaczenia">
                <div class="image-container">  <img width="100" src="img/4.jpg" /><a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                </div>
            </a><br/>
            <a href="https://lubimyczytac.pl/ksiazka/240312/miecz-przeznaczenia" target="_blank" title="Zobacz recenzje">Miecz przeznaczenia</a>
        </div>

        <div class="druga">
            <a href="Wypozyczenie.html" target="_blank" title="Oskar i pani Róża">
                <div class="image-container">  <img width="100" src="img/5.jpg" /><a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                </div>
            </a><br/>
            <a href="https://lubimyczytac.pl/ksiazka/4953463/oskar-i-pani-roza" target="_blank" title="Zobacz recenzje">Oskar i pani Róża</a>
        </div>

        <div class="druga">
            <a href="https://lubimyczytac.pl/ksiazka/5053602/zbrodnia-i-kara" target="_blank" title="Zbrodnia i kara">
                <div class="image-container">     <img width="100" src="img/6.jpg" /><a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                </div>
            </a><br/>
            <a href="https://lubimyczytac.pl/ksiazka/5053602/zbrodnia-i-kara" target="_blank" title="Zobacz recenzje">Zbrodnia i kara</a>
        </div>

        <div class="druga">
            <a href="https://lubimyczytac.pl/ksiazka/240512/krew-elfow" target="_blank" title="Krew elfów">
                <div class="image-container">    <img width="100" src="img/7.jpg" /><a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                </div>
            </a><br/>
            <a href="https://lubimyczytac.pl/ksiazka/240512/krew-elfow" target="_blank" title="Zobacz recenzje">Krew elfów</a>
        </div>

        <div class="druga">
            <a href="https://lubimyczytac.pl/ksiazka/27644/mezczyzni-ktorzy-nienawidza-kobiet" target="_blank" title="Mężczyźni, którzy nienawidzą kobiet">
                <div class="image-container">  <img width="100" src="img/8.jpg" /><a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                </div>
            </a><br/>
            <a href="https://lubimyczytac.pl/ksiazka/27644/mezczyzni-ktorzy-nienawidza-kobiet" target="_blank" title="Zobacz recenzje">Mężczyźni, którzy nienawidzą kobiet</a>
        </div>

        <div class="druga">
            <a href="https://lubimyczytac.pl/ksiazka/4862898/igrzyska-smierci" target="_blank" title="Igrzyska śmierci">
                <div class="image-container">   <img width="100" src="img/9.jpg" /><a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                </div>
            </a><br/>
            <a href="https://lubimyczytac.pl/ksiazka/4862898/igrzyska-smierci" target="_blank" title="Zobacz recenzje">Igrzyska śmierci</a>
        </div>

        <div class="druga">
            <a href="https://lubimyczytac.pl/ksiazka/51794/zmierzch" target="_blank" title="Zmierzch">
                <div class="image-container">   <img width="100" src="img/10.jpg" /><a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                </div>
            </a><br/>
            <a href="https://lubimyczytac.pl/ksiazka/51794/zmierzch" target="_blank" title="Zobacz recenzje">Zmierzch</a>
        </div>

        <div class="druga">
            <a href="https://lubimyczytac.pl/ksiazka/240310/ostatnie-zyczenie" target="_blank" title="Ostatnie życzenie">
                <div class="image-container">   <img width="100" src="img/11.jpg" /><a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                </div>
            </a><br/>
            <a href="https://lubimyczytac.pl/ksiazka/240310/ostatnie-zyczenie" target="_blank" title="Zobacz recenzje">Ostatnie życzenie</a>
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
</body>
</html>