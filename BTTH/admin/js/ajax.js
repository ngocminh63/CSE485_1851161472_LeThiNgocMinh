$(document).ready(function(){
    
    $("#btn").click(function(){
     //    Lấy giá trị:
     var val = $("#input").val();    
     $("tbody").empty(); // Xử lý truyền -- nhận bằng Ajax
     $.ajax({
        //Xu ly truyen
        url:'getUser1.php',
        type:'POST',
        data:{username: val},
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
                $("tbody").append("<tr>"+"<td>"+id+"</td>"+"<td>"+username+"</td>"+"<td>"+email+"</td>"+"<td>"+role+"</td>"+"<td>"+created_at+"</td>"+"<td>"+updated_at+"</td></tr>");
            }
        }
        })
    })
 })