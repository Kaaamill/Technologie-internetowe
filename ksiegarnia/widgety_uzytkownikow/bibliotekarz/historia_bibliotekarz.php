﻿<?php
    session_start();
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: strona_glowna_bibliotekarz.php');
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
    <link rel="stylesheet" href="../adminstrator_bibliotekarz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>
<body>
    <div class="main">
        <a href="strona_glowna_bibliotekarz.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
        <nav class="menu">
            <ul>
                <li><a href="strona_glowna_bibliotekarz.php">Strona Główna</a></li>
                <li><a href="ksiazki_bibliotekarz.php">Książki</a></li>
                <li><a href="">Audiobooki</a></li>
                <li><a href="uzytkownicy_bibliotekarz.php">Użytkownicy</a></li>
                <li><a href="historia_bibliotekarz.php">Historia</a></li>
                <li><a href="../../index.html">Wyloguj</a></li>
            </ul>
        </nav>
        <div id="main_historia">
            <h1>Historia</h1>
            <div id="tabela_historia">
                <table>
                    <tr>
                        <th>Tytuł książki</th>
                        <th>Kto wypożyczył</th>
                        <th>Data wypożyczenia</th>
                        <th>Data zwrotu</th>
                    </tr>
                    <tr>
                        <td>Dane 1</td>
                        <td>Dane 2</td>
                        <td>Dane 3</td>
                        <td>Dane 3</td>
                    </tr>
                    <tr>
                        <td>Dane 4</td>
                        <td>Dane 5</td>
                        <td>Dane 6</td>
                        <td>Dane 3</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
    <footer>
        <nav class="nav">
            <h4 class="sm-header">Śledź nas na</h4>
            <div class="line"></div>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fab fa-google"></i></a>
                </li>
            </ul>
        </nav>
        Bilbioteka Publiczna Da Vinci<br />
        Da_Vinci@gmail.com<br />
        ul. Tadeusza Kutrzeby 1, 61-710 Poznań<br />
        &copy; 2023 Da Vinci
    </footer>

        <?php
    if(isset($_SESSION['blad']))    echo $_SESSION['blad'];
    echo "<p>Witaj ".$_SESSION['login'].'! [ <a href="../../panele_logowania/bibliotekarz/wylogowanie.php">Logowanie się powiodło! Możesz się wylogować :)</a> ]</p>';
    echo "<p>
        <b>E-mail</b>: ".$_SESSION['email'];
    ?>


</body>
</html>
