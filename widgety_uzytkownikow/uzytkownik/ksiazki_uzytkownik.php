<?php
session_start();
if (!isset($_SESSION['zalogowany'])) {
    header('Location: ../../index.html');
    exit();
}
?>

<?php
include "baza.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Książki</title>
    <meta name="description" content="Biblioteka VaDinci">
    <link rel="stylesheet" href="../../css_styles/adminstrator_bibliotekarz.css">
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
                    <li class="special"><a href="ksiazki_uzytkownik.php">Książki</a></li>
                    <li><a href="historia_uzytkownik.php">Historia</a></li>
                    <li><a href="wylogowanie.php">Wyloguj</a></li>
                </ul>
            </nav>
            <br>
            <div class="container_2">

                <br>
                <div id="main_ksiazki">
                    <h1>KSIĄŻKI</h1>
                    <form method="post" action="wypozyczenie_ksiazki.php">
                        <label for="tytul_ksiazki">Wybierz tytuł książki:</label>
                        <select name="tytul_ksiazki" id="tytul_ksiazki" required>
                            <?php
                            $host = 'localhost';
                            $user = 'root';
                            $password = '';
                            $database = 'biblioteka';

                            $connection = mysqli_connect($host, $user, $password, $database);

                            if (mysqli_connect_errno()) {
                                echo "Błąd połączenia z bazą danych: " . mysqli_connect_error();
                                exit();
                            }

                            $query = "SELECT tytul_ksiazki FROM ksiazki";
                            $result = mysqli_query($connection, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                $tytul_ksiazki = $row['tytul_ksiazki'];
                                echo "<option value=\"$tytul_ksiazki\">$tytul_ksiazki</option>";
                            }

                            mysqli_close($connection);
                            ?>
                        </select>
                        <input type="hidden" name="login" value="<?php echo $_SESSION['login']; ?>">
                        <input type="submit" value="Zarezerwuj" name="wypozycz">
                    </form>
                    <div id="tabela_ksiazki">
                        <table>
                            <tr>
                                <th>TYTUŁ KSIĄŻKI</th>
                                <th>GATUNEK</th>
                                <th>OPIS KSIĄŻKI</th>
                            </tr>
                            <?php
                            $sql = "SELECT * FROM `ksiazki`";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row["tytul_ksiazki"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["gatunek"] ?>
                                    </td>
                                    <td>
                                        <?php echo '<a href="'. $row["szczegoly"] . '">Kliknij tutaj by dowiedzieć się więcej o książce</a>'; ?>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
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