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
    <title>Qui sommes-nous ? | findXlyon </title>
   
</head>
<body>
    <!--Here header.php-->
    <?php require './src/php/header.php' ; ?>
    
    <div class="whoweare">
        <div class="presentation">
            <h2>Qui sommes-nous ?</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum aliquam unde dolores debitis eaque omnis harum quidem eum totam nobis. Officia fugiat ducimus voluptatibus accusamus? Libero odit fugit iure aut.</p>
        </div>

        <div class="cards-team-all">
            <!--Amadou card-->
            <div class="card-team">
                <div class="member">
                    <img src="https://fakeimg.pl/150x150/" alt="Image d'Amadou NDIAYE - Développeur web junior">
                </div>
                <div class="member-info">
                    <h4>Amadou NDIAYE</h4>
                    <div class="line"></div>
                    <span>Développeur web junior</span>
                    <div class="social">
                    <div class="linkedin"><a href="https://www.linkedin.com/in/amadoubassiroundiaye/"><i class="fa fa-linkedin"></i>
</a></div>
                    <div class="github"><a href="https://github.com/Bachir-Ndiaye"><i class="fa fa-github"></i>
</a></div>
                </div>
                
                </div>
            </div>

            <!--Benoit card-->
            <div class="card-team">
                <div class="member">
                    <img src="./src/img/team/benoit.jpg" alt="Image d'Amadou NDIAYE - Développeur web junior">
                </div>
                <div class="member-info">
                    <h4>Benoit COUSIN</h4>
                    <div class="line"></div>
                    <span>Développeur web junior</span>
                    <div class="social">
                    <div class="linkedin"><a href="https://www.linkedin.com/in/benoit-cousin-ab352a1b7/"><i class="fa fa-linkedin"></i>
</a></div>
                    <div class="github"><a href="https://github.com/benoitCousin"><i class="fa fa-github"></i>
</a></div>
                </div>
                
                </div>
            </div>

            <!--Remi card-->
            <div class="card-team">
                <div class="member">
                    <img src="./src/img/team/remi.jpg" alt="Image d'Amadou NDIAYE - Développeur web junior">
                </div>
                <div class="member-info">
                    <h4>Rémi  JOUANNETAUD</h4>
                    <div class="line"></div>
                    <span>Développeur web junior</span>
                    <div class="social">
                    <div class="linkedin"><a href="https://www.linkedin.com/in/remi-jouannetaud-a017971a0/"><i class="fa fa-linkedin"></i>
</a></div>
                    <div class="github"><a href="https://github.com/Jouannetaud"><i class="fa fa-github"></i>
</a></div>
                </div>
                
                </div>
            </div>
        </div>
    </div>

    <!--FOOTER-->
    <?php require './src/php/footer.php'; ?>
    <script type="text/javascript" src="./src/js/header.js"></script>
</body>
</html>
