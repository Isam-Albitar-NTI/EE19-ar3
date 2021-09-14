<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Vi ska testa PHP</h1>
    
    <?php
    echo "<p>Mitt namn är Isam. <br>";
    echo "Jag bor i Stockholm</p>";

    echo "<p>";
    echo date("l d F Y");
    echo "</p>";

    echo "<p>";
    setlocale(LC_ALL, "sv_SE.utf8");
    echo strftime("%A %e %B %Y");
    echo "</p>";
    ?>
</body>
</html>