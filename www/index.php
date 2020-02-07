<?php
require_once('header.php');
?>
<!-- body goes here -->

<div class="container mt30 justifyContentCenter">
    <img id="logoVanishIn" src="http://via.placeholder.com/900" alt="" style="position: absolute; z-index: 1; width: 350px;">

    <video autoplay="" muted="" loop="" id="myVideo" width="100%" style="">
        <source src="../assets/mov/rock.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
</div>
<div class="container mt30">
    <div class="row">
        <div class="col s12 m6 xl4">
            <?php
            cardActivity(
                    '../assets/img/activities/sport.jpg',
                'Sport',
                'FOOT, TENNIS, BASKET, GOLF ... <br> VENEZ DÉCOUVRIR ICI LES MATCHS, EXHIBITIONS ET EMPLACEMENTS DES ÉQUIPES ET CLUBS PROS ET AMATEURS DE VOTRE COIN !',
                'sport'
            );
            ?>
        </div>
        <div class="col s12 m6 xl4">
            <?php
            cardActivity(
                '../assets/img/activities/culture.jpg',
                'Culture',
                'MUSÉES, PORTES-OUVERTES, INSTITUTIONS, CONCERTS, VERNISSAGES, LECTURES, RÉCITALS, SPECTACLES DE DANSE',
                'culture'
            );
            ?>
        </div>
        <div class="col s12 m6 xl4">
            <?php
            cardActivity(
                '../assets/img/activities/pedagogie.jpg',
                'Pédagogie',
                'DÉCOUVREZ LES COURS DISPENSÉS AUTOUR DE VOUS : CUISINE, DESSIN, SCULPTURE, ARTISANAT, LANGUES, SCOLAIRES ... IL N\'EST JAMAIS TROP TARD !',
                'pedagogie'
            );
            ?>
        </div>
        <div class="col s12 m6 xl4">
            <?php
            cardActivity(
                '../assets/img/activities/fun.jpg',
                'Fun',
                'CONCERTS, BARS, HAPPENINGS, BALS, LOTO, FÊTES DE VILLAGE ET DE QUARTIERS',
                'fun'
            );
            ?>
        </div>
        <div class="col s12 m6 xl4">
            <?php
            cardActivity(
                '../assets/img/activities/hebergement.jpg',
                'Hébergement',
                'AUBERGES, GÎTES, CHEZ L\'HABITANT',
                'hebergement'
            );
            ?>
        </div>
        <div class="col s12 m6 xl4">
            <?php
            cardActivity(
                '../assets/img/activities/pleinair.jpg',
                'Plein air',
                'RANDONNÉES PÉDESTRES OU À VÉLO, SORTIES EN GROUPE, CHARS-À-VOILE, BEACH-VOLLEY, DÉCOUVERTE D\'UN LIEU OU D\'UN ÉCOSYSTÈME, ....',
                'pleinair'
            );
            ?>
        </div>
    </div>
</div>

<!-- body end here -->
<?php
require_once('footer.php');
?>
