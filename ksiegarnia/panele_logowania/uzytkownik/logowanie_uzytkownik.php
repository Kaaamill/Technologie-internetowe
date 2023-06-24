﻿<?php
    session_start();
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: ../../widgety_uzytkownikow/uzytkownik/strona_glowna_uzytkownik.php');
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
    <link rel="stylesheet" href="../panele_logowania.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
</head>
<body>
    <a href="../../index.html"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
    <div id="box_logowanie">
        <h1>Panel Logowania</h1>
        <h2>Użytkownik</h2>
        <div id="logowanie">
            <form action="logowanie.php" method="post">
                <label for="username">Login</label>
                <input type="text" id="username" name="username">
                <label for="password">Hasło:</label>
                <input type="password" id="password" name="password"
                <div id="lower">
                    <input type="submit" value="Zaloguj" />
                </div>
                <a href="rejestracja.php"><input type="button" value="Załóż konto"></a>
            </form>
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
    ?>
</body>
</html>