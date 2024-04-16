<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acasa | Sigma</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/main.js" defer></script>
</head>
<body>


<?php
include("inc/parts/header.php");
?>


<section class="donate padding-section text-section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-6">
                <span class="title">Olimpiada de Informatică 2024</span>
                <p class="mt-3">
                    Clasele : V-VIII, IX-XII
                <p>Locatie : Iasi </p>
                </p>
                <p>
                    <a href="olimpiada2024.php" class="button">Exerseaza</a>
                </p>
            </div>
            <div class="col-6 text-center">
                <img src="assets/images/olimpiada.png" alt="" class="avatar">
            </div>
        </div>

    </div>

</section>
<section class="text-section about-me padding-section accent-background">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 text-center">
                <img src="assets/images/code.jpg" alt="" class="avatar">
            </div>
            <div class="col-6">
                <span class="title">Concursul de informatică CNER Code</span>
                <p class="mt-3">
                    Clasele : IX-X
                </p>
                <p>
                    <a href="cner.php" class="button">Exerseaza</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="donate padding-section text-section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-6">
                <span class="title">Olimpiada Internationala de Informatica</span>
                <p class="mt-3">
                    Doneaza rapid prin Revolut la numarul de telefon 0745495695 sau afla mai multe detalii inainte de a dona in sectiunea dedicata.
                </p>
                <p>
                    <a href="doneaza.php" class="button">Afla mai multe </a>
                </p>
            </div>
            <div class="col-6 text-center">
                <img src="assets/images/ot.png" alt="" class="avatar">
            </div>
        </div>

    </div>
</section>


<section class="text-section about-me padding-section accent-background">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 text-center">
                <img src="assets/images/question2.jpg" alt="" class="avatar">
            </div>
            <div class="col-6">
                <h2>Anul 2023</h2>
                <span class="title">Lotul Național de Informatică 2023</span>
                <p class="mt-3">
                    Lot național
                </p>
                <p>
                    <a href="contact.php" class="button">Adreseaza o intrebare</a>
                </p>
            </div>
        </div>
    </div>
</section>


<section class="donate padding-section text-section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-6">
                <span class="title">Concursul Interjudețean de Matematică și Informatică SEVER-AUREL GROZE 2023</span>
                <p class="mt-3">
                    Clasele : VII-VIII
                </p>
                <p>
                    <a href="doneaza.php" class="button">Afla mai multe </a>
                </p>
            </div>
            <div class="col-6 text-center">
                <img src="assets/images/severin.jpg" alt="" class="avatar">
            </div>
        </div>

    </div>
</section>

<?php
include("inc/parts/footer.php");
?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 2000
        });
    });
</script>

</body>
</html>