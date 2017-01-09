/*
 * ------------------------------------------------------------------------------------------------------------
 * ------------------------------------------------------- Script Page d'accueil "index"
 * ------------------------------------------------------------------------------------------------------------
 * Auteur   :   Alain GUILLON ( Ancien élève de la 3WA. "Promotion L9" )
 * Version  :   0.0.2 alpha
 * MAJ      :   [ Modification du code - couleur + retrait des callBack ]
 * Date     :   09/01/2017
 * ------------------------------------------------------------------------------------------------------------
 */

$(document).ready(function(){
    
    /* ------------------------------------------------------------------------
     * --------------- Navigation : tooltips + animations des icones sur tél.
     * ------------------------------------------------------------------------
     */
    // Ajout des tooltips (bootstrap 4)
    $('[data-toggle="myTooltip"]').tooltip();
    $('[data-toggle="tooltipContaintXS"]').tooltip();
    
    // Fonctionnement de la tabulation
    $('#myTab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
    
    /* ------------------------------------------------------------------------
     * --------------- Logo utilisé pour la conception de ce site.
     * ------------------------------------------------------------------------
     */ 
    // Logo html 5
    $(".bgImg1").hover(function(){
        $("#askLogo").show("slow").text("Indéniablement, personne ne peut se passer de ce langage. Je l'utilise grandement sur ce site. Que ce soit sur mes pages en php ; mon code dans jquery ou bien via le framework bootstrap, il m'ait indispensable !");
        $(".bgImg1").css({
            "transition"    :   "all .5s linear",
            "filter"        :   "sepia(0%)", 
            "opacity"       :   "1",
            "box-shadow"    :   "0 0 20px antiquewhite"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg1").css({
            "transition"    :   "all 1s linear",
            "filter"        :   "sepia(80%)", 
            "opacity"       :   ".1",
            "box-shadow"    :   "none"
        });
    });

    // Logo css 3
    $(".bgImg2").hover(function(){
        $("#askLogo").show("slow").text("ah le css, ce langage est omniprésent ici. Il faut dire que l'html ne peut se passer de ce langage. ils font la paire et franchement, j'adore tout ce que l'on peut faire avec. Bien sûre, j'ai des tas de choses à apprendre encore.");
        $(".bgImg2").css({
            "transition"    :   "all .5s linear",
            "filter"        :   "sepia(0%)", 
            "opacity"       :   "1",
            "box-shadow"    :   "0 0 20px antiquewhite"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg2").css({
            "transition"    :   "all 1s linear",
            "filter"        :   "sepia(80%)", 
            "opacity"       :   ".1",
            "box-shadow"    :   "none"
        });
    });

    // Logo javascript
    $(".bgImg3").hover(function(){
        $("#askLogo").show("slow").text("Le JavaScript.. C'est un langage qui m'effrayait depuis un long moment. En effet j'appréhendais ce langage à la 3WA. Une fois que j'ai pu voir ce que nous pouvions faire avec, j'ai craqué et je me suis réellement lancé dans son apprentissage.");
        $(".bgImg3").css({
            "transition"    :   "all .5s linear",
            "filter"        :   "sepia(0%)", 
            "opacity"       :   "1",
            "box-shadow"    :   "0 0 20px antiquewhite"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg3").css({
            "transition"    :   "all 1s linear",
            "filter"        :   "sepia(80%)", 
            "opacity"       :   ".1",
            "box-shadow"    :   "none"
        });
    });

    // Logo jquery
    $(".bgImg4").hover(function(){
        $("#askLogo").show("slow").text("J'ai découvert ce framework à la 3WA. J'avais pas mal de mal je ne vous le cache pas. Aujourd'hui je peux dire que j'ai plus du tout la même crainte. Je peux faire des choses fabuleuse avec. D'ailleurs, cet effet en est la preuve.");
        $(".bgImg4").css({
            "transition"    :   "all .5s linear",
            "filter"        :   "sepia(0%)", 
            "opacity"       :   "1",
            "box-shadow"    :   "0 0 20px antiquewhite"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg4").css({
            "transition"    :   "all 1s linear",
            "filter"        :   "sepia(80%)", 
            "opacity"       :   ".1",
            "box-shadow"    :   "none"
        });
    });

    // Logo bootstrap
    $(".bgImg5").hover(function(){
        $("#askLogo").show("slow").text("Bootstrap, fabuleux framework qui m'a séduit il y a un moment maintenant. J'ai découvert ce dernier sur video2brain via Julien Moulin. Puis à la 3WA avec Mathieu. Aujourd'hui je conçois ce site via une version alpha. Soit Bootstrap 4.0.0 alpha 5");
        $(".bgImg5").css({
            "transition"    :   "all .5s linear",
            "filter"        :   "sepia(0%)", 
            "opacity"       :   "1",
            "box-shadow"    :   "0 0 20px antiquewhite"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg5").css({
            "transition"    :   "all 1s linear",
            "filter"        :   "sepia(80%)", 
            "opacity"       :   ".1",
            "box-shadow"    :   "none"
        });
    });

    // Logo php & mysql
    $(".bgImg6").hover(function(){
        $("#askLogo").show("slow").text("PHP & MySQL, pour être franc j'ai découvert ces langages à la 3WA. Je me suis mis énormémént de pression à un point ou j'avais du mal à comprendre les fondamentaux. Aujourd'hui grâce à Steven Sill & John Codeur, j'ai de quoi combler ces lacunes .");
        $(".bgImg6").css({
            "transition"    :   "all .5s linear",
            "filter"        :   "sepia(0%)", 
            "opacity"       :   "1",
            "box-shadow"    :   "0 0 20px antiquewhite"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg6").css({
            "transition"    :   "all 1s linear",
            "filter"        :   "sepia(80%)", 
            "opacity"       :   ".1",
            "box-shadow"    :   "none"
        });
    });

    // Logo emmet
    $(".bgImg7").hover(function(){
        $("#askLogo").show("slow").text("Emmet permet sensiblement de gagner du temps lors du développement. Je l'utilise uniquement en html. Je suis encore débutant mais j'assimile assez bien le concept. Exemple de ce qui est génial, c'est la génération du lorem ipsum. ");
        $(".bgImg7").css({
            "transition"    :   "all .5s linear",
            "filter"        :   "sepia(0%)", 
            "opacity"       :   "1",
            "box-shadow"    :   "0 0 20px antiquewhite"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg7").css({
            "transition"    :   "all 1s linear",
            "filter"        :   "sepia(80%)", 
            "opacity"       :   ".1",
            "box-shadow"    :   "none"
        });
    });

    // Logo sass
    $(".bgImg8").hover(function(){
        $("#askLogo").show("slow").text("Sass est un préprosesseur, il me permet de gagner beaucoup de temps. Je peux ainsi générer un fichier css sans me soucier des préfixes. Lorsque j'en ai besoin, je créer des mixins qui définirons ces préfixes. Il me restera juste à l'importer.");
        $(".bgImg8").css({
            "transition"    :   "all .5s linear",
            "filter"        :   "sepia(0%)", 
            "opacity"       :   "1",
            "box-shadow"    :   "0 0 20px antiquewhite"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg8").css({
            "transition"    :   "all 1s linear",
            "filter"        :   "sepia(80%)", 
            "opacity"       :   ".1",
            "box-shadow"    :   "none"
        });
    });
    
    /* ------------------------------------------------------------------------
     * --------------- Logo utilisé pour la navigation de ce site.
     * ------------------------------------------------------------------------
     */ 
    // Logo html 5
    $(".bgImg9").hover(function(){
        $("#askLogo").show("slow").text("Indéniablement, un intégrateur ou développeur qui confectionne un site web, une application quel qu'il soit, ne peut se passer de ce langage. Pour ma part, je l'utilise grandement sur ce site. Que ce soit sur mes pages en php ; mon code dans jquery ou bien via le framework bootstrap, ce langage m'ait complètement indispensable !");
        $(".bgImg9").css({
            "transition"    :   "all .5s linear",
            "filter"        :   "sepia(0%)", 
            "opacity"       :   "1",
            "box-shadow"    :   "0 0 20px antiquewhite"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg9").css({
            "transition"    :   "all 1s linear",
            "filter"        :   "sepia(80%)", 
            "opacity"       :   ".1",
            "box-shadow"    :   "none"
        });
    });

    // Logo css 3
    $(".bgImg10").hover(function(){
        $("#askLogo").show("slow").text("ah le css, ce langage est omniprésent ici. Il faut dire que l'html ne peut se passer de ce langage. ils font la paire et franchement, j'adore tout ce que l'on peut faire avec. Bien sûre, j'ai des tas de choses à apprendre encore.");
        $(".bgImg10").css({
            "transition"    :   "all .5s linear",
            "filter"        :   "sepia(0%)", 
            "opacity"       :   "1",
            "box-shadow"    :   "0 0 20px antiquewhite"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg10").css({
            "transition"    :   "all 1s linear",
            "filter"        :   "sepia(80%)", 
            "opacity"       :   ".1",
            "box-shadow"    :   "none"
        });
    });

    // Logo javascript
    $(".bgImg11").hover(function(){
        $("#askLogo").show("slow").text("Le JavaScript.. C'est un langage m'effrayait depuis un long moment. J'appréhendais ce langage à la 3WA. Une fois que j'ai pu voir ce que nous pouvions faire avec, j'ai craqué et je me suis réellement lancé dans son apprentissage.");
        $(".bgImg11").css({
            "transition"    :   "all .5s linear",
            "filter"        :   "sepia(0%)", 
            "opacity"       :   "1",
            "box-shadow"    :   "0 0 20px antiquewhite"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg11").css({
            "transition"    :   "all 1s linear",
            "filter"        :   "sepia(80%)", 
            "opacity"       :   ".1",
            "box-shadow"    :   "none"
        });
    });

    // Logo jquery
    $(".bgImg12").hover(function(){
        $("#askLogo").show("slow").text("J'ai découvert ce framework à la 3WA. J'avais beaucoup de mal, je ne vous le cache pas. Aujourd'hui je peux dire que j'ai plus du tout la même crainte. Je peux faire des choses fabuleuse avec. Mais j'ai encore beaucoup à apprendre.");
        $(".bgImg12").css({
            "transition"    :   "all .5s linear",
            "filter"        :   "sepia(0%)", 
            "opacity"       :   "1",
            "box-shadow"    :   "0 0 20px antiquewhite"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg12").css({
            "transition"    :   "all 1s linear",
            "filter"        :   "sepia(80%)", 
            "opacity"       :   ".1",
            "box-shadow"    :   "none"
        });
    });
    
    // Logo emmet
    $(".bgImg13").hover(function(){
        $("#askLogo").show("slow").text("Emmet permet sensiblement de gagner du temps lors du développement. Je l'utilise uniquement en html. Je suis encore débutant mais j'assimile assez bien le concept. Exemple de ce qui est génial, c'est la génération du lorem ipsum. ");
        $(".bgImg13").css({
            "transition"    :   "all .5s linear",
            "filter"        :   "sepia(0%)", 
            "opacity"       :   "1",
            "box-shadow"    :   "0 0 20px antiquewhite"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg13").css({
            "transition"    :   "all 1s linear",
            "filter"        :   "sepia(80%)", 
            "opacity"       :   ".1",
            "box-shadow"    :   "none"
        });
    });

    // Logo sass
    $(".bgImg14").hover(function(){
        $("#askLogo").show("slow").text("Sass est un préprosesseur, il me permet de gagner beaucoup de temps. Je peux ainsi générer un fichier css sans me soucier des préfixes. Lorsque j'en ai besoin, je créer des mixins qui définirons ces préfixes. Il me restera juste à l'importer.");
        $(".bgImg14").css({
            "transition"    :   "all .5s linear",
            "filter"        :   "sepia(0%)", 
            "opacity"       :   "1",
            "box-shadow"    :   "0 0 20px antiquewhite"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg14").css({
            "transition"    :   "all 1s linear",
            "filter"        :   "sepia(80%)", 
            "opacity"       :   ".1",
            "box-shadow"    :   "none"
        });
    });

    // Logo php
    $(".bgImg15").hover(function(){
        $("#askLogo").show("slow").text("PHP & MySQL, pour être franc j'ai découvert ces langages à la 3WA. Je me suis mis énormémént de pression à un point ou j'avais du mal à comprendre les fondamentaux. Aujourd'hui grâce à Steven Sill & John Codeur, j'ai de quoi combler ces lacunes .");
        $(".bgImg15").css({
            "transition"    :   "all .5s linear",
            "filter"        :   "sepia(0%)", 
            "opacity"       :   "1",
            "box-shadow"    :   "0 0 20px antiquewhite"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg15").css({
            "transition"    :   "all 1s linear",
            "filter"        :   "sepia(80%)", 
            "opacity"       :   ".1",
            "box-shadow"    :   "none"
        });
    });
    
    // Logo MySQL
    $(".bgImg16").hover(function(){
        $("#askLogo").show("slow").text("PHP & MySQL, pour être franc j'ai découvert ces langages à la 3WA. Je me suis mis énormémént de pression à un point ou j'avais du mal à comprendre les fondamentaux. Aujourd'hui grâce à Steven Sill & John Codeur, j'ai de quoi combler ces lacunes .");
        $(".bgImg16").css({
            "transition"    :   "all .5s linear",
            "filter"        :   "sepia(0%)", 
            "opacity"       :   "1",
            "box-shadow"    :   "0 0 20px antiquewhite"
        });
    }, function(){
        $("#askLogo").show("slow").html("<span class='text-danger'>Si vous survolez n'importe quel logo, je vous expliquerai les raisons qui m'ont poussé à utiliser ces langages. Quand se sera disponible, j'afficherai le taux d'uilisation de ce dernier grâce à la plateforme GitHub.</span>");
        $(".bgImg16").css({
            "transition"    :   "all 1s linear",
            "filter"        :   "sepia(80%)", 
            "opacity"       :   ".1",
            "box-shadow"    :   "none"
        });
    });
    
    /* ------------------------------------------------------------------------
     * --------------- Section : Contenu du site sur téléphone
     * ------------------------------------------------------------------------
     */
    
    // Présentation
    $("#onPresentation").hover(function(){
        $("#onPresentation").css({
            "transition" : "all .1s linear",
            "filter" : "sepia(0%)",
            "box-shadow" : "0 0 10px white"
        });
        $("#pContenuSite").html("Je me présente ici. Peut-être que je serais votre futur développeur, qui peut le savoir. Enfin dans tous les cas si vous n'avez toujours pas cliquer sur cette élément, je vous invite à le faire.");
    }, function(){
        $("#onPresentation").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(100%)",            
            "box-shadow" : "none"
        });
        $("#pContenuSite").html("<span class='text-danger'>Vous venez de survoler la partie présentation.</span>");
    });

    // Origine
    $("#onOrigine").hover(function(){
        $("#onOrigine").css({
            "transition" : "all .1s linear",
            "filter" : "sepia(0%)",
            "box-shadow" : "0 0 10px white"
        });
        $("#pContenuSite").html("Mais, pourquoi ai-je conçu ce site ? Venez vous informer des raisons qui m'ont poussé à donner vie à ce site.");
    }, function(){
        $("#onOrigine").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(100%)",            
            "box-shadow" : "none"
        });
        $("#pContenuSite").html("<span class='text-danger'>Vous venez de survoler la partie sur les origines du site.</span>");
    });
    // Réalisation
    $("#onRealisation").hover(function(){
        $("#onRealisation").css({
            "transition" : "all .1s linear",
            "filter" : "sepia(0%)",
            "box-shadow" : "0 0 10px white"
        });
        $("#pContenuSite").html("C'est bien beau tout ça, mais qu'ai-je fais jusqu'à aujourd'hui ? Découvrez vite mon parcours en quelques cliques.");
    }, function(){
        $("#onRealisation").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(100%)",            
            "box-shadow" : "none"
        });
        $("#pContenuSite").html("<span class='text-danger'>Vous venez de survoler mes réalisations. Personnel et reprise afin de me former en autodidacte</span>");
    });
    // CV
    $("#onCv").hover(function(){
        $("#onCv").css({
            "transition" : "all .1s linear",
            "filter" : "sepia(0%)",
            "box-shadow" : "0 0 10px white"
        });
        $("#pContenuSite").html("Je vous propose ici mon curriculum vitae. Ainsi si vous êtes intéréssé, vous pourrez le garder et me contacter si vous avez besoin de mes services.");
    }, function(){
        $("#onCv").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(100%)",            
            "box-shadow" : "none"
        });
        $("#pContenuSite").html("<span class='text-danger'>Vous venez de survoler mon curriculum vitae.</span>");
    });
}); // Fin du script jQuery