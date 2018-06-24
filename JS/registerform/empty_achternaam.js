$(document).ready(function(){
    $("#exampleModalCenter").modal("show");
    $("#lbl_checkbox").after("<small class='empty_achternaam'>Uw achternaam is niet ingevuld!</small>");
    $(".empty_achternaam").css({"color" : "red",
                                      "display" : "block"
                                });
});