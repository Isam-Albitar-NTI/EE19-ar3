<?php
include "konfigdb.php";
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="kontainer">
        <?php
        // Ta emot data från formuläret
        $namn = filter_input(INPUT_POST, "namn");
        $email = filter_input(INPUT_POST, "email");
        $lösen = filter_input(INPUT_POST, "lösenord");

        //Testa att den funkar
        //var_dump($namn, $email, $lösen);

        // Kolla att det är INTE null
        if ($namn && $email && $lösen) {
            // Räkna fram ett hash på lösenord
            $hash = password_hash($lösen, PASSWORD_DEFAULT);

            // Lagra i databasen

            // 1. SQL-kommandot
            $sql = "INSERT INTO register (namn, epost, hash) VALUES ('$namn', '$email', '$hash')";
            //echo $sql;
            //die();

            // 2. Kör SQL-kommandot
            $resultat = $conn->query($sql);

            // 3. Funkade SQL-kommandot?
            if (!$resultat) {
                die("<p class=\alert alert-warning\">Någonting är fel med SQL-satsen!");
            } else {
                echo "<p class=\"alert alert-success\">Användaren $namn är registrerad!</p>";
            }

        }
        ?>
    </div>
</body>
</html>