<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tải lên tệp Ajax bằng jQuery và PHP </title>
    <link rel = "stylesheet" href = "style.css" type = "text / css" />
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" toàn vẹn = "sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va + PmSTsz / K68vbdEjh4u" crossorigin = "vô danh" >
</head>
<body>
    <div class = "container" >
        <div class = "row" >
            <div class = "col-md-8" >
                <h1> <a href= "#" target= "_blank"> <img src = "../img/DHTL.png" width = "80px" /> Tải lên tệp Ajax bằng Cơ sở dữ liệu MySql </a> </h1>
                <hr> 
                    <form id = "form" action = "process-Form-Upload.php" method = "post" enctype = "multipart/form-data" >
                        <div class = "form-group" >
                            <label for = "name" > NAME </label>
                            <input type = "text" class = "form-control" id = "name" name = "name" placeholder = "Nhập tên" bắt buộc />
                        </div>
                        <div class = "form-group" >
                            <label for = "email" > EMAIL </label>
                            <input type = "email" class = "form-control" id = "email" name = "email" placeholder = "Nhập email" bắt buộc />
                        </div>
                        <input id = "uploadImage" type = "file" accept = "image / *" name = "image" />
                        <div id = "preview" > <img src = "đệ.png" width="100px" height="100px"/> </div> <br>
                        <input class = "btn btn-success" type = "submit" id = "btnUpload" value = "Tải lên" name="btn-upload" />
                    </form>
                    <div id = "err" > </div>
                <hr>
                <p> <a href= "https://www.cloudways.com" target= "_blank"> www.Cloudways.com </a> </p>
            </div>
        </div>
    </div> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../Js/upload-form.js"></script>
</body> 
</html>