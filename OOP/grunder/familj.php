<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Skapa en klass Familj
    // Med två egenskaper förnamn och efternamn
    class Familj {
        // Egenskaper
        public $förNamn = "";
        public $efterNamn = "";

        // Konstruktor
        public function __construct($förnamn, $efternamn)
        {
            $this->förnamn = $förnamn;
            $this->efternamn = $efternamn;
        }

        // Metoder

        public function Medlemmar() {
            echo "<p>Familjmedlemmar : $this->förnamn $this->efternamn</p>";
        }

    }


    // Skapa 2 instanser av klassen familj för 2 i din egen familj
    $medlem1 = new Familj("Isam", "Al Bitar");

    $medlem2 = new Familj("Reham", "Al Bitar");

    // Skriv ut
    $medlem1->Medlemmar();
    $medlem2->Medlemmar();
    ?>
</body>
</html>