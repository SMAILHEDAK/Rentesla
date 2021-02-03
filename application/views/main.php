<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Rentesla</title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="../../css/style.css">

<body>
   <div class="parallax">
      <nav class="navbar-register navbar navbar-responsive container-fluid"><img class="logo" src="../../img/logo.png" alt="logo"></nav>
      <div class="text-white">
         <h1>Rentesla</h1>
         <p class="lead">Imaginez que vous puissiez vous faire livrer votre véhicule avec l'autopilot? Avec rentesla c'est possible!</p>
      </div>
      <button type="button" onclick="document.getElementById('register').scrollIntoView();"class="btn send-button tx-tfm">Enregistrez vous!</button>
   </div>
   

   <!-- FORMULAIRE INSCRIPTION -->
   <div class="col-md-6 mx-auto text-center p-5" id="register">
      <div class="header-title">
         <h2 class="wv-heading--title formtitle">
            S'enregistrer
         </h2>
      </div>
   </div>
   <div class="container-fluid align-items-center">
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="" method="post">
                  <div class="form-group">
                     <input type="text" name="name" class="form-control my-input" id="name" value="<?= set_value('name'); ?>" placeholder="Nom">
                  </div>
                  <p><?php echo form_error('name'); ?></p>
                  <div class="form-group">
                     <input type="text" name="surname" class="form-control my-input" id="surname" value="<?= set_value('surname'); ?>" placeholder="Prénom">
                  </div>
                  <p><?php echo form_error('surname'); ?></p>
                  <div class="form-group">
                     <input type="date" name="birthdate" class="form-control my-input" id="birthdate" value="<?= set_value('birthdate'); ?>" placeholder="Date de naissance">
                  </div>
                  <p><?php echo form_error('birthdate'); ?></p>
                  <div class="form-group">
                     <input type="date" name="licensedate" class="form-control my-input" id="licensedate" value="<?= set_value('licensedate'); ?>" placeholder="Date d'obtention du permis">
                  </div>
                  <p><?php echo form_error('licensedate'); ?></p>
                  <div class="form-group">
                     <input type="email" name="mail" class="form-control my-input" id="mail" value="<?= set_value('mail'); ?>" placeholder="Email">
                  </div>
                  <p><?php echo form_error('mail'); ?></p>
                  <div class="form-group">
                     <input type="text" name="address" id="address" class="form-control my-input" value="<?= set_value('address'); ?>" placeholder="Addresse">
                  </div>
                  <p><?php echo form_error('address'); ?></p>
                  <div class="form-group">
                     <input type="text" name="login" id="login" class="form-control my-input" value="<?= set_value('login'); ?>" placeholder="Pseudonyme" size="20" />
                     <p><?php echo form_error('login'); ?></p>
                  </div>
                  <div class="form-group">
                     <input type="password" name="password" class="form-control my-input" id="password" value="<?= set_value('password'); ?>" placeholder="Mot de passe">
                  </div>
                  <p><?php echo form_error('password'); ?></p>
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm">S'enregistrer!</button>
                     <a href="<?php echo base_url('login'); ?>">Se connecter!</a>
                  </div>
                  <p class="small mt-3">En vous enregistrant, vous vous engagez à respecter les <a href="#" class="ps-hero__content__link">Conditions d'utilisation</a> et <a href="#">les règles de confidentialité</a>.
                  </p>
               </form>
            </div>
         </div>
      </div>
   </div>

   </div>
   </div>
   </div>
   </div>
   

   <!-- Start Footer bottom Area -->
   <footer>
      <div class="footer-area-bottom">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="copyright text-center">
                     <p>
                        &copy; Copyright 2021. | <strong><a href="legalmentions">RENTESLA Ltd. </a></strong> | All Rights Reserved.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>