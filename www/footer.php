
<div class="container">
    <footer class="page-footer themeColorSecondary">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <img src="http://via.placeholder.com/900" width="180">
                </div>
                <div class="col l4 offset-l2 s12">
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Offres d'emploi</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Partenaires</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Presse</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Nous contacter</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Mentions légales</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Utilisation des cookies</a></li>


                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center">
                © 2020 Crea60.com with 🤍 by F2.0
            </div>
        </div>
    </footer>
</div>

<!-- Compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
//    logo vanish homepage on video header
$('#logoVanishIn').addClass('magictime vanishIn');
$('#sport').addClass('magictime tinRightIn');
$('#culture').addClass('magictime tinRightIn');
$('#pedagogie').addClass('magictime tinRightIn');

$('#fun').addClass('magictime tinLeftIn');
$('#hebergement').addClass('magictime tinLeftIn');
$('#pleinair').addClass('magictime tinLeftIn');

var mb = document.querySelectorAll('.materialboxed');
M.Materialbox.init(mb,{

})


$(document).ready(function(){
    $('.sidenav').sidenav();
});

$(document).ready(function(){
    $('.collapsible').collapsible();
});

$(document).ready(function(){
    $('.carousel').carousel({
        fullWidth : true,
    });
});

$(document).ready(function(){
    $('.modal').modal();
});
</script>




</body>
</html>