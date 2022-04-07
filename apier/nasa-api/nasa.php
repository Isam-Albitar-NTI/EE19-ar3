<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dagens Nasa Bild</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>Söka Nasa Bilder</h1>
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="datum">Ange Datum</label>
                <input type="date" name="datum" required>
            </div>
            <button type="submit" class="btn btn-primary">Sök</button>
        </form>
        <?php

        // Ta emot data från formuläret
        $datum = filter_input(INPUT_POST, "datum");

        if ($datum) {

            if ($datum > date("Y-M-D")) {
                echo "<p>Datumet finns inte. Välj ett äldre datum</p>";
            } else {

                // Addressen till api:et
                $url = "https://api.nasa.gov/planetary/apod";

                //api nyckel
                $appid = "9qynEHnubJDyFb4Nar6OKt019ImSrCxhZgNakGxw";

                // 1. Anropa api:et med 2 parametrar
                $json = file_get_contents("$url?api_key=$appid&date=$datum");
                //echo $json;

                // 2. Avkoda json svaret
                $data = json_decode($json);

                // 3. Plocka data vi vill ha
                // - explanation
                $explain = $data->explanation;
                // title
                $title = $data->title;
                // Url
                $bildUrl = $data->url;
                // Copyright
                $copyRight = $data->copyright;

                //var_dump($url, $title, $explain);
                echo "<img class=\"img-fluid\" src=\"$bildUrl\">";
                echo "<p>$explain</p><br>";
                echo "<p>$title</p>";
                echo "<p class=\"alert alert-dark\">$copyRight</p>";
            }
        }
        ?>

    </div>
</body>

</html>