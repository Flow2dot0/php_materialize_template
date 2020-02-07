<?php
require_once('header.php');
?>
<!-- body goes here -->


<!-- options -->
<div class="container mt30">
    <div class="row">
        <div class="col s12">
            <ul class="collapsible popout">
                <li>
                    <div class="collapsible-header"><i class="material-icons">people</i>QUI : Groupe ? Duo ? Solo ? C'est à vous de choisir !</div>
                    <div class="collapsible-body">
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>solo</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>duo</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>groupe</span>
                            </label>
                        </p>
                    </div>

                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">sports_football</i>QUOI : Quelles catégories pourraient vous intéresser ?</div>
                    <div class="collapsible-body">
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>sport</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>culture</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>pédagogie</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>fun</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>hébergement</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>plein air</span>
                            </label>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">attach_money</i>COMMENT : Gratuit ou Payant ?</div>
                    <div class="collapsible-body">
                        <div class="switch">
                            <label>
                                Gratuit
                                <input type="checkbox">
                                <span class="lever"></span>
                                Payant
                            </label>
                            <p class="range-field">
                                <input type="range" id="test5" min="1" max="1000" />
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">accessibility</i>DONT : Adultes et/ou Enfants ?</div>
                    <div class="collapsible-body">
                        <div class="switch">
                            <label>
                                Gratuit
                                <input type="checkbox">
                                <span class="lever"></span>
                                Payant
                            </label>
                            <p class="range-field">
                                <input type="range" id="test5" min="1" max="17" />
                            </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">place</i>OU : Localiser votre recherche pour plus de résultats !</div>
                    <div class="collapsible-body">
                        <div class="switch">
                            <label>
                                Gratuit
                                <input type="checkbox">
                                <span class="lever"></span>
                                Payant
                            </label>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- provider -->
<div class="container">
    <div class="row">
        <div class="col s6 xl3">
            <?php
            cardProvider('Math de foot', 'Sport', 'solo/duo/groupe');
            ?>
        </div>
        <div class="col s6 xl3">
            <?php
            cardProvider('Math de foot', 'Sport', 'solo/duo/groupe');
            ?>
        </div>
        <div class="col s6 xl3">
            <?php
            cardProvider('Math de foot', 'Sport', 'solo/duo/groupe');
            ?>
        </div>
        <div class="col s6 xl3">
            <?php
            cardProvider('Math de foot', 'Sport', 'solo/duo/groupe');
            ?>
        </div>
    </div>
</div>

<!-- results -->
<div class="container">
    <div class="row">
        <div class="col xl4">
            <?php
            cardEvents('Match de foot',
                'Sport',
                'solo/duo/groupe',
                'Gratuit',
                'Adultes, enfants à partir de 10 ans',
                '18/02/2020 à 11:00 PM'
            );
            ?>
        </div>
        <div class="col xl4">
            <?php
            cardEvents('Match de foot',
                'Sport',
                'solo/duo/groupe',
                'Gratuit',
                'Adultes, enfants à partir de 10 ans',
                '18/02/2020 à 11:00 PM'
            );
            ?>
        </div>
        <div class="col xl4">
            <?php
            cardEvents('Match de foot',
                'Sport',
                'solo/duo/groupe',
                'Gratuit',
                'Adultes, enfants à partir de 10 ans',
                '18/02/2020 à 11:00 PM'
            );
            ?>
        </div>
        <div class="col xl4">
            <?php
            cardEvents('Match de foot',
                'Sport',
                'solo/duo/groupe',
                'Gratuit',
                'Adultes, enfants à partir de 10 ans',
                '18/02/2020 à 11:00 PM'
            );
            ?>
        </div>
        <div class="col xl4">
            <?php
            cardEvents('Match de foot',
                'Sport',
                'solo/duo/groupe',
                'Gratuit',
                'Adultes, enfants à partir de 10 ans',
                '18/02/2020 à 11:00 PM'
            );
            ?>
        </div>
        <div class="col xl4">
            <?php
            cardEvents('Match de foot',
                'Sport',
                'solo/duo/groupe',
                'Gratuit',
                'Adultes, enfants à partir de 10 ans',
                '18/02/2020 à 11:00 PM'
            );
            ?>
        </div>

    </div>
    <div class="row justifyContentCenter">
        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>
</div>

<!-- provider -->
<div class="container">
    <div class="row">
        <div class="col s6 xl3">
            <?php
            cardProvider('Math de foot', 'Sport', 'solo/duo/groupe');
            ?>
        </div>
        <div class="col s6 xl3">
            <?php
            cardProvider('Math de foot', 'Sport', 'solo/duo/groupe');
            ?>
        </div>
        <div class="col s6 xl3">
            <?php
            cardProvider('Math de foot', 'Sport', 'solo/duo/groupe');
            ?>
        </div>
        <div class="col s6 xl3">
            <?php
            cardProvider('Math de foot', 'Sport', 'solo/duo/groupe');
            ?>
        </div>
    </div>
</div>


<!-- body end here -->
<?php
require_once('footer.php');
?>
