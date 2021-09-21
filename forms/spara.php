<?php

// Ta emot data från formuläret

$namn = $_POST["namn"];
$adress = $_POST["adress"];
$mobil = $_POST["mobil"];

// Om namnet är Isam
if ($namn == "Isam") {
    echo "<p>Hej! Vad trevligt att du är tillbaka!</p>";
} else {
    echo "<p>Hej.. YOU CAME IN THE WRONG HOUSE FOOOLL!!</p>";
}
?>