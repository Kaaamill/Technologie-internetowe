<?php

    session_start();
     
    if (!isset($_SESSION['udanarejestracja']))
    {
        header('Location: ../../index.html');
        exit();
    }
    else
    {
        unset($_SESSION['udanarejestracja']);
    }
     
    if (isset($_SESSION['fr_login'])) unset($_SESSION['fr_login']);
    if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
    if (isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
    if (isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
    if (isset($_SESSION['fr_regulamin'])) unset($_SESSION['fr_regulamin']);

    if (isset($_SESSION['e_login'])) unset($_SESSION['e_login']);
    if (isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
    if (isset($_SESSION['e_haslo2'])) unset($_SESSION['e_haslo2']);
    if (isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
     
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Udana rejestracja!</title>
</head>
<body>
    Dziękujemy za rejestrację w naszym serwisie!<br /><br />
     
    <a href="../../index.html">Zaloguj się na swoje konto i zapraszamy do wypożyczania książek z naszej Biblioteki VaDinci!</a>
    <br /><br />
 
</body>
</html>
