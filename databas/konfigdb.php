<?php
// Aktivera felmeddelanden underutveckling
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


// Uppgifter för att logga in i mysql-databasen
$user = "movies_db";
$pass = "1nYUWETvAi!V7Z6H";
$host = "localhost";
$databas = "movies_db";

// 1. Logga in
$conn = new mysqli($host, $user, $pass, $databas);

// Gick det att ansluta?
if ($conn->connect_error) {
    die ("Fel! Något gick åt skogen: " . $conn->connect_error);
} else {
    //echo "Yes! Vi är inloggade i mysql.";
}
?>