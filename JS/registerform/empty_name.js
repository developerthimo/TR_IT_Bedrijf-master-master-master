$(document).ready(function(){
    $("#exampleModalCenter").modal("show");
    $("#lbl_checkbox").after("<small class='empty_name'>Uw voornaam is niet ingevuld!</small>");
    $(".empty_name").css({"color" : "red",
                          "display" : "block"
                                });
});