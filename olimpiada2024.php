<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sigma</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/main.js" defer></script>
</head>
<body>

<?php
include("inc/parts/header.php");
?>

<section class="last-news padding-section">
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <h2 class="title">Olimpiada 2024</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-3">
                <div class="box accent-background">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <div class="avatar">
                                <img src="assets/images/tri.jpg" alt="golden" class="avatar">
                            </div>
                        </div>
                        <div class="col-8">
                            <h2>Triunghi</h2>
                            <p class="placeholder">
                                <span>Limbaj</span>: C++ |
                                <span>Nivel</span>: greu |
                                <span>Durata</span>: 160min |
                                <span>Teste</span>: 7 |
                                <span>Tip incarcare</span>: Fisiere |
                                <span>Profesor</span>:  Lili Vărgă
                            </p>
                            <p>
                                Ștefan trebuie să verifice dacă Ana, sora lui mai mică, a înțeles corect conceptul de triunghi echilateral și îi propune o temă. În prima zi Ana trebuie să deseneze un triunghi echilateral T0 cu latura 1. A doua zi ea trebuie să deseneze un triunghi echilateral cu latura 2 și, apoi, în fiecare zi trebuie să deseneze un nou triunghi echilateral având latura mai mare cu 1 decât latura triunghiului din ziua precedentă. Scrieţi un program care, pentru un număr natural n dat, să determine:
                                1. Câte triunghiuri elementare T0 au fost desenate în n zile.
                                2. În ce zi a fost desenat și pe ce nivel se afla al n-lea triunghi elementar T0 desenat de Ana.
                                3. Câte triunghiuri elementare T0 sunt etichetate cu numere prime în primele n zile.                            </p>
                            <p>
                                <a href="tel:0745495695" class="button">
                                    <span class="far fa-file"></span>
                                    Incarca sursa</a>
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
                                <img src="assets/images/horseshoe.jpg" alt="golden" class="avatar">
                            </div>
                        </div>
                        <div class="col-8">
                            <h2>Potcovare</h2>
                            <p class="placeholder">
                                <span>Limbaj</span>: C++ |
                                <span>Nivel</span>: greu |
                                <span>Durata</span>: 180min |
                                <span>Teste</span>: 5 |
                                <span>Tip incarcare</span>: Consola |
                                <span>Profesor</span>: Emanuela Cerchez
                            </p>
                            <p>
                                La atelierul de făcut potcoave lucrează N muncitori, numerotaţi pentru simplitate de la 1 la N.
                                Fiecare muncitor a încheiat la angajare un contract în care este specificat numărul de potcoave
                                pe care trebuie să le producă muncitorul în fiecare zi de muncă, respectiv a câta zi muncitorul este liber.
                                Mai exact, muncitorul i (1 ≤ i ≤ N) trebuie să producă în fiecare zi de muncă pi potcoave, iar fiecare a ki-a
                                zi va fi liberă (adică muncitorul i va fi liber în ziua ki, 2ki, 3ki, …). În ziua liberă el nu va veni la atelier,
                                deci nu produce potcoave. Atelierul tocmai a primit o comandă de M potcoave. Scrieţi un program care să determine
                                numărul minim de zile după care comanda poate fi integral livrată.
                            </p>
                            <p>
                                <a href="tel:0745495695" class="button">
                                    <span class="far fa-file"></span>
                                    Incarca sursa</a>
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
                                <img src="assets/images/footbal.png" alt="golden" class="avatar">
                            </div>
                        </div>
                        <div class="col-8">
                            <h2>Fotbal</h2>
                            <p class="placeholder">
                                <span>Limbaj</span>: C++ |
                                <span>Nivel</span>: greu |
                                <span>Durata</span>: 150min |
                                <span>Teste</span>: 8 |
                                <span>Tip incarcare</span>: Fisier |
                                <span>Profesor</span>:  Mariana Grădinariu
                            </p>
                            <p>
                                Fotbalul este considerat sportul rege, având aproximativ 3,5 miliarde de fani.
                                Printre acești fani se numără și un copil pe nume Messi, care are doar șase ani. Prietenul
                                lui Ronaldo, cu doi ani mai mare l-a învățat atât regulile jocului, cât și cum se calculează
                                punctajul echipelor din ligă. Ronaldo i-a explicat că pentru fiecare meci câștigat echipa primește 3 puncte,
                                pentru fiecare meci pierdut echipa nu primește niciun punct, iar pentru meciurile terminate la egalitate, echipa
                                primește 1 punct. După ce-i explică regulile, Ronaldo vrea să verifice dacă Messi a înțeles pe un exemplu. Cunoscând
                                numărul de echipe și pentru fiecare echipă numărul de meciuri câștigate, numărul de meciuri pierdute și numărul de
                                meciuri încheiate la egalitate, determinați, în funcție de paritatea lui n două rezultate: dacă numărul de echipe este
                                par să se afle cel mai bun punctaj dintre toate echipele, iar dacă numărul de echipe este impar să se afle care este cel
                                mai mic număr de meciuri pierdute.
                            </p>
                            <p>
                                <a href="tel:0745495695" class="button">
                                    <span class="far fa-file"></span>
                                    Incarca sursa</a>
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
                                <img src="assets/images/mario.jpg" alt="golden" class="avatar">
                            </div>
                        </div>
                        <div class="col-8">
                            <h2>Mario</h2>
                            <p class="placeholder">
                                <span>Limbaj</span>: C++ |
                                <span>Nivel</span>: greu |
                                <span>Durata</span>: 150min |
                                <span>Teste</span>: 7 |
                                <span>Tip incarcare</span>: Fisiere |
                                <span>Profesor</span>: Lucian Neagu
                            </p>
                            <p>
                                Instalatorul Mario a plecat în căutarea prințesei Peach. Până a ajunge la Castelul lui Bowser, acolo unde era
                                ținută prizonieră prințesa, Mario a adunat N monede magice. Fiecare monedă, numerotată de la 1 la N are o o anumită
                                valoare, moneda i având valoarea mi (1 ≤ i ≤ N). Ajuns la Castel, Mario l-a întâlnit pe Bowser care era mândrul posesor
                                a unei colecții impresionante de monede, numerotate de la 1 la M, moneda i având o valoare bi (1 ≤ i ≤ M).
                                În confruntarea finală, Bowser îi oferă lui Mario șansa de a o salva pe Peach doar dacă reușește să facă schimburile
                                necesare între monedele lor, astfel încât cele mai mici N monedele să fie în posesia lui Mario și cele mai mari M
                                valori să fie în posesia lui Bowser. Scrieți un program care să îi permită lui Mario să o salveze pe Peach.                            </p>
                            <p>
                                <a href="tel:0745495695" class="button">
                                    <span class="far fa-file"></span>
                                    Incarca sursa</a>
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
                                <img src="assets/images/pitic.jpg" alt="golden" class="avatar">
                            </div>
                        </div>
                        <div class="col-8">
                            <h2>Pitic</h2>
                            <p class="placeholder">
                                <span>Limbaj</span>: C++ |
                                <span>Nivel</span>: greu |
                                <span>Durata</span>: 130min |
                                <span>Teste</span>: 10 |
                                <span>Tip incarcare</span>: Fisiere |
                                <span>Profesor</span>: Lucian Neagu
                            </p>
                            <p>
                                Piticul Doc și-a securizat pin-ul cardului bancar într-un mod cunoscut doar de el. Pin-ul este format din exact 4
                                cifre. Doc dispune de o mulțime de informații numerice dispuse pe R rânduri. Fiecare cifră din pin-ul cardului bancar
                                este un element majoritar pe rândul său, adică numărul de apariții ale cifrei respective este mai mare decât n / 2,
                                unde n reprezintă numărul total de cifre de pe rândul respectiv. Tu poți afla pin-ul lui Doc sau crezi că a greșit
                                securizarea pin-ului? Cunoscând numărul R de rânduri și numerele de pe fiecare rând, scrieţi un program care să
                                determine pin-ul lui Doc.
                            </p>
                            <p>
                                <a href="tel:0745495695" class="button">
                                    <span class="far fa-file"></span>
                                    Incarca sursa</a>
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
                                <img src="assets/images/chr.png" alt="golden" class="avatar">
                            </div>
                        </div>
                        <div class="col-8">
                            <h2>Craciun</h2>
                            <p class="placeholder">
                                <span>Limbaj</span>: C++ |
                                <span>Nivel</span>: greu |
                                <span>Durata</span>: 130min |
                                <span>Teste</span>: 9 |
                                <span>Tip incarcare</span>: Fisiere |
                                <span>Profesor</span>:  Anca Mihaela Uriciuc
                            </p>
                            <p>
                                În Ajunul Crăciunului, așteptându-l nerăbdători pe Moș Crăciun, Andrei și Bogdan se hotărăsc să joace un joc,
                                căștigătorul jocului fiind primul care va primi cadoul de la acesta. Ei scriu pe n bilete n numere naturale, câte
                                un număr pe fiecare bilet. Fiecare extrage câte un bilet dintr-un bol. Un bilet este norocos dacă numărul scris pe
                                el este număr fantastic. Un număr este fantastic dacă are număr par de cifre și este multiplu de 2024. Câștigătorul
                                jocului este cel care extrage cele mai multe bilete norocoase. Dacă la finalul jocului cei doi băieți au extras număr
                                egal de bilete norocoase sunt amândoi considerați câștigători și vor primi cadoul în același moment de timp. Cunoscând
                                numărul n de bilete precum și numerele scrise pe cele n bilete, determinați care este numărul total de bilete norocoase
                                extrase de cei doi copii.
                            </p>
                            <p>
                                <a href="tel:0745495695" class="button">
                                    <span class="far fa-file"></span>
                                    Incarca sursa</a>
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
                                <img src="assets/images/graph.png" alt="golden" class="avatar">
                            </div>
                        </div>
                        <div class="col-8">
                            <h2>Graf Planar </h2>
                            <p class="placeholder">
                                <span>Limbaj</span>: C++ |
                                <span>Nivel</span>: grea |
                                <span>Durata</span>: 160min |
                                <span>Teste</span>: 8 |
                                <span>Tip incarcare</span>: Fisiere |
                                <span>Profesor</span>: Alexandru Ioniță
                            </p>
                            <p>
                                În teoria grafurilor, un graf planar este un graf care poate fi încorporat într-un plan, adică poate fi desenat
                                în plan în așa fel încât muchiile sale să se intersecteze doar în noduri. Cu alte cuvinte, aceste poate fi desenat în
                                așa fel încât oricare două muchii să nu se intersecteze. Florin urmează în perioada 2023-2029 studii în informatică.
                                Fiind date NR = 2 * N noduri fixe (asemănător cu ceasul clasic) în planul xOy și N muchii, Florin vrea să determine
                                numărul grafurilor distincte planare în care fiecare nod va avea gradul 1. Scrieţi un program care să determine numărul
                                de grafuri obținute de Florin.
                            </p>
                            <p>
                                <a href="tel:0745495695" class="button">
                                    <span class="far fa-file"></span>
                                    Incarca sursa</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<br>
<section class="cards accent-background padding-section">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <a href="class9.php">
                    <div class="box cnoua">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span>Clasa a9-a</span>
                            </div>
                            <div class="col-6">
                                <img src="images/dog-card.png" alt="">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="class10.php">
                    <div class="box czece">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span>Clasa a10-a</span>
                            </div>
                            <div class="col-6">
                                <img src="images/cat-card.png" alt="">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="class11.php">
                    <div class="box cunu">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span>Clasa a11-a</span>
                            </div>
                            <div class="col-6">
                                <img src="images/voluntar.png" alt="">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="class12.php">
                    <div class="box cdoi">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span>Clasa a 12-a</span>
                            </div>
                            <div class="col-6">
                                <img src="images/revolut.png" alt="">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
include("inc/parts/footer.php");
?>

</body>
</html>
