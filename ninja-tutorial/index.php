
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP OOP Tutorial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// Skapa en första klass (mall)
class User {

    // Egenskaper 
    public $username = "Isam";
    public $email = "isam.albitar03@gmail.com";

    // Metoder
    public function addFriend ()
    { 
        return " added a new friend";
    }

}
// Skapa ett första objekt från klassen User
// New skapar en instans (objekt) = $userOne
$userOne = new User();

// Skapa ett andra objekt från klassen User

$userTwo = new user();

echo '<p>$userOne är av klassen ' . get_class($userOne) . '</p>';
echo '<p>$userTwo är av klassen ' . get_class($userTwo) . '</p>';

// Hur kommer vi åt egenskaperna?
echo $userOne->username . '<br>';
echo $userOne->email . '<br>';
echo $userOne->addFriend() . '<br>';
?>
    
</body>
</html>