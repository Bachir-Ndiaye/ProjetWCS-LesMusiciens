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
    <title>Formulaire | findXlyon </title>
</head>

<body>
<?php require './src/php/header.php'; ?>
<main class="contact">
<div class="msg">    
<?php   echo "Bonjour". " " . $_POST["firstname"] . ". Notre équipe de hacker vous recontacte dans les meilleurs délais."; ?>
</div>
<h1>Formulaire d'inscription</h1>  
    
    
    <form action="form.php" method="POST">
           

            <p>
                <label for="lastname">Nom : </label>
                <input type="text" id="lastname" name="lastname" placeholder="Votre nom"required/>
            </p>
            <p>
                <label for="firstname">Prénom : </label>
                <input type="text" id="firstname" name="firstname" placeholder="Votre Prénom" required/>
            </p>
            
            <p>
                <label for="phone">Tél : </label>
                <input type="tel" id="phone" name="phone" placeholder="Votre numéro de téléphone" required/>
            </p>

            <p>
                <label for="email">Email : </label>
                <input type="email" id="email" name="email" placeholder="Votre adresse email"/>
            </p>
            <p>
                <label for="demande">Demande(s) : </label>
                <textarea id="demande" name="demande" placeholder="Votre demande"></textarea>
            </p>
            <p>
                <input id="button" type="submit" value="Envoyer"/>
            </p>
        </form>
    </main>
    <?php require './src/php/footer.php'; ?>
<script type="text/javascript" src="./src/js/header.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>       
    </html>