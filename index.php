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
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSS -->
        <!-- CSS Bootstrap 4 -->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
        <!-- Font-Awesome CDN -->
        <link href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" rel="stylesheet" />
        <!-- CSS Perso -->
        <link rel="stylesheet" type="text/css" href="vendor/css/myStyle.css">
        <!-- Animate.css -->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Trirong" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- ============================================================================================= -->
        <!-- ============ Barre de navigation -->
        <!-- ============================================================================================= -->
        <nav class="navbar navbar-dark navbar-fixed-top">
            <a href="index.php" class="navbar-brand">Alain <span class="text-uppercase text-warning ">guillon</span> - <i class="fa fa-mobile" aria-hidden="true"></i> <small class="text-info">+33 6.83.13.88.45</small></a>
            <button type="button" class="navbar-toggler hidden-md-up float-xs-right mr-1" data-toggle="collapse" data-target="#myNavOne"></button>
            <?php include("assets/includes/navigation.php"); ?>
            <div class="collapse navbar-collapse" id="myNavOne">
                <ul>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <!-- ============================================================================================= -->
            <!-- ============ Header -->
            <!-- ============================================================================================= -->
            <div class="row">
                <header>
                   <div class="jumbotron">
                       <hgroup class="text-xs-right p-3">
                           <span class="studentImg wow bounceInDown"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                           <h1 class="wow tada display-1">Alain Guillon</h1>
                           <hr class="hrHeader">
                           <h2 class="wow swing">Développeur</h2>
                           <h3 class="wow swing text-muted">Front & Back-end <span><small class="text-info">Juniors</small></span></h3>
                       </hgroup>
                   </div>
                </header>
            </div> <!-- Fin row Header -->
            <!-- ============================================================================================= -->
            <!-- ============ Bouton Information importante ! -->
            <!-- ============================================================================================= -->
            <section>
                <div class="col-sm-10 offset-sm-1 mt-3 mb-3">
                    <div>
                        <button class="btn btn-danger btn-block btn-lg wow flash" type="button" data-toggle="collapse" data-target="#infoImportanteXS" aria-expanded="false" aria-controls="infoImportanteXS"><i class="fa fa-info" aria-hidden="true"></i> - Information Importante</button>
                    </div>
                    <div class="collapse" id="infoImportanteXS">
                        <div class="card-block wow bounceInUp" id="bgCardInfoImportante">
                            <h3 class="card-title text-xs-center">Mes ambitions</h3>
                            <hr class="w-100">
                            <p class="card-text text-xs-center">le 04/02/2017, ma dernière fille aura 2 ans. 2 ans qu'elle se bat chaque jours, sans relache contre une maladie orpheline. Début septembre 2016, elle n'était réellement pas loins d'y passé.. Aujourd'hui j'y ai laissé des plumes... Déjà qu'auparavant, mon état de santé était plus que limite.. Je ne lâcherai rien. Ma fille est un exemple de combativité. Avec le nombre incalculable de galère que j'ai eu dans ma vie, je suis toujours là. Donc c'est pourquoi en 2017, mon ambition est de prouver à tout le monde de quoi je suis réellement capable.</p>
                            <hr class="w-100">
                            <p class="text-danger">Vous vous en doutez, je suis immédiatement disponible pour toutes proposition d'emploi.</p>
                        </div>
                    </div>
                </div>
            </section> <!-- fin Bouton Information importante -->
            <!-- ============================================================================================= -->
            <!-- ============ Présentation / Les origines / Réalisations / CV -->
            <!-- ============================================================================================= -->
            <section id="contentSite hidden-xs-up">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-12 offset-xs-2 col-sm-6 ml-0 mt-1 pb-0">
                            <figure class="wow rotateInDownLeft">
                                <h3 class="text-xs-center text-warning pb-1">Présentation</h3>
                                <a href="qui_suis_je.php"><img src="assets/images/1.jpg" alt="" class="img-fluid img-thumbnail" id="onPresentation" data-toggle="tooltipContaintXS" data-placement="bottom" title="Découvrez moi en cliquant sur cette image."></a>
                            </figure>
                        </div>
                        <div class="col-xs-12 col-sm-6 mt-1 pb-0">
                            <figure class="wow rotateInDownRight">
                                <h3 class="text-xs-center text-warning pb-1">Origines</h3>
                                <a href="pourquoi.php"><img src="assets/images/2.jpg" alt="" class="img-fluid img-thumbnail" id="onOrigine" data-toggle="tooltipContaintXS" data-placement="bottom" title="Les raisons pour lesquelles j'ai conçu ce site."></a>
                            </figure>
                        </div>
                        <!-- ============================================================================================= -->
                        <!-- ============ Je cache cette div 
                        <!-- ============================================================================================= -->
                        <div class="row">
                            <div class="hidden-xs-down col-xs-8 offset-xs-2 mt-2">
                                <div class="mt-2 mb-3 jumbotron wow lightSpeedIn">
                                    <h3>Etes-vous curieux ?</h3>
                                    <blockquote class="blockquote blockquote p-1 mb-0">
                                        <p id="pContenuSite" class="lead">Survolez chaque image afin de découvrir une description de son contenu.</p>
                                        <span class="clearfix"></span>
                                    </blockquote>
                                </div> 
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 mt-1 pb-0">
                            <figure class="wow rotateInUpLeft">
                                <h3 class="text-xs-center text-warning pb-1">Réalisations</h3>
                                <a href="realisation.php"><img src="assets/images/3.jpg" alt="" class="img-fluid img-thumbnail" id="onRealisation" data-toggle="tooltipContaintXS" data-placement="bottom" title="Venez voir toutes mes réalisations ainsi que mes futurs projets."></a>
                            </figure>
                        </div>

                        <div class="col-xs-12 col-sm-6 mt-1 mb-3 pb-0">
                            <figure class="wow rotateInUpRight">
                                <h3 class="text-xs-center text-warning pb-1">CV</h3>
                                <a href="cv.php"><img src="assets/images/4.jpg" alt="" class="img-fluid img-thumbnail" id="onCv" data-toggle="tooltipContaintXS" data-placement="bottom" title="Je vous propose ici mon CV."></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </section><!-- fin Présentation / Les origines / Réalisations / CV -->
            <!-- ============================================================================================= -->
            <!-- ============ Remerciements -->
            <!-- ============================================================================================= -->
            <section class="mb-0 jumbotron" id="remerciements">
                <h3 class="text-xs-center text-danger pb-1 wow tada">Remerciements</h3>
                <p class="lead text-xs-center wow bounceInLeft">Sur une page sportif,<br /> les sponsors sont généralement mis en avant.</p>
                <p class="lead text-xs-center wow bounceInRight">Pour ma part, il m'ai impenssable de ne peux pas remercier les personnes qui m'ont permis d'atteindre ce niveau de compétence.</p>
                <div class="row">
                    <div class="offset-xs-1 col-xs-10 mt-3 mb-1">
                        <!-- Button btnSoutien modal -->
                        <button type="button" class="btn btn-info btn-lg btn-block wow bounceIn" data-toggle="modal" data-target="#btnSoutien">Je ne serais tout simplement rien sans eux !</button>
                    </div> 
                </div>
                <!-- ============================================================================================= -->
                <!-- ============ Modal Remerciement -->
                <!-- ============================================================================================= -->
                <div class="modal" id="btnSoutien" tabindex="-1" role="dialog" aria-labelledby="ModalRemerciement" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <!-- ============================================================================================= -->
                            <!-- ============ Modal Header -->
                            <!-- ============================================================================================= -->
                            <div class="modal-header text-white bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-xs-center" id="ModalRemerciement"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> - Mes remerciements -</h4>
                            </div>
                            <!-- ============================================================================================= -->
                            <!-- ============ Modal Contenu -->
                            <!-- ============================================================================================= -->
                            <div class="modal-body modalContent" id="bgModal">
                                <div class="row">
                                    <div class="col-xs-12 mt-1">
                                        <!-- ============================================================================================= -->
                                        <!-- ============ Navigation (tabulation) -->
                                        <!-- ============================================================================================= -->
                                        <ul class="nav nav-tabs nav-justified" role="tablist">
                                            <li class="nav-item h4">
                                                <a class="nav-link active" data-toggle="tab" href="#fastt" role="tab">Fastt</a>
                                            </li>
                                            <li class="nav-item h4">
                                                <a class="nav-link" data-toggle="tab" href="#famille" role="tab">Famille</a>
                                            </li>
                                            <li class="nav-item h4">
                                                <a class="nav-link" data-toggle="tab" href="#amis" role="tab">Amis</a>
                                            </li>
                                            <li class="nav-item h4">
                                                <a class="nav-link" data-toggle="tab" href="#troisWa" role="tab">3WA</a>
                                            </li>
                                            <li class="nav-item h4">
                                                <a class="nav-link" data-toggle="tab" href="#mooc" role="tab">Mooc</a>
                                            </li>
                                            <li class="nav-item h4">
                                                <a class="nav-link" data-toggle="tab" href="#autres" role="tab">Autres</a>
                                            </li>
                                        </ul>
                                        <!-- ============================================================================================= -->
                                        <!-- ============ Contenu de chaque tabulation -->
                                        <!-- ============================================================================================= -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="fastt" role="tabpanel">
                                                <!-- ============================================================================================= -->
                                                <!-- ============ FASTT -->
                                                <!-- ============================================================================================= -->
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <!-- Madame DEDABB -->                                        
                                                        <div class="jumbotron bg-inverse mt-2">
                                                            <div class="media text-white">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/femme.png" alt="Generic placeholder image" width="64px" height="64px">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Mme DEBBAB</h4>
                                                                    Madame DEBBAB, sans elle, je n'aurais jamais pu intégrer la 3W Academy ou si mais bien plus tardivement. Lors de mon accident de travail fin 2013, j'ai été suivi par le fastt et tout particulièrement par mme DEBBAB. Elle ma conseillée une reconversion professionnel suite à mon état de santé. La médecine du travail acceptait mon projet de reconversion et par la suite, madame DEBBAB c'est démenée pour moi. Surtout à de nombreux problèmes que me posait mon ancienne boîte d'intérim. Petit exemple : "Elle ne remplissait pas les documents comme il le fallait". Pour espérer intégrer la 3WA j'étais limiter dans le temps. Grâce à sa ténacitée et malgré un timming très juste, j'ai pu intégrer la 3WA pour faire partie de la promotion L9. Ainsi, madame DEBABB, je tiens à vous remercier très chaleureusement.
                                                                </div>
                                                            </div>
                                                        </div>        
                                                        <!-- Madame FERETTI -->
                                                        <div class="jumbotron bg-warning">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Mme FERETTI</h4>
                                                                    Madame FERETTI était présente pour nous lorsque financièrement c'était très compliqué. Quand j'ai appris que l'état de ma fille c'était aggravé et que c'était pratiquement la fin, je suis le 8 août 2016, passé sous le statut de dépressif. Aujourd'hui ma fille s'en sort, je commence à allez mieux. Il faut dire qu'apprendre que sa propre fille rentre à ma demande à la maison sous le une certaine condition. Soit en soin palliatif... Madame FERETTI c'est déplacée en personne chez moi pour récupérer tous les documents nécessaire pour me permettre d'être payé par la sécurité social... Je n'avais pas le courage de me déplacer de moi même sachant qu'elle pouvait (ma fille) partir à chaque instant. Aujourd'hui on est très loin de ce que j'ai pu vivre.... malgré que la maladie est encore là.
                                                                </div>
                                                                <a class="media-right media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/femme.png" alt="Generic placeholder image" width="64px" height="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin section fastt -->
                                            <!-- ============================================================================================= -->
                                            <!-- ============ FAMILLE -->
                                            <!-- ============================================================================================= -->
                                            <div class="tab-pane" id="famille" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <!-- Ma conjointe -->                                        
                                                        <div class="jumbotron bg-inverse mt-2">
                                                            <div class="media text-white">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/marjorie.jpg" alt="Generic placeholder image" width="64px" height="64px">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Marjorie</h4>
                                                                    Marjorie, ma conjointe depuis plus de 12 ans. Elle m'a offert le plus beau cadeau qu'un homme puisse rêver. Un enfant. Enfin elle a ré-itérer l'opération 3 fois. Pour notre dernière nous avons de février jusqu'à début septembre 2016 passé le 3/4 de notre temps à l'hôpital HFME pour soutenir la pépette. Moralement nous avons été énormément touché lorsqu'on a appris qu'elle pouvait partir. Aujourd'hui elle va mieux... Par contre la maladie est toujours présente. Je tiens à la remercier d'être aussi précise dans la gestion des traitement de ma fille. Mais surtout, même si ça n'a pas été toujours très rose entre nous, on a su se serrer les coudes avec ce qu'ils nous arrivait. Notre couple n'a pas éclaté bien au contraire cette situation nous a encore plus rapprocher. Merci ma chérie d'être présente chaque jour. Je t'aime.
                                                                </div>
                                                            </div>
                                                        </div>                                            
                                                        <!-- Éléanore -->
                                                        <div class="jumbotron bg-warning">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Éléanore</h4>
                                                                    Éléanore, je suis tellement fièr de toi. Tu ne le sais pas, tu ne t'en rends pas compte enfin je l'espère... Mais tu te bat chaque jour depuis le premier jour de ta naissance, contre une maladie très très grave. Tu as une force de caractère hors du commun. Pour beaucoup de monde tu es un exemple. Aujourd'hui tu as du retard sur beaucoup de chose mais très franchement on s'en contre fou. Tu évolues a ton rythme et tu le fais très très bien. Sache tout de même que je t'aime pationnément et que je te souhaite le meilleur !! gros bisous. Papa!
                                                                </div>
                                                                <a class="media-right media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/eleanore.jpg" alt="Generic placeholder image" width="64px" height="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- Sheryle -->                                        
                                                        <div class="jumbotron bg-inverse">
                                                            <div class="media text-white">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/sheryle.jpg" alt="Generic placeholder image" width="64px" height="64px">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Sheryle</h4>
                                                                    Sheryle, ma fille cadette. Tu es et tu restera mon tout premier grand amour. Alors souvent tu te fais remarquées, il arrive parfois que je suis obligé de te gronder. C'est pour ton bien. Je t'aime tellement que je ne veux pas que tu te comporte mal avec qui que ce soit. Tu as le droit de faire des bétises et c'est tout à fait normal :D. En tout cas je suis tellement fièr de toi quand tu t'occupes de ta petite soeur qui est gravement malade. Sheryle je t'aime vraiment très fort. 
                                                                </div>
                                                            </div>
                                                        </div>  
                                                        <!-- Océane -->
                                                        <div class="jumbotron bg-warning">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Océane</h4>
                                                                    Océane, ma seconde princesse, le jour de ta naissance tu as faillis mourrir avec ta mère lors d'un accouchement ou nous avons tous frôler la catastrophe. Surtout maman et toi. Aujourd'hui tu es là, tu es notre petite fofolle, et, je t'aime plus que tout au monde. Tu as un coeur énorme, dans le sens ou tu partages tout. Quitte à ne rien avoir. Attention tout de même !! Un jour ça peut réellement te jouer de très mauvais tours. Je pense à toi tous les jours et je t'aime très très fort !!
                                                                </div>
                                                                <a class="media-right media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/oceane.jpg" alt="Generic placeholder image" width="64px" height="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- Maman -->                                        
                                                        <div class="jumbotron bg-inverse">
                                                            <div class="media text-white">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/maman.jpg" alt="Generic placeholder image" width="64px" height="64px">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Maman</h4>
                                                                    Maman, que dire de toi. Tu es mon sens, celle qui m'a mit au monde. Sans toi je ne serais que poussière. Je t'aime malgré que parfois tu ne comprends pas ce que je fais. Je ne t'en veux pas malgré que ça m'embête !! Bref tu as eu à noël 2016, 71 ans et tu fais encore énormément de chose.. Comment fais tu !? Je suis vraiment très fièr de toi. Par contre pense de temps à autre a te ménager tu as quand même le droit hein. Merci aussi maman d'être là pour les enfants tu leurs apportes beaucoup d'amour et de connerie mais qu'es-ce-qu'on rigole surtout avec ton marseille en mousse :D. Gros gros bisous maman je t'aime. 
                                                                </div>
                                                            </div>
                                                        </div>  
                                                        <!-- Pascal -->
                                                        <div class="jumbotron bg-warning">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Pascal</h4>
                                                                    Pascal, mon beau père. Personne que j'apprécie énormément. C'est mon père de coeur. J'apprends beaucoup auprès de lui quand il peut venir sur Lyon. Bon par contre, il m'a eu.. Me faire une liste d'outils à aller cherché à l'Brico-dépot.. de là, pas de problème sauf que ... Glisser sur cette liste .. un rail de cocke... je n'avais pas l'air con devant le vendeur... Bon l'avantage on pourra dire que je ne fume pas donc ça fait quelqu'un de bien.. Bon ok j'ai cherché une excuse !! En tout cas merci pour tout gros bisous !
                                                                </div>
                                                                <a class="media-right media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/pascal.jpg" alt="Generic placeholder image" width="64px" height="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- Chantal -->                                        
                                                        <div class="jumbotron bg-inverse">
                                                            <div class="media text-white">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/chantal.jpg" alt="Generic placeholder image" width="64px" height="64px">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Chantal</h4>
                                                                    Chantal, ma belle mère. Sa n'a pas forcément été tout le temps rose entre nous mais je l'adore. Je l'a remmercierai jamais assez pour avoir pu baptisé ma fille à la maison alors qu'elle était sur le point de partir. En effet nous devions la baptiser dans le nord sauf que médicalement parlant ce n'était pas envisageable de prévoir tout déplacement. Aujourd'hui la puce se porte bien et tu n'y est pas indiférente. Gros gros bisous.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Josselin -->
                                                        <div class="jumbotron bg-warning">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Josselin ( Joss )</h4>
                                                                    Joss, mon premier témoin pour mon mariage prévu en 2017. Ce gars est fou je pense qu'il n'y a pas d'autre critère qui pourrait mieux lui correspondre. En gros, il peut se trouver dans n'importe quelle situation pour sortir connerie sur connerie. Egalement, Joss dispose d'une faculté folle pour moi. L'oreille musicale... Alors qu'il n'y connait strictement rien en note de musique, il écoute une chanson et au piano il peut refaire la mélodie très très rapidement... A croire que ce gars n'ai pas humain !!
                                                                </div>
                                                                <a class="media-right media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/ally_joss.jpg" alt="Generic placeholder image" width="64px" height="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- Véronique -->
                                                        <div class="jumbotron bg-inverse">
                                                            <div class="media text-white">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/veronique.jpg" alt="Generic placeholder image" width="64px" height="">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Véronique</h4>
                                                                    Ma marraine, je l'ai retrouvée par pur hazard sur facebook. Et très franchement je ne suis pas déçus. On passe de longues heures ensemble au téléphonne à parler de tout et de rien. C'est ma marraine et je suis très fièr d'elle. J'ai hâte qu'on puisse se voir. En attendant, je tembrasse très chaleureusement ! Gros bisous
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin section famille -->
                                            <!-- ============================================================================================= -->
                                            <!-- ============ AMIS -->
                                            <!-- ============================================================================================= -->
                                            <div class="tab-pane" id="amis" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <!-- Arnaud Favier -->
                                                        <div class="jumbotron bg-inverse mt-2">
                                                            <div class="media text-white">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/arnaud.jpg" alt="Generic placeholder image" width="64px" height="64px">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Arnaud</h4>
                                                                    Mon meilleur ami et ce depuis ma plus tendre enfance. Aujourd'hui il est patron de la société 3BioElec qui se situe dans la région Lyonnaise. Il est également le parrain de ma fille aîné, il n'a pas hésité à faire plus de 700 bornes pour faire un baptème. Lorsque j'avais besoin de ces services, il était présent alors qu'il travaillait à l'époque sur marseille. Ce gars est en OR. Je vous recommande chaleureusement de contacter sa sociéter si vous avez le moindre problème en électricité. Pour en revenir à ma famille, merci pour tout ce que tu as pu faire. Gros gros bisous !
                                                                </div>
                                                            </div>
                                                        </div>                                            
                                                        <!-- Anthony -->
                                                        <div class="jumbotron bg-warning">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Anthony ( Tony )</h4>
                                                                    Ce gars est unique, à un point que je le considère comme mon frère. Un frère que je n'ai pas eu. Je n'y connais rien en bricolage et tout ça, tony m'aide très souvent dans toutes ces mésaventures pour moi. Egalement, il faut savoir qu'en voiture je suis une bille. Avec ces contacts j'ai pu bénéficié d'énorme réduction sur l'entretient de mon véhicule. Je tiens par la même occasion à remercier son père qui franchement, quand j'ai besoin de X service, est là pour moi. Je finirais par un gros merci pour les délires que t'as avec mes filles et surtout Tony merci pour ta présence au quotidien. Gros bisous !
                                                                </div>
                                                                <a class="media-right media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/tony.jpg" alt="Generic placeholder image" width="64px" height="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- Doudou -->                                        
                                                        <div class="jumbotron bg-inverse">
                                                            <div class="media text-white">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/coco_doudou.jpg" alt="Generic placeholder image" width="64px" height="64px">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Doudou ( Christophe )</h4>
                                                                    Doudou le frangin de Tony. Ce gars est exceptionnel il a un coeur aussi gros que son père. Je l'adore il est génial. De plus j'adore faire des parties le soir avec lui et ces proches on s'amuse bien et ça fait surtout vachement du bien de se détendre entre amis. Ce que je sais c'est qu'avec Doudou, j'ai fais une superbe rencontre. Merci Doudou pour ce que tu peux faire pour nous (marjo et moi même) ou bien, ma mère voir même mes gosses. Merci franchement pour tout.
                                                                </div>
                                                            </div>
                                                        </div>  
                                                        <!-- Jérôme -->
                                                        <div class="jumbotron bg-warning">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Jérôme</h4>
                                                                    Jérôme, le beau frère de Tony et Doudou, ce gars également il a un coeur énorme. Je l'adore aussi pour énormément de point. Son honnêteté, sa patience, son énergie, sa persévérence etc... Ce gars est génial. J'adore par exemple, le soir sur fifa, il est tellement fort de la tête c'est abusé.. Par contre au pied on dirait une chêvre :D ralalala qu'es-ce-qu'on rigole. En tout cas merci mon Jérôme pour tout ce que tu as pu faire pour moi. Je tiens à te remercier aussi pour tout ce que tu as pu faire pour ma poubelle ( voiture ). Gros bisous :P
                                                                </div>
                                                                <a class="media-right media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/jerome_lucie.jpg" alt="Generic placeholder image" width="64px" height="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- Nicolas -->                                        
                                                        <div class="jumbotron bg-inverse">
                                                            <div class="media text-white">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/nico_axel.jpg" alt="Generic placeholder image" width="64px" height="64px">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Nicolas</h4>
                                                                    Nico, mon seconde témoin. Il va de paire avec Josselin... Ces deux gugus réuni... c'est bagdad dans les alentours. Ils sont tellement déjanté qu'il n'y en a pas un pour rattraper l'autre. Enfin si la gendarmerie :P (j'épargne les détails). Dans tous les cas tu es quelqu'un que j'aprécie vraiment beaucoup. Sauf, n'oubli jamais, un jour de la tiendrais ma revanche. Tu seras chauve partiellement comme je l'ai été mouahahaha !! Allez gros gros bisous!
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin section amis -->
                                            <!-- ============================================================================================= -->
                                            <!-- ============ 3WA -->
                                            <!-- ============================================================================================= -->
                                            <div class="tab-pane" id="troisWa" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <!-- La 3WA -->
                                                        <div class="jumbotron bg-inverse mt-2">
                                                            <div class="media text-white">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/3wa.png" alt="Generic placeholder image" width="64px" height="64px">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">La 3WA</h4>
                                                                    Je tiens à remercier ce centre de formation. Pour moi je pensais me débrouiller très simplement bien au contraire j'ai vite été surpris par quelques subtilités sur certains langages. Au niveau de l'intégration je me suis balaé mais au niveau du développement je n'ai pas réussi à suivre comme certain. Dans tout les cas j'ai adoré et je compte réellement en faire mon métier. Merci la 3WA.
                                                                </div>
                                                            </div>
                                                        </div>                                            
                                                        <!-- Mathieu -->
                                                        <div class="jumbotron bg-warning">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Mathieu Coingt</h4>
                                                                    Ah Mathieu, nouveau formateur au sein de la 3WA au moment ou nous avons intégré cette fabuleuse formation. Il nous a formé sur l'intégration et très franchement il s'est débrouillé comme un chef. J'ai un très grand respect pour ce qu'il fait et surtout je le remercie chaleureusement pour son enseignement. Gros bisous Mathieu !
                                                                </div>
                                                                <a class="media-right media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/mathieu.jpg" alt="Generic placeholder image" width="64px" height="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- Julien -->                                        
                                                        <div class="jumbotron bg-inverse">
                                                            <div class="media text-white">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/julien.jpg" alt="Generic placeholder image" width="64px" height="64px">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Julien Boyer</h4>
                                                                    Julien, un formateur unique en son genre. Ce gars vous fait découvrir tellement de chose que vous finissez par devenir accro au code. Enfin je suis dingue du code en partie par sa faute. Il m'a transmit cette amour et très franchement je ne suis pas déçu ! Quel pied, je découvre, j' en apprends tous les jours avec pour seul regret une formation déjà fini. Si j'aurais la possibilité de m'instruire de nouveau auprès de Julien je le ferai avec une énergie débordante. Julien sache que je te remercie réellement pour tout ce que tu m'as enseigné. Je n'avais pas tout saisi mais bon avec le temps ça rentre. 
                                                                </div>
                                                            </div>
                                                        </div>  
                                                        <!-- Les élèves de la promotion L9 -->
                                                        <div class="jumbotron bg-warning">
                                                            <div class="media">
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">La promotion L9</h4>
                                                                    Je tiens personnellement à remercier toute la promotion L9 au grand complet. Nous avons passé de très bon moment ensemble, alors c'est vrai que le midi je passais mon temps devant l'écran mais j'ai toujours apprécié ce qui m'a été dit. "Va te changer les idées. ; Fait une pause ! etc..." Vous étiez tous au courant de ma situation et vous étiez tous là pour moi. Depuis que j'ai repris le code, je suis souvent épaulé de :
                                                                    <ul>
                                                                        <li>Clarisse Halimari - Pour ces nombreuses corrections orthographique</li>
                                                                        <li>Martin Leclercq - Pour sa franchise sur ma façon de m'instruire.</li>
                                                                        <li>Ayapo Lawson - Pour son retour professionnelement parlant.</li>
                                                                        <li>Hamza Mezidi - Pour son aide sur le côté back-end</li>
                                                                    </ul> 
                                                                </div>
                                                                <a class="media-right media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/anciens_eleves.png" alt="Generic placeholder image" width="64px" height="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin section 3WA -->
                                            <!-- ============================================================================================= -->
                                            <!-- ============ MOOC -->
                                            <!-- ============================================================================================= -->
                                            <div class="tab-pane" id="mooc" role="tabpanel">
                                                <!-- Section udemy -->
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="row">
                                                            <div class="col-xs-3 mt-3 mb-2">
                                                                <img src="assets/images/portraits/john_codeur.jpg" alt="" width="100%">
                                                            </div>
                                                            <div class="col-xs-9 mt-3 mb-2">
                                                                <!-- John Codeur -->
                                                                <div class="jumbotron bg-warning">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading">John Codeur</h4>
                                                                            Je tiens réellement à remercier John codeur pour ces nombreuses formations sur plusieurs langages. Pour ma part, il s'agit surtout d'un rafraîchissement sur quelques langages. Mais aussi prenons le cas de jQuery, à la 3WA, j'avais pas mal de lacune sur ce langage. Aujourd'hui grâce à John, ce n'est plus le cas.  
                                                                        </div>
                                                                        <a class="media-right media-middle" href="#">
                                                                            <img class="media-object img-thumbnail" src="assets/images/logo/mooc/udemy.svg" alt="Generic placeholder image" width="64px" height="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <img src="assets/images/portraits/sandy_ludosky.jpg" alt="" width="100%">
                                                            </div>
                                                            <div class="col-xs-9">
                                                                <!-- Sandy Ludosky -->
                                                                <div class="jumbotron bg-warning">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading">Sandy Ludosky</h4>
                                                                            Sandy, j'ai découvert cette fabuleuse formatrice il y a maintenant un bon petit moment sur video2brain lorsqu'elle avait publié une formation sur bootstrap 3. J'ai longuement hésité entre ces formations et celles de Julien Moulin. J'ai via mon abonnement deluxe sur video2brain, pu voir ces formations. Franchement ça vaut le coup. Peut être que pour bootstrap 3 il faudrait plutôt patienter pour une formation sur bootstrap 4 mais bon au jour d'aujourd'hui sur Udemy, Sandy me forme quand j'ai un peu de temps libre sur ANGULAR 2. Merci Sandy pour tes cours.
                                                                        </div>
                                                                        <a class="media-right media-middle" href="#">
                                                                            <img class="media-object img-thumbnail" src="assets/images/logo/mooc/udemy.svg" alt="Generic placeholder image" width="64px" height="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <img src="assets/images/portraits/steven_sil.jpg" alt="" width="100%">
                                                            </div>
                                                            <div class="col-xs-9">
                                                                <!-- Steven Sil -->
                                                                <div class="jumbotron bg-warning">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading">Steven Sil</h4>
                                                                            Steven Sil, quel formateur !! Très jeune mais avec une façon d'expliqué qui te prends aux trips. Etant amoureux du code avec Steven, j'ai découvert bootstrap 4, ( Aujourd'hui, l'installation est bien plus aisé ). J'ai appris la base de Emmet. ( Je remercie aussi Mr Birnou Sébarte sur vidéo2brain pour cette même formation. ). Mais également, j'apprends avec Steven, JAVASCRIPT / PHP / GIT / LARAVEL / COMPOSER et bien d'autres choses... Merci aussi Steven pour ton aimabilité sur facebook. J'apprécie grandement d'évoluer positivement auprès de toi.
                                                                        </div>
                                                                        <a class="media-right media-middle" href="#">
                                                                            <img class="media-object img-thumbnail" src="assets/images/logo/mooc/tuto_com.jpg" alt="Generic placeholder image" width="64px" height="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Adrien Gazaix -->
                                                            <div class="col-xs-3">
                                                                <img src="assets/images/portraits/adrien_gazaix.jpg" alt="" width="100%">
                                                            </div>
                                                            <div class="col-xs-9">
                                                                <div class="jumbotron bg-warning">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading">Adrien Gazaix</h4>
                                                                            Adrien, je tiens à te remercier pour toutes les formations que j'ai pu voir. J'en apprends beaucoup avec toi et c'est surtout toujours un plaisir de voir ou revoir une formation à tes côtés. Merci encore.
                                                                        </div>
                                                                        <a class="media-right media-middle" href="#">
                                                                            <img class="media-object img-thumbnail" src="assets/images/logo/mooc/tuto_com.jpg" alt="Generic placeholder image" width="64px" height="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Fabien Le corre -->
                                                            <div class="col-xs-3">
                                                                <img src="assets/images/portraits/fabien_le_corre.jpg" alt="" width="100%">
                                                            </div>
                                                            <div class="col-xs-9">
                                                                <div class="jumbotron bg-warning">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading">Fabien Le corre</h4>
                                                                            Merci Fabien pour ces nombreuses vidéo qui font que je ne sais parfois pas par ou commencé tellement tout est bon. J'apprécie grandement de bosser à tes côtés. Merci Fabien.
                                                                        </div>
                                                                        <a class="media-right media-middle" href="#">
                                                                            <img class="media-object img-thumbnail" src="assets/images/logo/mooc/tuto_com.jpg" alt="Generic placeholder image" width="64px" height="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Sébatien Imbert -->
                                                            <div class="col-xs-3">
                                                                <img src="assets/images/portraits/sebastien_imbert.jpg" alt="" width="100%">
                                                            </div>
                                                            <div class="col-xs-9">
                                                                <div class="jumbotron bg-warning">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading">Sébastien Imbert</h4>
                                                                            Merci Sébastien pour ton accord sur le faite que sur git j'ajoute ce que j'ai pu faire auprès de toi. J'ai grandement apprécié concevoir le menu en CSS. C'était vraiment plaisant. La navigation vertical est également bien sympatique.
                                                                        </div>
                                                                        <a class="media-right media-middle" href="#">
                                                                            <img class="media-object img-thumbnail" src="assets/images/logo/mooc/tuto_com.jpg" alt="Generic placeholder image" width="64px" height="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Graphoeil -->
                                                            <div class="col-xs-3">
                                                                <img src="assets/images/portraits/graphoeil.jpg" alt="" width="100%">
                                                            </div>
                                                            <div class="col-xs-9">
                                                                <div class="jumbotron bg-warning">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading">Graphoeil</h4>
                                                                            Graphoeil, c'est assez délicat de remercier un pseudo sans forcément savoir qui se cache derrière. Quoi qu'il en soit, j'en apprends beaucoup sur Jquery avec toi. Merci.
                                                                        </div>
                                                                        <a class="media-right media-middle" href="#">
                                                                            <img class="media-object img-thumbnail" src="assets/images/logo/mooc/tuto_com.jpg" alt="Generic placeholder image" width="64px" height="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Benoit Asselin -->
                                                            <div class="col-xs-3">
                                                                <img src="assets/images/portraits/benoit_asselin.jpg" alt="" width="100%">
                                                            </div>
                                                            <div class="col-xs-9">
                                                                <div class="jumbotron bg-warning">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading">Benoit Asselin</h4>
                                                                            Benoît, tu m'as permis de découvrir mootools via un petit projet et j'ai vraiment adoré Merci. De plus, avec toi j'ai pu réviser les REGEX !! Egalement, j'ai la possibilité de créer une timeline en jQuery tout comme la possibilitée d'animer un spinner en jQuery. Merci vraiment pour tout benôit. 
                                                                        </div>
                                                                        <a class="media-right media-middle" href="#">
                                                                            <img class="media-object img-thumbnail" src="assets/images/logo/mooc/tuto_com.jpg" alt="Generic placeholder image" width="64px" height="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Rudy Evrard -->
                                                            <div class="col-xs-3">
                                                                <img src="assets/images/portraits/rudy_evrard.jpg" alt="" width="100%">
                                                            </div>
                                                            <div class="col-xs-9">
                                                                <div class="jumbotron bg-warning">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading">Rudy Evrard</h4>
                                                                            Merci rudy pour ta formation sur la compréhension des IIFE et du mode strict en JavaScript. Merci à toi !
                                                                        </div>
                                                                        <a class="media-right media-middle" href="#">
                                                                            <img class="media-object img-thumbnail" src="assets/images/logo/mooc/tuto_com.jpg" alt="Generic placeholder image" width="64px" height="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Mathieu Nebra -->
                                                            <div class="col-xs-3">
                                                                <img src="assets/images/portraits/mathieu_nebra.jpg" alt="" width="100%">
                                                            </div>
                                                            <div class="col-xs-9">
                                                                <div class="jumbotron bg-warning">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading">Mathieu Nebra</h4>
                                                                            Mathieu, merci pour le site du zéro que tu avais créé. Merci d'avoir fait openClassRooms. J'ai appris de bien belle chose sur la plateforme d'OpenClassRooms mais l'augmentation du prix pour suivre tel ou tel parcours... ne m'encourageait pas à poursuivre là bas. Sa n'empêche en rien que j'ai un profond respect pour ce que j'ai pu apprendre. Merci à vous tous. (Je reviendrais certainement le jour ou j'aurais un emploi).
                                                                        </div>
                                                                        <a class="media-right media-middle" href="#">
                                                                            <img class="media-object img-thumbnail" src="assets/images/logo/mooc/openClassrooms.png" alt="Generic placeholder image" width="64px" height="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Grafikart -->
                                                            <div class="col-xs-3">
                                                                <img src="assets/images/portraits/grafikart_auteur.jpg" alt="" width="100%">
                                                            </div>
                                                            <div class="col-xs-9">
                                                                <div class="jumbotron bg-warning">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <h4 class="media-heading">Grafikart</h4>
                                                                            Merci pour ces nombreux cours que vous proposez. J'ai été à une époque abonné et je peux vous assurer que ça vaut le coup. Je ne suis plus abo pour le moment mais lorsque j'aurais un emploi dans ce domaine, je me réabonnerai immédiatement. J'ai tellement la soif d'apprendre que je ne peux pas passé à côté de ce que vous poposez. Merci encore.
                                                                        </div>
                                                                        <a class="media-right media-middle" href="#">
                                                                            <img class="media-object img-thumbnail" src="assets/images/logo/mooc/grafikart_logo.jpg" alt="Generic placeholder image" width="64px" height="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin section mooc -->
                                            <!-- ============================================================================================= -->
                                            <!-- ============ AUTRES -->
                                            <!-- ============================================================================================= -->
                                            <div class="tab-pane" id="autres" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <!-- Seniors Féminine 2 -->                                        
                                                        <div class="jumbotron bg-inverse mt-2">
                                                            <div class="media text-white">
                                                                <a class="media-left media-middle" href="#">
                                                                    <img class="media-object img-thumbnail" src="assets/images/portraits/logo_usmhb.png" alt="Generic placeholder image" width="64px" height="64px">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Seniors Féminine 2</h4>
                                                                    Je suis heureux d'avoir pour la saison 2015-2016 pu être le coach adjoint de l'équipe des Seniors Féminine 2 du club de l'US Meyzieu Handball. Auprès d'elles, j'ai appris énormément. Elles ont été toutes respectueuses auprès de moi sachant que c'était ma toute première expérience en tant qu'entraîneur. Je remercie Jérémie Légué qui m'en a appris également beaucoup. J'ai du les abandonner en fin d'année 2016 suite au soucis de santé de ma dernière. Elles l'ont très bien prit et je les en remercieraient jamais assez. Je les embrassent toutes sans distinction. Merci les filles. Gros bisous !
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- Fin section autres -->
                                        </div> <!-- Fin tab-content -->
                                    </div> <!-- Fin col-xs-12 mt-1 -->
                                </div> <!-- Fin row -->
                            </div> <!-- Fin modal-body-->

                            <!-- Modal footer -->
                            <div class="modal-footer bg-info">
                                <div class="col-xs-12">
                                    <div class="col-xs-4 offset-xs-4">
                                        <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Fermer cette fenêtre</button>       
                                    </div>
                                </div>
                            </div> <!-- Fin modal footer -->
                        </div> <!-- Fin div class"modal-content" -->
                    </div> <!-- Fin div class="modal-dialog" role="document" -->
                </div> <!-- Fin modal Remerciement -->
            </section> <!-- Fin remerciements -->
            <!-- ============================================================================================= -->
            <!-- ============ Langage utilisé pour concevoir ce site -->
            <!-- ============================================================================================= -->
            <section class="ConceptionLogo">
                <div class="row">
                    <h3 class="text-xs-center text-info mt-2 mb-2 p-2">Quel langage utilisé !?</h3>
                    <!-- ============================================================================================= -->
                    <!-- ============ Logo 1ère partie -->
                    <!-- ============================================================================================= -->
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
                <!-- ============================================================================================= -->
                <!-- ============ Explication du langage utilisé -->
                <!-- ============================================================================================= -->
                <div class="row mt-2">
                    <div class="jumbotron mt-1 mb-1 jumbotron.askLogo">
                        <p class="lead p-3 text-xs-center wow pulse" id="askLogo"><span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span></p>
                    </div>
                </div>
                <!-- ============================================================================================= -->
                <!-- ============ Logo 2ème et dernière partie -->
                <!-- ============================================================================================= -->
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
            </section> <!-- Fin de la section ConceptionLogo -->
            <!-- ============================================================================================= -->
            <!-- ============ Footer -->
            <!-- ============================================================================================= -->
            <?php include("assets/includes/footer.php"); ?>
        </div><!-- Fin container -->
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
