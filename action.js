$(document).ready(function() {
$('#form_container').on('submit', function(event) {
    event.preventDefault();
    
    var form_data = new FormData(this);

    $.ajax({
        
        type: 'POST',
        url: 'action.php',
        data: form_data,
        dataType: 'json',
        contentType: false,
        //cache: false,
        processData: false,
        success: function(response){
            
            //response = $.parseJSON(response);
            
                
            
                if(response.status == "success"){
                    
                    $('#message_box').fadeIn();
                    $('#message_box').html(response.message);
                    $('#form_container').trigger('reset');
                    $('#form_container').slideUp();
                    
                }else{
                    
                    
                    if(response.status == "failed"){
                        
                        $('#message_box').fadeIn();
                        $('#message_box').html(response.message);
                        $('#form_container').trigger('reset');
                        $('#form_container').slideUp();
                        
                    }
                    
                
                    if(response.status != "success"){
            
                    $('#message_box').fadeIn();
                    $('#message_box').html(response.message);
                    
                    }else{
                    
                    $('#message_box').fadeOut();
                    $('#message_box').html();
                    
                    }
                
                
                }
                    
                    
            
            
                /*
                if(response.status == 'subjectErr' || response.status == 'fileErr' || response.status == 'positionErr'){
                    $('#message_box').fadeIn();
                    $('#message_box').html(response.message);
                }else{
                    $('#message_box').fadeOut();
                    $('#message_box').html();
                }
                */
                
                /*
            
                if(response.status == 'fileErr'){
                    $('#message_box').fadeIn();
                    $('#message_box').html(response.message);
                }else{
                    $('#message_box').fadeOut();
                    $('#message_box').html();
                }
            
                if(response.status == 'positionErr'){
                    $('#message_box').fadeIn();
                    $('#message_box').html(response.message);
                }else{
                    $('#message_box').fadeOut();
                    $('#message_box').html();
                }
            
                */
            
            
            
        }
    })
})
})
