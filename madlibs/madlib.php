<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1 class="display-4">Madlibs</h1>
        <?php
        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
        $adjektiv1 = filter_input(INPUT_POST, 'adjektiv1', FILTER_SANITIZE_STRING);
        $adjektiv2 = filter_input(INPUT_POST, 'adjektiv2', FILTER_SANITIZE_STRING);
        $adjektiv3 = filter_input(INPUT_POST, 'adjektiv3', FILTER_SANITIZE_STRING);
        $substantiv = filter_input(INPUT_POST, 'substantiv', FILTER_SANITIZE_STRING);
        $verb = filter_input(INPUT_POST, 'verb', FILTER_SANITIZE_STRING);
        // Skriv ut madlibs-texten
        echo "Du heter $namn. Du märker din högra hand är $adjektiv1 och din vänstra hand är $adjektiv2. Din ögon färg är $adjektiv3. Du har också en objekt som hänger runt din hals, det är $substantiv. Du märker också något som du inte hade märkt innan, du $verb.";
        ?>
    </div>
</body>

</html>