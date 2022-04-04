<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Värdret idag i Stockholm</h1>
        <?php
        //api nyckel
        $appid = "22ee1d58f7adae08ee71fa7c0bd24481";

        // Ange staden vi söker vädret till
        $stad = "stockholm";

        // Address till tjänsten
        $url = "http://api.openweathermap.org/data/2.5/weather?q=$stad&appid=$appid&units=metric";
        //echo "<p>$url</p>";
        
        // Anropa api:et
        $json = file_get_contents($url);
        //echo $json;

        // Avkoda json svaret
        $data = json_decode($json);

        // Plocka ut data vi är intresserad av
        // "coord" "weather", "main", "wind"
        $coord = $data->coord;
        $weather = $data->weather;
        $main = $data->main;
        $wind = $data->wind;

        // Plocka isär coord
        $lon = $coord->lon;
        $lat = $coord->lat;

        // Plocka isär main
        $temp = $main->temp;

        // Plocka isär wind
        $speed = $wind->speed;

        // Plocka isär "weather", "ikonen"
        $desc = $weather[0]->description;
        $icon = $weather[0]->icon;

        // Url för ikonen
        $bildUrl = "http://openweathermap.org/img/wn/$icon@2x.png";

        // Skriv ut allt
        echo "<p>Koordinater (lat, lon): $lon, $lat</p>";
        echo "<p>Himlen är: $desc</p>";
        echo "<img src=\"$bildUrl\">";
        echo "<p>Temperaturen just nu är: $temp &degC</p>";
        echo "<p>Vindhastigheten just nu är: $speed m/s</p>";

        ?>
    </div>
</body>
</html>