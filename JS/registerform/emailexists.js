$(document).ready(function(){
    $("#exampleModalCenter").modal("show");
    $("#lbl_checkbox").after("<small class='email_error_style'>Het opgegeven email bestaat al.</small>")
    $(".email_error_style").css({"color" : "red",
                                 "display" : "block"
                                });
});