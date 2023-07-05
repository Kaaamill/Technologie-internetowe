<?php
    session_start();
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: ../../widgety_uzytkownikow/bibliotekarz/strona_glowna_bibiliotekarz.php');
        exit();
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];

        // Sprawdź poprawność loginu i hasła
        if ($login === 'login' && $haslo === 'haslo') {
            // Ustawienie pliku cookie
            echo '<script>document.cookie = "zalogowany=true; expires=Thu, 1 Jan 2024 00:00:00 UTC; path=/";</script>';

            header('Location: ../../widgety_uzytkownikow/bibliotekarz/strona_glowna_bibliotekarz.php');
            exit();
        } else {
            $_SESSION['blad'] = 'Błędny login lub hasło.';
            header('Location: logowaniebibliotekarz.php');
            exit();
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Logowanie dla Bibliotekarza</title>
    <meta name="description" content="Biblioteka VaDinci">
    <link rel="stylesheet" href="../../css_styles/panele_logowania.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
</head>
<body>
<div class="container">
    <a href="../../index.html"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
    <div id="box_logowanie">
        <h1>Panel Logowania</h1>
        <h2>Bibliotekarz</h2>
        <div id="logowanie">
            <form action="logowaniebibliotekarz.php" method="post">
                <div id="username">
                    Login: <br /> <input type="text" name="login" /> <br /><br />
                </div>
                <div id="password">
                    Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
                </div>
                <div id="button">
                    <input type="submit" value="Zaloguj" />
                </div>

            <?php
            if(isset($_SESSION['blad']))    echo $_SESSION['blad'];
            ?>
        </div>
    </form>
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