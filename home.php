<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acasa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="js/main.js" defer></script>
</head>
<body>
<?php
include("inc/parts/header.php");
?>
<div class="video-container">
    <section class="cards accent-background padding-section">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <a href="learn.php">
                        <div class="box learn">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span>Exercitii</span>
                                </div>
                                <div class="col-6">
                                    <img src="images/book.png" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="posts.php">
                        <div class="box posts">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span>Recente</span>
                                </div>
                                <div class="col-6">
                                    <img src="images/paper.png" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="contact.php">
                        <div class="box contact">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span>Contact us</span>
                                </div>
                                <div class="col-6">
                                    <img src="images/phone.png" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="competitions.php">
                        <div class="box competitions">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span>Concursuri</span>
                                </div>
                                <div class="col-6">
                                    <img src="images/prize.png" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="last-news padding-section">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <h2> Ultimile Cursuri</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="box accent-background">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="avatar">
                                    <img src="assets/images/man.webp" alt="golden" class="avatar">
                                </div>
                            </div>
                            <div class="col-8">
                                <h2>Numar prim</h2>
                                <p class="placeholder">
                                    <span>Limbaj</span>: C++ |
                                    <span>Nivel</span>: usor |
                                    <span>Durata</span>: 40min |
                                    <span>Teste</span>: 1 |
                                    <span>Fisier</span>: Nu |
                                    <span>profesor</span>: Dima Erika
                                </p>
                                <p>
                                    Să se scrie un program care citeşte de la tastatura două numere naturale şi determină suma lor.
                                </p>
                                <p>
                                    <a href="tel:0745495695" class="button">
                                        <span class="fas fa-phone-alt mr-2"></span>
                                        Suna pentru detalii</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="box accent-background">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="avatar">
                                    <img src="images/pisicagri.jpg" alt="golden" class="avatar">
                                </div>
                            </div>
                            <div class="col-8">
                                <h2>Miky</h2>
                                <p class="placeholder">
                                    <span>Sex</span>: Feminin |
                                    <span>Varsta</span>: 2 an |
                                    <span>Rasa</span>: Maidaneza |
                                    <span>Talie</span>: Medie |
                                    <span>Vaccinat</span>: Da |
                                    <span>Sterilizat</span>: Nu
                                </p>
                                <p>
                                    Miky este o pisicuta al carei stapan a decedat. Acum isi cauta un nou stapan la fel de iubitor. Ea a ajuns la noi prin contactarea de catre rudele acestuia.
                                    Iubitoare si chipesa Miky este gata de noi aventuri.
                                </p>
                                <p>
                                    <a href="tel:0745495695" class="button">
                                        <span class="fas fa-phone-alt mr-2"></span>
                                        Suna pentru detalii</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="box accent-background">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="avatar">
                                    <img src="images/unis.jpg" alt="golden" class="avatar">
                                </div>
                            </div>
                            <div class="col-8">
                                <h2>Unis</h2>
                                <p class="placeholder">
                                    <span>Sex</span>: Feminin |
                                    <span>Varsta</span>: 1 an |
                                    <span>Rasa</span>: Maidaneza |
                                    <span>Talie</span>: Mica |
                                    <span>Vaccinat</span>: Da |
                                    <span>Sterilizat</span>: Da
                                </p>
                                <p>
                                    -
                                </p>
                                <p>
                                    <a href="tel:0745495695" class="button">
                                        <span class="fas fa-phone-alt mr-2"></span>
                                        Suna pentru detalii</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="statistics accent-background padding-section">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="box text-center exe">
                            <span>
                                25+
                            </span>
                        <p> Animalute</p>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box text-center courses">
                            <span>
                                15+
                            </span>
                        <span class="placeholder">Adoptii</span>
                    </div>
                </div>
                <div class="col-3 text-center teachers">
                    <div class="box text-center">
                            <span>
                                10+
                            </span>
                        <span class="placeholder">Sterilizari</span>
                    </div>
                </div>
                <div class="col-3">
                    <div class="box text-center students">
                            <span>
                                25+
                            </span>
                        <span class="placeholder">Vaccinari</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include("inc/parts/footer.php");
?>
</body>
</html>
