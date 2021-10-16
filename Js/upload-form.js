// $(document).ready(function(){
//     $("#form").submit(function(e){
//         e.preventDefault();
//         $.ajax({
//             url: "process-Form-Upload.php",
//             type: "POST",
//             data: {email:$("#email").val()},
//             success: function(dt){
//                 if(dt=='success'){
//                     alert('oke, thành công');
//                 }else{
//                     alert('oke, thất bại');
//                 }
//             }
//         })
//     })
// })

$(document).ready(function (e) {
    $("#form").submit(function (e) {
        e.preventDefault();
        //Sử dụng ajax
        $.ajax({
            //Định nghĩa các thuộc tính
            url: "process-Form-Upload.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                //$("#preview").fadeOut();
                $("#err").fadeOut();
            },
            success: function (data) {
                if (data == 'invalid') {
                    // invalid file format.
                    $("#err").html("Invalid File !").fadeIn();

                } else {
                    // view uploaded file.
                    $("#preview").html(data).fadeIn();
                    $("#form")[0].reset();
                    alert('thành công')
                }
            },
            error: function (e) {
                $("#err").html(e).fadeIn();
            }
        })
    });
});
