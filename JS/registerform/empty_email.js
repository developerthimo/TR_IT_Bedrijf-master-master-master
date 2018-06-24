$(document).ready(function(){
    $("#exampleModalCenter").modal("show");
    $("#lbl_checkbox").after("<small class='empty_email'>Uw E-mailadres is niet ingevuld!</small>");
    $(".empty_email").css({"color" : "red",
                          "display" : "block"
                                });
});