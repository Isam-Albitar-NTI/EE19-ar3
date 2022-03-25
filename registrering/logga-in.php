<?php
include "konfigdb.php";
session_start();
if (!isset($_SESSION['inloggad'])) {
    $_SESSION['inloggad'] = false;
}
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bloggen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>Bloggen</h1>
        <nav>
        <ul class="nav">
                <?php
                if ($_SESSION['inloggad'] == false) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./logga-in.php">Logga in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./registrera.php">Registrera</a>
                    </li>
                <?php
                } else {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="./admin.php">Admin</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="./logout.php">Logga ut</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </nav>
        <main>
            <form action="logga-in.php" method="POST">
            <h3>Logga in Användare</h3>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" name="email">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputLösenord" class="col-sm-2 col-form-label">Lösenord</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputLösenord" name="lösenord">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Logga in</button>
            </form>
            <?php
            include "konfigdb.php";

            // Ta emot data från formuläret
            $email = filter_input(INPUT_POST, "email");
            $lösen = filter_input(INPUT_POST, "lösenord");

            //Testa att den funkar
            //var_dump($namn, $email, $lösen);

            // Kolla att det är INTE null
            if ($email && $lösen) {

                // Kolla att användarnamnet eller email inte redan använts
                $sql = "SELECT * FROM register WHERE epost='$email'";

                // 2. Kör SQL-kommandot
                $resultat = $conn->query($sql);

                if (!$resultat) {
                    die("<p class=\alert alert-warning\">Någonting är fel med SQL-satsen!");
                } else {
                    // Plocka ut svaret och lägg det i arrayen $rad[]
                    $rad = $resultat->fetch_assoc();
                }

                if (password_verify($lösen, $rad['hash'])) {
                    echo "<p class=\"alert alert-success\">Du är inloggad!</p>";

                    header("location: admin.php");
                    
                    // Kom ihåg att vi lyckats logga in!
                    $_SESSION['inloggad'] = true;
                } else {
                    echo ("<p class=\alert alert-warning\">Epost eller lösenordet stämmer inte!</p>");
                }
                
            }
            ?>
        </main>
    </div>
</body>

</html>