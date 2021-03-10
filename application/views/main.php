<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Rentesla</title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<body>
   <!-- FORMULAIRE INSCRIPTION -->
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
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
