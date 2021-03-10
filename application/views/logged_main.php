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

<body>
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
                    <a class="dropdown-item" href="#"><?php echo anchor('logged_main', 'Accéder à votre profil', 'class="link-class"') ?></a>
                    <a class="dropdown-item" href="#">
                        <?php echo anchor('main/logout', 'Se déconnecter', 'class="link-class"') ?></a>
                </div>
            </li>
        </ul>
    </nav>
    <header class="container-fluid p-0 m-0">
        <img src="../../img/hero1.jpg" class="img-fluid" alt="Responsive image">
    </header>
    <section class="container">
        <h1>Rechercher une tesla</h1>
        <div class="input-group container d-flex align-items-center">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Autopilot</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choisir</option>
                    <option value="1">Oui</option>
                    <option value="2">Non</option>
                </select>
            </div>
            <button type="button" class="btn btn-outline-primary">rechercher</button>
        </div>
    </section>
    <section class="container">
        <?php foreach ($cars as $row) { ?>
            <div class="col-sm-6">
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
                        </p>
                        <a class="btn btn-primary">Plus d'infos!</a>
                        <p class="text-right"><?= $row['dailyprice'] ?> euros/jour</p>


                    </div>
                </div>
            </div>
            </div>
        <?php } ?>

        <section class="container">
            <div class="">
                <p class="h1"> Retrouvez nous dans notre agence :</p>
                <p class="text-center">Vous pouvez nous retrouver dans notre agence située sur cette carte</p>
            </div>
            <div> map </div>
        </section>

        <section class="container">
            <div>
                <p class="h1"> N'oubliez pas notre partenaire :</p>
                <p class="text-center">Lorem ipsum blablablablablabl</p>
            </div>
            <div class="container text-center"><a href="">Louer une mercedes!</a></div>
        </section>

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