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

    $('.sectionUpdateStatus').click(function(){
         var status = $(this).text();
         var section_id = $(this).attr("section_id");
         $.ajax({
             type:'post',
             url:'/eCommerce/admin/section-update-status',
             data:{status:status,section_id:section_id},
             success:function(rep){
                    if(rep['status']==0)
                    {
                        $('#section-'+section_id).html("<a class='sectionUpdateStatus' href='javascript:void(0)'>Inactive</a>")
                    }else if(rep['status'] == 1)
                    {
                        $('#section-'+section_id).html("<a class='sectionUpdateStatus' href='javascript:void(0)'>Active</a>")
                    }
             },error:function(){
                alert('error');
            }
         })
    });
    $('.categoryUpdateStatus').click(function(){
         var status = $(this).text();
         var category_id = $(this).attr("category_id");
         $.ajax({
             type:'post',
             url:'/eCommerce/admin/category-update-status',
             data:{status:status,category_id:category_id},
             success:function(rep){
                    if(rep['status']==0)
                    {
                        $('#category-'+category_id).html("<a class='categoryUpdateStatus' href='javascript:void(0)'>Inactive</a>")
                    }else if(rep['status']==1)
                    {
                        $('#category-'+category_id).html("<a class='categoryUpdateStatus' href='javascript:void(0)'>Active</a>")
                    }
             },error:function(){
                alert('error');
            }
         })
    });


});

