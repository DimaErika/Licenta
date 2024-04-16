<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acasă | Sigma</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="js/main.js" defer></script>
</head>
<body>

<?php include("inc/parts/header.php"); ?>

<div class="body-news">
    <div class="news-container">
        <section class="latest-announcement">
            <section class="latest-announcement">
                <h2>Cel mai nou anunț</h2>
                <div class="announcement">
                    <h4>Înscrieri deschise pentru Concursul Internațional de Matematică</h4>
                    <p>Data: 15 Aprilie 2024, Ora: 10:00 AM</p>
                    <p>Încep înscrierile pentru Concursul Internațional de Matematică. Asigurați-vă un loc!</p>
                    <p>Penru a va inscrie trimite-ti pe mail formularul completat :
                    <a href="assets/files/inscriere_olimpiada2024.pdf" download="Inscriere_2024" class="download-button">Fisa Inscriere</a>
                    </p>
                </div>
                <div class="announcement">
                    <h2>Sesiune informativă online pentru părinți și elevi</h2>
                    <p>Data: 22 Aprilie 2024, Ora: 6:00 PM</p>
                    <p>Participați la sesiunea noastră informativă online pentru a afla mai multe despre programele școlare.</p>
                </div>
                <div class="announcement">
                    <h2>Lansarea noului curs de programare pentru începători</h2>
                    <p>Data: 29 Aprilie 2024, Ora: 1:00 PM</p>
                    <p>Veniți să descoperiți noul nostru curs de programare destinat elevilor fără experiență anterioară.</p>
                </div>
                <div class="announcement">
                    <h2>Expoziție de proiecte științifice ale elevilor</h2>
                    <p>Data: 5 Mai 2024, Ora: 3:00 PM</p>
                    <p>Admirați creațiile inovative ale elevilor noștri la expoziția anuală de proiecte științifice.</p>
                </div>
                <div class="announcement">
                    <h3>Webinar despre tehnologiile emergente în educație</h3>
                    <p>Data: 12 Mai 2024, Ora: 5:00 PM</p>
                    <p>Înregistrați-vă pentru a participa la un webinar captivant despre utilizarea tehnologiei în educație.</p>
                </div>
            </section>

            <p>Aici va fi ultimul anunț important pentru elevi.</p>
        </section>
        <section class="schedule">
            <h2>Orar</h2>
            <p>Verifică orarul actualizat al claselor.</p>
        </section>

        <section class="more-info">
            <h2>Mai multe informații</h2>
            <p>Descoperă alte resurse și informații utile.</p>
        </section>
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
