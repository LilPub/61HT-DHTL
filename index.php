<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh bạ điện tử - Trường Đại học Thủy lợi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header class="p-3 bg-success text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-white"><i class="fas fa-home"></i>Trang chủ</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Tính năng</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Giới thiệu</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Đăng nhập</button>
          <button type="button" class="btn btn-warning">Đăng ký</button>
        </div>
      </div>
    </div>
  </header>
  <main class="">
      <div class="container">
          <div class="row d-flex">
              <div class="col-md-4 ">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 100%;margin-left:-120px">
                    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                        <span class="fs-4">Danh bạ điện tử</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="tab-item">
                            <a href="#" class="nav-link link-dark" aria-current="page">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                                <i class="fas fa-home"></i>
                                Trang chủ
                            </a>
                        </li >
                        <li class="tab-item">
                            <a href="#" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                                <i class="fas fa-user-cog"></i>
                                Admin
                            </a>
                        </li>
                        <li class="nav-item tab-item">
                            <a href="#" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                                <i class="fas fa-user"></i>
                                User
                            </a>
                        </li>
                        <li class="tab-item">
                            <a href="#" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                                <i class="fas fa-user-edit"></i>
                                Tính năng
                            </a>
                        </li>
                        <li class="tab-item">
                            <a href="#" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                                <i class="fas fa-cog"></i>
                                Tùy chọn
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="./Logo-Thuy_Loi.png" alt="" width="32" height="32" class="rounded-circle me-2">
                            <strong>TLU</strong>
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
              </div>
              <div class="col-md-8 inFo" style="width: 74%;margin-left: -100px;">

                <div class="tab-info">Trang chủ</div>

                <div class="tab-info">
                    <div class="search d-flex">
                        <div class="input-group rounded input-search">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg btn-create">Lưu thay đổi</button>
                    </div>
                    <table class="table table-bordered tableUser">
                        <thead class="table-fix">
                            <tr>
                            <th scope="col">Mã NV</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Chức vụ</th>
                            <th scope="col">Email</th>
                            <th scope="col">SĐT</th>
                            <th scope="col">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <!-- Nhan xet :day la vung du lieu thay doi duoc-->
                            <?php 
                                //b1 :ket noi csdl
                                $conn = mysqli_connect('localhost','root','','dhtl_danhba');
                                if (!$conn){
                                    die("Kết nối thất bại  .Kiểm tra lại các tham số khai báo kết nối");
                                }
                                //b2 khai bao va thuc hien truy vấn
                                $sql = "SELECT * from db_nhanvien";
                                $result = mysqli_query($conn,$sql);
                                
                                //b3  kiem tra va xu li tap ket qua  - ung voi cau lenh select  
                                if(mysqli_num_rows($result)>0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<tr>";
                                            echo '<th scope="row">',$row['manv'],'</th>';
                                            echo "<td>",$row['tennv'],"</td>";
                                            echo "<td>",$row['chucvu'],"</td>";
                                            echo "<td>",$row['email'],"</td>";
                                            echo "<td>",$row['sodidong'],"</td>";
                                            echo "<td>
                                                <button class='btnDelete'>Xóa</button>
                                                <button class='btnUpdate'>Sửa</button>
                                            </td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="tab-info active" >
                    <div class="search d-flex">
                        <div class="input-group rounded input-search">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" />
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg btn-create">+ Tạo mới</button>
                    </div>
                    <table class="table table-bordered tableUser">
                        <thead class="">
                            <tr>
                            <th scope="col">Mã NV</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Chức vụ</th>
                            <th scope="col">Email</th>
                            <th scope="col">SĐT</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <!-- Nhan xet :day la vung du lieu thay doi duoc-->
                            <?php 
                                //b1 :ket noi csdl
                                $conn = mysqli_connect('localhost','root','','dhtl_danhba');
                                if (!$conn){
                                    die("Kết nối thất bại  .Kiểm tra lại các tham số khai báo kết nối");
                                }
                                //b2 khai bao va thuc hien truy vấn
                                $sql = "SELECT * from db_nhanvien";
                                $result = mysqli_query($conn,$sql);
                                
                                //b3  kiem tra va xu li tap ket qua  - ung voi cau lenh select  
                                if(mysqli_num_rows($result)>0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<tr>";
                                            echo '<th scope="row">',$row['manv'],'</th>';
                                            echo "<td>",$row['tennv'],"</td>";
                                            echo "<td>",$row['chucvu'],"</td>";
                                            echo "<td>",$row['email'],"</td>";
                                            echo "<td>",$row['sodidong'],"</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="tab-info">
                    Tính năng
                </div>

                <div class="tab-info">
                    Tùy chọn
                </div>
              </div>
              <div class="directory-table">
                
              </div>
          </div>
      </div>
</main>
  <footer class="p-3 bg-success text-white position-absolute bottom-0" style="width: 100%;">
        <div class="contaiter">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Danh bạ điện tử - Đại học Thủy Lợi</p>
                </div>
            </div>
        </div>
  </footer>
  <script src="./main.js"></script>
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