$(document).ready(function () {
    $(".openmodaleditrekammedis").click(function(e) {
       var m = $(this).attr("id");
            $.ajax({
                    url: "modalEditRekamMedis.php",
                    type: "GET",
                    data : {id: m,},
                    success: function (ajaxData){
                      $("#modalEditRekamMedis").html(ajaxData);
                      $("#modalEditRekamMedis").modal('show',{backdrop: 'true'});
                  }
                });
         });
       });