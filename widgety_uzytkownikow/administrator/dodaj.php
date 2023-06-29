<?php
    session_start();
    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: ../../index.html');
        exit();
    }
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "biblioteka";

$connection = new mysqli($servername, $username, $password, $database);

$login = "";
$email = "";
$haslo2 = "";
$uprawnienia = 'klient';

{
     
    if ($connection->query("INSERT INTO klienci VALUES (NULL, '$login', '$email', '$haslo2', 'klient')"))
    {
        $_SESSION['udanarejestracja']=true;
        header('Location: powodzenie.php');
    }
    else
    {
        throw new Exception($connection->error);
    }
     
}
 
$polaczenie->close(); 

    do {
        if ( empty($login) || empty($email) || empty($haslo2) ) {
            $errorMessage = "Proszę o wypełnienie wszystkich pul.";
            break;
        }

        $sql = "INSERT INTO klienci (login, email, haslo2, uprawnienia) " . 
        "VALUES ('$login', '$email', '$haslo2', '$uprawnienia')";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Niepoprawna kwerenda: " . $connection->error;
            break;
        }

        $login = "";
        $email = "";
        $haslo2 = "";
        $uprawnienia = 'klient';
        
        $successMessage = "Udało się dodać Klienta!";

    } while (false);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dodawanie Klienta</title>
    <meta name="description" content="Biblioteka VaDinci">
    <link rel="stylesheet" href="../adminstrator_bibliotekarz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>
<body>
    <div class="main">
        <a href="dodaj.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
        <nav class="menu">
            <ul>
                <li><a href="strona_glowna_administrator.php">Strona Główna</a></li>
                <li><a href="ksiazki_administrator.php">Książki</a></li>
                <li><a href="uzytkownicy_administrator.php">Użytkownicy</a></li>
                <li><a href="historia_administrator.php">Historia</a></li>
                <li><a href="wylogowanie.php">Wyloguj</a></li>
            </ul>
        </nav>
        <h1>Panel dodawania nowego Klienta</h1>

        <form method="post">
            Login dla nowego Klienta: <br /> <input type="text" value="<?php echo $login; ?>"><br /><br />
            Adres e-mail dla nowego Klienta: <br /> <input type="email" value="<?php echo $email; ?>"><br /><br />
            Hasło dla nowego Klienta: <br /> <input type="password" value="<?php echo $haslo2; ?>"><br /><br />



            <input type="submit" value="Dodaj Klienta"></a> <a href="uzytkownicy_administrator.php"><input type="button" value="Anuluj"></a>
