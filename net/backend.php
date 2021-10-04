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
    <div class="kontainer">
        <h1 class="display-4">Nät inställningar</h1>
        <?php
        // Ta emot data som skickas
        $ip = filter_input(INPUT_POST, 'ip', FILTER_SANITIZE_STRING);
        $subnet = filter_input(INPUT_POST, 'subnet', FILTER_SANITIZE_STRING);
        $gateway = filter_input(INPUT_POST, 'gateway', FILTER_SANITIZE_STRING);

        // Finns data?
        if ($ip && $subnet && $gateway) {

            // Filnamnet 
            $filnamn = "net.txt";

            // Texten att spara

            $texten = "ip: $ip\n";
            $texten .= "subnet: $subnet\n";
            $texten .= "gateway: $gateway";

            // Spara i textfil
            file_put_contents($filnamn, $texten);


            // Bekräftelse
            echo "<p class=\"alert alert-success\">Meddelandet har sparats!</p>";
        } else {
            echo "<p class=\"alert alert-warning\">Error 99!</p>";
        }
        ?>
    </div>
</body>

</html>