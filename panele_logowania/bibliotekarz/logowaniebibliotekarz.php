<?php
    session_start();
    if ((!isset($_POST['login'])) || (!isset($_POST['haslo2'])))
    {
        header('Location: ../../index.html');
        exit();
    }
 
    require_once "bazabibliotekarz.php";
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
    if ($polaczenie->connect_errno!=0)
    {
        echo "Error: ".$polaczenie->connect_errno;
    }
    else
    {
        $login = $_POST['login'];
        $haslo2 = $_POST['haslo2'];
        $login = htmlentities($login, ENT_QUOTES, "UTF-8");
        $haslo2 = htmlentities($haslo2, ENT_QUOTES, "UTF-8");
        if ($rezultat = @$polaczenie->query(
        sprintf("SELECT * FROM bibliotekarze WHERE login='%s' AND haslo2='%s'",
        mysqli_real_escape_string($polaczenie,$login),
        mysqli_real_escape_string($polaczenie,$haslo2))))
        {
            $ilu_userow = $rezultat->num_rows;
            if($ilu_userow>0)
            {
                $_SESSION['zalogowany'] = true;
                $wiersz = $rezultat->fetch_assoc();

                $_SESSION['id'] = $wiersz['id'];
                $_SESSION['login'] = $wiersz['login'];
                $_SESSION['email'] = $wiersz['email'];
                $_SESSION['haslo2'] = $wiersz['haslo2'];
                 
                unset($_SESSION['blad']);
                $rezultat->free_result();
                header('Location: ../../widgety_uzytkownikow/bibliotekarz/strona_glowna_bibliotekarz.php');
            } else {
                $_SESSION['blad'] = '<span style="color:red">Podano nieprawidłowy login lub hasło, spróbuj ponownie.</span>';
                header('Location: logowanie_bibliotekarz.php'); 
            }  
        }
        $polaczenie->close();
    } 
?>