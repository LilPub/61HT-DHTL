<?php
include('../connection.php');
if(isset($_GET['user'])){
    $email = $_GET['user'];
    $Code = $_GET['code'];
    $sql = "SELECT * from users where email = '$email' and code_id = '$Code'";
    $result = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($result);
    if($user>0){
        $sql1 = "UPDATE users set user_level = 1 where email = '$email' and code_id = '$Code'";
        $res = mysqli_query($conn, $sql1);
        header("Location:/CNWeb/[PHP]login/login.php?status=1");
    }else{
        header("Location:/CNWeb/[PHP]login/register.php?status=0");
    }
}else{
    echo 'Thất bại';
}

?>