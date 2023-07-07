<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wypożyczenie książi</title>
    <meta name="description" content="Biblioteka VaDinci">
    <link rel="stylesheet" href="../../css_styles/uzytkownik.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>

<body>
    <div class="main">
        <a href="strona_glowna_uzytkownik.php"><img class="logo " src="../../img/logo.png"
                style="border-radius: 25px; opacity: 95%;" /></a>
        <nav class="menu">
            <ul>
                <li><a href="strona_glowna_uzytkownik.php">Strona Główna</a></li>
                <li><a href="ksiazki_uzytkownik.php">Książki</a></li>
                <li><a href="historia_uzytkownik.php">Historia</a></li>
                <li><a href="wylogowanie.php">Wyloguj</a></li>
            </ul>
        </nav>

        <div id="dodawanie_klienta">
            <h1>KSIĄŻKI</h1>
            <?php
            $tytul_ksiazki = $_POST['tytul_ksiazki'];
            $login = $_POST['login'];

            $host = 'localhost';
            $user = 'root';
            $password = '';
            $database = 'biblioteka';

            $connection = mysqli_connect($host, $user, $password, $database);

            if (mysqli_connect_errno()) {
                echo "Błąd połączenia z bazą danych: " . mysqli_connect_error();
                exit();
            }


            $query = "INSERT INTO id_ksiazki (tytul_ksiazki, rezerwacja, czy_wypozyczona, data_wypozyczenia, czy_zwrocona, data_zwrotu, login) 
          VALUES ('$tytul_ksiazki', 'Tak', 'Nie', NULL, '', NULL, '$login')";


            $result = mysqli_query($connection, $query);


            if ($result) {
                echo "Dziękujemy za rezerwację książki. Zapraszamy po odbiór książki do naszej biblioteki :)";
            } else {
                echo "Błąd podczas wypożyczania książki.";
            }

            mysqli_close($connection);
            ?>

        </div>
        <footer>
            <nav class="nav">
                <h4 class="sm-header">Śledź nas na</h4>
                <div class="line"></div>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="https://www.facebook.com/collegiumdavinci" target="_blank" class="nav-link"><i
                                class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://twitter.com/CDV_Poznan" target="_blank" class="nav-link"><i
                                class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/collegium_da_vinci/" target="_blank" class="nav-link"><i
                                class="fab fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://cdv.pl" target="_blank" class="nav-link"><i class="fab fa-google"></i></a>
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