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
    <title>Acceuil - findXlyon </title>
</head>
<body>
    <!--Here header.php-->
    <?php require './src/php/header.php'; ?>

    <!-- Here Carrousel/Hero-->

    <!-- Here slider-->
    <div id="slider">
        <figure>
            <img src="https://cdn.pixabay.com/photo/2018/06/30/09/29/music-3507317_960_720.jpg"/>
            <img src="https://cdn.pixabay.com/photo/2015/05/07/11/02/guitar-756326_960_720.jpg"/>
            <img src="https://cdn.pixabay.com/photo/2017/06/06/22/58/face-2378774_960_720.jpg"/>
            <img src="https://cdn.pixabay.com/photo/2018/06/17/10/38/artist-3480274_960_720.jpg"/>
            <img src="https://cdn.pixabay.com/photo/2016/07/20/22/15/crowd-1531431_960_720.jpg"/>
        </figure>
        </div>
    <!-- slider -->

    <!-- Here Events-->
    <div class="events">
        <h2>ÉVÈNEMENTS</h2>
    </div>

    <!--Last subscribers-->
    <div class="susbcribers-last">
        <div class="subs-top-container">
            <i class="fa fa-child"></i>
            <h4> NOS DERNIERS INSCRITS</h4>
        </div>
        
        <div class="subs-all-cards-container">
            <div class="subs-card">
                <img src="https://fakeimg.pl/150x150/" alt="Image of the last group who subscribe">
                <div class="subs-card-right-grid">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit non eius molestias officiis minus aliquid?</p>
                    <h5>Voir groupe</h5>
                </div>
            </div>
            <div class="subs-card">
                <img src="https://fakeimg.pl/150x150/" alt="Image of the last group who subscribe">
                <div class="subs-card-right-grid">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit non eius molestias officiis minus aliquid?</p>
                    <h5>Voir groupe</h5>
                </div>
            </div>
            <div class="subs-card">
                <img src="https://fakeimg.pl/150x150/" alt="Image of the last group who subscribe">
                <div class="subs-card-right-grid">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit non eius molestias officiis minus aliquid?</p>
                    <h5>Voir groupe</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Post announce or search for a groupe-->
    <div class="post-announce">
        <h5>Déposer une annonce / Chercher un groupe</h5>
    </div>

    <!--Winner of the week (coup de coeur) -->
    <div class="star">
        <div class="coeur">
            <h2>Coup De Coeur</h2>    
            <div class="fa-centered">
                <i class="fa fa-heart fa-vlb"></i>
                <i class="fa fa-heart fa-lb" style="font-size:24px"></i>
                <i class="fa fa-heart fa-b" style="font-size:36px;color:#1B1E3D"></i>
            </div>
        </div>
        <div class="imgs-versus">
            <img class="img-v1" src="https://fakeimg.pl/125x125/" alt="Coup de coeur numero 1">
            <h3>VS</h3>
            <img class="img-v2" src="https://fakeimg.pl/125x125/" alt="Coup de coeur numero 2">
        </div>
        <div class="star-btn">
            <button style="font-size:24px">Votez <i class="fa fa-star"></i></button>
        </div>
   
    </div>

    <!--Clients comments about musicians-->
    <div class="testimonials">
        <div class="card-testimonial">
            <img src="https://fakeimg.pl/50x50/">
            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias maxime ulla. <i class="fa fa-quote-right"></i></p>
        </div>
        <div class="card-testimonial ct-right">
            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias maxime ulla. <i class="fa fa-quote-right"></i></p>
            <img src="https://fakeimg.pl/50x50/">
        </div>

        <div class="card-testimonial">
            <img src="https://fakeimg.pl/50x50/">
            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias maxime ulla. <i class="fa fa-quote-right"></i></p>
        </div>
    </div>

    <!--FOOTER-->
    <?php require './src/php/footer.php'; ?>
</body>
</html>