$(document).ready(function () {
    $("#nut1").click(function () { 
        $(".thongbao1").addClass("active");
        $(".thongbao2").removeClass("active");
        
    });
    $("#nut2").click(function () { 
        $(".thongbao2").addClass("active");
        $(".thongbao1").removeClass("active");
    });
});