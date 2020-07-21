$(document).ready(function(){
    
    $('#category_id').change(function(){
        
        var category_id = $(this).val();
        $.ajax({
            type:'post',
            url: '/eCommerce/append-subcategory',
            data:{category_id:category_id},
            success:function(resp){
                $('#appandCatagoryL').html(resp);
            },error:function(){
                alert('error');
            }
        });
    });

});

