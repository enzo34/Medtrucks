
var filtre = [];
$("#btn").click(function () {
    $auteur = $('#myInput').val();
//    au clique du boutton cible la variable filtre
    $('#myInput').val("");
//    une fois le boutton cliquer remet la variable filtre vide
    if ($auteur !== "") {
//        la variable auteur = ""
        filtre.push($auteur);
        updateFiltre();
//        envoie le resultat a la variable filtre 
    }
});

function updateFiltre() { 
    $(".close").click(function () {
//        quand on clique sur le boutton close
        var parent = $(this).parent();
//        on cible le parent du boutton
        var list = $("#myUL").children("li");
        var idx = $(list).index(parent);
//        ont passe dans la liste chaque index un par un
        
        if($(parent).parent().attr("id") === "myUL"){
            filtre.splice(idx,1);
            $(parent).remove();
//           le tableau compare chaque index, et quand il y'en a deux similaire,
//           supprime l'index en question
        }
        
        

    });
}

$(function () {
    function log(message) {
        $("<div>").text(message).prependTo("#log");
        $("#log").scrollTop(0);
    }

//    $("#birds").autocomplete({
//        source: "search.php",
//        minLength: 2,
//        select: function (event, ui) {
//            log("Selected: " + ui.item.value + " aka " + ui.item.id);
//        }
//    });
});
$(document).ready(function () {
    $("#flip").click(function () {
        $("#panel").slideToggle("slow");
    });
})
        ;

