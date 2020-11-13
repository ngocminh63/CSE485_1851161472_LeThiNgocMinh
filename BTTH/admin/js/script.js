$(document).ready(function(){
   $("#user").change(function(){
    //    Lấy giá trị:
    var users_id = $(this).val();
    // Xử lý truyền -- nhận bằng Ajax
    if(users_id==0){
        alert('Bạn cần chọn 1 tên');
    }else{
        $.ajax({
            //Xu ly truyen
            url:'getUsers.php',
            type:'POST',
            data:{id:users_id},
            dataType:'json',
            //Xy ly gia tri tra ve
            success:function(res){
                // var obj = $.parseJSON(res);
                $("#post").empty();
                
                for(var i=0;i<res.length;i++){
                    var id = res[i]['id'];
                    var title = res[i]['title'];
                    $("#post").append("<option value='"+id+"'>"+title+"</option>");
                }
            }
        })
    }
   })
})
