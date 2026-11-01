function copyIP() {
    const ip = document.getElementById("serverIP").textContent.trim();

    navigator.clipboard.writeText(ip)
        .then(() => {
            const button = document.querySelector(".server-box button");

            button.textContent = "COPIATO!";

            setTimeout(() => {
                button.textContent = "COPIA IP";
            }, 2000);
        })
        .catch(() => {
            alert("Impossibile copiare l'IP.");
        });
}
