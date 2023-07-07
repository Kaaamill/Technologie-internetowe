<?php
    session_start();
    if (!isset($_SESSION['zalogowany']))
    {
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
    <title>Rezerwacje i zwroty</title>
    <meta name="description" content="Biblioteka VaDinci">
    <link rel="stylesheet" href="../../css_styles/adminstrator_bibliotekarz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>
<body>
<div class="container">
    <div class="main">
        <a href="strona_glowna_bibliotekarz.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
        <nav class="menu">
            <ul>
                <li><a href="strona_glowna_bibliotekarz.php">Strona Główna</a></li>
                <li><a href="ksiazki_bibliotekarz.php">Książki</a></li>
                <li><a href="rezerwacje_bibliotekarz.php">Rezerwacje</a></li>
                <li><a href="historia_bibliotekarz.php">Historia</a></li>
                <li><a href="wylogowanie.php">Wyloguj</a></li>
            </ul>
        </nav>

  <div id="main_ksiazki">
            <h1>REZERWACJE I ZWROTY</h1>
            <div id="tabela_ksiazki">
                <div class="table-wrapper">
                <table>
                    <tr>
                        <th>TYTUŁ KSIĄŻKI</th>
                        <th>REZERWACJA</th>
                        <th>CZY WYPOŻYCZONA</th>
                        <th>DATA WYPOŻYCZENIA</th>
                        <th>ZWRÓCONA</th>
                        <th>DATA ZWROTU</th>
                        <th>LOGIN OSOBY WYPOŻYCZAJĄCEJ</th>
                        <th>OPERACJE</th>
                    </tr>
        <?php
        $sql = "SELECT * FROM `id_ksiazki`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["tytul_ksiazki"] ?></td>
            <td><?php echo $row["rezerwacja"] ?></td>
            <td><?php echo $row["czy_wypozyczona"] ?></td>
            <td><?php echo $row["data_wypozyczenia"] ?></td>
            <td><?php echo $row["czy_zwrocona"] ?></td>
            <td><?php echo $row["data_zwrotu"] ?></td>
            <td><?php echo $row["login"] ?></td>
          
            <td>
            <a href="edycja_rezerwacji.php?ID=<?php echo $row["ID"] ?>">Edytuj</i></a><br />

            </td>
          </tr> 

        <?php
        }
        ?>
        </table>
    </div>
    
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