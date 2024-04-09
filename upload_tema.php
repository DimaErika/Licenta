<?php
// Începe sau reia sesiunea
session_start();

// Verifică dacă utilizatorul este autentificat și dacă este profesor
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["role"] !== "profesor") {
    // Dacă nu este autentificat sau nu este profesor, redirecționează către pagina de login
    header("location: login.php");
    exit;
}

// Include fișierul pentru conexiunea la baza de date
global $conn;
require_once 'db.php';

// Verifică dacă formularul a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['titlu'], $_POST['descriere'])) {
    // Curăță și validează datele trimise
    $titlu = trim($_POST['titlu']);
    $descriere = trim($_POST['descriere']);
    $profesor_id = $_SESSION['id']; // Presupunem că ai stocat id-ul utilizatorului în sesiune la autentificare

    // Pregătește o declarație de inserare a temei în baza de date
    $sql = "INSERT INTO teme (titlu, descriere, profesor_id) VALUES (?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        // Leagă variabilele de parametrii declarației pregătite
        $stmt->bind_param("ssi", $titlu_param, $descriere_param, $profesor_id_param);

        // Setează parametrii și execută declarația
        $titlu_param = $titlu;
        $descriere_param = $descriere;
        $profesor_id_param = $profesor_id;

        // Execută declarația
        if ($stmt->execute()) {
            // Dacă inserarea a reușit, redirecționează către pagina profesorului
            header("location: profesor.php");
            exit();
        } else {
            echo "Ceva nu a funcționat. Te rugăm să încerci din nou mai târziu.";
        }

        // Închide declarația
        $stmt->close();
    } else {
        echo "Ceva nu a funcționat. Te rugăm să încerci din nou mai târziu.";
    }
}

// Închide conexiunea la baza de date
$conn->close();
?>
