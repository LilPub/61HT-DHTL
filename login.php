<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./login.css">
</head>
<body class="text-center">
    <main class="form-signin">
      <form>
        <img class="mb-4" src="Logo-Thuy_Loi.png" alt="" width="72" height="57">
    
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Mật khẩu</label>
        </div>
    
        <div class="checkbox mb-3 saveACC">
          <label>
            <input type="checkbox" value="remember-me"> Lưu tài khoản
          </label>
        </div>
        <a href="./index.php">
            <button class="w-100 btn btn-lg btn-primary" type="button">Đăng nhập</button>
        </a>
        <p class="mt-5 mb-3 text-muted">© Đại học Thủy Lợi</p>
      </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>