<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body class="text-center">
    <main class="form-signin">
      <form action="process-login.php" method="post">
        <img class="mb-4" src="../img/Logo-Thuy_Loi.png" alt="" width="72" height="57">
    
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
          <label for="floatingPassword">Mật khẩu</label>
        </div>
    
        <div class="checkbox mb-3 saveACC">
          <label>
            <input type="checkbox" value="remember-me"> Lưu tài khoản
          </label>
        </div>

        <div class="checkbox mb-3 style-register">
          <label for="">Bạn chưa có tài khoản ? <a href="../[PHP]login/register.php">Đăng ký</a></label>
        </div>
      
        <div>
          <?php
            if(isset($_GET['response'])){
              if($_GET['response']=='failed_email'){
                echo "<p class='text-danger'>Email không đúng</p>";
              }

              if($_GET['response']=='failed_password'){
                echo "<p class='text-danger'>Sai mật khẩu</p>";
              }
            }
            if(isset($_GET['status'])){
              if($_GET['status']=='1'){
                echo "<p class='text-success'>Xác nhận tai khoản thành công, vui lòng đăng nhập</p>";
              }
            }
          ?>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Đăng nhập</button>
        </div>
        <p class="mt-5 mb-3 text-muted">© Đại học Thủy Lợi</p>
      </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>