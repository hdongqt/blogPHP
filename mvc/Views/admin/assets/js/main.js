// $( "#btnAdd" ).click(function(e) {
//     const datafrom = {
//          f_username : $("#username").val(),
//          f_password : $("#password").val(),
//          f_roleid : $("#masv").val(),
//          f_fullname : $("#fullname").val(),
//          f_about : $("#about").val(),
//     }
//     $.post("./User/create",datafrom,function(data){
//         console.log(data)
//         if(data==1){
//             alert("Thành công !")
//             location.reload();
//         }else{
//             $(".modal-message").html("Không thành công !")
//         }
//     })
//   });