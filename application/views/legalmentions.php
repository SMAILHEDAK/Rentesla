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
                        <?php echo anchor('main/logout', 'Se d??connecter', 'class="link-class"') ?></a>
                </div>
            </li>
        </ul>
    </nav>

    <div class="container-fluid d-flex justify-content-center">
        <p class="h1">Mentions l??gales :</p>
    </div>


    <div class="container-fluid d-flex justify-content-center">
        <div class="container-fluid">
            <p class="h2">Pr??sentation du site :</p>
            <p>En vertu de l???article 6 de la loi n?? 2004-575 du 21 juin 2004 pour la confiance dans l?????conomie num??rique, il est pr??cis?? aux utilisateurs du site http://www.rentesla.com l???identit?? des diff??rents intervenants dans le cadre de sa r??alisation et de son suivi : </p>

            <p>Propri??taire : RENTESLA ??? SARL (SIRET : 51216142300037) ???Random,JP</p>

            <p>Cr??ateur : Teslauto</p>

            <p>Responsable publication : Sma??l Hedak ??? info@Teslauto.com</p>

            <p>Le responsable publication est une personne physique ou une personne morale.</p>

            <p>Webmaster : Sma??l Hedak ??? la@Teslauto.com</p>

            <p>H??bergeur : LOCALHOST/FUTUREOFLIFE</p>

            <p>Cr??dits : les mentions l??gales ont ??t?? g??n??r??es et offertes par Subdelirium cr??ation de site internet</p>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <div class="container-fluid">
            <p class="h2"> Conditions g??n??rales d???utilisation du site et des services propos??s :</p>
            <p>Le site http://www.rentesla.com a pour objet de fournir une information concernant l???ensemble des activit??s de la soci??t??. </p>
            <p>Ce site est normalement accessible ?? tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut ??tre toutefois d??cid??e par RENTESLA, qui s???efforcera alors de communiquer pr??alablement aux utilisateurs les dates et heures de l???intervention.</p>
            <p>En louant un v??hicule, aucune caution n'est demand??e, cependant, vous vous engagez ?? racheter le v??hicule ?? sa cotation avant l'accident, ou bien ?? rembourser les d??gats effectu??s au vehicule si vous causez le moindre d??gat au v??hicule susnomm??. Nos v??hicules sont r??guli??rement nettoy??s, d??sinfect??s, controll??s et entretenus.</p>
            <p>Le site http://www.rentesla.com est mis ?? jour r??guli??rement par Sma??l Hedak. De la m??me fa??on, les mentions l??gales peuvent ??tre modifi??es ?? tout moment : elles s???imposent n??anmoins ?? l???utilisateur qui est invit?? ?? s???y r??f??rer le plus souvent possible afin d???en prendre connaissance.</p>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center">
        <div class="container-fluid">
            <p class="h2"> Description des services fournis :</p>
            <p>L???utilisation du site http://www.rentesla.com implique l???acceptation pleine et enti??re des conditions g??n??rales d???utilisation ci-apr??s d??crites. Ces conditions d???utilisation sont susceptibles d?????tre modifi??es ou compl??t??es ?? tout moment, les utilisateurs du site http://www.rentesla.com sont donc invit??s ?? les consulter de mani??re r??guli??re. </p>

            <p>RENTESLA s???efforce de fournir sur le site http://www.rentesla.com des informations aussi pr??cises que possible. Toutefois, il ne pourra ??tre tenue responsable des omissions, des inexactitudes et des carences dans la mise ?? jour, qu???elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>

            <p>Tous les informations indiqu??es sur le site http://www.rentesla.com sont donn??es ?? titre indicatif, et sont susceptibles d?????voluer. Par ailleurs, les renseignements figurant sur le site http://www.rentesla.com ne sont pas exhaustifs. Ils sont donn??s sous r??serve de modifications ayant ??t?? apport??es depuis leur mise en ligne.</p>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <div class="container-fluid">
            <p class="h2"> Limitations contractuelles sur les donn??es techniques :</p>
            <p>Le site utilise la technologie JavaScript.</p>
            <p>Le site Internet ne pourra ??tre tenu responsable de dommages mat??riels li??s ?? l???utilisation du site. De plus, l???utilisateur du site s???engage ?? acc??der au site en utilisant un mat??riel r??cent, ne contenant pas de virus et avec un navigateur de derni??re g??n??ration mis-??-jour </p>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center">
        <div class="container-fluid">
            <p class="h2"> Propri??t?? intellectuelle et contrefa??ons :</p>
            <p> RENTESLA est propri??taire des droits de propri??t?? intellectuelle ou d??tient les droits d???usage sur tous les ??l??ments accessibles sur le site, notamment les textes, images, graphismes, logo, ic??nes, sons, logiciels.</p>
            <p> Toute reproduction, repr??sentation, modification, publication, adaptation de tout ou partie des ??l??ments du site, quel que soit le moyen ou le proc??d?? utilis??, est interdite, sauf autorisation ??crite pr??alable de : RENTESLA. </p>
            <p> Toute exploitation non autoris??e du site ou de l???un quelconque des ??l??ments qu???il contient sera consid??r??e comme constitutive d???une contrefa??on et poursuivie conform??ment aux dispositions des articles L.335-2 et suivants du Code de Propri??t?? Intellectuelle.</p>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center">
        <div class="container-fluid">
            <p class="h2"> Limitations de responsabilit?? :</p>
            <p> RENTESLA ne pourra ??tre tenue responsable des dommages directs et indirects caus??s au mat??riel de l???utilisateur, lors de l???acc??s au site http://www.rentesla.com, et r??sultant soit de l???utilisation d???un mat??riel ne r??pondant pas aux sp??cifications indiqu??es au point 4, soit de l???apparition d???un bug ou d???une incompatibilit??.</p>
            <p> RENTESLA ne pourra ??galement ??tre tenue responsable des dommages indirects (tels par exemple qu???une perte de march?? ou perte d???une chance) cons??cutifs ?? l???utilisation du site http://www.rentesla.com. </p>
            <p> Des espaces interactifs (possibilit?? de poser des questions dans l???espace contact) sont ?? la disposition des utilisateurs. RENTESLA se r??serve le droit de supprimer, sans mise en demeure pr??alable, tout contenu d??pos?? dans cet espace qui contreviendrait ?? la l??gislation applicable en France, en particulier aux dispositions relatives ?? la protection des donn??es. Le cas ??ch??ant, RENTESLA se r??serve ??galement la possibilit?? de mettre en cause la responsabilit?? civile et/ou p??nale de l???utilisateur, notamment en cas de message ?? caract??re raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilis?? (texte, photographie???).</p>
        </div>
    </div>

    <div class="container-fluid d-flex justify-content-center">
        <div class="container-fluid">
            <p class="h2"> Gestion des donn??es personnelles :</p>
            <p> En France, les donn??es personnelles sont notamment prot??g??es par la loi n?? 78-87 du 6 janvier 1978, la loi n?? 2004-801 du 6 ao??t 2004, l???article L. 226-13 du Code p??nal et la Directive Europ??enne du 24 octobre 1995.</p>
            <p> A l???occasion de l???utilisation du site http://www.rentesla.com, peuvent ??tres recueillies : l???URL des liens par l???interm??diaire desquels l???utilisateur a acc??d?? au site http://www.rentesla.com, le fournisseur d???acc??s de l???utilisateur, l???adresse de protocole Internet (IP) de l???utilisateur. </p>
            <p> En tout ??tat de cause RENTESLA ne collecte des informations personnelles relatives ?? l???utilisateur que pour le besoin de certains services propos??s par le site http://www.rentesla.com. L???utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu???il proc??de par lui-m??me ?? leur saisie. Il est alors pr??cis?? ?? l???utilisateur du site http://www.rentesla.com l???obligation ou non de fournir ces informations.</p>
            <p>Conform??ment aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative ?? l???informatique, aux fichiers et aux libert??s, tout utilisateur dispose d???un droit d???acc??s, de rectification et d???opposition aux donn??es personnelles le concernant, en effectuant sa demande ??crite et sign??e, accompagn??e d???une copie du titre d???identit?? avec signature du titulaire de la pi??ce, en pr??cisant l???adresse ?? laquelle la r??ponse doit ??tre envoy??e.</p>
            <p>
                Aucune information personnelle de l???utilisateur du site http://www.rentesla.com n???est publi??e ?? l???insu de l???utilisateur, ??chang??e, transf??r??e, c??d??e ou vendue sur un support quelconque ?? des tiers. Seule l???hypoth??se du rachat de RENTESLA et de ses droits permettrait la transmission des dites informations ?? l?????ventuel acqu??reur qui serait ?? son tour tenu de la m??me obligation de conservation et de modification des donn??es vis ?? vis de l???utilisateur du site http://www.rentesla.com.
            </p>
            <p>
                Le site est d??clar?? ?? la CNIL car il recueille des informations personnelles.
            </p>
            <p>
                Les bases de donn??es sont prot??g??es par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative ?? la protection juridique des bases de donn??es.

            </p>
        </div>
    </div>

    <div class="container-fluid">
        <p class="h2"> Liens hypertextes et cookies :</p>
        <p>
            Le site http://www.rentesla.com contient un certain nombre de liens hypertextes vers d???autres sites, mis en place avec l???autorisation de RENTESLA. Cependant, RENTESLA n???a pas la possibilit?? de v??rifier le contenu des sites ainsi visit??s, et n???assumera en cons??quence aucune responsabilit?? de ce fait.

        </p>
        La navigation sur le site http://www.rentesla.com est susceptible de provoquer l???installation de cookie(s) sur l???ordinateur de l???utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l???identification de l???utilisateur, mais qui enregistre des informations relatives ?? la navigation d???un ordinateur sur un site. Les donn??es ainsi obtenues visent ?? faciliter la navigation ult??rieure sur le site, et ont ??galement vocation ?? permettre diverses mesures de fr??quentation.
        <p>
            Le refus d???installation d???un cookie peut entra??ner l???impossibilit?? d???acc??der ?? certains services. L???utilisateur peut toutefois configurer son ordinateur de la mani??re suivante, pour refuser l???installation des cookies :
        </p>
        <p>
            Sous Firefox : en haut de la fen??tre du navigateur, cliquez sur le bouton Firefox, puis aller dans l???onglet Options. Cliquer sur l???onglet Vie priv??e.
            Param??trez les R??gles de conservation sur : utiliser les param??tres personnalis??s pour l???historique. Enfin d??cochez-la pour d??sactiver les cookies.
            Sous Safari : Cliquez en haut ?? droite du navigateur sur le pictogramme de menu (symbolis?? par un rouage). S??lectionnez Param??tres. Cliquez sur Afficher les param??tres avanc??s. Dans la section ?? Confidentialit?? ??, cliquez sur Param??tres de contenu. Dans la section ?? Cookies ??, vous pouvez bloquer les cookies.
            Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialit?? et choisissez Bloquer tous les cookies. Validez sur Ok.
            Sous Chrome : Cliquez en haut ?? droite du navigateur sur le pictogramme de menu (symbolis?? par trois lignes horizontales). S??lectionnez Param??tres. Cliquez sur Afficher les param??tres avanc??s. Dans la section ?? Confidentialit?? ??, cliquez sur pr??f??rences. Dans l???onglet ?? Confidentialit?? ??, vous pouvez bloquer les cookies.
        </p>
    </div>
    </div>

    <div class="container-fluid">
        <p class="h2"> Droit applicable et attribution de juridiction :</p>
        <p>
            Tout litige en relation avec l???utilisation du site http://www.rentesla.com est soumis au droit fran??ais. Il est fait attribution exclusive de juridiction aux tribunaux comp??tents de Paris.
        </p>
    </div>
    </div>

    <div class="container-fluid">
        <p class="h2">Les principales lois concern??es :</p>
        <p>
            Loi n?? 78-17 du 6 janvier 1978, notamment modifi??e par la loi n?? 2004-801 du 6 ao??t 2004 relative ?? l???informatique, aux fichiers et aux libert??s.
        </p>
        <p>
            Loi n?? 2004-575 du 21 juin 2004 pour la confiance dans l?????conomie num??rique.
        </p>

    </div>
    </div>

    <div class="container-fluid">
        <p class="h2">Lexique :</p>
        <p>
            Utilisateur : Internaute se connectant, utilisant le site susnomm??.
        </p>
        <p>
            Informations personnelles : ?? les informations qui permettent, sous quelque forme que ce soit, directement ou non, l???identification des personnes physiques auxquelles elles s???appliquent ?? (article 4 de la loi n?? 78-17 du 6 janvier 1978).
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