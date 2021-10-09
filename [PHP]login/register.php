<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/register.css">
  </head>
  <body>
    <!-- Form đăng kí -->
    <section class="vh-100" style="background-color: #eee;">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-12 col-xl-11">
            <div class="card text-black" style="border-radius: 25px;">
              <a href="../[PHP]home/home.php"><i class="fas fa-times fa-2x icon-close"></i></a>
              <div class="card-body p-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng ký</p>
                    <?php
                      if(isset($_GET['response'])){
                        if($_GET['response']=='successfully'){
                          echo "<p class='text-success text-center'>Bạn đã đăng kí thành công, vui lòng xác nhận email</p>";
                        }

                        if($_GET['response']=='exited'){
                          echo "<p class='text-danger text-center'>Đã tồn tại email</p>";
                        }

                        if($_GET['response']=='send_fail'){
                          echo "<p class='text-danger text-center'>Chưa gửi email</p>";
                        }

                        if($_GET['response']=='failPass'){
                          echo "<p class='text-danger text-center'>Mật khẩu không khớp</p>";
                        }
                      }
                      if(isset($_GET['status'])){
                        if($_GET['status']=0){
                          echo "<p class='text-danger text-center'>Kích hoạt email lỗi</p>";
                        }
                      }
                    ?>
                    <form class="mx-1 mx-md-4" action="process-register.php" method="post">

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw icon-fix"></i>
                        <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="firstName">First Name</label>
                          <input type="text" id="firstName" name="firstName" class="form-control" />
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw icon-fix"></i>
                        <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="lastName">Last Name</label>
                          <input type="text" id="lastName" name="lastName" class="form-control" />
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw icon-fix"></i>
                        <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="email">Email</label>
                          <input type="email" id="email" name="email" class="form-control" />
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lock fa-lg me-3 fa-fw icon-fix"></i>
                        <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="pass1">Mật khẩu</label>
                          <input type="password" id="pass1" name="pass1" class="form-control" />
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-key fa-lg me-3 fa-fw icon-fix"></i>
                        <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="pass2">Nhập lại mật khẩu</label>
                          <input type="password" id="pass2" name="pass2" class="form-control" />
                        </div>
                      </div>

                      <!-- <div class="form-check d-flex justify-content-center mb-5">
                        <input
                          class="form-check-input me-2"
                          type="checkbox"
                          value=""
                          id="form2Example3c"
                        />
                        <label class="form-check-label" for="form2Example3">
                          I agree all statements in <a href="#!">Terms of service</a>
                        </label>
                      </div> -->

                      <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" class="btn btn-primary btn-lg" name="btnRegister">Đăng ký</button>
                      </div>

                    </form>

                  </div>
                  <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                    <img src="../img/DHTL.png" class="img-fluid rounded mx-auto d-block img-logo" alt="Sample image">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
