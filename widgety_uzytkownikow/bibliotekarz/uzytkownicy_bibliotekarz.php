<?php
    session_start();
    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: ../../index.html');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zarządzanie użytkownikami</title>
    <meta name="description" content="Biblioteka VaDinci">
    <link rel="stylesheet" href="../adminstrator_bibliotekarz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>
<body>
<div class="container">
    <div class="main">
        <a href="uzytkownicy_bibliotekarz.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
        <nav class="menu">
            <ul>
                <li><a href="strona_glowna_bibliotekarz.php">Strona Główna</a></li>
                <li><a href="ksiazki_bibliotekarz.php">Książki</a></li>
                <li><a href="uzytkownicy_bibliotekarz.php">Użytkownicy</a></li>
                <li><a href="historia_bibliotekarz.php">Historia</a></li>
                <li><a href="wylogowanie.php">Wyloguj</a></li>
            </ul>
        </nav>
        <div id="main_uzytkownicy">
            <h1>UŻYTKOWNICY</h1>
            <h4>ZARZĄDZANIE UŻYTKOWNIKAMI</h4>
            <div id="tabela_uzytkownicy">
                <table>
                    <tr>
                        <th>Adres E-Mail</th>
                        <th>Uprawnienia</th>
                        <th>Operacje</th>
                    </tr>
                    <tr>
                        <td>Dane 1</td>
                        <td>Dane 2</td>
                        <td>Dane 3</td>
                    </tr>
                    <tr>
                        <td>Dane 4</td>
                        <td>Dane 5</td>
                        <td>Dane 6</td>
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
</div>
</body>
</html>