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
    <div class="kontainer">
        <h1 class="display-4">Gästboken</h1>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="gastbok.php">Skriva</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lasa.php">Läsa</a>
            </li>
        </ul>
        <form class="kol2" action="form.php" method="POST">
            <label>Rubrik</label>
            <input type="text" name="rubrik" required>
            <label>Ange meddelande</label>
            <textarea name="meddelande" required></textarea>
            <label>Ange ditt namn</label>
            <input type="text" name="namn" required>

            <button class="primary">Skicka</button>
        </form>
        <?php
        // Ta emot data som skickas
        $rubrik = filter_input(INPUT_POST, 'rubrik', FILTER_SANITIZE_STRING);
        $meddelande = filter_input(INPUT_POST, 'meddelande', FILTER_SANITIZE_STRING);
        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);

        // Finns data?
        if ($rubrik && $meddelande && $namn) {

            // Filnamnet 
            $filnamn = "gästbok.txt";
            setlocale(LC_ALL, "sv_SE.utf8");
            $dagensDatum = date("F j, Y, H:i:s");
            // Texten att spara
            
            $texten = "<h3>$rubrik<br>";
            $texten .= "$dagensDatum</h3>";
            $texten .= "<p>$meddelande</p>";
            $texten .= "<p>$namn</p>";

            // Spara i textfil
            file_put_contents($filnamn, $texten, FILE_APPEND);


            // Bekräftelse
            echo "<p class=\"alert alert-success\">Meddelandet har sparats!</p>";
        }
        ?>
    </div>
</body>

</html>