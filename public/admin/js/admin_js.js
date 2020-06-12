$(document).ready(function(){
    $('#current_password').keyup(function(){
        var current_password = $('#current_password').val();
        if(current_password != '')
        {
            $.ajax({
                type:'post',
                url: '/eCommerce/admin/check-password',
                data:{current_password:current_password},
                success:function(res){
                    if(res=='false')
                    {
                        $('#checkpassword_message').html('<font color=red>Current Password is incorrect</font>');
                    }else{
                        $('#checkpassword_message').html('<font color=green>Current Password is Correct</fornt>');
                    }
                },error:function(){
                    alert('Error');
                }
            });
        }else{
            $('#checkpassword_message').html('');
        }
    });





});

