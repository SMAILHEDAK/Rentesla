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
    <div class="container-fluid d-flex justify-content-center">
        <p class="h4">Ajouter une carte :</p>
    </div>
    <div class="container d-flex justify-content-center" style="height:60%;">
        <form action="" method="post">
            <div class="form-group">
                <input type="tel" name="card_number" class="form-control my-input" id="card_number" placeholder="Numéro de carte">
            </div>

            <p><?php echo form_error('card_number'); ?></p>

            <div class="form-group">
                <input type="text" name="card_holder" class="form-control my-input" id="card_holder" placeholder="Bénéficiaire">
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
    <div class="container-fluid d-flex justify-content-center" style="height:20%;">
        <?php echo anchor('profile', 'Retour au profil', 'class="link-class p-3"') ?>
        <?php echo anchor('rent/' . $_SESSION['car_id'], 'Retour à la page de location', 'class="link-class p-3"') ?>
    </div>



    <footer>
        <div class="footer-area-bottom" style="height:20%;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright text-center">
                            <p>
                                &copy; <strong><a href="legalmentions">Mentions </a></strong> | <strong><a href="#">RENTESLA Ltd. </a></strong> | <strong><a href="#">Contact </a></strong>
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