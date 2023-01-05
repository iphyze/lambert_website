$.ajax({
        type: 'POST',
        url: 'process.php',
        //data: $(this).serialize(),
        data: form_data,
        dataType: 'json',
        contentType: false,
        cache: false,
        processData: false,
        success: function(response){
            
            if(response.status == '1'){
                
                $('#form_container').trigger('reset');
                $('#subject').val();
                $('#message_box').fadeIn(1000);
                $('#message_box').html(response.message);
                
                
            }
                
            if(response.status == '2'){

                $('#form_container').trigger('reset');
                $('#subject').val();
                $('#message_box').fadeIn(1000);
                $('#message_box').html(response.message);

            }
            
            if(response.status == '5'){

                $('#message_box').fadeIn(1000);
                $('#message_box').html(response.message);

            }
                
            
    }
});