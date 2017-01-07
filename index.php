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
        
        <nav class="navbar navbar-dark navbar-fixed-top bg-inverse">
            <a href="index.php" class="navbar-brand">Alain <span class="text-uppercase text-warning ">guillon</span> - <i class="fa fa-mobile" aria-hidden="true"></i> <small class="text-info">+33 6.83.13.88.45</small></a>
            <button type="button" class="navbar-toggler clearfix hidden-md-up float-xs-right" data-toggle="collapse" data-target="#myNav"></button>
        <?php 
            // Navigation
            include("assets/includes/navigation.php");
        ?>
        </nav>
        
        <div class="container-fluid">
            <div class="row">
                <header>
                   <div class="jumbotron">
                       <hgroup class="text-xs-right p-3">
                           <span class="studentImg wow bounceInDown"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                           <h1 class="wow tada">Alain Guillon</h1>
                           <hr>
                           <h2 class="wow swing">Développeur</h2>
                           <h3 class="wow swing text-muted">Front & Back-end " <span><small class="text-danger">Juniors</small></span> "</h3>
                       </hgroup>
                   </div>
                </header>
            </div>

            <!-- CONTENU INDEX XS -->
            <span class="hidden-sm-up">
                <?php include("assets/includes/index/XS/contentXS.php"); ?>
                <?php include("assets/includes/index/XS/remerciementXS.php"); ?>
                <?php include("assets/includes/index/XS/modalRemerciementXS.php"); ?>
                <?php include("assets/includes/index/XS/langageXS.php"); ?>
            </span>
            <!-- CONTENU INDEX SM -->
            <span class="hidden-md-up hidden-xs-down">
                <?php include("assets/includes/index/SM/contentSM.php"); ?>
                <?php include("assets/includes/index/SM/remerciementSM.php"); ?>
                <?php include("assets/includes/index/SM/modalRemerciementSM.php"); ?>
                <?php include("assets/includes/index/SM/langageSM.php"); ?>
            </span>
            <!-- CONTENU INDEX MD -->
            <span class="hidden-sm-down hidden-lg-up">
                <?php include("assets/includes/index/MD/contentMD.php"); ?>
                <?php include("assets/includes/index/MD/remerciementMD.php"); ?>
                <?php include("assets/includes/index/MD/modalRemerciementMD.php"); ?>
                <?php include("assets/includes/index/MD/langageMD.php"); ?>
            </span>
            <!-- CONTENU INDEX LG -->
            <span class="hidden-md-down hidden-xl-up">
                <?php include("assets/includes/index/LG/contentLG.php"); ?>
                <?php include("assets/includes/index/LG/remerciementLG.php"); ?>
                <?php include("assets/includes/index/LG/modalRemerciementLG.php"); ?>
                <?php include("assets/includes/index/LG/langageLG.php"); ?>
            </span>
            <!-- CONTENU INDEX XL -->
            <span class="hidden-lg-down">
                <?php include("assets/includes/index/XL/contentXL.php"); ?>
                <?php include("assets/includes/index/XL/remerciementXL.php"); ?>
                <?php include("assets/includes/index/XL/modalRemerciementXL.php"); ?>
                <?php include("assets/includes/index/XL/langageXL.php"); ?>
            </span>
                
                

                <div class="row">
                    <div class="col-xs-12 " id="copyright" >
                        <footer class="p-1"> 
                            <p class="text-white text-xs-center">Copyright &copy; 2017-2018 | <span class="text-info">+33 6.83.13.88.45</span> | Alain <span class="text-uppercase text-warning">guillon</span></p>
                        </footer>
                    </div>
                </div>
            </div>
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
