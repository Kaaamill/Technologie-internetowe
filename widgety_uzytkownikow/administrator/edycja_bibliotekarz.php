<?php
include "baza.php";
$ID = $_GET["ID"];

if (isset($_POST["submit"])) {
  $login = $_POST['login'];
  $email = $_POST['email'];
  $haslo2 = $_POST['haslo2'];

  $sql = "UPDATE `bibliotekarze` SET `login`='$login',`email`='$email',`haslo2`='$haslo2' WHERE ID = $ID";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: bibliotekarze_administrator.php?msg=Dane zostały zmienione!");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edycja Bibliotekarza</title>
    <meta name="description" content="Biblioteka VaDinci">
    <link rel="stylesheet" href="../adminstrator_bibliotekarz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
</head>

<body>

    <div class="main">
        <a href="edycja_bibliotekarz.php"><img class="logo " src="../../img/logo.png" style="border-radius: 25px; opacity: 95%;" /></a>
        <nav class="menu">
            <ul>
                <li><a href="strona_glowna_administrator.php">Strona Główna</a></li>
                <li><a href="klienci_administrator.php">Zarządzanie Klientami</a></li>
                <li><a href="bibliotekarze_administrator.php">Zarządzanie Bibliotekarzami</a></li>
                <li><a href="ksiazki_administrator.php">Książki</a></li>
                <li><a href="historia_administrator.php">Historia</a></li>
                <li><a href="wylogowanie.php">Wyloguj się</a></li>
</ul>
</nav>

    <?php
    $sql = "SELECT * FROM `bibliotekarze` WHERE ID = $ID LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
          <br /><label class="form-label">Nowy Login: </label><br />
            <input type="text" class="form-control" name="login" value="<?php echo $row['login'] ?>">
          </div>

          <div class="col">
          <br /><label class="form-label">Nowy adres e-mail: </label><br />
            <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">
          </div>
        </div>

        <div class="mb-3">
        <br /><label class="form-label">Nowe hasło: </label><br />
          <input type="haslo2" class="form-control" name="haslo2" value="<?php echo $row['haslo2'] ?>">
        </div>


        <div>
            <br /><button type="submit" name="submit">Zaktualizuj dane</button>
               <a href="bibliotekarze_administrator.php"><input type="button" value="Anuluj"></a>
            </div>
         </form>
      </div>
   </div>

</div>
<footer>
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