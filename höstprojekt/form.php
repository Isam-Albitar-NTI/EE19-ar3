<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
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
                <a class="nav-link active" aria-current="page" href="gastbok.php">Skriva</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lasa.php">Läsa</a>
            </li>
        </ul>
        <form class="kol2" action="form.php" method="POST">
            <label>Film</label>
            <input type="text" name="film" required>
            <label>Skriv din recension</label>
            <textarea name="recension" required></textarea>
            <label>Ange Betyg (0-10)</label>
            <input type="text" name="betyg" required>

            <button class="primary">Skicka</button>
        </form>
        <?php
        // Ta emot data som skickas
        $film = filter_input(INPUT_POST, 'film', FILTER_SANITIZE_STRING);
        $recension = filter_input(INPUT_POST, 'recension', FILTER_SANITIZE_STRING);
        $betyg = filter_input(INPUT_POST, 'betyg', FILTER_SANITIZE_STRING);

        // Finns data?
        if ($film && $recension && $betyg) {

            // Filnamnet 
            $filnamn = "recension.txt";
            setlocale(LC_ALL, "sv_SE.utf8");
            $dagensDatum = date("F j, Y, H:i:s");
            // Texten att spara
            
            $texten = "<h3>$film | ";
            $texten .= "$betyg<br>";
            $texten .= "$dagensDatum</h3>";
            $texten .= "<h4>$recension</h4>";
            
            
            // Spara i textfil
            file_put_contents($filnamn, $texten, FILE_APPEND);


            // Bekräftelse
            echo "<p class=\"alert alert-success\">Meddelandet har sparats!</p>";
        }
        ?>
    </div>
</body>

</html>