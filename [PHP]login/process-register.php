<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../sendEmailv1/Exception.php';
require '../sendEmailv1/PHPMailer.php';
require '../sendEmailv1/SMTP.php';


$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

ob_start();
include('../connection.php');

$sql_1 = "SELECT * FROM users WHERE email = '$email'";
$result_1 = mysqli_query($conn,$sql_1);

if(mysqli_num_rows($result_1)>0){
    $value = 'exited';
    header("Location:/CNWeb/[PHP]login/register.php?response=$value");
}else{
    if($pass1===$pass2){
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $strRandom = rand(1, 9999);
        $Code = md5($strRandom);
        $sql_2 = "INSERT INTO users (first_name, last_name, email, password,code_id) VALUES ('$first_name','$last_name','$email','$pass_hash','$Code')";
        $result_2 = mysqli_query($conn,$sql_2);
    
        if($result_2>0){
            $value = 'successfully';
            // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
                $mail->isSMTP();// gửi mail SMTP
                $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
                $mail->SMTPAuth = true;// Enable SMTP authentication
                $mail->Username = 'hiep140701@gmail.com';// SMTP username
                $mail->Password = 'ooyhmgkoehjzrwek'; // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                $mail->Port = 587; // TCP port to connect to
                $mail->CharSet = 'UTF-8';
                //Recipients
                $mail->setFrom('hiep140701@gmail.com', 'Văn phòng Khoa CNTT - Trường ĐH Thủy lợi');
    
                $mail->addReplyTo('hiep140701@gmail.com', 'Văn phòng Khoa CNTT - Trường ĐH Thủy lợi');
                
                $mail->addAddress('hiep140701@gmail.com'); // Add a recipient
                
                // Attachments
                // $mail->addAttachment('pdf/XTT/'.$data[11].'.pdf', $data[11].'_1.pdf'); // Add attachments
                // $mail->addAttachment('pdf/Giay_bao_mat_sau.pdf'); // Optional name
    
                // Content
                $mail->isHTML(true);   // Set email format to HTML
                $tieude = '[Xác nhận tài khoản] Xác nhận tài khoản đăng kí thành công';
                $mail->Subject = $tieude;
                
                // Mail body content 
                $bodyContent = '<p>Thân gửi chủ tài khoản <b>A</b></p>'; 
                $bodyContent .= '<p>Chúc mừng bạn đã đang ký tài khoản thành công, để kích hoạt tài khoản vui lòng click vào link bên dưới. </p>'; 
                $bodyContent .= '<a href="http://localhost/CNWeb/sendEmailv1/verify-email.php?user='.$email.'&code='.$Code.'">Click here</a>'; 
                
                $mail->Body = $bodyContent;
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                if($mail->send()){
                    header("Location:/CNWeb/[PHP]login/register.php?response=$value");
                }else{
                    $sendFail = 'send_fail';
                    header("Location:/CNWeb/[PHP]login/register.php?response=$sendFail");
                }  
    
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            // header("Location:/CNWeb/[PHP]home/home.php?response=$value");
        }
    }
    else{
        $errorPass = 'failPass';
        header("Location:/CNWeb/[PHP]login/register.php?response=$errorPass");
    }
}



?>