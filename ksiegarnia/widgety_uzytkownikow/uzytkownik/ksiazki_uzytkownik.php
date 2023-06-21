<?php
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
    <title>Da Vinci</title>
    <meta name="description" content="Biblioteka Da Vinci">
    <link rel="stylesheet" href="uzytkownik.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>
<body>
    <div class="main">
        <a href="strona_glowna_uzytkownik.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
        <nav class="menu">
            <ul>
                <li><a href="strona_glowna_uzytkownik.php">Strona Główna</a></li>
                <li><a href="ksiazki_uzytkownik.php">Książki</a></li>
                <li><a href="">Audiobooki</a></li>
                <li><a href="historia_uzytkownik.php">Historia</a></li>
                <li><a href="../../index.html">Wyloguj</a></li>
            </ul>
        </nav>
        <div class="menuKsiazki">
            <br /><br /><div class="pierwsza">
                <a href="https://www.bryk.pl/wypracowania/jezyk-polski/recenzje/6904-recenzja-trylogii-wladca-pierscieni-autorstwa-john-ronald-reuel-tolkiena.html"
                   target="_blank" title="Zobacz recenzje">
                    <img src="../../img/wp.jpg" width="100">
                </a> </br>
                <a href="https://www.bryk.pl/wypracowania/jezyk-polski/recenzje/6904-recenzja-trylogii-wladca-pierscieni-autorstwa-john-ronald-reuel-tolkiena.html"
                   target="_blank" title="Zobacz recenzje"> Władca Pierścieni</a><br /><br />
            </div>
            <div class="pierwsza">

                <a href="https://www.bryk.pl/wypracowania/jezyk-polski/recenzje/1001776-recenzja-ksiazki-j-k-rowling-harry-potter-i-kamien-filozoficzny.html"
                   target="_blank" title="Harry Potter recenzja"> <img width="100" src="../../img/hpkf.jpg" /> </a> <br />
                <a href="https://www.bryk.pl/wypracowania/jezyk-polski/recenzje/1001776-recenzja-ksiazki-j-k-rowling-harry-potter-i-kamien-filozoficzny.html"
                   target="_blank" title="Zobacz recencje">Harry Potter i Kamień Filozoficzny </a>
            </div>
        </div>
        <div class="ksiazki">miejsce dla nowych ksiazek</div>

        <?php
        if(isset($_SESSION['blad']))    echo $_SESSION['blad'];
        ?>

</body>
</html>
