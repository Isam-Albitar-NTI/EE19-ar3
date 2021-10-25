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
        <!-- Koden precis under, form, är kodad så den skickar data genom method POST och till en specifik php fil. Under form koden så finns det 3 labels där man ska skriva namn, bruttolön, och skatt som skall sparas efter man klicker på knappen "Skicka in"  -->
        <form class="kol2" action="./prov1-bckend.php" method="POST">
        <label for="namn">Namn</label>
        <input type="text" id="namn" name="namn">
        <label for="lön">Bruttolön</label>
        <input type="lön" id="lön" name="lön">
        <label for="namn">Skattesats</label>
        <input type="text" id="skatt" name="skatt">
        <button>Skicka in</button>
        </form>
    </div>
</body>
</html>