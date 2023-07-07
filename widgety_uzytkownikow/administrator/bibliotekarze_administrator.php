<?php
include "baza.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zarządzanie Bibliotekarzami</title>
    <meta name="description" content="Biblioteka VaDinci">
    <link rel="stylesheet" href="../../css_styles/adminstrator_bibliotekarz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>
<body>

    <div class="main">
        <a href="bibliotekarze_administrator.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
        <nav class="menu">
            <ul>
                <li><a href="strona_glowna_administrator.php">Strona Główna</a></li>
                <li><a href="klienci_administrator.php">Zarządzanie Klientami</a></li>
                <li class="special"><a href="bibliotekarze_administrator.php">Zarządzanie Bibliotekarzami</a></li>
                <li><a href="ksiazki_administrator.php">Książki</a></li>
                <li><a href="historia_administrator.php">Historia</a></li>
                <li><a href="wylogowanie.php">Wyloguj się</a></li>
</ul>
</nav>

  <div id="main_uzytkownicy">
            <h1>ZARZĄDZANIE BIBLIOTEKARZAMI</h1>
            <div id="tabela_bibliotekarze">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>LOGIN</th>
                        <th>ADRES E-MAIL</th>
                        <th>HASŁO</th>
                        <th>UPRAWNIENIA</th>
                        <th>OPERACJE</th>
                    </tr>
        <?php
        $sql = "SELECT * FROM `bibliotekarze`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["ID"] ?></td>
            <td><?php echo $row["login"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["haslo2"] ?></td>
            <td><?php echo $row["uprawnienia"] ?></td>
            
            <td>
            <a href="edycja_bibliotekarz.php?ID=<?php echo $row["ID"] ?>">Edytuj</i></a><br />
              <a href="usun_bibliotekarz.php?ID=<?php echo $row["ID"] ?>">Usuń</i></a>
            </td>
          </tr>

        <?php
        }
        ?>
      </table>


      <br /><a href="dodawanie_bibliotekarza.php"><input type="button" value="Dodaj Bibliotekarza"></a>

    
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
</body>
</html>