<footer class="page-footer font-small stylish-color-dark pt-4 nav-footer">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-4 mx-auto">

                <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><span class="ligne">Nous concernant</span></h5>
                <p>Les élèves de la Wild Code School forment une communauté soudée qui s’appuie sur l’entraide et le
                    soutien mutuel. La joie de vivre et la passion font partie de notre quotidien.
                </p>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><span class="ligne">Contactez-nous</span></h5>
                <h4>Adresse:</h4>
                <p>9 allée Serr,</p>
                <p>33000 Bordeaux</p>
                <h4>Telephone:</h4>
                <p>06 66 96 17 77</p>
                <h4>Email:</h4>
                <p><a href="https://wildcodeschool.fr/">Wildcodeschool.com</a></p>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><span class="ligne">Plan du site</span></h5>
                <ul class="list-unstyled links">
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="trombi.php">Promo 2019</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-12 col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><span class="ligne">Newsletter</span></h5>
                <p>En vous inscrivant à notre liste de diffusion, vous obtiendrez toujours les dernières nouvelles
                    et mises à jour de notre part.</p>
                <form action="/action_page.php">
                    <div class="nav-footer-form">
                        <div class="col-12 bouton-centre">
                            <input class="entrez" type="text" name="FirstName" value=" Entrez votre mail...">
                            <input class="nav-footer-bouton" type="button" value="&#9993;">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <ul class="list-unstyled list-inline text-center nav-footer-logo">
        <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
                <button type="button" class="footer-btn"><img src="images/github.jpg" alt="amagg" class="arrond"></button>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
                <button type="button" class="footer-btn"><img src="images/facebook.JPG" alt="amagg" class="arrond"></button>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
                <button type="button" class="footer-btn"><img src="images/insta.JPG" alt="amagg" class="arrond"></button>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
                <button type="button" class="footer-btn"><img src="images/twitter.JPG" alt="amagg" class="arrond"></button>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1">
                <button type="button" class="footer-btn"><img src="images/linkdin.JPG" alt="amagg" class="arrond"></button>
            </a>
        </li>
    </ul>
    <hr>
    <div class="footer-copyright text-center py-3">Made with love by
        <a href="https:wildcodeschool.com"><span class="rose-link"> les4fantasGit.com</span></a>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="projet.js"></script>
<script>
    var win = $(window),
        foo = $('#typer');

    foo.typer(['<i>À</i> <i>la</i> <i><span class="color-wild">W</span>ild <span class="color-wild">C</span>ode <span class="color-wild">S</span>chool</i> <br> <b>on apprend le code,<br>mais on apprend aussi<br>à connaitre les gens !</b>']);

    // unneeded...
    win.resize(function(){
        var fontSize = Math.max(Math.min(win.width() / (1 * 10), parseFloat(Number.POSITIVE_INFINITY)), parseFloat(Number.NEGATIVE_INFINITY));

        foo.css({
            fontSize: fontSize * 1.7 + '%'
        });
    }).resize();
</script>
</body>
</html>