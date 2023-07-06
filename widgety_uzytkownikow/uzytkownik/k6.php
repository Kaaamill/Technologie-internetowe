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

                                         <img src="img/6.jpg" width="200">
                                         <a href="Wypozyczenie.html" class="button">Wypożycz</a>

                                 </div>
                    <div class="description-container">
                            <h1>Tytuł: Zbrodnia i kara</h1>
                            <h3>Autor: Dostojewski Fiodor</h3>

                            <strong>Opis:</strong>
                            <p>"Zbrodnia i kara" to niezwykła powieść, która przenosi czytelnika w mroczny świat zbrodni, kary i moralnych dylematów. Autor, Fiodor Dostojewski, przedstawia historię głównego bohatera, Rodiona Raskolnikowa, młodego studenta, który popada w głęboką rozterkę moralną.</p>
                            <p>Powieść rozpoczyna się w Petersburgu, gdzie Raskolnikow planuje popełnić morderstwo. Jego teoria zakłada, że niektórzy ludzie są ponad prawem i mają prawo dokonywać zbrodni dla wyższego celu. Jednak po dokonaniu czynu, Raskolnikow zaczyna odczuwać wyrzuty sumienia i wpada w spiralę wewnętrznego konfliktu.</p>
                            <p>"Zbrodnia i kara" to nie tylko historia przestępstwa i jego konsekwencji, ale także głęboka analiza psychologiczna bohatera. Dostojewski wnikliwie przedstawia wewnętrzne walki, lęki i cierpienia Raskolnikowa, odsłaniając złożone motywy jego działania.</p>
                            <p>Powieść porusza także szereg innych ważnych tematów, takich jak bieda, moralność, etyka i społeczne nierówności. Dostojewski ukazuje brutalną rzeczywistość życia w biednych dzielnicach, eksponując trudności, z jakimi borykają się bohaterowie.</p>
                            <p>Język powieści jest bogaty i pełen głębi. Dostojewski mistrzowsko ukazuje złożone emocje i myśli bohaterów, tworząc atmosferę napięcia i niepewności. Czytelnik zostaje wciągnięty w głąb psychologicznych labiryntów Raskolnikowa, towarzysząc mu w jego wewnętrznej podróży ku zrozumieniu i odkupieniu.</p>
                            <p>"Zbrodnia i kara" to klasyka literatury światowej, która nadal porusza czytelników swoją aktualnością i głębią przekazu. Jeśli jesteś zainteresowany literaturą psychologiczną, moralnymi dylematami i głębokimi refleksjami nad kondycją człowieka, ta książka jest niezwykłym dziełem, które powinieneś poznać. Przeżyj podróż przez mroczne ulice Petersburga i zgłębiaj tajemnice ludzkiej natury wraz z "Zbrodnią i karą".</p>
                </div>
                </body>
</html>
