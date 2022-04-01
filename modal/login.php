<?php
include "konfigdb.php";

// Data emot data från formuläret
$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");

// Kolla att det är INTE null
if ($email && $password) {

    // Kolla att användarnamnet eller email inte redan använts
    $sql = "SELECT * FROM register WHERE epost='$email'";

    // 2. Kör SQL-kommandot
    $resultat = $conn->query($sql);

    // 3. Gick det bra att köra SQL-satsen?
    if (!$resultat) {
        echo "1";
    } else {

        // Plocka ut svaret och lägg det i arrayen $rad[]
        $rad = $resultat->fetch_assoc();

        // Kolla om lösenordet och hashen matchar
        if (password_verify($password, $rad['hash'])) {
            echo "2";
        } else {
            echo "3";
        }
    }
}