$('.dtl-rekammedis').on('click', function() {
    var $uid_rekammedis = $('#get_uidPas').html();
    $.ajax({  
        url:"detailRekamMedis.php",  
        method:"POST",  
        data:{uid_rekammedis:$uid_rekammedis},  
        success:function(data)  
        {  
             $('#showDetailRekamMedis').fadeIn();  
             $('#showDetailRekamMedis').html(data);  
        }  
   });  
});     