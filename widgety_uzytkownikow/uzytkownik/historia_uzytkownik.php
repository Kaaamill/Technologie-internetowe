<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Historia wypożyczeń</title>
    <meta name="description" content="Biblioteka VaDinci">
    <link rel="stylesheet" href="../../css_styles/uzytkownik.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>

<body>
    <div class="container">
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
            <div id="main_historia">
                <?php
                session_start();
                $host = 'localhost';
                $user = 'root';
                $password = '';
                $database = 'biblioteka';
                $connection = mysqli_connect($host, $user, $password, $database);
                if (mysqli_connect_errno()) {
                    echo "Błąd połączenia z bazą danych: " . mysqli_connect_error();
                    exit();
                }
                $login = $_SESSION['login'];
                $query = "SELECT * FROM id_ksiazki WHERE login = '$login'";
                $result = mysqli_query($connection, $query);
                if (mysqli_num_rows($result) > 0) {
                    echo "<h1>HISTORIA WYPOŻYCZEŃ</h1>";
                    echo "<table>";
                    echo "<tr>
    <th>Tytuł książki</th>
    <th>Rezerwacja</th>
    <th>Czy książka została wypożyczona</th>
    <th>Data wypożyczenia</th>
    <th>Czy książka została zwrócona</th>
    <th>Data zwrotu</th>
    </tr>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        $tytul_ksiazki = $row['tytul_ksiazki'];
                        $rezerwacja = $row['rezerwacja'];
                        $czy_wypozyczona = $row['czy_wypozyczona'];
                        $data_wypozyczenia = $row['data_wypozyczenia'];
                        $czy_zwrocona = $row['czy_zwrocona'];
                        $data_zwrotu = $row['data_zwrotu'];
                        echo "<tr>
        <td>$tytul_ksiazki</td>
        <td>$rezerwacja</td>
        <td>$czy_wypozyczona</td>
        <td>$data_wypozyczenia</td>
        <td>$czy_zwrocona</td>
        <td>$data_zwrotu</td>
        </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<h1>HISTORIA WYPOŻYCZEŃ</h1>";
                    echo "Brak wypożyczeń w historii.";
                }
                mysqli_close($connection);
                ?>
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
                                <a href="https://www.instagram.com/collegium_da_vinci/" target="_blank"
                                    class="nav-link"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="https://cdv.pl" target="_blank" class="nav-link"><i
                                        class="fab fa-google"></i></a>
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