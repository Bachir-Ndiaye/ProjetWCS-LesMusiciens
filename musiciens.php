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
    <title>Nos musiciens | findXlyon </title>
</head>
<body>
   <!--Here header.php-->
   <?php require './src/php/header.php'; ?>
   
   <div class="musicians">
       <h2>RECHERCHER PAR STYLE MUSICAL</h2>
       <div class="semiline"></div>
       <div class="cards-musicians-all">
           <div class="cards-musicians">
                <a href="musicians-style.php"><img src="./src/img/music-styles/jazz.png" loading="lazy"></a>
           </div>

           <div class="cards-musicians">
           <a href="musicians-style.php"><img src="./src/img/music-styles/soul.png" loading="lazy"></a>
           </div>

           <div class="cards-musicians">
           <a href="musicians-style.php"><img src="./src/img/music-styles/pop.png" loading="lazy"></a>
           </div>

           <div class="cards-musicians">
           <a href="musicians-style.php"><img src="./src/img/music-styles/punk.png" loading="lazy"></a>
           </div>

           <div class="cards-musicians">
           <a href="musicians-style.php"><img src="./src/img/music-styles/rocknroll.png" loading="lazy"></a>
           </div>

           <div class="cards-musicians">
           <a href="musicians-style.php"><img src="./src/img/music-styles/hiphop.png" loading="lazy"></a>
           </div>

           <div class="cards-musicians">
           <a href="musicians-style.php"><img src="./src/img/music-styles/reggae.png" loading="lazy"></a>
           </div>

           <div class="cards-musicians">
           <a href="musicians-style.php"><img src="./src/img/music-styles/afro.png" loading="lazy"></a>
           </div>

           <div class="cards-musicians">
           <a href="musicians-style.php"><img src="./src/img/music-styles/funk.png" loading="lazy"></a>
           </div>
           
       </div>      
   </div>

    <!--Here footer.php-->
   <?php require './src/php/footer.php'; ?>
<script type="text/javascript" src="./src/js/header.js"></script>
</body>
</html>