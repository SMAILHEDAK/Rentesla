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

    <div class="container-fluid d-flex justify-content-center">
        <p class="h1">Mentions légales :</p>
    </div>


    <div class="container-fluid d-flex justify-content-center">
        <div class="container-fluid">
            <p class="h2">Présentation du site :</p>
            <p>En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé aux utilisateurs du site http://www.rentesla.com l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi : </p>

            <p>Propriétaire : RENTESLA – SARL (SIRET : 51216142300037) –Random,JP</p>

            <p>Créateur : Teslauto</p>

            <p>Responsable publication : Smaïl Hedak – info@Teslauto.com</p>

            <p>Le responsable publication est une personne physique ou une personne morale.</p>

            <p>Webmaster : Smaïl Hedak – la@Teslauto.com</p>

            <p>Hébergeur : LOCALHOST/FUTUREOFLIFE</p>

            <p>Crédits : les mentions légales ont été générées et offertes par Subdelirium création de site internet</p>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <div class="container-fluid">
            <p class="h2"> Conditions générales d’utilisation du site et des services proposés :</p>
            <p>Le site http://www.rentesla.com a pour objet de fournir une information concernant l’ensemble des activités de la société. </p>
            <p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par RENTESLA, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
            <p>En louant un véhicule, aucune caution n'est demandée, cependant, vous vous engagez à racheter le véhicule à sa cotation avant l'accident, ou bien à rembourser les dégats effectués au vehicule si vous causez le moindre dégat au véhicule susnommé. Nos véhicules sont régulièrement nettoyés, désinfectés, controllés et entretenus.</p>
            <p>Le site http://www.rentesla.com est mis à jour régulièrement par Smaïl Hedak. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center">
        <div class="container-fluid">
            <p class="h2"> Description des services fournis :</p>
            <p>L’utilisation du site http://www.rentesla.com implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site http://www.rentesla.com sont donc invités à les consulter de manière régulière. </p>

            <p>RENTESLA s’efforce de fournir sur le site http://www.rentesla.com des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>

            <p>Tous les informations indiquées sur le site http://www.rentesla.com sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site http://www.rentesla.com ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <div class="container-fluid">
            <p class="h2"> Limitations contractuelles sur les données techniques :</p>
            <p>Le site utilise la technologie JavaScript.</p>
            <p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour </p>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center">
        <div class="container-fluid">
            <p class="h2"> Propriété intellectuelle et contrefaçons :</p>
            <p> RENTESLA est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>
            <p> Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : RENTESLA. </p>
            <p> Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center">
        <div class="container-fluid">
            <p class="h2"> Limitations de responsabilité :</p>
            <p> RENTESLA ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site http://www.rentesla.com, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
            <p> RENTESLA ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site http://www.rentesla.com. </p>
            <p> Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. RENTESLA se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, RENTESLA se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center">
        <div class="container-fluid">
            <p class="h2"> Gestion des données personnelles :</p>
            <p> En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l’article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
            <p> A l’occasion de l’utilisation du site http://www.rentesla.com, peuvent êtres recueillies : l’URL des liens par l’intermédiaire desquels l’utilisateur a accédé au site http://www.rentesla.com, le fournisseur d’accès de l’utilisateur, l’adresse de protocole Internet (IP) de l’utilisateur. </p>
            <p> En tout état de cause RENTESLA ne collecte des informations personnelles relatives à l’utilisateur que pour le besoin de certains services proposés par le site http://www.rentesla.com. L’utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu’il procède par lui-même à leur saisie. Il est alors précisé à l’utilisateur du site http://www.rentesla.com l’obligation ou non de fournir ces informations.</p>
            <p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
            <p>
                Aucune information personnelle de l’utilisateur du site http://www.rentesla.com n’est publiée à l’insu de l’utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l’hypothèse du rachat de RENTESLA et de ses droits permettrait la transmission des dites informations à l’éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l’utilisateur du site http://www.rentesla.com.
            </p>
            <p>
                Le site est déclaré à la CNIL car il recueille des informations personnelles.
            </p>
            <p>
                Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.

            </p>
        </div>
    </div>

    <div class="container-fluid">
        <p class="h2"> Liens hypertextes et cookies :</p>
        <p>
            Le site http://www.rentesla.com contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de RENTESLA. Cependant, RENTESLA n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.

        </p>
        La navigation sur le site http://www.rentesla.com est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.
        <p>
            Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :
        </p>
        <p>
            Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l’onglet Options. Cliquer sur l’onglet Vie privée.
            Paramétrez les Règles de conservation sur : utiliser les paramètres personnalisés pour l’historique. Enfin décochez-la pour désactiver les cookies.
            Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section « Confidentialité », cliquez sur Paramètres de contenu. Dans la section « Cookies », vous pouvez bloquer les cookies.
            Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.
            Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section « Confidentialité », cliquez sur préférences. Dans l’onglet « Confidentialité », vous pouvez bloquer les cookies.
        </p>
    </div>
    </div>

    <div class="container-fluid">
        <p class="h2"> Droit applicable et attribution de juridiction :</p>
        <p>
            Tout litige en relation avec l’utilisation du site http://www.rentesla.com est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.
        </p>
    </div>
    </div>

    <div class="container-fluid">
        <p class="h2">Les principales lois concernées :</p>
        <p>
            Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l’informatique, aux fichiers et aux libertés.
        </p>
        <p>
            Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique.
        </p>

    </div>
    </div>

    <div class="container-fluid">
        <p class="h2">Lexique :</p>
        <p>
            Utilisateur : Internaute se connectant, utilisant le site susnommé.
        </p>
        <p>
            Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l’identification des personnes physiques auxquelles elles s’appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).
        </p>

    </div>
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