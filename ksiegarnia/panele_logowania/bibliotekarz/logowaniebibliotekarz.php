<?php
    session_start();
    if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
    {
        header('Location: ../../widgety_uzytkownikow/bibliotekarz/strona_glowna_bibliotekarz.php');
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
        $haslo = $_POST['haslo'];
        $login = htmlentities($login, ENT_QUOTES, "UTF-8");
        $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
        if ($rezultat = @$polaczenie->query(
        sprintf("SELECT * FROM uzytkownicy WHERE login='%s' AND haslo='%s'",
        mysqli_real_escape_string($polaczenie,$login),
        mysqli_real_escape_string($polaczenie,$haslo))))
        {
            $ilu_userow = $rezultat->num_rows;
            if($ilu_userow>0)
            {
                $_SESSION['zalogowany'] = true;
                $wiersz = $rezultat->fetch_assoc();

                $_SESSION['id'] = $wiersz['id'];
                $_SESSION['login'] = $wiersz['login'];
                $_SESSION['email'] = $wiersz['email'];
                $_SESSION['haslo'] = $wiersz['haslo'];
                 
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