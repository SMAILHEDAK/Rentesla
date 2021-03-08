<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Rentesla</title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<body>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               S'enregistrer
            </h1>
            <h2 class="wv-heading--subtitle">
               Accedez au futur !
            </h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <?php echo validation_errors(); ?>
            <div class="myform form ">
               <form action="" method="post" name="login">
                  <div class="form-group">
                     <input type="text" name="name" class="form-control my-input" id="name" placeholder="Nom">
                  </div>
                  <div class="form-group">
                     <input type="text" name="surname" class="form-control my-input" id="surname" placeholder="Prénom">
                  </div>
                  <div class="form-group">
                     <input type="date" name="birthdate" class="form-control my-input" id="birthdate" placeholder="Date de naissance">
                  </div>
                  <div class="form-group">
                     <input type="date" name="licensedate" class="form-control my-input" id="licensedate" placeholder="Date d'obtention du permis">
                  </div>
                  <div class="form-group">
                     <input type="email" name="mail" class="form-control my-input" id="mail" placeholder="Email">
                  </div>
                  <div class="form-group">
                     <input type="text" name="address" id="address" class="form-control my-input" placeholder="Addresse">
                  </div>
                  <div class="form-group">
                     <input type="text" name="login" class="form-control my-input" id="login" placeholder="Pseudonyme">
                  </div>
                  <div class="form-group">
                     <input type="password" name="password" class="form-control my-input" id="password" placeholder="Mot de passe">
                  </div>

                  <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm">S'enregistrer!</button>
                  </div>
                  <p class="small mt-3">En vous enregistrant, vous vous engagez à respecter les <a href="#" class="ps-hero__content__link">Conditions d'utilisation</a> et <a href="#">les règles de confidentialité</a>.
                  </p>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>