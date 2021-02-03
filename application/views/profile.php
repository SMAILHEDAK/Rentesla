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
    <script>
        var edit = true;

        function inputToggle(e) {
            e.preventDefault();
            $(':input').prop('readonly', edit = !edit);
        }

        function showPass() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
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
        <p class="h1">Bonjour <?= $_SESSION['login'] ?> :</p>
    </div>

    <div class="container-fluid d-flex justify-content-center">
        <form action="" method="post" id="userdata" name="userdata">
            <span class="form-text text-muted"> Votre nom :</span>
            <input type="text" class="form-control" name="name" value="<?= $_SESSION['name'] ?>" id="name" readonly="readonly" class="readonlyinput" />
            <p><?php echo form_error('name'); ?></p>
            <span class="form-text text-muted"> Votre prénom :</span>
            <input type="text" class="form-control" name="surname" value="<?= $_SESSION['surname'] ?>" id="surname" readonly="readonly" class="readonlyinput" />
            <p><?php echo form_error('surname'); ?></p>
            <span class="form-text text-muted"> Votre addresse :</span>
            <input type="text" class="form-control" name="address" value="<?= $_SESSION['address'] ?>" id="address" readonly="readonly" class="readonlyinput" />
            <p><?php echo form_error('address'); ?></p>
            <span class="form-text text-muted"> Votre date de naissance :</span>
            <input type="date" class="form-control" name="birthdate" value="<?= $_SESSION['birthdate'] ?>" id="birthdate" readonly="readonly" class="readonlyinput" />
            <p><?php echo form_error('birthdate'); ?></p>
            <span class="form-text text-muted"> Votre date de permis :</span>
            <input type="date" class="form-control" name="licensedate" value="<?= $_SESSION['licensedate'] ?>" id="licensedate" readonly="readonly" class="readonlyinput" />
            <p><?php echo form_error('licensedate'); ?></p>
            <span class="form-text text-muted"> Votre addresse mail:</span>
            <input type="email" class="form-control" name="mail" value="<?= $_SESSION['mail'] ?>" id="mail" readonly="readonly" class="readonlyinput" />
            <p><?php echo form_error('mail'); ?></p>
            <span class="form-text text-muted"> Votre mot de passe :</span>
            <input type="password" class="form-control" name="password" value="<?= $_SESSION['password'] ?>" id="password" class="readonlyinput" />
            <input type="checkbox" onclick="showPass()">Afficher le mot de passe
            <p><?php echo form_error('password'); ?></p>


    </div>
    <div class="container-fluid d-flex justify-content-center">
        <button class="btn m-2" name="datasubmit" id="datasubmit" type="submit">sauvegarder</button>
        </form>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <button type="submit" class="btn m-2" title="Edit" onclick="inputToggle(event)" />modifier mes infos</button>
    </div>
    <div class="container-fluid d-flex justify-content-center p-5">
        <p class='h1'>Vos cartes bancaires :</p>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <ul class="list-group list-group-flush">
            <?php foreach ($cards as $cards) { ?>
                <li class="list-group-item">Bénéficiaire de la carte : <?= $cards['card_holder'] ?></li>
                <li class="list-group-item">Numéro de la carte : <?= $cards['card_number'] ?></li>
                <li class="list-group-item">CCV : XX<?= mb_substr($cards['ccv'], -1) ?></li>
            <?php } ?>
        </ul>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <?php echo anchor('add_card', 'Ajouter une carte?', 'class="btn"') ?>
    </div>
    <div class="container-fluid d-flex justify-content-center p-5">
        <p class='h1'>Vos Locations en cours :</p>
    </div>


    <div class="container-fluid">
        <table class="table mx-auto">
            <thead>
                <tr>
                    <th scope="col">Modèle</th>
                    <th scope="col">Début</th>
                    <th scope="col">Fin</th>
                    <th scope="col">Annuler</th>
                    <th scope="col">Rendre</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($currentrental as $row) { ?>
                    <tr>
                        <th scope="row"><?= $row['model'] ?></th>
                        <td><?= $row['start_date'] ?></td>
                        <td><?= $row['end_date'] ?></td>
                        <td><?php echo anchor('profile/' . $row["car_id"], 'Annuler') ?></td>
                        <td><?php echo anchor('profile/return/' . $row["car_id"], 'Retour du véhicule') ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <div class="container-fluid d-flex justify-content-center p-5">
        <p class='h1'>Vos Locations Terminées :</p>
    </div>
    <div class="container-fluid pb-5">
        <table class="table mx-auto">
            <thead>
                <tr>
                    <th scope="col">Modèle</th>
                    <th scope="col">Date de début</th>
                    <th scope="col">Date de fin</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pastrental as $row) { ?>
                    <tr>
                        <th scope="row"><?= $row['model'] ?></th>
                        <td><?= $row['start_date'] ?></td>
                        <td><?= $row['end_date'] ?></td>
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