<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Learn while playing</title>
        <meta name="description" content="Rédaction de plusieurs cours sur les langages informatique. (Html5 ; CSS3 ; JAVASCRIPT; JQUERY ; PHP ; MYSQL)">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS -->
            <!-- CSS Bootstrap 4 -->
                <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
            <!-- Font-Awesome CDN -->
                <link href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" rel="stylesheet" />
            <!-- CSS Perso -->
                <link rel="stylesheet" type="text/css" href="vendor/css/myStyleIndex.css" />
                <link rel="stylesheet" type="text/css" href="vendor/css/myGlobalStyle.css" />
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <nav class="navbar navbar-dark navbar-fixed-top bg-inverse">
            <a href="#" class="navbar-brand">Alain <span class="text-uppercase text-warning">guillon</span> -- <i class="fa fa-mobile" aria-hidden="true"></i> <small class="text-info">+33 6.83.13.88.45</small></a>
            <button type="button" class="navbar-toggler clearfix hidden-md-up float-xs-right" data-toggle="collapse" data-target="#myNav"></button>
        <?php 
            // Navigation
            include("assets/includes/nav/navigationHome.php");
        ?>
        </nav>
        
        <span class="hidden-sm-up">
            <div class="container-fluid">
                <div class="row">
                    <header>
                       <div class="jumbotron mt-2">
                           <hgroup class="text-xs-center">
                               <span class="studentImg"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                               <hr>
                               <h1>Learn While Playing</h1>
                               <hr>
                               <h2><small class="text-muted">Apprendre tout en jouant</small></h2>
                           </hgroup>
                       </div>
                    </header>
                </div>
                <div class="row">
                    <div class="col-xs-12 ">
                        <h3 class="text-xs-center text-info mt-0 pb-1 h2">Contenu du site</h3>
                    </div>
                </div>
                <section id="contentSite">
                    <div class="row row3">
                        <div class="col-xs-5 offset-xs-1">
                            <figure>
                                <h4 class="text-xs-center text-warning pb-1">Présentation</h4>
                                <a href="qui_suis_je.php"><img src="assets/images/1.jpg" alt="" class="img-fluid img-thumbnail" id="onPresentation"></a>
                            </figure>
                        </div>
                        <div class="col-xs-5">
                            <figure>
                                <h4 class="text-xs-center text-warning pb-1">Les origines</h4>
                                <a href="pourquoi.php"><img src="assets/images/2.jpg" alt="" class="img-fluid img-thumbnail" id="onOrigine"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="row row4">
                        <div class="col-xs-12">
                            <div class="mb-2 mt-1 mr-1 contentBlockquote">
                                <blockquote class="blockquote blockquote-reverse p-2">
                                    <p id="pContenuSite" class="lead">Survolez une image pour en savoir plus.</p>
                                    <footer class="blockquote-footer">Alain GUILLON</footer>
                                </blockquote>
                            </div> 
                        </div>
                    </div>
                    <div class="row row5">
                        <div class="col-xs-5 offset-xs-1">
                            <figure>
                                <h4 class="text-xs-center text-warning pb-1">Réalisations</h4>
                                <a href="realisation.php"><img src="assets/images/3.jpg" alt="" class="img-fluid img-thumbnail" id="onRealisation"></a>
                            </figure>
                        </div>
                        <div class="col-xs-5">
                            <figure>
                                <h4 class="text-xs-center text-warning pb-1">CV</h4>
                                <a href="cv.php"><img src="assets/images/4.jpg" alt="" class="img-fluid img-thumbnail" id="onCv"></a>
                            </figure>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <section class="mt-1 p-1" id="remerciements">
                        <h3 class="text-xs-center text-info pb-1">Remerciements</h3>
                        <hr>
                        <p class="lead text-xs-center">Il est impenssable pour moi de ne peux pas remercier les personnes qui m'ont permis d'atteindre ce niveau de compétence.</p>
                        <hr>
                        <dl class="dl-horizontal mb-3">
                            <dt class="col-sm-3">Mme DEBABB du Fastt</dt>
                            <dd class="col-sm-9">Sans elle, je n'aurais jamais pu intégrer la 3W Academy, elle s'est démenée pour moi alors que le timming était plus que serré.</dd>
                            
                            <dt class="col-sm-3">Marjorie Caron</dt>
                            <dd class="col-sm-9">Ma conjointe, qui m'a offert pas mal de formations et surtout, elle supporte mes longues journée/nuits à coder sans broncher. Merci ma chérie</dd>

                            <dt class="col-sm-3">Éléanore</dt>
                            <dd class="col-sm-9">Qui grâce à dieu, elle est toujours là. Il s'agit de ma dernière fille qui se bat contre une maladie très grave depuis ça naissance.</dd>

                            <dt class="col-sm-3">Sheryle & Océane</dt>
                            <dd class="col-sm-9">Mes deux premières filles, m'on permit de tenir le coup dans les moments vraiment dificile. Je les adores</dd>

                            <dt class="col-sm-3" >Ma maman</dt>
                            <dd class="col-sm-9">Malgré qu'elle ne comprends rien sur tout ces langages, maman épaule ma conjointe au quotidien sur vraiment beaoup de point. Merci maman.</dd>

                            <dt class="col-sm-3">Véronique Guillon</dt>
                            <dd class="col-sm-9">Ma marraine avec qui j'ai de longue discution au téléphone.</dd>

                            <dt class="col-sm-3">Arnaud Favier</dt>
                            <dd class="col-sm-9">Mon meilleur ami et patron de la société 3BioElec qui se situe dans la région Lyonnaise. Merci pour tout ce que tu as pu faire pour moi.</dd>

                            <dt class="col-sm-3">Anthony Vigoureux</dt>
                            <dd class="col-sm-9">Une personne que je considère comme mon frère. Merci pour ta présence au quotidien.</dd>

                            <dt class="col-sm-3">Christohe & Jérôme Vigoureux</dt>
                            <dd class="col-sm-9">Deux personnes qui m'apportent tellement de chose positive qu'il sont indéniablement obligé d'être sur cette liste.</dd>
                            
                            <dt class="col-sm-3">Josselin Caron & Nicolas Clabau</dt>
                            <dd class="col-sm-9">Mes futurs témoins mais également deux grands barjot que j'adore. Quand on se capte c'est tout le temps des barres de rire. Merci d'être là.</dd>

                            <dt class="col-sm-3">La 3W Academy</dt>
                            <dd class="col-sm-9">Fabuleux centre de formation sur les langages informatique. Je la recommande chaleureusement.</dd>

                            <dt class="col-sm-3">Mathieu</dt>
                            <dd class="col-sm-9">Formateur sur l'intégration à la 3WA. Débutant dans la formation et franchement, il a du talent !!</dd>

                            <dt class="col-sm-3">Julien</dt>
                            <dd class="col-sm-9">Formateur sur le développement à la 3WA. Une perle qui veut si possible nous apprendre et faire découvrir un maximum de chose.</dd>

                            <dt class="col-sm-3">La promotion L9 à la 3WA</dt>
                            <dd class="col-sm-9">Ils m'ont soutenu malgré mes problèmes avec ma fille, ils m'aident encore aujourd'hui</dd>

                            <dt class="col-sm-3">Clarisse Halimari</dt>
                            <dd class="col-sm-9">Ancienne élève de la promotion L9, elle corrige mes nombreuses fautes d'orthographe.</dd>

                            <dt class="col-sm-3">John Codeur</dt>
                            <dd class="col-sm-9">Formateur sur Udemy.com, j'apprend énormément via ces vidéos</dd>

                            <dt class="col-sm-3">Steven Sill</dt>
                            <dd class="col-sm-9">Formateur sur tuto.com. Également auprès de lui j'en apprends énormément.</dd>

                            <dt class="col-sm-3">Vidéo2Brain</dt>
                            <dd class="col-sm-9">Étant membre deluxe, je tiens à remerciers les nombreux formateur pour leurs formations de qualité.</dd>

                            <dt class="col-sm-3">OpenClassRooms</dt>
                            <dd class="col-sm-9">Je remercie les nombreux formateurs. Un seule bémole l'augmentation du prix pour suivre un parcours.</dd>

                            <dt class="col-sm-3">j'en oublie...</dt>
                            <dd class="col-sm-9">Et bien d'autres encore...</dd>
                        </dl>
                    </section>
                </div>
                <div class="row">
                    <h4 class="text-xs-center text-info mt-2 mb-2">Site conçus avec les langages suivants :</h4>
                    <div class="col-xs-12">
                        <div class="col-xs-4 m-0">
                            <figure>
                                <img src="assets/images/logo/html.png" alt="" class="img-fluid rounded bgImg">
                            </figure>
                        </div>
                        <div class="col-xs-4 m-0">
                            <figure>
                                <img src="assets/images/logo/css.png" alt="" class="img-fluid rounded bgImg">
                            </figure>
                        </div>
                        <div class="col-xs-4 m-0">
                            <figure>
                                <img src="assets/images/logo/javascript.png" alt="" class="img-fluid rounded bgImg">
                            </figure>
                        </div>    
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-4 m-0">
                            <figure>
                                <img src="assets/images/logo/jquery.png" alt="" class="img-fluid rounded bgImg">
                            </figure>
                        </div>
                        <div class="col-xs-4 m-0">
                            <figure>
                                <img src="assets/images/logo/bootstrap.png" alt="" class="img-fluid rounded bgImg">
                            </figure>
                        </div>
                        <div class="col-xs-4 m-0">
                            <figure>
                                <img src="assets/images/logo/php&mysql.png" alt="" class="img-fluid rounded bgImg">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="jumbotron mt-1 mb-1">
                        <q class="lead">A venir. Quand vous survolerez ci-dessus, une quelconque image sur les différents langages que compose le site, vous obtiendrez le pourcentage utilisé de ce code ici même. Tout ça grâce à github qui permet de savoir exactement le taux d'utilisation de chaque langage.</q>
                    </div>
                </div>
                <div class="row">
                    <footer class="footerTel mt-1">
                        <div class="col-xs-12">
                            <div class="card mt-1">
                                <div class="card-header card-warning ">
                                    <h5 class="card-title text-xs-center">Mes disponibilités?</h5>
                                </div>
                                <div class="card-block p-1">
                                    <p class="card-text text-xs-center text-danger"><strong>Immédiate pour un poste dans une société</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="card mt-1">
                                <div class="card-header card-info ">
                                    <h5 class="card-title text-xs-center">Mes ambitions</h5>
                                </div>
                                <div class="card-block p-1">
                                    <p class="card-text text-xs-center">le 04/02/2017, ma dernière fille aura 2 ans. 2 ans qu'elle se bat chaque jours, sans relache contre une maladie orpheline. En septembre 2016, elle était pas loins d'y passé.. Aujourd'hui j'y ai laissé des plumes... Mais je ne peut abandonner. C'est un exemple. Donc c'est pourquoi en 2017, mon ambition première est de prouver à tout le monde de quoi je suis réellement capable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 mt-1" id="copyright" >
                            <p class="text-white text-xs-center">Copyright &copy; - 2017-2018</p>
                            <hr>
                            <p class="text-white text-xs-center" >Alain <span class="text-uppercase text-warning">guillon</span> - <span class="text-info">+33 6.83.13.88.45</span></span></p>
                        </div>
                    </footer>
                </div>
            </div>
        </span>

        <span class="hidden-sm-down">
            <div class="container-fluid">
                <div class="row">
                    <header>
                        <div class="jumbotron">
                            <hgroup class="text-xs-center">
                                <h1>Learning while reviewing</h1>
                                <hr>
                                <h2>Apprendre tout en révisant</h2>
                            </hgroup>
                        </div>
                    </header>
                </div>
                <div class="row">
                    <section>
                        <h3>Contenu du site</h3>
                        <div class="col-xs-6">
                            <div class="card">
                                <img class="card-img-top" src="" alt="Card image cap">
                            </div>
                            <figure>
                                <figcaption>Je me présente</figcaption>
                                <img src="" alt="" class="img-rounded">
                            </figure>
                        </div>
                        <div class="col-xs-6">
                            <div class="card">

                            </div>
                            <figure>
                                <figcaption>Les origines du site</figcaption>
                                <img src="" alt="" class="img-rounded">
                            </figure>
                        </div>
                        <div class="col-xs-6">
                            <div class="card">

                            </div>
                            <figure>
                                <figcaption>Mes réalisations</figcaption>
                                <img src="" alt="" class="img-rounded">
                            </figure>
                        </div>
                        <div class="col-xs-6">
                            <div class="card">

                            </div>
                            <figure>
                                <figcaption>Mon curriculum vitae</figcaption>
                                <img src="" alt="" class="img-rounded">
                            </figure>
                        </div>
                    </section>
                </div>
            </div>
        </span>

        <!-- JQuery -->
            <script type="text/javascript" src="vendor/jquery/jquery-3.1.1.min.js"></script>
        <!-- Script perso -->
            <script type="text/javascript" src="vendor/bootstrap/js/tether.min.js"></script>
            <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Script perso -->
            <script type="text/javascript" src="vendor/jquery/myScriptHome.js"></script>
    </body>
</html>
