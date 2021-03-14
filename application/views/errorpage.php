<!DOCTYPE html>
<html lang="fr" style="height:100%;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!------ Include the above in your HEAD tag ---------->

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Rentesla</title>
</head>

<body class="p-0 m-0 d-flex align-items-center bg-dark" style="width:100%; height:100%;">
    <div class="container align-items-center">
        <div class="jumbotron text-center" style="height:100%;">
            <h1 class="display-3 text-danger">Quelque chose ne s'est pas passé comme prévu !</h1>
            <p class="lead"><strong>Soit vous avez choisi des dates non disponibles,</strong> soit vous n'avez choisi aucun moyen de paiement.</p>
            <hr>
            <p>
                Un probleme? <a href="">Contactez nous!</a>
            </p>
            <p class="lead">
                <a class="btn btn-primary btn-sm" href="rent/<?=$_SESSION['car_id']?>" role="button">Retour à la location</a>
            </p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
