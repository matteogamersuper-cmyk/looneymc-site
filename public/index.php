<?php
$serverName = "LooneyMC";
$serverIP = "play.looneymc.it";
$discord = "https://discord.gg/YeXhHgReTu";
$version = "1.20 - 1.21.x";
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($serverName) ?> | Minecraft Network</title>

    <meta name="description" content="Benvenuto su LooneyMC, il server Minecraft italiano!">

    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="navbar">
    <a href="#" class="logo">Looney<span>MC</span></a>

    <nav>
        <a href="#home">Home</a>
        <a href="#server">Server</a>
        <a href="#community">Community</a>
        <a href="status.php">Status</a>
    </nav>

    <a href="<?= htmlspecialchars($discord) ?>" class="discord-button">
        Discord
    </a>
</header>

<main>

<section class="hero" id="home">

    <div class="hero-content">

        <span class="tag">MINECRAFT NETWORK</span>

        <h1>
            BENVENUTO SU<br>
            <span>LOONEYMC</span>
        </h1>

        <p>
            Entra nel nostro mondo e vivi un'esperienza Minecraft
            completamente nuova.
        </p>

        <div class="buttons">
            <a href="#server" class="primary-button">Gioca ora</a>
            <a href="<?= htmlspecialchars($discord) ?>" class="secondary-button">
                Entra nel Discord
            </a>
        </div>

        <div class="server-box">
            <div>
                <small>INDIRIZZO SERVER</small>
                <h3 id="serverIP">
                    <?= htmlspecialchars($serverIP) ?>
                </h3>
            </div>

            <button onclick="copyIP()">COPIA IP</button>
        </div>

    </div>

</section>

<section class="server-section" id="server">

    <span class="tag">ENTRA NEL DIVERTIMENTO</span>

    <h2>IL NOSTRO SERVER</h2>

    <p>
        Preparati a vivere avventure incredibili insieme
        alla community di LooneyMC.
    </p>

    <div class="info-grid">

        <div class="info-card">
            <h3>IP SERVER</h3>
            <p><?= htmlspecialchars($serverIP) ?></p>
        </div>

        <div class="info-card">
            <h3>VERSIONE</h3>
            <p><?= htmlspecialchars($version) ?></p>
        </div>

        <div class="info-card">
            <h3>PIATTAFORMA</h3>
            <p>Minecraft Java</p>
        </div>

    </div>

</section>

<section class="community" id="community">

    <h2>UNISCITI ALLA COMMUNITY</h2>

    <p>Non perderti eventi, aggiornamenti e novità!</p>

    <a href="<?= htmlspecialchars($discord) ?>" class="primary-button">
        ENTRA NEL DISCORD
    </a>

</section>

</main>

<footer>
    <h2>Looney<span>MC</span></h2>
    <p>© <?= date("Y") ?> LooneyMC. Tutti i diritti riservati.</p>
    <small>Non affiliato a Mojang o Microsoft.</small>
</footer>

<script src="script.js"></script>

</body>
</html>
