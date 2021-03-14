<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!------ Include the above in your HEAD tag ---------->

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Rentesla</title>
</head>

<body class="p-0 m-0" style="width:100%; height:100%;">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Rentesla</a>

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
                <a class="dropdown-item" href="#"><?php if ($_SESSION['admin']=='1'){echo anchor('logged_admin', 'Accéder à votre profil', 'class="link-class"');} else{echo anchor('profile', 'Accéder à votre profil', 'class="link-class"');} ?></a>
                    <a class="dropdown-item" href="#">
                        <?php echo anchor('main/logout', 'Se déconnecter', 'class="link-class"') ?></a>
                </div>
            </li>
        </ul>
    </nav>
        <p class="h4">Ajouter une carte :</p>
    </div>
<div class="container d-flex justify-content-start">
        <form action="" method="post">
            <div class="form-group">
                <input type="tel" name="card_number" class="form-control my-input" id="card_number" placeholder="Numéro de carte">
            </div>

            <p><?php echo form_error('card_number'); ?></p>

            <div class="form-group">
                <input type="text" name="card_holder" class="form-control my-input" id="card_holder"  placeholder="Bénéficiaire">
            </div>

            <p><?php echo form_error('card_holder'); ?></p>

            <div class="form-group">
                <input type="tel" name="ccv" class="form-control my-input" id="ccv" placeholder="Code de sécurité">
            </div>

            <p><?php echo form_error('ccv'); ?></p>

            <div class="text-center ">
                <button type="submit" class="btn btn-block send-button tx-tfm">Enregistrer la carte</button>
            </div>
        </form>
    </div>
    <?php echo anchor('profile', 'Retour au profil', 'class="link-class"') ?>
    <?php echo anchor('rent/'.$_SESSION['car_id'], 'Retour à la page de location', 'class="link-class"') ?>


    <footer class="py-4 bg-dark flex-shrink-0">
        <div class="container text-center">
            <a href="https://bootstrapious.com/snippets" class="text-muted">Bootstrap snippet by Bootstrapious</a>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>