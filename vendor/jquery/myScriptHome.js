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
     * Section : Contenu du site sur téléphone
     * ------------------------------------------------------------------------
     */
    // Présentation
    $("#onPresentation").hover(function(){
        $("#onPresentation").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(0%)",
            "box-shadow" : "0 0 10px white"
        });
        $("#pContenuSite").html("Venez découvrir <strong>votre futur développeur</strong> ici !");
    }, function(){
        $("#onPresentation").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(100%)",            
            "box-shadow" : "none"
        });
        $("#pContenuSite").html("Vous venez de survoler la <strong>première</strong> image.");
    });

    // Origine
    $("#onOrigine").hover(function(){
        $("#onOrigine").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(0%)",
            "box-shadow" : "0 0 10px white"
        });
        $("#pContenuSite").html("Pourquoi concevoir ce site web ? <strong>Les raisons ici</strong>");
    }, function(){
        $("#onOrigine").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(100%)",            
            "box-shadow" : "none"
        });
        $("#pContenuSite").html("Vous venez de survoler la <strong>seconde</strong> image.");
    });
    // Réalisation
    $("#onRealisation").hover(function(){
        $("#onRealisation").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(0%)",
            "box-shadow" : "0 0 10px white"
        });
        $("#pContenuSite").html("Qu'ai-je fait juqu'à <strong>aujourd'hui ?</strong>");
    }, function(){
        $("#onRealisation").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(100%)",            
            "box-shadow" : "none"
        });
        $("#pContenuSite").html("Vous venez de survoler la <strong>troisième</strong> image.");
    });
    // CV
    $("#onCv").hover(function(){
        $("#onCv").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(0%)",
            "box-shadow" : "0 0 10px white"
        });
        $("#pContenuSite").html("<strong>Consulter</strong> ou <strong>télécharger</strong> mon <strong>CV</strong> ici.");
    }, function(){
        $("#onCv").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(100%)",            
            "box-shadow" : "none"
        });
        $("#pContenuSite").html("Vous venez de survoler la <strong>quatrième</strong> image.");
    });

}); // Fin du script jQuery