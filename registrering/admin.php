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
            </main>
    </div>
</body>

</html>