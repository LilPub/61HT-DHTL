<?php
$to_email = "hiep140701@gmail.com";
$subject = "Bảo mật tài khoản";
$body = "Hi,Bro mày sắp bị hack Facebook rồi đấy cẩn thận đi !!!";
$headers = "From: Facebook";

if(mail($to_email, $subject, $body, $headers)){
    echo 'Thành công';
}else{
    echo 'Thất bại';
}

?>