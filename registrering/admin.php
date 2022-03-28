<?php
include "konfigdb.php";
session_start();

// Om det inte finns en session betyder det att man inte är inloggad
if (!isset($_SESSION['inloggad'])) {
    $_SESSION['inloggad'] = false;
}
if ($_SESSION['inloggad'] == false) {

    // Ajabaja! Skickas direkt till login.php
    header("Location: logga-in.php");
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
    <?php
    if ($_SESSION['inloggad'] == true) {
        echo "<p class=\"alert alert-success\">Du är inloggad!</p>";
    }
    ?>
    <div class="kontainer">
        <h1>Bloggen</h1>
        <nav>
            <ul class="nav">
                <?php
                if ($_SESSION['inloggad'] == false) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./logga-in.php">Logga in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./registrera.php">Registrera</a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="./admin.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./logout.php">Logga ut</a>
                    </li>
                <?php
                }
                ?>
            </ul>
            <main>
                <h3>Admin</h3>
                <?php
                // Lista alla våra användare
                // Steg 1. SQL-satsen

                $sql = "SELECT * FROM register";

                // Steg 2. Kör SQL-satsen
                $resultat = $conn->query($sql);

                if (!$resultat) {
                    die("<p class=\alert alert-warning\">Någonting är fel med SQL-satsen!");
                } else {
                    echo "<table class=\"table\">
                    <thead>
                        <tr>
                            <th>Id</th>
                              <th>Namn</th>
                              <th>Epost</th>
                        </tr>
                    </thead>
                    <tbody>";


                    // Steg 3. Bearbeta resultatet
                    while ($rad = $resultat->fetch_assoc()) {
                        echo "<tr>
                        <td>$rad[id]</td>
                        <td>$rad[namn]</td>
                        <td>$rad[epost]</td>
                        </tr>";
                    }
                    echo "</tbody>
                        </table>";
                }
                ?>
            </main>
    </div>
</body>

</html>