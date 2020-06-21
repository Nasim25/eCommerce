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

    // appand category lavel

    $('#section_id').change(function(){
        var section_id = $(this).val();
        $.ajax({
            type:'post',
            url: '/eCommerce/admin/appand-category-lavel',
            data:{section_id:section_id},
            success:function(resp){
                $('#appandCatagoryLavel').html(resp);
            },error:function(){
                alert('error');
            }
        });
    });

    // product status
    $('.productUpdateStatus').click(function(){
        var status = $(this).text();
        var product_id = $(this).attr('product_id');
        $.ajax({
            type:'post',
            url:'/eCommerce/admin/product-update-status',
            data:{status:status,product_id:product_id},
            success:function(resp){
                if(resp['status']==0)
                    {
                        $('#product-'+product_id).html("<a class='productUpdateStatus' href='javascript:void(0)'>Inactive</a>")
                    }else if(resp['status']==1)
                    {
                        $('#product-'+product_id).html("<a class='productUpdateStatus' href='javascript:void(0)'>Active</a>")
                    }
            },error:function(){
                alert('error');
            }
        });
    });

    // delete attribute
    $('.confirmDelete').click(function(){
        var record = $(this).attr('record');
        var recordid = $(this).attr('recordid');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.value) {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              window.location.href="/eCommerce/admin/delete-"+record+"/"+recordid;
            }
          });
    });

});

