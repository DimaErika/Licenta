<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Categories</title>
    <link rel="stylesheet" href="home.css">
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-logo">LOGO</a>
            <div class="navbar-menu">
                <a href="home.php" class="navbar-item">Acasă</a>
                <a href="#despre" class="navbar-item">Despre</a>
                <a href="login.php" class="navbar-item">Login</a>
            </div>
        </div>
    </nav>
</head>
<body>
<div class="categories-section">
    <div class="section-heading">Top Categories</div>
    <div class="categories-wrapper">
        <div class="categories-container">
            <!-- Repetă blocul de mai jos pentru fiecare categorie -->
            <div class="category-card">
                <div class="icon-container">
                    <img src="path-to-icon/development.svg" alt="Development" class="category-icon">
                </div>
                <p class="category-name">Concursuri</p>
            </div>
            <div class="category-card">
                <div class="icon-container">
                    <img src="path-to-icon/development.svg" alt="Development" class="category-icon">
                </div>
                <p class="category-name">Modul test</p>
            </div>
            <div class="category-card">
                <div class="icon-container">
                    <img src="images/cursuri.jpg" alt="Development" class="category-icon">
                </div>
                <p class="category-name">Cursuri</p>
            </div>
        </div>
        <div class="categories-container">
            <div class="category-card">
                <div class="icon-container">
                    <img src="images/cuburi.png" alt="Development" class="category-icon">
                </div>
                <p class="category-name">Exercitii</p>
            </div>
            <div class="category-card">
                <div class="icon-container">
                    <img src="images/development.svg" alt="Development" class="category-icon">
                </div>
                <p class="category-name">Discuta cu un profesor</p>
            </div>
            <div class="category-card">
                <div class="icon-container">
                    <img src="path-to-icon/development.svg" alt="Development" class="category-icon">
                </div>
                <p class="category-name">Echipa noastra</p>
            </div>
        <button class="next-button">Next Page &rarr;</button>
    </div>
</div>
    <div class="pdf-card-container">
        <div class="pdf-card">
            <iframe src="path-to-pdf/document1.pdf" class="pdf-preview"></iframe>
            <h3 class="pdf-title">Titlul Cursului 1</h3>
            <p class="pdf-description">Scurtă descriere a cursului...</p>
            <a href="path-to-pdf/document1.pdf" target="_blank" class="start-course-btn">Începe Cursul</a>
        </div>
        <div class="pdf-card">
            <iframe src="path-to-pdf/document1.pdf" class="pdf-preview"></iframe>
            <h3 class="pdf-title">Titlul Cursului 1</h3>
            <p class="pdf-description">Scurtă descriere a cursului...</p>
            <a href="path-to-pdf/document1.pdf" target="_blank" class="start-course-btn">Începe Cursul</a>
        </div>
        <div class="pdf-card">
            <iframe src="path-to-pdf/document1.pdf" class="pdf-preview"></iframe>
            <h3 class="pdf-title">Titlul Cursului 1</h3>
            <p class="pdf-description">Scurtă descriere a cursului...</p>
            <a href="path-to-pdf/document1.pdf" target="_blank" class="start-course-btn">Începe Cursul</a>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
