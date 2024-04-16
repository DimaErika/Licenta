<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acasă | Sigma</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<?php include("inc/parts/header.php"); ?>

<div class="body-about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="section-title">Profesorii și specializările</h2>
                <div class="card">
                    <img src="assets/images/mario.jpg" class="card-img-top" alt="Profesorul Ioan Popescu">
                    <div class="card-body">
                        <h3 class="card-title">Ioan Popescu</h3>
                        <p class="card-text">Specializat în Informatică Aplicată</p>
                        <p class="card-text">25 de ani de experiență în educație și cercetare.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/graph.png" class="card-img-top" alt="Profesoara Maria Ionescu">
                    <div class="card-body">
                        <h3 class="card-title">Maria Ionescu</h3>
                        <p class="card-text">Specializată în Matematici Aplicate</p>
                        <p class="card-text">Foarte activă în proiecte internaționale educaționale.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h2 class="section-title">Proiecte și premii</h2>
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Olimpiada Internațională de Matematică</h3>
                        <p class="card-text">Echipa noastră a câștigat 3 medalii de aur în ultimii 5 ani.</p>
                        <img src="assets/images/graph.png" class="card-img-top" alt="Olimpiada Internațională de Matematică">
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Concursuri de dezvoltare software</h3>
                        <p class="card-text">Studenții noștri au obținut locul I la Concursul Național de Software în 2021.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("inc/parts/footer.php"); ?>

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
