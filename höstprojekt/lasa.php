<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gästboken</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <input type="checkbox" id="checkbox">
        <label for="checkbox" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Film Recension</label>
        <ul>
            <li><a class="aktiv" href="index.html">Hem</a></li>
            <li><a href="">Filmer</a></li>
            <li><a href="form.php">Recension</a></li>
        </ul>
    </nav>
    <div class="kontainer">
        <h1 class="display-4">Recension</h1>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="form.php">Skriva</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="lasa.php">Läsa</a>
            </li>
        </ul>
        <?php
        // Filnamnet 
        $filnamn = "recension.txt";

        // Läsa in all text
        $texten = file_get_contents($filnamn);

        // Skriver ut all
        echo $texten;
        ?>
    </div>
</body>

</html>