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
    <?php require './src/php/header.php' ; ?>
    
    
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
            <h4>DERNIERS INSCRITS</h4>
            <div class="line"></div>
        </div>
        
        <div class="subs-all-cards-container">
            <div class="subs-card">
                <img src="https://fakeimg.pl/150x150/" alt="Image of the last group who subscribe">
                <div class="subs-card-right-grid">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit non eius molestias officiis minus aliquid?</p>
                    <h5>Lire la suite...</h5>
                </div>
            </div>
            <div class="subs-card">
                <img src="https://fakeimg.pl/150x150/" alt="Image of the last group who subscribe">
                <div class="subs-card-right-grid">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit non eius molestias officiis minus aliquid?</p>
                    <h5>Lire la suite...</h5>
                </div>
            </div>
            <div class="subs-card">
                <img src="https://fakeimg.pl/150x150/" alt="Image of the last group who subscribe">
                <div class="subs-card-right-grid">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit non eius molestias officiis minus aliquid?</p>
                    <h5>Lire la suite...</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Post announce or search for a groupe-->
    <div class="post-announce">
        <h5>Déposer une annonce / Chercher un groupe</h5>
    </div>

    <!--Winner of the week (coup de coeur) -->

    <!--Clients comments about musicians-->
    <script src="./src/js/header.js"></script>
    <!--FOOTER-->
    <?php require './src/php/footer.php'; ?>
    
    
</body>
</html>