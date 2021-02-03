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

<body onload="loadtheme()">
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

    <section class="container">
        <h1>Nos Tesla disponibles :</h1>
        <div class="input-group container d-flex align-items-center">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <select class="custom-select" name="auto">
                        <option disabled selected>Autopilot</option>
                        <option value="1">Oui</option>
                        <option value="0">Non</option>
                    </select>
                </div>
                <button type="submit" name="submit" value="submit" class="btn">rechercher</button>
        </div>
        </form>
    </section>
    <section class="container-fluid col-md-6">
        <?php foreach ($cars as $row) { ?>
            <div class="row p-4">
                <div class="card">
                    <div class="card-header"><?= $row['model'] ?></div>
                    <div class="card-body">
                        <img class="card-img-center img-fluid" src="<?php if ($row['model'] == 'Model Y') {
                                                                        echo '../../img/modely.png';
                                                                    } else if ($row['model'] == 'Model X') {
                                                                        echo '../../img/modelx.png';
                                                                    } else if ($row['model'] == 'Model S') {
                                                                        echo '../../img/models.png';
                                                                    } else if ($row['model'] == 'Model 3') {
                                                                        echo '../../img/model3.png';
                                                                    } else if ($row['model'] == 'Roadster') {
                                                                        echo '../../img/roadster.png';
                                                                    } ?>" alt="Card image cap">
                        <p class="card-text">
                            <?php if ($row['autopilot'] == 1) {
                                echo 'Ce véhicule est éligible à la livraison par autopilot!' . '<br>';
                            } ?>
                            <?php if ($row['model'] == 'Model S') {
                                echo 'La berline par excellence!';
                            } ?>
                            <?php if ($row['model'] == 'Model X') {
                                echo 'Une virée en famille?';
                            } ?>
                            <?php if ($row['model'] == 'Model Y') {
                                echo 'Les SUV sont à la mode!';
                            } ?>
                            <?php if ($row['model'] == 'Model 3') {
                                echo 'Notre modèle le plus loué';
                            } ?>
                            <?php if ($row['model'] == 'Roadster') {
                                echo 'Pour apprécier une virée les cheveux au vent!';
                            } ?>
                            <br>
                            <?= $row['kilometer'] ?> kilomètres <br>
                            <?= $row['color'] ?><br>
                        </p>
                        <a href="rent/<?= $row['car_id'] ?>" class="btn">Plus d'infos!</a>
                        <p class="text-right"><?= $row['dailyprice'] ?> euros/jour</p>


                    </div>
                </div>
            </div>
            </div>
        <?php } ?>

        <section class="container-fluid text-center pt-5 pb-5">
            <div class="">
                <p class="h1 p-2"> Notre agence :</p>
                <p class="text-center p-2">Vous pouvez nous retrouver dans notre agence située sur cette carte :</p>
            </div>
            <div class="container-fluid align-items-center p-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1640.9499270287397!2d135.57471265812254!3d34.65723199511139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000dfbb3fc57d23%3A0x3b91f34282a3018!2sRandom!5e0!3m2!1sfr!2sfr!4v1615816492300!5m2!1sfr!2sfr" width="auto" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>

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