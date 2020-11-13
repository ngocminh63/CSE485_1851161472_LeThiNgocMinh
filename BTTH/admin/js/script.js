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
$(document).ready(function(){
    $("#btn").change(function(){
     //    Lấy giá trị:
     var val = $("#input").val();
     // Xử lý truyền -- nhận bằng Ajax
     if(val=''){
        $("tbody").empty();
     }else{
         $.ajax({
             //Xu ly truyen
             url:'getUser1.php',
             type:'POST',
             data:{username:val},
             dataType:'json',
             //Xy ly gia tri tra ve
             success:function(res){
                 // var obj = $.parseJSON(res);
                 $("tbody").empty();
                 
                 for(var i=0;i<res.length;i++){
                     var id = res[i]['0'];
                     var username = res[i]['1'];
                     var email = res[i]['2'];
                     var role = res[i]['3'];
                     var created_at = res[i]['5'];
                     var updated_at = res[i]['6'];
                     $("tbody").append("<tr>"+"<td>"+id+"</td>"+"<td>"+username+"</td>"+"<td>"+email+"</td>"+"<td>"+role+"</td>"+"<td>"+created_at+"</td>"+"<td>"+updated_at+"</td>");
                 }
             }
         })
     }
    })
 })