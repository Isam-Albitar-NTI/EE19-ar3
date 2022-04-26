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
    // Skapa en klass bil
    // Med egenskaperna: modell, pris, färg, årsmodell
    // Med metod: Sammanfattning()

    class Bil {
        // Egenskaper
        public $modell = "";
        public $pris = 0;
        public $färg = "";
        public $årsmodell = 0;

        // Konstruktor
        public function __construct($m, $p, $f, $å)
        {
            $this->modell = $m;
            $this->pris = $p;
            $this->färg = $f;
            $this->årsmodell = $å;
        }

        // Metoder
        public function Sammanfattning() {
            echo "<p>Bilen: Modell: $this->modell, Pris: $this->pris, Färg: $this->färg, Årsmodell: $this->årsmodell</p>";
        }
    }
    // Skapa 2 bilar
    $bil1 = new Bil("Audi", 90000, "Silver","2013");

    $bil2 = new Bil("Mazda", 110000, "Vit", "2015");

    $bil1->Sammanfattning();
    $bil2->Sammanfattning();

    // Sänka priset på Mazda
    $bil2->pris = 50000;
    ?>
</body>
</html>