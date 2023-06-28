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
    <title>Strona główna</title>
    <meta name="description" content="Biblioteka VaDinci">
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
                <li><a href="historia_uzytkownik.php">Historia</a></li>
                <li><a href="wylogowanie.php">Wyloguj</a></li>
            </ul>
        </nav>
        <h1>POLECAMY:</h1>

    <div class="scroll-container">
    <div class="books-container">

        <div class="pierwsza">
            <a href="Wypozyczenie.html" target="_blank" title="Zobacz recenzje">
                <div class="image-container">   <img src="img/wp.jpg" width="100"> <a href="Wypozyczenie.html" class="rent-button">Wypożycz</a> </div>
            </a><br>
            <a href="https://www.bryk.pl/wypracowania/jezyk-polski/recenzje/6904-recenzja-trylogii-wladca-pierscieni-autorstwa-john-ronald-reuel-tolkiena.html" target="_blank" title="Zobacz recenzje">Władca Pierścieni</a><br/><br/>
        </div>

        <div class="pierwsza">
            <a href="Wypozyczenie.html" target="_blank" title="Zobacz recenzje">
                <div class="image-container"> <img width="100" src="img/hpkf.jpg" /> <a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                </div>
            </a><br/>
            <a href="https://www.bryk.pl/wypracowania/jezyk-polski/recenzje/1001776-recenzja-ksiazki-j-k-rowling-harry-potter-i-kamien-filozoficzny.html" target="_blank" title="Zobacz recenzje">Harry Potter i Kamień Filozoficzny</a>
        </div>

        <div class="pierwsza">
            <a href="Wypozyczenie.html" target="_blank" title="Oskar i pani Róża">
                <div class="image-container">  <img width="100" src="img/5.jpg" /><a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                </div>
            </a><br/>
            <a href="https://lubimyczytac.pl/ksiazka/4953463/oskar-i-pani-roza" target="_blank" title="Zobacz recenzje">Oskar i pani Róża</a>
        </div>

        <br/><br/>

        <div class="pierwsza">
            <a href="https://lubimyczytac.pl/ksiazka/4862898/igrzyska-smierci" target="_blank" title="Igrzyska śmierci">
                <div class="image-container">   <img width="100" src="img/9.jpg" /><a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                </div>
            </a><br/>
            <a href="https://lubimyczytac.pl/ksiazka/4862898/igrzyska-smierci" target="_blank" title="Zobacz recenzje">Igrzyska śmierci</a>
        </div>

        <div class="pierwsza">
            <a href="https://lubimyczytac.pl/ksiazka/51794/zmierzch" target="_blank" title="Zmierzch">
                <div class="image-container">   <img width="100" src="img/10.jpg" /><a href="Wypozyczenie.html" class="rent-button">Wypożycz</a>
                </div>
            </a><br/>
            <a href="https://lubimyczytac.pl/ksiazka/51794/zmierzch" target="_blank" title="Zobacz recenzje">Zmierzch</a>
        </div>

    </div>
</div>
<div class="arrow-right"><i class="fas fa-chevron-right"></i></div>

<script>
    const booksContainer = document.querySelector(".books-container");
    const arrowLeft = document.querySelector(".arrow-left");
    const arrowRight = document.querySelector(".arrow-right");

    arrowLeft.addEventListener("click", () => {
        booksContainer.scrollBy({ left: -200, behavior: "smooth" });
    });

    arrowRight.addEventListener("click", () => {
        booksContainer.scrollBy({ left: 200, behavior: "smooth" });
    });
</script>
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