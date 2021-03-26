<!DOCTYPE html>
<html lang="en">
<head>
    <!--Some basic meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="icon" type="image/png" href="./src/img/logov1.png" />

    <!--CSS links-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./src/css/mobile-first.css">

    <!--Page title-->
    <title>Acceuil | findXlyon </title>
   
</head>
<body>
    <!--Here header.php-->
    <?php require './src/php/header.php'; ?>
    
    <!-- Here slider-->
    <div id="slider">
        <figure>
            <img src="./src/img/acceuil.jpg" loading="lazy"/>
            <img src="./src/img/acceuil1.jpg" loading="lazy"/>
            <img src="./src/img/acceuil3.jpg" loading="lazy"/>
            <img src="./src/img/acceuil2.jpg" loading="lazy"/>
        </figure>
    </div>

    <!-- Here Events-->
    <div class="events">
        <a href="https://www.lyon-france.com/l-agenda/Tous-les-evenements"><h2>ÉVÈNEMENTS</h2></a>
    </div>

    <!--Last subscribers-->
    <div class="susbcribers-last">
        <div class="subs-top-container">
            <i class="fa fa-child"></i>
            <h4> NOS DERNIERS INSCRITS</h4>
        </div>
        
        <div class="subs-all-cards-container">
            <div class="subs-card">
                <img src="./src/img/derniers-inscrits/ls-1.png" alt="Image of the last group who subscribe" loading="lazy">
                <div class="subs-card-right-grid">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit non eius molestias officiis minus aliquid?</p>
                    <a href="https://soundssobeautiful.net/2018/06/12/jasual-cazz-travail-de-composition-defini-pour-une-imagination-infinie-interview/"><h5>Voir groupe</h5></a>
                </div>
            </div>
            <div class="subs-card">
                <img src="./src/img/derniers-inscrits/ls-2.png" alt="Image of the last group who subscribe" loading="lazy">
                <div class="subs-card-right-grid">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit non eius molestias officiis minus aliquid?</p>
                    <a href="https://soundssobeautiful.net/2018/06/11/damoiseau-folie-gronde-plus-quun-album-cest-un-livre-interview/"><h5>Voir groupe</h5></a>
                </div>
            </div>
            <div class="subs-card">
                <img src="./src/img/derniers-inscrits/ls-3.png" alt="Image of the last group who subscribe" loading="lazy">
                <div class="subs-card-right-grid">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit non eius molestias officiis minus aliquid?</p>
                    <a href="https://soundssobeautiful.net/2018/03/30/supa-dupa-vers-linfini-et-au-dela-evolution-du-groupe-avant-lenvol-interview/"><h5>Voir groupe</h5></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Post announce or search for a groupe-->
    <div class="post-announce">
        <a href="form.php"><h5>Déposer une annonce / Chercher un groupe </h5></a>
    </div>

    <!--Winner of the week (coup de coeur) -->
    <div class="star">
        <div class="coeur">
            <h2>Coup De Coeur</h2>    
            <div class="fa-centered">
                <i class="fa fa-heart fa-vlb"></i>
                <i class="fa fa-heart fa-lb" style="font-size:24px"></i>
                <i class="fa fa-heart fa-b" style="font-size:36px"></i>
            </div>
        </div>
        <div class="imgs-versus">
            <img class="img-v1" src="./src/img/versus/brooklyn.png" alt="Coup de coeur numero 1" loading="lazy">
            <h3>VS</h3>
            <img class="img-v2" src="./src/img/versus/lyon.png" alt="Coup de coeur numero 2" loading="lazy">
        </div>
        <div class="star-btn">
            <button style="font-size:24px">Votez <i class="fa fa-star"></i></button>
        </div>
   
    </div>

    <!--Clients comments about musicians-->
    <div class="testimonials">
        <div class="card-testimonial">
            <img src="./src/img/avis/avis-1.png" loading="lazy">
            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias maxime ulla. <i class="fa fa-quote-right"></i></p>
        </div>
        <div class="card-testimonial ct-right">
            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias maxime ulla. <i class="fa fa-quote-right"></i></p>
            <img src="./src/img/avis/avis-2.jpg" loading="lazy">
        </div>

        <div class="card-testimonial">
            <img src="./src/img/avis/avis-3.jpg" loading="lazy">
            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias maxime ulla. <i class="fa fa-quote-right"></i></p>
        </div>
    </div>

    <!--FOOTER-->
    <?php require './src/php/footer.php'; ?>
    <script type="text/javascript" src="./src/js/header.js"></script>
</body>
</html>
