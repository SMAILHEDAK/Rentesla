<?php var_dump($_SESSION)?>
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
                    <a class="dropdown-item" href="#"><?php if ($_SESSION['admin']=='1'){echo anchor('logged_admin', 'Accéder à votre profil', 'class="link-class"');} else{echo anchor('profile', 'Accéder à votre profil', 'class="link-class"');} ?></a>
                    <a class="dropdown-item" href="#">
                        <?php echo anchor('main/logout', 'Se déconnecter', 'class="link-class"') ?></a>
                </div>
            </li>
        </ul>
    </nav>
    <div class="container d-flex justify-content-center">
        <?php foreach ($car as $car) { ?>
            <p class="h1">Modification du véhicule numéro <?= $car['car_id'] ?> :</p>
    </div>

    <div class="container d-flex justify-content-start">
        <form action="" method="post" id="userdata" name="userdata">

            <span>Le modèle :</span> <input type="text" name="model" value="<?= $car['model'] ?> " id="model" readonly="readonly" class="readonlyinput" />
            <p><?php echo form_error('model'); ?></p>

            <span>La puissance :</span> <input type="text" name="power" value="<?= $car['power'] ?> " id="power" readonly="readonly" class="readonlyinput" />
            <p><?php echo form_error('power'); ?></p>

            <span>La batterie :</span> <input type="text" name="batterysize" value="<?= $car['batterysize'] ?> " id="batterysize" readonly="readonly" class="readonlyinput" />
            <p><?php echo form_error('batterysize'); ?></p>

            <span>La couleur :</span> <input type="text" name="color" value="<?= $car['color'] ?> " id="color" readonly="readonly" class="readonlyinput" />
            <p><?php echo form_error('color'); ?></p>

            <span>Le kilomètrage :</span> <input type="text" name="kilometer" value="<?= $car['kilometer'] ?> " id="kilometer" readonly="readonly" class="readonlyinput" />
            <p><?php echo form_error('kilometer'); ?></p>

            <span>La disponibilité :</span> <input type="text" name="disponibility" value="<?= $car['disponibility'] ?> " id="disponibility" readonly="readonly" class="readonlyinput" />
            <p><?php echo form_error('disponibility'); ?></p>

            <span>Autopilot:</span> <input type="text" name="autopilot" value="<?= $car['autopilot'] ?> " id="autopilot" readonly="readonly" class="readonlyinput" />

            <p><?php echo form_error('autopilot'); ?></p>

            <span>Le prix :</span> <input type="text" name="dailyprice" value="<?= $car['dailyprice'] ?> " id="dailyprice" readonly="readonly" class="readonlyinput" />

            <p><?php echo form_error('dailyprice'); ?></p>
    </div>
<?php } ?>
<div class="container d-flex justify-content-start">
    <button class="btn" name="datasubmit" id="datasubmit" type="submit">sauvegarder</button>
    </form>
    <input type="submit" class="btn" title="Edit" value="Modifier mes informations" onclick="inputToggle(event)" />
</div>
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