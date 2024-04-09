<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-logo">LOGO</a>
            <div class="navbar-menu">
                <a href="index.php" class="navbar-item">Acasă</a>
                <a href="#despre" class="navbar-item">Despre</a>
                <a href="login.php" class="navbar-item">Login</a>
            </div>
        </div>
    </nav>

    <div class="login-container">
        <form class="login-form">
            <h2>Login</h2>
            <div class="input-group">
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Despre noi</h3>
                <p>Oferim cele mai bune cursuri pentru dezvoltarea ta profesională.</p>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>dima.erika02@gmail.com</p>
                <p>+40 745495694</p>
            </div>
            <div class="footer-section">
                <h3>Urmărește-ne</h3>
                <div class="social-icons">
                    <a href="#" class="social-icon">FB</a>
                    <a href="#" class="social-icon">TW</a>
                    <a href="#" class="social-icon">IG</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Site-ul Meu. Cu dragoste pentru Informatica </p>
        </div>
    </footer>

</body>
</html>
