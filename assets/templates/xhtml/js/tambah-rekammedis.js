function getRekamMedis() {
    $("#loaderIcon").show();
    jQuery.ajax(
    {
        url: "getRekamMedis.php",
        data:'uid_rekammedis='+$("#uid_rekammedis").val(),
        type: "POST",
        success:function(data)
        {
            $("#get_data_rekammedis").html(data);
            $("#loaderIcon").hide();
        },
            error:function (){}
        }); 
    }

    // $('.getDetailRekamMedis').on('click', function() {
    //     var $val = $('#get_uidRekamMedis').html();
    //     $('#showuid').text($val);
    // });   