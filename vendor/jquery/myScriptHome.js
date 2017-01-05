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
            "filter" : "sepia(100%)",
            "box-shadow" : "0 0 10px white"
        });
        $("#pContenuSite").html("<strong>Votre futur développeur ici !</strong>");
    }, function(){
        $("#onPresentation").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(0%)",            
            "box-shadow" : "none"
        });
        $("#pContenuSite").html("Vous venez de survoler la <strong>1ère</strong> image.");
    });

    // Origine
    $("#onOrigine").hover(function(){
        $("#onOrigine").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(100%)",
            "box-shadow" : "0 0 10px white"
        });
        $("#pContenuSite").html("Pourquoi ? <strong>Les raisons ici</strong>");
    }, function(){
        $("#onOrigine").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(0%)",            
            "box-shadow" : "none"
        });
        $("#pContenuSite").html("Vous venez de survoler la <strong>2ème</strong> image.");
    });
    // Réalisation
    $("#onRealisation").hover(function(){
        $("#onRealisation").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(100%)",
            "box-shadow" : "0 0 10px white"
        });
        $("#pContenuSite").html("Qu'ai-je fait juqu'à <strong>aujourd'hui ?</strong>");
    }, function(){
        $("#onRealisation").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(0%)",            
            "box-shadow" : "none"
        });
        $("#pContenuSite").html("Vous venez de survoler la <strong>3ème</strong> image.");
    });
    // CV
    $("#onCv").hover(function(){
        $("#onCv").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(100%)",
            "box-shadow" : "0 0 10px white"
        });
        $("#pContenuSite").html("<strong>Voir</strong> ou <strong>télécharger</strong> mon <strong>CV</strong> ici.");
    }, function(){
        $("#onCv").css({
            "transition" : "all .5s linear .5s",
            "filter" : "sepia(0%)",            
            "box-shadow" : "none"
        });
        $("#pContenuSite").html("Vous venez de survoler la <strong>4ème</strong> image.");
    });

}); // Fin du script jQuery