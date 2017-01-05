/*
 * ------------------------------------------------------------------------------------------------------------
 * ------------------------------------------------------- Script Page d'accueil "index"
 * ------------------------------------------------------------------------------------------------------------
 * Auteur   :   Alain GUILLON ( Ancien élève de la 3WA. "Promotion L9" )
 * Version  :   0.1 alpha
 * Date     :   02/01/2017
 * ------------------------------------------------------------------------------------------------------------
 */

$(document).ready(function(){
    

    /* ------------------------------------------------------------------------
     * --------------- Section : Contenu du site sur téléphone
     * ------------------------------------------------------------------------
     */
    
    // Présentation
    $("#onPresentation").hover(function(){
        $("#onPresentation").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(100%)",
            "box-shadow" : "0 0 10px white"
        });
        $("#pContenuSite").html("<small>Votre futur développeur ici !</small>");
    }, function(){
        $("#onPresentation").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(0%)",            
            "box-shadow" : "none"
        });
        $("#pContenuSite").html("<small class='text-info'>Je me présente dans cette partie.</small>");
    });

    // Origine
    $("#onOrigine").hover(function(){
        $("#onOrigine").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(100%)",
            "box-shadow" : "0 0 10px white"
        });
        $("#pContenuSite").html("<small>Pourquoi ? Les raisons ici.</small>");
    }, function(){
        $("#onOrigine").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(0%)",            
            "box-shadow" : "none"
        });
        $("#pContenuSite").html("<small class='text-info'>Ici, j'explique tout sur les origines.</small>");
    });
    // Réalisation
    $("#onRealisation").hover(function(){
        $("#onRealisation").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(100%)",
            "box-shadow" : "0 0 10px white"
        });
        $("#pContenuSite").html("<small>Qu'ai-je fait aujourd'hui ?</small>");
    }, function(){
        $("#onRealisation").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(0%)",            
            "box-shadow" : "none"
        });
        $("#pContenuSite").html("<small class='text-info'>Découvrez vite ce que j'ai pu faire.</small>");
    });
    // CV
    $("#onCv").hover(function(){
        $("#onCv").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(100%)",
            "box-shadow" : "0 0 10px white"
        });
        $("#pContenuSite").html("<small> curriculum vitae ici.</small>");
    }, function(){
        $("#onCv").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(0%)",            
            "box-shadow" : "none"
        });
        $("#pContenuSite").html("<small class='text-info'>Visualisez mon CV ici.</small>");
    });
    
    /* ------------------------------------------------------------------------
     * --------------- Remerciements sur téléphone (callBack)
     * ------------------------------------------------------------------------
     */
    
    // Affichage une à une des personnes que je remercie
    $(".modalContent").ready(function(){
        $(".modalContent dl").find(".thanks1").show(1000, function(){
            $(".modalContent dl").find(".thanks2").show(5000, function(){
                $(".modalContent dl").find(".thanks3").show(5000, function(){
                    $(".modalContent dl").find(".thanks4").show(5000, function(){
                        $(".modalContent dl").find(".thanks5").show(5000, function(){
                            $(".modalContent dl").find(".thanks6").show(5000, function(){
                                $(".modalContent dl").find(".thanks7").show(5000, function(){
                                    $(".modalContent dl").find(".thanks8").show(5000, function(){
                                        $(".modalContent dl").find(".thanks9").show(5000, function(){
                                            $(".modalContent dl").find(".thanks10").show(5000, function(){
                                                $(".modalContent dl").find(".thanks11").show(5000, function(){
                                                    $(".modalContent dl").find(".thanks12").show(5000, function(){
                                                        $(".modalContent dl").find(".thanks13").show(5000, function(){
                                                            $(".modalContent dl").find(".thanks14").show(5000, function(){
                                                                $(".modalContent dl").find(".thanks15").show(5000, function(){
                                                                    $(".modalContent dl").find(".thanks16").show(5000, function(){
                                                                        $(".modalContent dl").find(".thanks17").show(5000, function(){
                                                                            $(".modalContent dl").find(".thanks18").show(5000, function(){
                                                                                $(".modalContent dl").find(".thanks19").show(5000, function(){

                                                                                });
                                                                            });
                                                                        });
                                                                    });
                                                                });
                                                            });
                                                        });
                                                    });
                                                });
                                            });
                                        });
                                    });
                                });
                            });
                        });
                    });
                });
            });  
        });
    }); // Fin callBack (remerciements)
    
    
    /* ------------------------------------------------------------------------
     * --------------- Logo utilisé pour la conception de ce site.
     * ------------------------------------------------------------------------
     */ 
    // Logo html 5
    $(".bgImg1").hover(function(){
        $("#askLogo").show("slow").text("Indéniablement, personne ne peut se passer de ce langage. Je l'utilise grandement sur ce site. Que ce soit sur mes pages en php ; mon code dans jquery ou bien via le framework bootstrap, il m'ait indispensable !");
        $(".bgImg1").css({
            "transition" : "all .5s linear",
            "filter" : "sepia(0%)", 
            "opacity" : "1"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg1").css({
            "transition" : "all 1s linear",
            "filter" : "sepia(80%)", 
            "opacity" : ".1"
        });
    });
    
    // Logo css 3
    $(".bgImg2").hover(function(){
        $("#askLogo").show("slow").text("ah le css, ce langage est omniprésent ici. Il faut dire que l'html ne peut se passer de ce langage. ils font la paire et franchement, j'adore tout ce que l'on peut faire avec. Bien sûre, j'ai des tas de choses à apprendre encore.");
        $(".bgImg2").css({
            "transition" : "all .5s linear",
            "filter" : "sepia(0%)", 
            "opacity" : "1"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg2").css({
            "transition" : "all 1s linear",
            "filter" : "sepia(80%)", 
            "opacity" : ".1"
        });
    });

    // Logo javascript
    $(".bgImg3").hover(function(){
        $("#askLogo").show("slow").text("Le JavaScript.. C'est un langage qui m'effrayait depuis un long moment. En effet j'appréhendais ce langage à la 3WA. Une fois que j'ai pu voir ce que nous pouvions faire avec, j'ai craqué et je me suis réellement lancé dans son apprentissage.");
        $(".bgImg3").css({
            "transition" : "all .5s linear",
            "filter" : "sepia(0%)", 
            "opacity" : "1"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg3").css({
            "transition" : "all 1s linear",
            "filter" : "sepia(80%)", 
            "opacity" : ".1"
        });
    });

    // Logo jquery
    $(".bgImg4").hover(function(){
        $("#askLogo").show("slow").text("J'ai découvert ce framework à la 3WA. J'avais pas mal de mal je ne vous le cache pas. Aujourd'hui je peux dire que j'ai plus du tout la même crainte. Je peux faire des choses fabuleuse avec. D'ailleurs, cet effet en est la preuve.");
        $(".bgImg4").css({
            "transition" : "all .5s linear",
            "filter" : "sepia(0%)", 
            "opacity" : "1"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg4").css({
            "transition" : "all 1s linear",
            "filter" : "sepia(80%)", 
            "opacity" : ".1"
        });
    });

    // Logo bootstrap
    $(".bgImg5").hover(function(){
        $("#askLogo").show("slow").text("Bootstrap, fabuleux framework qui m'a séduit il y a un moment maintenant. J'ai découvert ce dernier sur video2brain via Julien Moulin. Puis à la 3WA avec Mathieu. Aujourd'hui je conçois ce site via une version alpha. Soit Bootstrap 4.0.0 alpha 5");
        $(".bgImg5").css({
            "transition" : "all .5s linear",
            "filter" : "sepia(0%)", 
            "opacity" : "1"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg5").css({
            "transition" : "all 1s linear",
            "filter" : "sepia(80%)", 
            "opacity" : ".1"
        });
    });

    // Logo php & mysql
    $(".bgImg6").hover(function(){
        $("#askLogo").show("slow").text("PHP & MySQL, pour être franc j'ai découvert ces langages à la 3WA. Je me suis mis énormémént de pression à un point ou j'avais du mal à comprendre les fondamentaux. Aujourd'hui grâce à Steven Sill & John Codeur, j'ai de quoi combler ces lacunes .");
        $(".bgImg6").css({
            "transition" : "all .5s linear",
            "filter" : "sepia(0%)", 
            "opacity" : "1"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg6").css({
            "transition" : "all 1s linear",
            "filter" : "sepia(80%)", 
            "opacity" : ".1"
        });
    });

    // Logo emmet
    $(".bgImg7").hover(function(){
        $("#askLogo").show("slow").text("Emmet permet sensiblement de gagner du temps lors du développement. Je l'utilise uniquement en html. Je suis encore débutant mais j'assimile assez bien le concept. Exemple de ce qui est génial, c'est la génération du lorem ipsum. ");
        $(".bgImg7").css({
            "transition" : "all .5s linear",
            "filter" : "sepia(0%)", 
            "opacity" : "1"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg7").css({
            "transition" : "all 1s linear",
            "filter" : "sepia(80%)", 
            "opacity" : ".1"
        });
    });

    // Logo sass
    $(".bgImg8").hover(function(){
        $("#askLogo").show("slow").text("Sass est un préprosesseur, il me permet de gagner beaucoup de temps. Je peux ainsi générer un fichier css sans me soucier des préfixes. Lorsque j'en ai besoin, je créer des mixins qui définirons ces préfixes. Il me restera juste à l'importer.");
        $(".bgImg8").css({
            "transition" : "all .5s linear",
            "filter" : "sepia(0%)", 
            "opacity" : "1"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg8").css({
            "transition" : "all 1s linear",
            "filter" : "sepia(80%)", 
            "opacity" : ".1"
        });
    });

    

    
    
}); // Fin du script jQuery