<?php
    session_start();
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==false))
    {
        header('Location: strona_glowna_uzytkownik.php');
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Książki</title>
        <meta name="description" content="Biblioteka VaDinci">
        <link rel="stylesheet" href="../../css_styles/uzytkownik.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

    </head>
    <body>
       <div class="container">
           <div class="main">
               <a href="ksiazki_uzytkownik.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
               <nav class="menu">
                   <ul>
                       <li><a href="strona_glowna_uzytkownik.php">Strona Główna</a></li>
                       <li class="special"><a href="ksiazki_uzytkownik.php">Książki</a></li>
                       <li><a href="historia_uzytkownik.php">Historia</a></li>
                       <li><a href="wylogowanie.php">Wyloguj</a></li>
                   </ul>
               </nav>
               <br><br><br>
        <div id="logowanie">
            <form>
                <label for="username">Dziękujemy za wypożyczenie ksiązki</label>



                <div id="lower2">

                    <button type="button" style="text-align: center;color: dimgrey;background-color: #cccccc" onclick="window.location.href='strona_glowna_uzytkownik.php'">Powrót</button>

                </div> </div> <br><br><br><br><footer>
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