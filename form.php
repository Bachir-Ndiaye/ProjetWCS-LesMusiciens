<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="./src/css/mobile-first.css">
</head>

<body>
<?php require './src/php/header.php'; ?>
<main class="contact">
<div class="msg">    
<?php   echo "bonjour". " " . $_POST["firstname"]; ?>
</div>
<h1>Formulaire d'inscription</h1>  
    
    
    <form action="form.php" method="POST">
           

            <p>
                <label for="lastname">Nom : </label>
                <input type="text" id="lastname" name="lastname" placeholder="Entre ton Nom"required/>
            </p>
            <p>
                <label for="firstname">Prénom : </label>
                <input type="text" id="firstname" name="firstname" placeholder="Entre ton Prénom" required/>
            </p>
            
            <p>
                <label for="phone">Tel: </label>
                <input type="tel" id="phone" name="phone" placeholder="Entre ton Numéro de téléphone" required/>
            </p>

            <p>
                <label for="email">email: </label>
                <input type="email" id="email" name="email" placeholder="Ecrit ton adresse email"/>
            </p>
            <p>
                <label for="demande">demande: </label>
                <textarea id="demande" name="demande" placeholder="ecrire votre demande içi"></textarea>
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