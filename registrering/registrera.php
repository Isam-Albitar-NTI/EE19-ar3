<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bloggen</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="kontainer">
        <h1>Bloggen</h1>
        <nav>

        </nav>
        <main>
            <form action="registrera.php" method="POST">
                <div class="row mb-3">
                    <label for="inputNamn" class="col-sm-2 col-form-label">Namn</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNamn" name="namn">
                    </div>
                </div>

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
                <button type="submit" class="btn btn-primary">Registrera</button>
            </form>
            <?php
            include "konfigdb.php";

            // Ta emot data från formuläret
            $namn = filter_input(INPUT_POST, "namn");
            $email = filter_input(INPUT_POST, "email");
            $lösen = filter_input(INPUT_POST, "lösenord");

            //Testa att den funkar
            //var_dump($namn, $email, $lösen);

            // Kolla att det är INTE null
            if ($namn && $email && $lösen) {

                // Kolla att användarnamnet eller email inte redan använts
                $sql = "SELECT * FROM register WHERE namn='namn' OR epost='$email'";

                // 2. Kör SQL-kommandot
                $resultat = $conn->query($sql);

                // Hittar vi samma användarnamnet eller email?
                if ($resultat->num_rows > 0) {
                    echo "<p class=\"alert alert-warning\" role=\"alert\">Användarnamnet eller email används redan. Vg försök igen!!</p>";
                } else {
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
            }
            ?>
        </main>
    </div>
</body>

</html>