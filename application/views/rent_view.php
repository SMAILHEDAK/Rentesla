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
        <p class="h1">Tesla <?= $cardata['0']['model'] ?></p>
    </div>
    <!-- Temporary image -->
    <div class="container d-flex justify-content-center"><img src="<?php if ($cardata['0']['model'] == 'Model Y') {
                                                                        echo '../../img/modely.png';
                                                                    } else if ($cardata['0']['model'] == 'Model X') {
                                                                        echo '../../img/modelx.png';
                                                                    } else if ($cardata['0']['model'] == 'Model S') {
                                                                        echo '../../img/models.png';
                                                                    } else if ($cardata['0']['model'] == 'Model 3') {
                                                                        echo '../../img/model3.png';
                                                                    } else if ($cardata['0']['model'] == 'Roadster') {
                                                                        echo '../../img/roadster.png';
                                                                    } ?>" alt="<?= $cardata['0']['model'] ?>" class="img-fluid"></img></div>
    <div class="container-fluid d-flex justify-content-start">
        <p class="h4">Informations sur le véhicule :</p>
    </div>
    <div class="container-fluid">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Puissance/Batterie : <?= $cardata['0']['power'] ?> / <?= $cardata['0']['batterysize'] ?></li>
            <li class="list-group-item">Couleur : <?= $cardata['0']['color'] ?></li>
            <li class="list-group-item">Kilometrage : <?= $cardata['0']['kilometer'] ?></li>
            <li class="list-group-item">Autopilot : <?php if ($cardata['0']['autopilot'] == '1') {
                                                        echo 'oui';
                                                    } else if ($cardata['0']['autopilot'] == '0') {
                                                        echo 'Non';
                                                    } ?></li>
            <li class="list-group-item">Prix/jour : <?= $cardata['0']['dailyprice'] ?> Euros</li>
        </ul>
    </div>

    <div class="container-fluid d-flex justify-content-start pt-5">
        <p class="h5">Description du modèle :</p>
    </div>

    <div class="container-fluid d-flex justify-content-start">
        <p><?php if ($cardata['0']['model'] == "Model Y") {
                echo 'La Tesla Model Y est un suv urbain électrique qui vous permettra de braver les rues encombrées en un rien de temps. 
                Tout cela, dans un confort de route exceptionnel. 
                L\'intérieur est spacieux et l\'autopilot (en option) vous permettra de rouler les yeux fermés(ou presque). 
                N\'hésitez pas et sautez sur l\'occasion!';
            } else if ($cardata['0']['model'] == "Model X") {
                echo 'La Tesla Model X est le véritable SUV familial, ses 6 places vous permettront de vous balader en famille.
                Le confort de route et l\'espace intérieur vous ravira.
                L\'autopilot (en option) vous permettra de rouler les yeux fermés(ou presque).
                N\'hésitez pas et sautez sur l\'occasion!';;
            }
            if ($cardata['0']['model'] == "Model S") {
                echo 'La Tesla Model S est le premier modèle de Tesla.
                Grande berline spacieuse et luxueuse.
                Le confort de route et le confort intérieur vous ravira.
                L\'autopilot (en option) vous permettra de rouler les yeux fermés(ou presque).
                N\'hésitez pas et sautez sur l\'occasion!';
            }
            if ($cardata['0']['model'] == "Model 3") {
                echo 'La Tesla Model 3 est le premier modèle grande echelle électrique de Tesla.
                Tout cela sans oublier le confort de route et le confort intérieur.
                L\'autopilot (en option) vous permettra de rouler les yeux fermés(ou presque).
                N\'hésitez pas et sautez sur l\'occasion!';
            }
            if ($cardata['0']['model'] == "Roadster") {
                echo 'La Tesla Roadster est un cabriolet sportif par excellence.
                Roulez les cheveux au vent et revivez votre jeunesse.
                Le confort de route et la conduite de type sportive vous donneront des sensations inouies.
                L\'autopilot (en option) vous permettra de rouler les yeux fermés(ou presque).
                N\'hésitez pas et sautez sur l\'occasion!';
            } ?></p>
    </div>
    <div class="container-fluid pb-2 pt-5">
        <p class="h3" style="width:auto;">Non disponible à ces dates :</p>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Date de début</th>
                    <th scope="col">Date de fin</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rentals as $rentals) { ?>
                    <tr>
                        <td><?= $rentals['start_date'] ?></td>
                        <td><?= $rentals['end_date'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="container-fluid d-flex justify-content-center pt-5">
        <p class="h2">Louer ce véhicule :</p>
    </div>
    <div class="container-fluid justify-content-center pb-2">
        <form action="" class="container-fluid justify-content-center" method="post">
            <div class="form-group row p-1">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input id="start_date" name="start_date" placeholder="Date de début" type="date" class="form-control" aria-describedby="start_dateHelpBlock">
                    </div>
                    <span id="start_dateHelpBlock" class="form-text text-muted">Selectionnez votre date de début</span>
                </div>
            </div>

            <div class="form-group row p-1">
                <div class="col">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input id="end_date" name="end_date" placeholder="Date de fin" type="date" class="form-control" aria-describedby="end_dateHelpBlock">
                    </div>
                    <span id="end_dateHelpBlock" class="form-text text-muted">Selectionnez votre date de fin</span>
                </div>
            </div>
            <div class="form-group row p-1">
                <div class="col">
                    <select name="cards" id="cards" class="custom-select">
                        <?php foreach ($cards as $cards) { ?>
                            <option value="<?= $cards['id_card'] ?>">Bénéficiaire de la carte :<?= $cards['card_holder'] ?> <br> Numéro de carte : <?= $cards['card_number'] ?></option>
                        <?php } ?>
                    </select>
                    <span id="bankHelpBlock" class="form-text text-muted">Sélectionnez la carte bancaire à utiliser</span>
                </div>
            </div>
            <?php if ($cardata['0']['autopilot'] == 1) {
                echo "<div class='form-group row p-2'>
                    <div class='col'><select class='custom-select' name='auto'>
                        <option disabled selected>Choisir</option>
                        <option value='1'>Oui</option>
                        <option value='0'>Non</option>
                    </select>  <span id='autoHelpBlock' class='form-text text-muted'>Voulez vous vous faire livrer par autopilot ? Une surfacture de 150 euros s'effectuera.</span>
                    </div>
                    </div>";
            } ?>
            <p class="text-muted">Si vous n'avez aucune carte d'enregistrée, vous pouvez <?php echo anchor('add_card', 'Ajouter une carte') ?>.</p>

            <div class="form-group row p-1">
                <div class="col">
                    <input name="submit" type="submit" value="Louer le véhicule" class="btn"></input>
                </div>
            </div>
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