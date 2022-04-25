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
    // Vi skall registrera hur mycket mina anställda ska få i lön denna månad
    // Skapa en klass
    // Egenskaperna: förnamn, efternamn, timlön, antalTimmar

    class anställd {
        public $förnamn = "";
        public $efternamn = "";
        public $timlön = 0;
        public $antalTimmar = 0;

        // Metoder
        public function SkrivUtLön() {
            $lön = $this->timlön * $this->antalTimmar;
            echo "<p>$this->förnamn $this->efternamn månadslön är $lön:-</p>";
        }

    }

    // registrera två anställda
    $anställd1 = new anställd();
    $anställd1->förnamn = "Isam";
    $anställd1->efternamn = "Al Bitar";
    $anställd1->timlön = 200;
    $anställd1->antalTimmar = 30;

    $anställd2 = new anställd();
    $anställd2->förnamn = "Mikael";
    $anställd2->efternamn = "Tukue";
    $anställd2->timlön = 200;
    $anställd2->antalTimmar = 15;

    // Skriv ut lönerna
    $anställd1->SkrivUtLön();
    $anställd2->SkrivUtLön();

    ?>
</body>
</html>