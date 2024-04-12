<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acasa | Sigma</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="js/main.js" defer></script>
</head>


<body>

<?php include("inc/parts/header.php"); ?>

<div class="body-quiz">
    <div class="quiz-container">
        <ol>
            <li>
                <h2>Testul 1</h2>
                <p>Care dintre următoarele nu este un principiu al programării orientate pe obiect?</p>
                <input type="radio" id="1v1" name="a1" value="paris">
                <label for="paris1">A) Încapsularea</label><br>

                <input type="radio" id="1v2" name="a1" value="rome">
                <label for="rome1">B) Moștenirea</label><br>

                <input type="radio" id="1v3" name="a1" value="madrid">
                <label for="madrid1">C) Polimorfismul</label><br>

                <input type="radio" id="1v4" name="a1" value="berlin">
                <label for="berlin1">D) Paralelismul</label>
            </li>

            <li>
                <p>Ce este un vector în C++?</p>
                <input type="radio" id="2v1" name="q2" value="jupiter">
                <label for="jupiter2">A) O funcție predefinită</label><br>

                <input type="radio" id="2v2" name="q2" value="mars">
                <label for="mars2">B) Un container din Standard Template Library care poate redimensiona automat</label><br>

                <input type="radio" id="2v3" name="q2" value="venus">
                <label for="venus2">C) O clasă de bază abstractă</label><br>

                <input type="radio" id="2v4" name="q2" value="saturn">
                <label for="saturn2">D) Un tip de date pentru stocarea coordonatelor geometrice</label>
            </li>

            <li>
                <p>Ce va afișa după apelarea lui f(3)?</p>
                <div class="question-image">
                    <img src="assets/images/q1.png" alt="Screenshot cu codul sursă" />
                </div>
                <div class="question-options">
                    <input type="radio" id="3v1" name="q3" value="121">
                    <label for="3v1">A) 121</label><br>

                    <input type="radio" id="3v2" name="q3" value="123">
                    <label for="3v2">B) 123</label><br>

                    <input type="radio" id="3v3" name="q3" value="213">
                    <label for="3v3">C) 213</label><br>

                    <input type="radio" id="3v4" name="q3" value="321">
                    <label for="3v4">D) 321</label>
                </div>
            </li>


            <li>
                <p>Care dintre următoarele este adevărat despre operatorul new în C++?</p>
                <input type="radio" id="4v1" name="q4" value="jupiter">
                <label for="jupiter2">A) 'new' aloca memorie în stack</label><br>

                <input type="radio" id="4v2" name="q4" value="mars">
                <label for="mars2">B) 'new' este folosit pentru alocarea dinamică a memoriei</label><br>

                <input type="radio" id="4v3" name="q4" value="venus">
                <label for="venus2">C) 'new' nu poate arunca excepții</label><br>

                <input type="radio" id="4v4" name="q4" value="saturn">
                <label for="saturn2">D) 'new' returnează întotdeauna NULL dacă alocarea eșuează</label>
            </li>
        </ol>
        <input type="submit" value="Trimite soluția" class="button">
    </div>
</div>

<?php include("inc/parts/footer.php"); ?>

<!-- Your existing scripts -->
<script src="js/main.js" defer></script>

</body>
</html>
