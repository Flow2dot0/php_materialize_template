<?php
require_once('ui.php');
require_once('top_header.php');
?>


<div class="container">
    <nav class="nav-extended themeColorPrimary">
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo ml7 fontSecondaryColor mt10"><img src="http://via.placeholder.com/900" alt="" width="55"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons fontSecondaryColor">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down mr20">
                <li class="fontSecondaryColor" style="">Recherchez et trouvez tout ce qu'il se passe près de chez vous</li>
                <li><a href="index.php"><i class="material-icons fontSecondaryColor">home</i></a></li>
                <li><a href="profile.php"><i class="material-icons fontSecondaryColor">account_circle</i></a></li>
            </ul>
        </div>
        <div class="nav-content themeColorSecondary">
            <ul class="tabs tabs-transparent justifyContentCenter">
                <li class="tab"><a class="active" href="#test2">solo</a></li>
                <li class="tab"><a href="#test3">couple</a></li>
                <li class="tab"><a href="#test4">famille</a></li>
            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a class="" href="sass.html">Sass</a></li>
        <li><a class="" href="badges.html">Components</a></li>
        <li><a class="" href="collapsible.html">JavaScript</a></li>
    </ul>
    <nav>
        <div class="nav-wrapper searchBarColor">
            <form action="events.php">
                <div class="input-field">
                    <input id="search" type="search" placeholder="ex : cours de zumba, match de foot ..." required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
            </form>
        </div>
    </nav>
</div>