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
<link rel="stylesheet" href="podstrona.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Strona główna</title>
    <meta name="description" content="Biblioteka VaDinci">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

</head>
    <body>
          <a href="strona_glowna_uzytkownik.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
          <nav class="menu">

                      <ul>
                          <li><a href="strona_glowna_uzytkownik.php">Strona Główna</a></li>
                          <li class="special"><a href="ksiazki_uzytkownik.php">Książki</a></li>
                          <li><a href="historia_uzytkownik.php">Historia</a></li>
                          <li><a href="wylogowanie.php">Wyloguj</a></li>
                      </ul>
                  </nav>
        <br><br><br>
         <div class="trzecia">
                 <div class="image-container_2">

                                         <img src="img/4.jpg" width="200">
                                         <a href="Wypozyczenie.html" class="button">Wypożycz</a>

                                 </div>
                    <div class="description-container">
                            <h1>Tytuł: Miecz przeznaczenia</h1>
                            <h3>Autor: Andrzej Sapkowski</h3>

                            <strong>Opis:</strong>
                            <p>"Miecz przeznaczenia" to kolejna ekscytująca część sagi o wiedźminie Geralcie, stworzonej przez polskiego pisarza Andrzeja Sapkowskiego. Ta powieść fantasy przenosi czytelnika do mrocznego świata, gdzie potwory, magia i polityczne intrygi dominują nad ludzkimi losami.</p>

                            <p>Główny bohater, wiedźmin Geralt z Rivii, to tajemniczy i samotny łowca potworów, który odrzuca stereotypy i niepisaną regułę neutralności. Geralt staje w obliczu różnorodnych wyzwań, spotykając na swojej drodze zarówno niebezpieczne istoty, jak i złowrogie siły polityczne.</p>

                            <p>W powieści "Miecz przeznaczenia" Geralt wyrusza na poszukiwanie swojego przeznaczenia, stając naprzeciwko zagrożeń, które zagrażają nie tylko jemu, ale również całemu światu. Przeplatając się wątki losów bohaterów, Sapkowski tworzy pełną napięcia historię, która skłania czytelnika do zastanowienia się nad naturą losu, moralności i trudnymi wyborami.</p>

                            <p>Andrzej Sapkowski w swojej charakterystycznej stylistyce tworzy żywe i autentyczne postaci, a także umiejętnie ukazuje złożoność świata, w którym każde działanie ma swoje konsekwencje. "Miecz przeznaczenia" to powieść, która nie tylko zapewnia wciągającą rozrywkę, ale również porusza ważne tematy i pobudza wyobraźnię czytelnika.</p>

                            <p>Jeśli jesteś fanem sagi o wiedźminie Geralcie i fascynuje Cię świat pełen magii, potworów i moralnych dylematów, "Miecz przeznaczenia" to lektura, której nie możesz się oprzeć.</p>

                        </div>
                </div>
                </body>
</html>
