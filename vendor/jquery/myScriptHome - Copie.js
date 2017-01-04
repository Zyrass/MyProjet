/*
 * ------------------------------------------------------------------------------------------------------------
 * ------------------------------------------------------- Script Page d'accueil "Pourquoi"
 * ------------------------------------------------------------------------------------------------------------
 * Auteur   :   Alain GUILLON ( Ancien élève de la 3WA. "Promotion L9" )
 * Version  :   0.1 alpha
 * Date     :   04/01/2017
 * ------------------------------------------------------------------------------------------------------------
 */

$(document).ready(function(){
    

    /* ------------------------------------------------------------------------
     * nav : Contenu du site sur téléphone
     * ------------------------------------------------------------------------
     */
    $("#idea").click(function(){
        $(".whyHideCard1").fadeToggle(2000)
    });
    $("#who").click(function(){
        $(".whyHideCard2").fadeToggle(2000);
    });    
    $("#but").click(function(){
        $(".whyHideCard3").fadeToggle(2000);
    });
    $("#containt").click(function(){
        $(".whyHideCard4").fadeToggle(2000);
    });
    $("#haveMore").click(function(){
        $(".whyHideCard5").fadeToggle(2000);
    });
    $("#price").click(function(){
        $(".whyHideCard6").fadeToggle(2000);
    });

    $("#idea, #who, #but, #containt, #haveMore, #price").click(function(){
        $(".whyHideCard1, .whyHideCard2, .whyHideCard3, .whyHideCard4, .whyHideCard5, .whyHideCard6").css({
            "transition": "all .5s linear"
        });
    });
    

    /* ------------------------------------------------------------------------
     * table : Contenu du site sur téléphone
     * ------------------------------------------------------------------------
     */

    $("#btnTable").click(function(){
        $("#exTable").toggle(1000);
    });

}); // Fin du script jQuery