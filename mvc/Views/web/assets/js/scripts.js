$(document).ready(function(){
    $("#formRegister #username").blur(function(){
        let username = $(this).val();
        $.post("./Register/checkExistUser",{username : username},function(data){
            console.log(data)
            if(data==1){
               $(".text-message").html("Tên đăng nhập không hợp lệ");
            }else {
               $(".text-message").html("");
            }
        });
    })
});