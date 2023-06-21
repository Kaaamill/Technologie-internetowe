<?php
    session_start();
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
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
    <title>Da Vinci</title>
    <meta name="description" content="Biblioteka Da Vinci">
    <link rel="stylesheet" href="uzytkownik.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>
<body>
    <div class="main">
        <a href="strona_glowna_uzytkownik.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
        <nav class="menu">
            <ul>
                <li><a href="strona_glowna_uzytkownik.php">Strona Główna</a></li>
                <li><a href="ksiazki_uzytkownik.php">Książki</a></li>
                <li><a href="">Audiobooki</a></li>
                <li><a href="historia_uzytkownik.php">Historia</a></li>
                <li><a href="../../index.html">Wyloguj</a></li>
            </ul>
        </nav>
        <h1>Książka miesiąca</h1>
        <article class="book_of_the_month">
            <!--<a href="https://www.bryk.pl/wypracowania/jezyk-polski/recenzje/6904-recenzja-trylogii-wladca-pierscieni-autorstwa-john-ronald-reuel-tolkiena.html">
                <img height="400" src="img/wp.jpg">
            </a>
            <img height="400" src="img/hpkf.jpg">
            <img height="400" src="img/biblia.jpg">
            <script>
                var images = document.getElementById('carousel1').getElementsByTagName('img');
                var currentImageIndex = 0;
                images[1].style.display = 'none';
                images[2].style.display = 'none';

                setInterval(function () {
                    images[currentImageIndex].style.display = 'none';
                    currentImageIndex = (currentImageIndex + 1) % images.length;
                    images[currentImageIndex].style.display = 'block';
                }, 3000);
            </script>-->
            <div class="book__body">
                <h2 class="book__title">Bibilia</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae,
                    reprehenderit! Neque consequatur velit...
                </p>
            </div>
        </article>
        <div id="carousel2">
            Nowe książki
            <a href="https://www.bryk.pl/wypracowania/jezyk-polski/recenzje/6904-recenzja-trylogii-wladca-pierscieni-autorstwa-john-ronald-reuel-tolkiena.html">
                <img height="400" src="../../img/wp.jpg">
            </a>
            <img height="400" src="../../img/hpkf.jpg">
            <img height="400" src="../../img/biblia.jpg">
            <script>
                var images = document.getElementById('carousel2').getElementsByTagName('img');
                var currentImageIndex = 0;
                images[1].style.display = 'none';
                images[2].style.display = 'none';

                setInterval(function () {
                    images[currentImageIndex].style.display = 'none';
                    currentImageIndex = (currentImageIndex + 1) % images.length;
                    images[currentImageIndex].style.display = 'block';
                }, 3000);
            </script>
        </div>
        <div id="carousel3">
            Np książki gdzie została ostatnia sztuka(?)
        </div>
    </div>
    <footer>
        <nav class="nav">
            <h4 class="sm-header">Śledź nas na</h4>
            <div class="line"></div>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fab fa-google"></i></a>
                </li>
            </ul>
        </nav>
        Bilbioteka Publiczna Da Vinci<br />
        Da_Vinci@gmail.com<br />
        ul. Tadeusza Kutrzeby 1, 61-710 Poznań<br />
        &copy; 2023 Da Vinci
    </footer>

    <?php
    if(isset($_SESSION['blad']))    echo $_SESSION['blad'];
    ?>


</body>
</html>
