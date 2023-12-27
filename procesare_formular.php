<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST["nume"];
    $email = $_POST["email"];
    $mesaj = $_POST["mesaj"];

    // Adresa de email la care vor fi trimise datele
    $adresa_email = "rujavnitadenis@gmail.com";

    // Subiectul e-mailului
    $subiect = "Mesaj nou de la $nume";

    // Construiește corpul e-mailului
    $corp_email = "Nume: $nume\n";
    $corp_email .= "Email: $email\n";
    $corp_email .= "Mesaj:\n$mesaj";

    // Setează antetele pentru e-mail
    $antete = "From: $email\r\n";
    $antete .= "Reply-To: $email\r\n";

    // Trimite e-mailul
    $trimis = mail($adresa_email, $subiect, $corp_email, $antete);

    // Verifică dacă e-mailul a fost trimis cu succes
    if ($trimis) {
        echo "Mesajul a fost trimis cu succes.";
    } else {
        echo "Eroare la trimiterea mesajului. Vă rugăm să încercați din nou mai târziu.";
    }
} else {
    // Redirecționează către pagina de start dacă formularul nu a fost accesat prin POST
    header("Location: index.html");
    exit();
}
?>
