<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sök film på OMDB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="kontainer">
        <h1>Lista på filmer på OMDB</h1>
        <!-- Formulär för att mata in sökord = del-av-film -->
        <form action="#" method="post">
            <div class="mb-3">
                <label for="sökterm" class="form-label">Sök film</label>
                <input type="text" class="form-control" id="searchMovie" name="searchMovie">
                <button type="submit" class="btn btn-primary">Sök</button>
            </div>
        </form>

        <?php
        // Ta emot data från formuläret
        $searchMovie = filter_input(INPUT_POST, "searchMovie");

        // Om data finns

        if ($searchMovie) {
            // Url:en till OMDB api
            $url = "https://www.omdbapi.com/?apikey=ea805224";

            // Hämta data, avkoda, lista alla filmer med bild och texter

            // Hämta data
            $json = file_get_contents($url . "&s=" . $searchMovie);

            // Avkoda json
            $data = json_decode($json);

            // Plocka ut data som jag vill ha
            $Search = $data->Search;
            $totalResults = $data->totalResults;

            echo "<p>Hittade $totalResults filmer med $searchMovie</p>";

            // Loppa igenom arrayen
            foreach ($Search as $film) {
                $title = $film->Title;
                $year = $film->Year;
                $type = $film->Type;
                $poster = $film->Poster;

                // Skriva ut med Bootstrap Card
                echo "<div class=\"card\" style=\"width: 18rem;\">";
                echo "<img src=\"$poster\" alt=\"$searchMovie\">";
                echo "<div class=\"card-body\">";
                echo "<h5 class=\"card-title\">Card title</h5>$title</h5>";
                echo "<p class=\"card-text\">$type - $year</p>";
                echo " </div>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>

</html>