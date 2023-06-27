<?php
    session_start();
    if (isset($_POST['email']))
    {
        $wszystko_OK=true;
        $login = $_POST['login'];
        
        if ((strlen($login)<4) || (strlen($login)>15))
        {
            $wszystko_OK=false;
            $_SESSION['e_login']="Login musi posiadać od 4 do 15 znaków.";
        }
         
        if (ctype_alnum($login)==false)
        {
            $wszystko_OK=false;
            $_SESSION['e_login']="Login może składać się tylko z liter i cyfr (bez polskich znaków).";
        }
         
        $email = $_POST['email'];
        $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
         
        if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
        {
            $wszystko_OK=false;
            $_SESSION['e_email']="Podaj poprawny adres e-mail.";
        }
         
        $haslo1 = $_POST['haslo1'];
        $haslo2 = $_POST['haslo2'];
         
        if ((strlen($haslo1)<4) || (strlen($haslo1)>20))
        {
            $wszystko_OK=false;
            $_SESSION['e_haslo']="Hasło musi posiadać od 4 do 15 znaków.";
        }
         
        if ($haslo1!=$haslo2)
        {
            $wszystko_OK=false;
            $_SESSION['e_haslo']="Podane hasła nie są identyczne.";
        }   

        if (!isset($_POST['regulamin']))
        {
            $wszystko_OK=false;
            $_SESSION['e_regulamin']="Potwierdź akceptację regulaminu.";
        }                    
         
        $_SESSION['fr_login'] = $login;
        $_SESSION['fr_email'] = $email;
        $_SESSION['fr_haslo1'] = $haslo1;
        $_SESSION['fr_haslo2'] = $haslo2;
        if (isset($_POST['regulamin'])) $_SESSION['fr_regulamin'] = true;
         
        require_once "baza.php";
        mysqli_report(MYSQLI_REPORT_STRICT);
         
        try
        {
            $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
            if ($polaczenie->connect_errno!=0)
            {
                throw new Exception(mysqli_connect_errno());
            }
            else
            {
                $rezultat = $polaczenie->query("SELECT id FROM klienci WHERE email='$email'");
                 
                if (!$rezultat) throw new Exception($polaczenie->error);
                 
                $ile_takich_maili = $rezultat->num_rows;
                if($ile_takich_maili>0)
                {
                    $wszystko_OK=false;
                    $_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail.";
                }       
 
                $rezultat = $polaczenie->query("SELECT id FROM klienci WHERE login='$login'");
                 
                if (!$rezultat) throw new Exception($polaczenie->error);
                 
                $ile_takich_loginow = $rezultat->num_rows;
                if($ile_takich_loginow>0)
                {
                    $wszystko_OK=false;
                    $_SESSION['e_login']="Niestety ten login jest już zajęty. Spróbuj użyć innego :)";
                }
                 
                if ($wszystko_OK==true)
                {
                     
                    if ($polaczenie->query("INSERT INTO klienci VALUES (NULL, '$login', '$email', '$haslo2', 'klient')"))
                    {
                        $_SESSION['udanarejestracja']=true;
                        header('Location: porejestracji.php');
                    }
                    else
                    {
                        throw new Exception($polaczenie->error);
                    }
                     
                }
                 
                $polaczenie->close();
            }
             
        }
        catch(Exception $e)
        {
            echo '<span style="color:red;">Błąd serwera. Przepraszamy za niedogodności.</span>';
            echo '<br />Informacja developerska: '.$e;
        }
         
    }
?>
 
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Rejestracja dla Klienta</title>
     
    <style>
        .error
        {
            color:red;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
 
<body>
     
    <form method="post">
     
        Login: <br /> <input type="text" value="<?php 
            if (isset($_SESSION['fr_login']))
            {
                echo $_SESSION['fr_login'];
                unset($_SESSION['fr_login']);
            }
        ?>" name="login" /><br /><br />
         
        <?php
            if (isset($_SESSION['e_login']))
            {
                echo '<div class="error">'.$_SESSION['e_login'].'</div>';
                unset($_SESSION['e_login']);
            }
        ?>
         
        E-mail: <br /> <input type="text" value="<?php
            if (isset($_SESSION['fr_email']))
            {
                echo $_SESSION['fr_email'];
                unset($_SESSION['fr_email']);
            }
        ?>" name="email" /><br /><br />
         
        <?php
            if (isset($_SESSION['e_email']))
            {
                echo '<div class="error">'.$_SESSION['e_email'].'</div>';
                unset($_SESSION['e_email']);
            }
        ?>
         
        Twoje hasło: <br /> <input type="password"  value="<?php
            if (isset($_SESSION['fr_haslo1']))
            {
                echo $_SESSION['fr_haslo1'];
                unset($_SESSION['fr_haslo1']);
            }
        ?>" name="haslo1" /><br /><br />
         
        <?php
            if (isset($_SESSION['e_haslo']))
            {
                echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
                unset($_SESSION['e_haslo']);
            }
        ?>       
         
        Powtórz hasło: <br /> <input type="password" value="<?php
            if (isset($_SESSION['fr_haslo2']))
            {
                echo $_SESSION['fr_haslo2'];
                unset($_SESSION['fr_haslo2']);
            }
        ?>" name="haslo2" /><br /><br />
         
        <label>
            <input type="checkbox" name="regulamin" <?php
            if (isset($_SESSION['fr_regulamin']))
            {
                echo "checked";
                unset($_SESSION['fr_regulamin']);
            }
                ?>/> Oświadczam, iż zapoznałem/-am się z treścią <a href="regulamin.html" target="_blank">Regulaminu Biblioteka VaDinci</a> i akceptuję jego treść. <br />
        </label>
         
        <?php
            if (isset($_SESSION['e_regulamin']))
            {
                echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
                unset($_SESSION['e_regulamin']);
            }
        ?>   
        <br />
         
        <input type="submit" value="Zarejestruj się" />
         
    </form>
</body>
</html>
