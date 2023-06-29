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
    <div class="main">
        <a href="uzytkownicy_administrator.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
        <nav class="menu">
            <ul>
                <li><a href="strona_glowna_administrator.php">Strona Główna</a></li>
                <li><a href="ksiazki_administrator.php">Książki</a></li>
                <li><a href="uzytkownicy_administrator.php">Użytkownicy</a></li>
                <li><a href="historia_administrator.php">Historia</a></li>
                <li><a href="wylogowanie.php">Wyloguj</a></li>
            </ul>
        </nav>
        <div id="main_uzytkownicy">
            <h1>ZARZĄDZANIE UŻYTKOWNIKAMI</h1>
            <h4>LISTA UŻYTKOWNIKÓW</h4>
            <a class = "dodaj" href="dodaj.php" role="button">Dodaj Klienta</a>
                <br />
                
                <br />
            <div id="tabela_uzytkownicy">
                <thead>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Login</th>
                        <th>Adres e-mail</th>
                        <th>Hasło</th>
                        <th>Uprawnienia</th>
                        <th>Operacje</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $host = "localhost";
                    $db_user = "root";
                    $db_password = "";
                    $db_name = "biblioteka";

                    $connection = new mysqli($host, $db_user, $db_password, $db_name);
                    if ($connection->connect_error){
                        die("Connection failed: " . $connection->connect_error);
                    }

                    $sql = "SELECT * FROM klienci";
                    $result = $connection->query($sql);

                    if (!$result){
                        die("Invalid query: " . $connection->error);
                    }

                    while($row = $result->fetch_assoc()){
                        echo "
                        <tr>
                        <td>$row[ID]</td>
                        <td>$row[login]</td>
                        <td>$row[email]</td>
                        <td>$row[haslo2]</td>
                        <td>$row[uprawnienia]</td>

                    <td>
                        <a class='edycja' href='/klienci/edycja.php?id=$row[ID]'>Edytuj</a>
                        <a class='usun' href='/klienci/usun.php?id=$row[ID]'>Usuń</a> 
                    </td>
                </tr>";
                    }    
                ?>
                </tbody>
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
</body>
</html>
