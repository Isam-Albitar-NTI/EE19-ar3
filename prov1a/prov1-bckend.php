<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skatteberäkning</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Lön efter skatt</h1>
        <form class="kol2" action="./prov1-bckend.php" method="POST">
        <label for="namn">Namn</label>
        <input type="text" id="namn" name="namn">
        <label for="lön">Bruttolön</label>
        <input type="lön" id="lön" name="lön">
        <label for="namn">Skattesats</label>
        <input type="text" id="skatt" name="skatt">
        </form>
        <?php
    // Här tas emot data från label
    $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
    $lön = filter_input(INPUT_POST, 'lön', FILTER_SANITIZE_STRING);
    $skatt = filter_input(INPUT_POST, 'skatt', FILTER_SANITIZE_STRING);

    // Först kollar man igenom om man har inte skrivit för låg bruttolön ** Försökte koda att varning meddelandet ska komma om lönen är över 45000 kr, jag har glömt hur man skriver 2 olika konditioner, jag försökte använda OR, ||. Men det gick något fel
    if ($lön < 10000 || $lön > 45000){
        echo "<p class=\"varning\">Bruttolön måste ligga mellan 10000 kr och 45000 kr.</p>";

    } else if ($skatt < 10 || $skatt > 45) {
        echo "<p class=\"varning\">Skattesatsen måste vara mellan 10 - 45%</p>";
    }
     else if ($namn && $lön && $skatt){
        // Här görs beräkningen för hur mycket bruttolön man har efter skatt
        $nettolön = $lön * (100 - $skatt) / 100;

        // Här skrivs ut resultatet om else if kondition är True
        echo "<h3>Lönebesked</h3>";
        echo "$namn:s lön är $nettolön kr efter skatt<br> Beräkningen baserat på bruttolön $lön och skattesatsen $skatt%";
    }
    ?>
    </div>
    
</body>
</html>