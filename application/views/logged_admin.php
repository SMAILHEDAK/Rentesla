<!DOCTYPE html>
<html lang="fr" style="height:100%; width:100%;">

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

<body class="p-0 m-0" style="height:100% ;width:100%;">
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
    <div class="container-fluid mb-5">
    <p class="h1 text-center">Bonjour ADMIN :</p>
    </div>
    <div class="container-fluid mb-5">
        <p class="h1 text-start">Gérez vos clients :</p>
        <table class="table mx-auto">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Addresse</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">Date de permis</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Login</th>
                    <th scope="col">Password</th>
                    <th scope="col">Suppression</th>
                    <th scope="col">Modification</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clients as $row) { ?>
                    <tr>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['surname'] ?></td>
                        <td><?= $row['address'] ?></td>
                        <td><?= $row['birthdate'] ?></td>
                        <td><?= $row['license_date'] ?></td>
                        <td><?= $row['mail'] ?></td>
                        <td><?= $row['login'] ?></td>
                        <td><?= $row['password'] ?></td>
                        <td><?php echo anchor('logged_admin/deleteuser/' . $row["id_user"], 'Supprimer') ?></td>
                        <td><?php echo anchor('modifyuser/' . $row["id_user"], 'Modifier') ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
           

            <div class="container-fluid mb-5">
            <div class="text-start">
                <p class="h1">Gérez vos locations :</p>
            </div>
                <table class="table mx-auto">
                    <thead>
                        <tr>
                            <th scope="col">Date de début</th>
                            <th scope="col">Date de fin</th>
                            <th scope="col">Client</th>
                            <th scope="col">Voiture</th>
                            <th scope="col">Carte Bancaire</th>
                            <th scope="col">Suppression</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rental as $row) { ?>
                            <tr>
                                <td><?= $row['start_date'] ?></td>
                                <td><?= $row['end_date'] ?></td>
                                <td><?= $row['login'] ?></td>
                                <td><?= $row['model'] ?></td>
                                <td><?= $row['card_number'] ?></td>
                                <td><?php echo anchor('logged_admin/deleterent/' . $row["id_rental"], 'Supprimer') ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
   
           

            <div class="container-fluid mb-5">
            <div class="text-start">
                <p class="h1">Gérez vos voitures :</p>
                <?php echo anchor('addcar', 'Ajouter un véhicule?') ?>
            </div>
                <table class="table mx-auto">
                    <thead>
                        <tr>
                            <th scope="col">Modèle</th>
                            <th scope="col">Batterie</th>
                            <th scope="col">Puissance</th>
                            <th scope="col">Couleur</th>
                            <th scope="col">Kilomètrage</th>
                            <th scope="col">Disponibilité</th>
                            <th scope="col">autopilot</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Suppression</th>
                            <th scope="col">Modification</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cars as $row) { ?>
                            <tr>
                                <td><?= $row['model'] ?></td>
                                <td><?= $row['batterysize'] ?></td>
                                <td><?= $row['power'] ?></td>
                                <td><?= $row['color'] ?></td>
                                <td><?= $row['kilometer'] ?></td>
                                <td><?= $row['disponibility'] ?></td>
                                <td><?= $row['autopilot'] ?></td>
                                <td><?= $row['dailyprice'] ?></td>
                                <td><?php echo anchor('logged_admin/deletecar/' . $row["car_id"], 'Supprimer') ?></td>
                                <td><?php echo anchor('modifycar/' . $row["car_id"], 'Modifier') ?></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
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