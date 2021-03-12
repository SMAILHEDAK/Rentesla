<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!------ Include the above in your HEAD tag ---------->

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
                    <a class="dropdown-item" href="#"><?php echo anchor('profile', 'Accéder à votre profil', 'class="link-class"') ?></a>
                    <a class="dropdown-item" href="#">
                        <?php echo anchor('main/logout', 'Se déconnecter', 'class="link-class"') ?></a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="container d-flex justify-content-center">
        <p class="h1">Bonjour <?= $_SESSION['login'] ?> :</p>
    </div>

    <div class="container d-flex justify-content-start">
        <form action="" method="post" id="userdata" name="userdata">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Votre nom : <input type="text" name="name" value="<?= $_SESSION['name'] ?>" id="name" readonly="readonly" class="readonlyinput" /> </li>
                <p><?php echo form_error('name'); ?></p>
                <li class="list-group-item">Votre prénom: <input type="text" name="surname" value="<?= $_SESSION['surname'] ?>" id="surname" readonly="readonly" class="readonlyinput" /> </li>
                <p><?php echo form_error('surname'); ?></p>
                <li class="list-group-item">Votre addresse : <input type="text" name="address" value="<?= $_SESSION['address'] ?>" id="address" readonly="readonly" class="readonlyinput" /> </li>
                <p><?php echo form_error('address'); ?></p>
                <li class="list-group-item">Votre date de naissance : <input type="date" name="birthdate" value="<?= $_SESSION['birthdate'] ?>" id="birthdate" readonly="readonly" class="readonlyinput" /> </li>
                <p><?php echo form_error('birthdate'); ?></p>
                <li class="list-group-item">Votre date de permis : <input type="date" name="licensedate" value="<?= $_SESSION['licensedate'] ?>" id="licensedate" readonly="readonly" class="readonlyinput" /> </li>
                <p><?php echo form_error('licensedate'); ?></p>
                <li class="list-group-item">Votre addresse mail : <input type="email" name="mail" value="<?= $_SESSION['mail'] ?>" id="mail" readonly="readonly" class="readonlyinput" /> </li>
                <p><?php echo form_error('mail'); ?></p>
                <li class="list-group-item">Votre mot de passe : <input type="password" name="password" value="<?= $_SESSION['password'] ?>" id="password" class="readonlyinput" />
                    <input type="checkbox" onclick="showPass()">Afficher le mot de passe
                </li>
                <p><?php echo form_error('password'); ?></p>
            </ul>


    </div>
    <div class="container d-flex justify-content-start">
        <button class="btn" name="datasubmit" id="datasubmit" type="submit">sauvegarder</button>
        </form>
        <input type="submit" class="btn" title="Edit" value="Modifier mes informations" onclick="inputToggle(event)" />
    </div>
    <p class='h1'>Vos cartes bancaires :</p>
    <div class="container">
        <ul class="list-group list-group-flush">
            <?php foreach ($cards as $cards) { ?>
                <li class="list-group-item">Bénéficiaire de la carte : <?= $cards['card_holder'] ?></li>
                <li class="list-group-item">Numéro de la carte : <?= $cards['card_number'] ?></li>
                <li class="list-group-item">CCV : XX<?= mb_substr($cards['ccv'], -1) ?></li>
            <?php } ?>
        </ul>
    </div>
    <div class="container d-flex justify-content-start">
        <p class="h4">Ajouter une carte ?</p>
        <?php echo anchor('add_card', 'Ajouter une carte', 'class="btn"') ?>
    </div>

    <p class='h1'>Vos Locations en cours :</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Modèle</th>
                <th scope="col">Date de début</th>
                <th scope="col">Date de fin</th>
                <th scope="col">Annuler la location</th>
                <th scope="col">Retourner le véhicule</th>
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

    <p class='h1'>Vos Locations Terminées :</p>
    <table class="table">
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