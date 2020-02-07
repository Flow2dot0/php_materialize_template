<?php
require_once('header.php');
?>
<!-- body goes here -->

<div class="container mt10">
    <div class="card searchBarColor">
        <div class="card-content">
            <div class="row">
                <div class="col s6 offset-s3">
                    <ul class="collapsible mt30">
                        <li class="active">
                            <div class="collapsible-header"><i class="material-icons">filter_drama</i>Connexion</div>
                            <div class="collapsible-body themeColorPrimary">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="icon_prefix" type="email" class="validate">
                                                <label for="icon_prefix">Email address</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">lock</i>
                                                <input id="icon_telephone" type="password" class="validate">
                                                <label for="icon_telephone">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 justifyContentEnd">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">OK
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">place</i>S'inscrire en tant que membre</div>
                            <div class="collapsible-body">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="icon_prefix" type="text" class="validate">
                                                <label for="icon_prefix">First name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">lock</i>
                                                <input id="icon_telephone" type="text" class="validate">
                                                <label for="icon_telephone">Last name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="icon_prefix" type="email" class="validate">
                                                <label for="icon_prefix">Email address</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">lock</i>
                                                <input id="icon_prefix" type="password" class="validate">
                                                <label for="icon_prefix">Password</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">lock_open</i>
                                                <input id="icon_telephone" type="password" class="validate">
                                                <label for="icon_telephone">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="icon_prefix" type="text" class="validate">
                                                <label for="icon_prefix">Adresse</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">lock</i>
                                                <input id="icon_telephone" type="text" class="validate">
                                                <label for="icon_telephone">Complément d'adresse</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="icon_prefix" type="email" class="validate">
                                                <label for="icon_prefix">Code postal</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="icon_prefix" type="text" class="validate">
                                                <label for="icon_prefix">Rechercher une ville</label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">lock</i>
                                                <input id="icon_telephone" type="text" class="validate">
                                                <label for="icon_telephone">Sélectionner une ville</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">whatshot</i>S'inscrire en tant que professionnel</div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</div>


<!-- body end here -->
<?php
require_once('footer.php');
?>
