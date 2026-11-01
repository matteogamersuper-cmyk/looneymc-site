<?php
$ServerStatus = "Offline (Manutenzione)";
$ServerName = "LooneyMC";
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($ServerName) ?> | Minecraft Network</title>

    <meta name="description" content="Pagina di Status">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="navbar">
        <a href="#" class="logo">Looney<span>MC</span></a>

        <nav>
            <a href="index.php">Home</a>
        </nav>
    </header>

    <main>
        <section class="status">
            <h1>Stato del Server</h1>
            <p>Il Server è attualmente <strong><?= htmlspecialchars($ServerStatus) ?></strong></p>
        </section>
    </main>
</body>
</html>
