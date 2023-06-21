<?php
    session_start();
    session_unset();
    header('Location: logowanie_administrator.php');
?>