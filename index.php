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

            <!-- CONTENU INDEX -->
            <span class="hidden-sm-up">
                <?php include("assets/includes/index/contentXS.php"); ?>
            </span>
            <span class="hidden-md-up hidden-xs-down">
                <?php include("assets/includes/index/contentSM.php"); ?>
            </span>
            <span class="hidden-sm-down hidden-lg-up">
                <?php include("assets/includes/index/contentMD.php"); ?>
            </span>
            <span class="hidden-md-down hidden-xl-up">
                <?php include("assets/includes/index/contentLG.php"); ?>
            </span>
            <span class="hidden-lg-down">
                <?php include("assets/includes/index/contentXL.php"); ?>
            </span>
                
                
                
                
                
                <div class="row">
                    <section class="mb-0 p-2 pt-3 jumbotron" id="remerciements">
                        <h3 class="text-xs-center text-danger pb-1">Remerciements</h3>
                        <hr>
                        <p class="lead text-xs-center wow bounceInLeft">Sur une page sportif,<br /> les sponsors sont généralement mis en avant.</p>
                        <hr>
                        <p class="lead text-xs-center wow bounceInRight">Pour ma part, il m'ai impenssable de ne peux pas remercier les personnes qui m'ont permis d'atteindre ce niveau de compétence.</p>
                        <hr>
                        <div class="row">
                            <div class="offset-xs-2 col-xs-8">
                                <!-- Button btnSoutien modal -->
                                <button type="button" class="btn btn-info btn-lg btn-block wow bounceIn" data-toggle="modal" data-target="#btnSoutien">Je ne serais tout simplement rien sans eux !</button>
                            </div>
                            <span class="hidden-md-down hidden-md-up">
                                <div class="offset-md-1 col-xs-10">
                                    <!-- Button btnSoutien modal -->
                                    <button type="button" class="btn btn-info btn-lg btn-block wow bounceIn" data-toggle="modal" data-target="#btnSoutien">Je ne serais tout simplement rien sans eux !</button>
                                </div>
                            </span>    
                        </div>  
                    </section>
                </div>
                <!-- Modal Remerciement -->
                <div class="modal" id="btnSoutien" tabindex="-1" role="dialog" aria-labelledby="ModalRemerciement" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <!-- Header Modal -->
                            <div class="modal-header text-white bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title text-xs-center" id="ModalRemerciement"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> - Mes remerciements -</h4>
                            </div>
                            <!-- Contenu Modal -->
                            <div class="modal-body modalContent">
                                <div class="row">
                                    <div class="col-xs-12 mt-1">
                                        <div id="accordion" role="tablist" aria-multiselectable="true">
                                            <h5 class="text-xs-center">Le Fastt</h5>
                                            <hr>
                                            <!-- Fastt -->
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingT">
                                                    <h5 class="mb-0 text-xs-center">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#fastt" aria-expanded="false" aria-controls="fastt" class="collapsed">Mme DEBBAB</a>
                                                    </h5>
                                                </div>
                                                <div id="fastt" class="collapse" role="tabpanel" aria-labelledby="fastt" aria-expanded="false">
                                                    <div class="card-block">
                                                        <p>Sans elle, je n'aurais jamais pu intégrer la 3W Academy, elle s'est démenée pour moi alors que le timming était plus que serré. Merci !</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                  <h5 class="text-xs-center">Ma famillle</h5>
                                                  <hr>
                                                  <!-- Ma conjointe -->
                                                  <div class="card">
                                                      <div class="card-header" role="tab" id="headingT">
                                                          <h5 class="mb-0 text-xs-center">
                                                              <a data-toggle="collapse" data-parent="#accordion" href="#conjointe" aria-expanded="false" aria-controls="conjointe" class="collapsed">Marjorie Caron</a>
                                                          </h5>
                                                      </div>
                                                      <div id="conjointe" class="collapse" role="tabpanel" aria-labelledby="conjointe" aria-expanded="false">
                                                          <div class="card-block">
                                                              <p>Ma conjointe, qui m'a offert pas mal de formations et surtout, elle supporte mes longues journée/nuits à coder sans broncher. Merci ma chérie je t'adore!</p>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <!-- Éléanore -->
                                                  <div class="card">
                                                      <div class="card-header" role="tab" id="headingT">
                                                          <h5 class="mb-0 text-xs-center">
                                                              <a data-toggle="collapse" data-parent="#accordion" href="#eleanore" aria-expanded="false" aria-controls="eleanore" class="collapsed">Éléanore</a>
                                                          </h5>
                                                      </div>
                                                      <div id="eleanore" class="collapse" role="tabpanel" aria-labelledby="eleanore" aria-expanded="false">
                                                          <div class="card-block">
                                                              <p>Grâce à dieu, elle est toujours parmit nous aujourd'hui. Il s'agit de ma dernière fille qui se bat contre une maladie très grave depuis ça naissance. (Une cytopathie mitochondriale). Merci de te battre comme ça !</p>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <!-- Sheryle & Océane -->
                                                  <div class="card">
                                                      <div class="card-header" role="tab" id="headingT">
                                                          <h5 class="mb-0 text-xs-center">
                                                              <a data-toggle="collapse" data-parent="#accordion" href="#sheryleOceane" aria-expanded="false" aria-controls="sheryleOceane" class="collapsed">Sheryle & Océane</a>
                                                          </h5>
                                                      </div>
                                                      <div id="sheryleOceane" class="collapse" role="tabpanel" aria-labelledby="sheryleOceane" aria-expanded="false">
                                                          <div class="card-block">
                                                              <p>Mes deux premières filles, m'on permit de tenir le coup dans les moments vraiment difficile. Je les adores .</p>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <!-- Maman -->
                                                  <div class="card">
                                                      <div class="card-header" role="tab" id="headingT">
                                                          <h5 class="mb-0 text-xs-center">
                                                              <a data-toggle="collapse" data-parent="#accordion" href="#maman" aria-expanded="false" aria-controls="maman" class="collapsed">Maman</a>
                                                          </h5>
                                                      </div>
                                                      <div id="maman" class="collapse" role="tabpanel" aria-labelledby="maman" aria-expanded="false">
                                                          <div class="card-block">
                                                              <p>Malgré qu'elle ne comprends rien sur tout ces langages, maman épaule ma conjointe au quotidien sur vraiment beaucoup de point. Merci maman je t'aime.</p>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <!-- Beaux-Parents -->
                                                  <div class="card">
                                                      <div class="card-header" role="tab" id="headingT">
                                                          <h5 class="mb-0 text-xs-center">
                                                              <a data-toggle="collapse" data-parent="#accordion" href="#beauxParents" aria-expanded="false" aria-controls="beauxParents" class="collapsed">Chantal & Pascal</a>
                                                          </h5>
                                                      </div>
                                                      <div id="beauxParents" class="collapse" role="tabpanel" aria-labelledby="beauxParents" aria-expanded="false">
                                                          <div class="card-block">
                                                              <p>Merci, d'avoir fait autant de borne lorsqu'on avait besoin de soutient pour Eléanore. Et puis il n'y a pas que ça, merci pour tout ce que vous pouvez nous apporter.</p>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <!-- Ma marraine -->
                                                  <div class="card">
                                                      <div class="card-header" role="tab" id="headingT">
                                                          <h5 class="mb-0 text-xs-center">
                                                              <a data-toggle="collapse" data-parent="#accordion" href="#marraine" aria-expanded="false" aria-controls="marraine" class="collapsed">Véronique Guillon</a>
                                                          </h5>
                                                      </div>
                                                      <div id="marraine" class="collapse" role="tabpanel" aria-labelledby="marraine" aria-expanded="false">
                                                          <div class="card-block">
                                                              <p>Ma marraine avec qui j'ai de longue discution au téléphone. Je t'embrasse très chaleureusement.</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <hr>
                                              </div>
                                              <div class="col-xs-6">
                                                  <h5 class="text-xs-center">Mes amis</h5>
                                                  <hr>
                                                  <!-- Best Friends -->
                                                  <div class="card">
                                                      <div class="card-header" role="tab" id="headingT">
                                                          <h5 class="mb-0 text-xs-center">
                                                              <a data-toggle="collapse" data-parent="#accordion" href="#arnaud" aria-expanded="false" aria-controls="arnaud" class="collapsed">Arnaud Favier</a>
                                                          </h5>
                                                      </div>
                                                      <div id="arnaud" class="collapse" role="tabpanel" aria-labelledby="arnaud" aria-expanded="false">
                                                          <div class="card-block">
                                                              <p>Mon meilleur ami et patron de la société 3BioElec qui se situe dans la région Lyonnaise. Merci pour tout ce que tu as pu faire pour moi.</p>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <!-- My bro. -->
                                                  <div class="card">
                                                      <div class="card-header" role="tab" id="headingT">
                                                          <h5 class="mb-0 text-xs-center">
                                                              <a data-toggle="collapse" data-parent="#accordion" href="#tony" aria-expanded="false" aria-controls="tony" class="collapsed">Anthony Vigoureux</a>
                                                          </h5>
                                                      </div>
                                                      <div id="tony" class="collapse" role="tabpanel" aria-labelledby="tony" aria-expanded="false">
                                                          <div class="card-block">
                                                              <p>Une personne que je considère comme mon frère. Merci pour ta présence et ton aide au quotidien.</p>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <!-- Doudou -->
                                                  <div class="card">
                                                      <div class="card-header" role="tab" id="headingT">
                                                          <h5 class="mb-0 text-xs-center">
                                                              <a data-toggle="collapse" data-parent="#accordion" href="#doudou" aria-expanded="false" aria-controls="doudou" class="collapsed">Christophe Vigoureux</a>
                                                          </h5>
                                                      </div>
                                                      <div id="doudou" class="collapse" role="tabpanel" aria-labelledby="doudou" aria-expanded="false">
                                                          <div class="card-block">
                                                              <p>Doudou, un gars exceptionnel. Il dégage une aura tellement positive qu'il m'ai impensable de ne pas le citer ici. Merci mon poulet</p>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <!-- Jérôme -->
                                                  <div class="card">
                                                      <div class="card-header" role="tab" id="headingT">
                                                          <h5 class="mb-0 text-xs-center">
                                                              <a data-toggle="collapse" data-parent="#accordion" href="#jerome" aria-expanded="false" aria-controls="jerome" class="collapsed">Jérôme Vigoureux</a>
                                                          </h5>
                                                      </div>
                                                      <div id="jerome" class="collapse" role="tabpanel" aria-labelledby="jerome" aria-expanded="false">
                                                          <div class="card-block">
                                                              <p>Jérôme, un gars avec un coeur gros comme ça ! Merci mon gros pour tout ce que t'as pu faire pour moi.</p>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <!-- Josselin -->
                                                  <div class="card">
                                                      <div class="card-header" role="tab" id="headingT">
                                                          <h5 class="mb-0 text-xs-center">
                                                              <a data-toggle="collapse" data-parent="#accordion" href="#joss" aria-expanded="false" aria-controls="joss" class="collapsed">Josselin Caron</a>
                                                          </h5>
                                                      </div>
                                                      <div id="joss" class="collapse" role="tabpanel" aria-labelledby="joss" aria-expanded="false">
                                                          <div class="card-block">
                                                              <p>Un de mes futur témoin. Ce mec dans sa tête c'est franchement bagdad, rien qu'à le regarder, on sait exactement que ce gars passe son temps à faire des conneries. C'est mon piou piou et je l'adore :P</p>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <!-- Nicolas Clabau -->
                                                  <div class="card">
                                                      <div class="card-header" role="tab" id="headingT">
                                                          <h5 class="mb-0 text-xs-center">
                                                              <a data-toggle="collapse" data-parent="#accordion" href="#nico" aria-expanded="false" aria-controls="nico" class="collapsed">Nicolas Clabau</a>
                                                          </h5>
                                                      </div>
                                                      <div id="nico" class="collapse" role="tabpanel" aria-labelledby="nico" aria-expanded="false">
                                                          <div class="card-block">
                                                              <p>Mon deuxième témoin. Pour faire cours, il est de la même trempe que Josselin soit un barjot. Si j'aurais une prison à mon domicile, je l'enfermerai... et encore même enfermé il serait capable de faire le con !!</p>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <hr>
                                              </div>
                                              <div class="col-xs-12">
                                                  <h5 class="text-xs-center">Formations</h5>
                                                  <hr>
                                                  <div class="row">
                                                      <div class="col-xs-6">
                                                          <!-- 3wa -->
                                                          <div class="card">
                                                              <div class="card-header" role="tab" id="headingT">
                                                                  <h5 class="mb-0 text-xs-center">
                                                                      <a data-toggle="collapse" data-parent="#accordion" href="#troisWa" aria-expanded="false" aria-controls="troisWa" class="collapsed">La 3W Académy</a>
                                                                  </h5>
                                                              </div>
                                                              <div id="troisWa" class="collapse" role="tabpanel" aria-labelledby="troisWa" aria-expanded="false">
                                                                  <div class="card-block">
                                                                      <p>Fabuleux centre de formation sur les langages informatique. Je la recommande chaleureusement.</p>
                                                                  </div>
                                                              </div>
                                                          </div>

                                                          <!-- Mathieu Coingt -->
                                                          <div class="card">
                                                              <div class="card-header" role="tab" id="headingT">
                                                                  <h5 class="mb-0 text-xs-center">
                                                                      <a data-toggle="collapse" data-parent="#accordion" href="#mathieu" aria-expanded="false" aria-controls="mathieu" class="collapsed">Mathieu Coingt</a>
                                                                  </h5>
                                                              </div>
                                                              <div id="mathieu" class="collapse" role="tabpanel" aria-labelledby="mathieu" aria-expanded="false">
                                                                  <div class="card-block">
                                                                      <p>Formateur dans l'intégration à la 3WA. Débutant en tant que formateur, il a géré comme un chef. Humainement parlant il est génial et je le remercie pour son enseignement !</p>
                                                                  </div>
                                                              </div>
                                                          </div>

                                                          <!-- Julien Boyer -->
                                                          <div class="card">
                                                              <div class="card-header" role="tab" id="headingT">
                                                                  <h5 class="mb-0 text-xs-center">
                                                                      <a data-toggle="collapse" data-parent="#accordion" href="#julien" aria-expanded="false" aria-controls="julien" class="collapsed">Julien Boyer</a>
                                                                  </h5>
                                                              </div>
                                                              <div id="julien" class="collapse" role="tabpanel" aria-labelledby="julien" aria-expanded="false">
                                                                  <div class="card-block">
                                                                      <p>Formateur et diplômé sur synfony, il nous a enseigné la partie sur le développement à la 3WA. C'est une perle qui fait en sorte de nous faire découvrir un maximum de chose. A savoir aussi qu'il m'a transmit l'amour du code. Merci Julien !</p>
                                                                  </div>
                                                              </div>
                                                          </div>

                                                          <!-- La promotion l9 -->
                                                          <div class="card">
                                                              <div class="card-header" role="tab" id="headingT">
                                                                  <h5 class="mb-0 text-xs-center">
                                                                      <a data-toggle="collapse" data-parent="#accordion" href="#l9" aria-expanded="false" aria-controls="l9" class="collapsed">Promotion L9</a>
                                                                  </h5>
                                                              </div>
                                                              <div id="l9" class="collapse" role="tabpanel" aria-labelledby="l9" aria-expanded="false">
                                                                  <div class="card-block">
                                                                      <p>Ils m'ont soutenu malgré mes problèmes avec ma fille, ils m'aident encore aujourd'hui ! Merci à eux</p>
                                                                  </div>
                                                              </div>
                                                          </div>

                                                          <!-- Clarisse Halimari -->
                                                          <div class="card">
                                                              <div class="card-header" role="tab" id="headingT">
                                                                  <h5 class="mb-0 text-xs-center">
                                                                      <a data-toggle="collapse" data-parent="#accordion" href="#clarisse" aria-expanded="false" aria-controls="clarisse" class="collapsed">Clarisse Halimari</a>
                                                                  </h5>
                                                              </div>
                                                              <div id="clarisse" class="collapse" role="tabpanel" aria-labelledby="clarisse" aria-expanded="false">
                                                                  <div class="card-block">
                                                                      <p>Ancienne élève de la promotion L9 à la 3WA. Je la remercie de prendre de son temps pour corriger mes nombreuses fautes d'orthographe. Merci ma belle.</p>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      
                                                    <div class="col-xs-6">
                                                        <!-- John Codeur -->
                                                        <div class="card">
                                                            <div class="card-header" role="tab" id="headingT">
                                                                <h5 class="mb-0 text-xs-center">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#john" aria-expanded="false" aria-controls="john" class="collapsed">John Codeur</a>
                                                                </h5>
                                                            </div>
                                                            <div id="john" class="collapse" role="tabpanel" aria-labelledby="john" aria-expanded="false">
                                                                <div class="card-block">
                                                                    <p>Formateur sur Udemy.com. Avec John, je peux prendre plus le temps pour assimiler des fondamentaux qui n'était pas totalement compris à la 3WA. Je peux ainsi en apprendre plus en pratiquant à mon rythme via ces vidéos. Il va à l'essentiel et très franchement c'est que du bonheur.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                          
                                                        <!-- Sandy Ludosky -->
                                                        <div class="card">
                                                            <div class="card-header" role="tab" id="headingT">
                                                                <h5 class="mb-0 text-xs-center">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#sandy" aria-expanded="false" aria-controls="sandy" class="collapsed">Sandy Ludosky</a>
                                                                </h5>
                                                            </div>
                                                            <div id="sandy" class="collapse" role="tabpanel" aria-labelledby="sandy" aria-expanded="false">
                                                                <div class="card-block">
                                                                    <p>Formatrice sur Udemy.com. Avec Sandy, je découvre Angular2. (Tout comme Julien Moulin aussi sur Vidéo2Brain). J'apprends réellement beaucoup à ces côtés. Merci Sandy</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Steven Sil -->
                                                        <div class="card">
                                                            <div class="card-header" role="tab" id="headingT">
                                                                <h5 class="mb-0 text-xs-center">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#steven" aria-expanded="false" aria-controls="steven" class="collapsed">Steven Sil</a>
                                                                </h5>
                                                            </div>
                                                            <div id="steven" class="collapse" role="tabpanel" aria-labelledby="steven" aria-expanded="false">
                                                                <div class="card-block">
                                                                    <p>Formateur sur tuto.com. Également auprès de lui j'en apprends énormément. Si je peux me permettre, je vous recommande très franchement ces cours. &Ccedil;a vaut vachement le détour.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                          
                                                        <!-- Vidéo2Brain -->
                                                        <div class="card">
                                                            <div class="card-header" role="tab" id="headingT">
                                                                <h5 class="mb-0 text-xs-center">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#v2b" aria-expanded="false" aria-controls="v2b" class="collapsed">Vidéo2Brain</a>
                                                                </h5>
                                                            </div>
                                                            <div id="v2b" class="collapse" role="tabpanel" aria-labelledby="v2b" aria-expanded="false">
                                                                <div class="card-block">
                                                                    <p>Étant membre deluxe, je ne peux citer chaque formateur. C'est pourquoi je tiens à remerciers les nombreux formateurs qui confectionne des formations de qualité. Auprès d'eux, j'en apprends également beaucoup.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- OpenClassRooms -->
                                                        <div class="card">
                                                            <div class="card-header" role="tab" id="headingT">
                                                                <h5 class="mb-0 text-xs-center">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#openClassRooms" aria-expanded="false" aria-controls="openClassRooms" class="collapsed">OpenClassRooms</a>
                                                                </h5>
                                                            </div>
                                                            <div id="openClassRooms" class="collapse" role="tabpanel" aria-labelledby="openClassRooms" aria-expanded="false">
                                                                <div class="card-block">
                                                                    <p>Je remercie les nombreux formateurs de cette plateforme. Un seule bémole tout de même. l'augmentation fulgurante du prix pour suivre un parcours spécifique.</p>
                                                                </div>
                                                            </div>
                                                        </div>                                                          
                                                    </div>
                                                </div>
                                                <hr>
                                                </div>
                                                <div class="col-xs-12">
                                                    <h5 class="text-xs-center">Autres</h5>
                                                    <hr>
                                                    <!-- Seniors féminine 2 -->
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingT">
                                                            <h5 class="mb-0 text-xs-center">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#sgf2" aria-expanded="false" aria-controls="sgf2" class="collapsed">Seniors Féminine 2</a>
                                                            </h5>
                                                        </div>
                                                        <div id="sgf2" class="collapse" role="tabpanel" aria-labelledby="sgf2" aria-expanded="false">
                                                            <div class="card-block">
                                                                <p>Je tiens très franchement à remercier les seniors féminine 2 du club de handball de Meyzieu. En effet lors de la saison 2015-2016, j'étais leur entraîneur adjoint. Suite aux soucis de ma fille j'ai du les abandonners pour être après de la petite. Merci les filles d'avoir été si gentille avec moi.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Oubli -->
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingT">
                                                            <h5 class="mb-0 text-xs-center">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#oubli" aria-expanded="false" aria-controls="oubli" class="collapsed">J'en oublie...</a>
                                                            </h5>
                                                        </div>
                                                        <div id="oubli" class="collapse" role="tabpanel" aria-labelledby="oubli" aria-expanded="false">
                                                            <div class="card-block">
                                                                <p>Il est tout a fait probable que j'ai oublié de citer quelques personnes. Si c'est le cas, je suis désolé. Dans tous les cas sachez que je tiens tout de même à vous remercier.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div> <!-- Fin div#accordion -->
                                    </div> <!-- div class="col-xs-12 mt-1" -->
                                </div> <!-- div class="row" -->
                            </div> <!-- div class="modal-body modalContent" -->
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
                
                
                <div class="row rowConceptionLogo">
                    <h3 class="text-xs-center text-info mt-2 mb-2 p-2">Site conçus avec les langages suivants :</h3>
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
                            <h3 class="card-title text-xs-center">Mes ambitions</h3>
                            <hr>
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
