<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Slumpa fram sex ordspråk</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="ordsprak.css">
</head>
<body>
<?php
    // Skapa en array med tio ordspråk
    $ordsprak = [
    "Blyga pojkar får aldrig kyssa vackra flickor.",
    "Alla goda ting är tre.",
    "Alla katter är grå i mörkret.",
    "Ensam är stark.",
    "Hungern är den bästa kryddan",
    "Lika barn leka bäst.",
    "Man ska inte gråta inte över spilld mjölk.",
    "Nöden har ingen lag.",
    "Peppar peppar tag i trä",
    ];
    $tagna = [];

    echo "<ol>";
    for ($i=0; $i < 6; $i++) { 
        // Slumpa fram ett tal mellan 0 och 9 med funktionen rand()
        $index = rand(0,8);
        if (in_array($index, $tagna)) {
            $i--;
            continue;
        }

        $tagna[] = $index;
        $svaret = $ordsprak[$index];
    
        // Skriv ut ordspråket 
        echo "<li>$svaret</li>";

        
    }
    // <ol>
    echo "</ol>";
    

?>
</body>
</html>