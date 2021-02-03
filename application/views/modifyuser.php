<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!------ Include the above in your HEAD tag ---------->

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">

    <title>Rentesla</title>
</head>

<body class="p-0 m-0" style="width:100%; height:100%;">
<nav class="navbar navbar-expand-sm navbar-light">
        <!-- Brand -->
        <a class="navbar-brand" href="#"><img class="logo" src="../../img/logo.png" alt="logo"></a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <?php echo anchor('logged_main', 'Accueil', 'class="nav-link"') ?>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Menu
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#"><?php if ($_SESSION['admin'] == '1') {
                                                            echo anchor('logged_admin', 'Votre profil', 'class="link-class"');
                                                        } else {
                                                            echo anchor('profile', 'Votre profil', 'class="link-class"');
                                                        } ?></a>
                    <a class="dropdown-item" href="#">
                        <?php echo anchor('main/logout', 'Se déconnecter', 'class="link-class"') ?></a>
                </div>
            </li>
        </ul>
    </nav>

    <div class="container d-flex justify-content-center">
        <?php foreach ($user as $row) { ?>
            <p class="h1">Modification du client numéro <?= $row['id_user'] ?> :</p>
    </div>

    <div class="container d-flex justify-content-center">
        <form action="" method="post" id="userdata" name="userdata">
          <span class="form-text text-muted">Nom :</span> <input type="text" name="name" value="<?= $row['name'] ?>" id="name" class="form-control my-input" />
            <p><?php echo form_error('name'); ?></p>
          <span class="form-text text-muted">Prénom: </span><input type="text" name="surname" value="<?= $row['surname'] ?>" id="surname" class="form-control my-input" /> 
            <p><?php echo form_error('surname'); ?></p>
          <span class="form-text text-muted">Addresse : </span><input type="text" name="address" value="<?= $row['address'] ?>" id="address" class="form-control my-input" /> 
            <p><?php echo form_error('address'); ?></p>
          <span class="form-text text-muted">Date de naissance :</span> <input type="date" name="birthdate" value="<?= $row['birthdate'] ?>" id="birthdate" class="form-control my-input" /> 
            <p><?php echo form_error('birthdate'); ?></p>
          <span class="form-text text-muted">Date de permis :</span> <input type="date" name="licensedate" value="<?= $row['license_date'] ?>" id="licensedate" class="form-control my-input" /> 
            <p><?php echo form_error('licensedate'); ?></p>
          <span class="form-text text-muted">Addresse mail :</span> <input type="email" name="mail" value="<?= $row['mail'] ?>" id="mail" class="form-control my-input" /> 
            <p><?php echo form_error('mail'); ?></p>
          <span class="form-text text-muted">Mot de passe :</span> <input type="password" name="password" value="<?= $row['password'] ?>" id="password" class="form-control my-input" />
            <p><?php echo form_error('password'); ?></p>
    </div>
<?php } ?>
<div class="container d-flex justify-content-center mb-5">
    <button class="btn" name="datasubmit" id="datasubmit" type="submit">sauvegarder</button>
    </form>
</div>

<footer>
            <div class="footer-area-bottom" style="height:20%;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="copyright text-center">
                                <p>
                                    &copy; <strong><a href="legalmentions">Mentions </a></strong> | <strong><a href="legalmentions">RENTESLA Ltd. </a></strong> | <strong><a href="#">Contact </a></strong>
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

</html>