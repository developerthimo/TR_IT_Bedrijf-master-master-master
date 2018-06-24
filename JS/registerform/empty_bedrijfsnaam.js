$(document).ready(function(){
    $("#exampleModalCenter").modal("show");
    $("#lbl_checkbox").after("<small class='empty_bedrijfsnaam'>Uw bedrijfsnaam is niet ingevuld! Als u niet actief bent binnen een bedrijf vul dan er dan een - in.</small>");
    $(".empty_bedrijfsnaam").css({"color" : "red",
                                      "display" : "block"
                                });
});