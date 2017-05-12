
var filtre = [];
$("#btn").click(function () {
    $auteur = $('#myInput').val();
    $('#myInput').val("");
    filtre.push($auteur)
    alert(filtre);
});
$(".close").click(function () {
    var test = $(this).parent().text();
    alert(test);
    filtre.slice([i], 1);

});
$(function () {
    function log(message) {
        $("<div>").text(message).prependTo("#log");
        $("#log").scrollTop(0);
    }

    $("#birds").autocomplete({
        source: "search.php",
        minLength: 2,
        select: function (event, ui) {
            log("Selected: " + ui.item.value + " aka " + ui.item.id);
        }
    });
});
$(document).ready(function () {
    $("#flip").click(function () {
        $("#panel").slideToggle("slow");
    });
})
        ;

