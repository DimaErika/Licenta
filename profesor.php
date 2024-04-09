<?php
session_start();

// Verifică dacă utilizatorul este autentificat și dacă este profesor
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION['role'] !== 'profesor'){
    header("location: login.php");
    exit;
}

// Aici poți adăuga logica pentru afișarea sau încărcarea temelor
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pagina Profesorului</title>
</head>
<body>
<h1>Bine ai venit, <?php echo $_SESSION['username']; ?>!</h1>
<!-- Formular pentru adăugarea unei noi teme -->
<form action="upload_tema.php" method="post">
    <div>
        <label>Titlu Tema:</label>
        <input type="text" name="titlu" required>
    </div>
    <div>
        <label>Descriere:</label>
        <textarea name="descriere" required></textarea>
    </div>
    <input type="submit" value="Adaugă Tema">
</form>
</body>
</html>
