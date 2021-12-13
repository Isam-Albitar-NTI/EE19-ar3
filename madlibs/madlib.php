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
        $adjective = filter_input(INPUT_POST, 'adjective', FILTER_SANITIZE_STRING);
        $verbIng = filter_input(INPUT_POST, 'verbIng', FILTER_SANITIZE_STRING);
        $food = filter_input(INPUT_POST, 'food', FILTER_SANITIZE_STRING);
        $noun = filter_input(INPUT_POST, 'noun', FILTER_SANITIZE_STRING);
        $number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);
        $bodyPart = filter_input(INPUT_POST, 'bodyPart', FILTER_SANITIZE_STRING);

        // Innehåller variablerna text då skriver vi ut madlibs
        if ($adjective && $verbIng && $food && $noun && $number && $bodyPart) {
            // Lager av olika verb
            $verben = ["eat", "sleep", "jump", "swim", "clean", "sing", "drive", "read", "watch", "yell"];
            
            // Slumpa fram ett verb
            

            // Skriv ut madlibs-texten
            echo "<p><strong>Mario:</strong> What a/an $adjective day, eh Luigi The perfect day for $verbIng some Goombas. The $food Kingdom is crawling with them!</p>
            <p><strong>Luigi:</strong> You're right about that, dear $noun. Hope you're ready to " . $verben[rand(0, 11)] . ".</p>
            <p><strong>Mario:</strong> Ready? I've waited $number years to " . $verben[rand(0, 11)]. " that scoundrel Bowser!</p>
            <p><strong>Luigi:</strong> Pipe down. he has $bodyPart everywhere.
            <p><strong>Mario:</strong> First I'll " . $verben[rand(0, 11)] . " and grab a/an $food. That'll give me $noun!";
        }
            ?>
    </div>
</body>
</html>