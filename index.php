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
            <!-- Animate.css -->
                <link rel="stylesheet" type="text/css" href="vendor/css/animate.css">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <nav class="navbar navbar-dark navbar-fixed-top bg-inverse">
            <a href="#" class="navbar-brand">Alain <span class="text-uppercase text-warning ">guillon</span> - <i class="fa fa-mobile" aria-hidden="true"></i> <small class="text-info">+33 6.83.13.88.45</small></a>
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
                       <div class="jumbotron p-3">
                           <hgroup class="text-xs-center">
                               <span class="studentImg wow bounceInDown"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                               <hr>
                               <h1 class="wow tada">Learn While Playing</h1>
                               <hr>
                               <h2 class="wow swing"><small class="text-muted">Apprendre tout en jouant</small></h2>
                           </hgroup>
                       </div>
                    </header>
                </div>
                <div class="row">
                    <div class="col-xs-12 ">
                        <h3 class="text-xs-center text-info pb-2 h2">Contenu du site</h3>
                    </div>
                </div>
                <section id="contentSite">
                    <div class="row row3">
                        <div class="col-xs-5 offset-xs-1">
                            <figure class="wow rotateInDownLeft">
                                <h4 class="text-xs-center text-warning pb-1">Présentation</h4>
                                <a href="qui_suis_je.php"><img src="assets/images/1.jpg" alt="" class="img-fluid img-thumbnail" id="onPresentation"></a>
                            </figure>
                        </div>
                        <div class="col-xs-5">
                            <figure class="wow rotateInDownRight">
                                <h4 class="text-xs-center text-warning pb-1">Les origines</h4>
                                <a href="pourquoi.php"><img src="assets/images/2.jpg" alt="" class="img-fluid img-thumbnail" id="onOrigine"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="row row4">
                        <div class="col-xs-8 offset-xs-2">
                            <div class="mt-2 mb-3 contentBlockquote wow lightSpeedIn">
                                <blockquote class="blockquote blockquote-reverse p-1 mb-0">
                                    <p id="pContenuSite" class="lead"><small>Êtes-vous curieux ? Survolez-les !</p>
                                    <footer class="blockquote-footer">Alain GUILLON</footer>
                                </blockquote>
                            </div> 
                        </div>
                    </div>
                    <div class="row row5">
                        <div class="col-xs-5 offset-xs-1">
                            <figure class="wow rotateInUpLeft">
                                <h4 class="text-xs-center text-warning pb-1">Réalisations</h4>
                                <a href="realisation.php"><img src="assets/images/3.jpg" alt="" class="img-fluid img-thumbnail" id="onRealisation"></a>
                            </figure>
                        </div>
                        <div class="col-xs-5">
                            <figure class="wow rotateInUpRight">
                                <h4 class="text-xs-center text-warning pb-1">CV</h4>
                                <a href="cv.php"><img src="assets/images/4.jpg" alt="" class=" img-thumbnail" id="onCv"></a>
                            </figure>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <section class="mb-0 p-2 pt-3 jumbotron" id="remerciements">
                        <h3 class="text-xs-center text-danger pb-1">Remerciements</h3>
                        <hr>
                        <p class="lead text-xs-center wow bounceInLeft">Sur une page sportif,<br /> les sponsors sont généralement mis en avant.</p>
                        <hr>
                        <p class="lead text-xs-center wow bounceInRight">Pour ma part, il m'ai impenssable de ne peux pas remercier les personnes qui m'ont permis d'atteindre ce niveau de compétence.</p>
                        <hr>
                        <div class="col-xs-4 offset-xs-2 mb-2">
                            <!-- Button btnSoutien modal -->
                            <button type="button" class="btn btn-info btn-lg wow bounceIn" data-toggle="modal" data-target="#btnSoutien">Je ne serais tout simplement rien sans eux !</button>
                        </div>
                    </section>
                </div>
                <!-- Modal Remerciement -->
                <div class="modal" id="btnSoutien" tabindex="-1" role="dialog" aria-labelledby="ModalRemerciement" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-white bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-xs-center" id="ModalRemerciement"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> - Mes remerciements -</h4>
                            </div>
                            
                            <div class="modal-body modalContent">
                                <div class="row">
                                    <div class="col-xs-6 mt-1">
                                        <div id="accordion" role="tablist" aria-multiselectable="true">
                                            <!-- Fastt -->
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingT">
                                                    <h5 class="mb-0">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#fastt" aria-expanded="false" aria-controls="fastt" class="collapsed">Mme DEBBAB</a>
                                                    </h5>
                                                </div>
                                                <div id="fastt" class="collapse" role="tabpanel" aria-labelledby="fastt" aria-expanded="false">
                                                    <div class="card-block">
                                                        <p>Sans elle, je n'aurais jamais pu intégrer la 3W Academy, elle s'est démenée pour moi alors que le timming était plus que serré. Merci !</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Ma conjointe -->
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingT">
                                                    <h5 class="mb-0">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#conjointe" aria-expanded="false" aria-controls="conjointe" class="collapsed">Marjorie Caron</a>
                                                    </h5>
                                                </div>
                                                <div id="conjointe" class="collapse" role="tabpanel" aria-labelledby="conjointe" aria-expanded="false">
                                                    <div class="card-block">
                                                        <p>Sans elle, je n'aurais jamais pu intégrer la 3W Academy, elle s'est démenée pour moi alors que le timming était plus que serré. Merci !</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div> <!-- Fin col-xs-6(1) -->
                                </div>
                                
                                
                                
                                
                                
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-block">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                    </div>
                                </div>
                            </div>


                            
                            
                            
                            <div class="modal-body modalContent">
                                <dl class="dl-horizontal mb-3">
                                    <dt class="col-sm-3 thanks1"> du Fastt</dt>
                                    <dd class="col-sm-9 thanks1"></dd>

                                    <dt class="col-sm-3 thanks2">Marjorie Caron</dt>
                                    <dd class="col-sm-9 thanks2">Ma conjointe, qui m'a offert pas mal de formations et surtout, elle supporte mes longues journée/nuits à coder sans broncher. Merci ma chérie!</dd>

                                    <dt class="col-sm-3 thanks3">Éléanore</dt>
                                    <dd class="col-sm-9 thanks3">Qui grâce à dieu, elle est toujours là. Il s'agit de ma dernière fille qui se bat contre une maladie très grave depuis ça naissance.</dd>

                                    <dt class="col-sm-3 thanks4">Sheryle & Océane</dt>
                                    <dd class="col-sm-9 thanks4">Mes deux premières filles, m'on permit de tenir le coup dans les moments vraiment difficile. Je les adores</dd>

                                    <dt class="col-sm-3 thanks5" >Ma maman</dt>
                                    <dd class="col-sm-9 thanks5">Malgré qu'elle ne comprends rien sur tout ces langages, maman épaule ma conjointe au quotidien sur vraiment beaucoup de point. Merci maman je t'aime.</dd>

                                    <dt class="col-sm-3 thanks6">Véronique Guillon</dt>
                                    <dd class="col-sm-9 thanks6">Ma marraine avec qui j'ai de longue discution au téléphone.</dd>

                                    <dt class="col-sm-3 thanks7">Arnaud Favier</dt>
                                    <dd class="col-sm-9 thanks7">Mon meilleur ami et patron de la société 3BioElec qui se situe dans la région Lyonnaise. Merci pour tout ce que tu as pu faire pour moi.</dd>

                                    <dt class="col-sm-3 thanks8">Anthony Vigoureux</dt>
                                    <dd class="col-sm-9 thanks8">Une personne que je considère comme mon frère. Merci pour ta présence au quotidien.</dd>

                                    <dt class="col-sm-3 thanks9">Christohe & Jérôme Vigoureux</dt>
                                    <dd class="col-sm-9 thanks9">Deux personnes qui m'apportent tellement de chose positive qu'il sont indéniablement obligé d'être sur cette liste.</dd>

                                    <dt class="col-sm-3 thanks10">Josselin Caron & Nicolas Clabau</dt>
                                    <dd class="col-sm-9 thanks11">Mes futurs témoins mais également deux grands barjot que j'adore. Quand on se capte c'est tout le temps des barres de rire. Merci d'être là.</dd>

                                    <dt class="col-sm-3 thanks12">La 3W Academy</dt>
                                    <dd class="col-sm-9 thanks12">Fabuleux centre de formation sur les langages informatique. Je la recommande chaleureusement.</dd>

                                    <dt class="col-sm-3 thanks13">Mathieu</dt>
                                    <dd class="col-sm-9 thanks13">Formateur sur l'intégration à la 3WA. Débutant dans la formation et franchement, il a du talent !!</dd>

                                    <dt class="col-sm-3 thanks14">Julien</dt>
                                    <dd class="col-sm-9 thanks14">Formateur sur le développement à la 3WA. Une perle qui veut si possible nous apprendre et faire découvrir un maximum de chose.</dd>

                                    <dt class="col-sm-3 thanks15">La promotion L9 à la 3WA</dt>
                                    <dd class="col-sm-9 thanks15">Ils m'ont soutenu malgré mes problèmes avec ma fille, ils m'aident encore aujourd'hui</dd>

                                    <dt class="col-sm-3 thanks16">Clarisse Halimari</dt>
                                    <dd class="col-sm-9 thanks16">Ancienne élève de la promotion L9, elle corrige mes nombreuses fautes d'orthographe.</dd>

                                    <dt class="col-sm-3 thanks17">John Codeur</dt>
                                    <dd class="col-sm-9 thanks17">Formateur sur Udemy.com, j'apprend énormément via ces vidéos</dd>

                                    <dt class="col-sm-3 thanks18">Steven Sill</dt>
                                    <dd class="col-sm-9 thanks18">Formateur sur tuto.com. Également auprès de lui j'en apprends énormément.</dd>

                                    <dt class="col-sm-3 thanks19">Vidéo2Brain</dt>
                                    <dd class="col-sm-9 thanks19">Étant membre deluxe, je tiens à remerciers les nombreux formateur pour leurs formations de qualité.</dd>

                                    <dt class="col-sm-3">OpenClassRooms</dt>
                                    <dd class="col-sm-9">Je remercie les nombreux formateurs. Un seule bémole l'augmentation du prix pour suivre un parcours.</dd>

                                    <dt class="col-sm-3">j'en oublie...</dt>
                                    <dd class="col-sm-9">Et bien d'autres encore...</dd>
                                </dl>
                            </div>
                            <div class="modal-footer bg-info">
                               <div class="col-xs-12">
                                   <div class="col-xs-4 offset-xs-4">
                                       <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Fermer cette fenêtre</button>       
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fin modal Remerciement -->
                <div class="row rowConceptionLogo">
                    <h4 class="text-xs-center text-info mt-2 mb-2 p-2">Site conçus avec les langages suivants :</h4>
                    <div class="col-xs-12">
                        <div class="col-xs-3 m-0">
                            <figure class="wow rubberBand">
                                <img src="assets/images/logo/html.png" alt="" class="img-fluid img-thumbnail bgImg bgImg1">
                            </figure>
                        </div>
                        <div class="col-xs-3 m-0">
                            <figure class="wow rubberBand">
                                <img src="assets/images/logo/css.png" alt="" class="img-fluid img-thumbnail bgImg bgImg2">
                            </figure>
                        </div>
                        <div class="col-xs-3 m-0">
                            <figure class="wow rubberBand">
                                <img src="assets/images/logo/javascript.png" alt="" class="img-fluid img-thumbnail bgImg bgImg3">
                            </figure>
                        </div>
                        <div class="col-xs-3 m-0">
                            <figure class="wow rubberBand">
                                <img src="assets/images/logo/jquery.png" alt="" class="img-fluid img-thumbnail bgImg bgImg4">
                            </figure>
                        </div>  
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="jumbotron mt-1 mb-1 jumbotron.askLogo">
                        <p class="lead p-3 text-xs-center wow pulse" id="askLogo"><span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span></p>
                    </div>
                </div>
                <div class="col-xs-12 mt-2 mb-2">                        
                    <div class="col-xs-3 m-0">
                        <figure class="wow rubberBand">
                            <img src="assets/images/logo/bootstrap.png" alt="" class="img-fluid img-thumbnail bgImg bgImg5">
                        </figure>
                    </div>
                    <div class="col-xs-3 m-0">
                        <figure class="wow rubberBand">
                            <img src="assets/images/logo/php&mysql.png" alt="" class="img-fluid img-thumbnail bgImg bgImg6">
                        </figure>
                    </div>
                    <div class="col-xs-3 m-0">
                        <figure class="wow rubberBand">
                            <img src="assets/images/logo/emmet.png" alt="" class="img-fluid img-thumbnail bgImg bgImg7">
                        </figure>
                    </div>
                    <div class="col-xs-3 m-0">
                        <figure class="wow rubberBand">
                            <img src="assets/images/logo/sass.png" alt="" class="img-fluid img-thumbnail bgImg bgImg8">
                        </figure>
                    </div>
                </div>
                <div class="col-xs-10 offset-xs-1 mt-1">
                    <div>
                        <button class="btn btn-danger btn-block btn-lg wow flash" type="button" data-toggle="collapse" data-target="#infoImportante" aria-expanded="false" aria-controls="infoImportante"><i class="fa fa-info" aria-hidden="true"></i> - Information Importante</button>
                    </div>
                    <div class="collapse" id="infoImportante">
                        <div class="card-block wow bounceInUp" id="bgCardInfoImportante">
                            <h4 class="card-title">Mes ambitions</h4>
                            <p class="card-text text-xs-center">le 04/02/2017, ma dernière fille aura 2 ans. 2 ans qu'elle se bat chaque jours, sans relache contre une maladie orpheline. Début septembre 2016, elle n'était réellement pas loins d'y passé.. Aujourd'hui j'y ai laissé des plumes... Déjà qu'auparavant, mon état de santé était plus que limite.. Je ne lâcherai rien. Ma fille est un exemple de combativité. Avec le nombre incalculable de galère que j'ai eu dans ma vie, je suis toujours là. Donc c'est pourquoi en 2017, mon ambition est de prouver à tout le monde de quoi je suis réellement capable.</p>
                            <hr>
                            <p class="text-danger">Vous vous en doutez, je suis immédiatement disponible pour toutes proposition d'emploi.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 mt-3" id="copyright" >
                        <footer class="footerTel p-1"> 
                            <p class="text-white text-xs-center">Copyright &copy; 2017-2018 | <span class="text-info">+33 6.83.13.88.45</span> | Alain <span class="text-uppercase text-warning">guillon</span></p>
                        </footer>
                    </div>
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
        <!-- Script Bootstrap 4 -->
            <script type="text/javascript" src="vendor/bootstrap/js/tether.min.js"></script>
            <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Script wow -->
            <script src="vendor/js/wow.min.js"></script>
            <script>
                new WOW().init();
            </script>
        <!-- Script perso -->
            <script type="text/javascript" src="vendor/jquery/myScriptHome.js"></script>
    </body>
</html>
