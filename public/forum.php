<?php
$ServerName = "LooneyMC";
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($ServerName) ?> | Minecraft Network</title>

    <meta name="description" content="Forum Del Server <?= htmlspecialchars($ServerName) ?>">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="navbar">
        <a href="#" class="logo">Looney<span>MC</span></a>

        <nav>
            <a href="index.php">Home</a>
            <a href="status.php">Status</a>
        </nav>
    </header>

    <main>

<section class="hero" id="home">

    <div class="hero-content">

        <span class="tag">Server Forum</span>
        <h2>
            Benvenuto nel forum del server <?= htmlspecialchars($ServerName) ?>!
        </h2>
        <p>
        Il Forum è in arrivo, Controlla il server discord negli annunci per sapere quando sarà disponibile!
       </p>
    </main>
</body>
</html>
