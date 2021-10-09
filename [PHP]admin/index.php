<?php
    include("../header.php");
?>
        <div class="text-end">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../img/Logo-Thuy_Loi.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>TLU</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <?php
                        $email = $_GET['user'];
                    ?>
                    <li><a class="dropdown-item" href="http://localhost/CNWeb/[PHP]profiles/profile.php?user=<?php echo $email; ?>">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../[PHP]home/home.php">Sign out</a></li>
                </ul>
            </div>
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
                        <li class="tab-item ">
                            <a href="#" class="nav-link link-dark" aria-current="page">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                                <i class="fas fa-list-alt"></i>
                                Danh sách
                            </a>
                            <div class="home-child callapse list-child active-list">
                                <ul class="list-unstyled">
                                    <li class="tab-child">
                                        <i class="fas fa-greater-than fa-xs"></i>
                                         Khoa CNTT
                                    </li>
                                    <li class="tab-child">
                                        <i class="fas fa-greater-than fa-xs"></i>
                                        Khoa KT
                                    </li>
                                    <li class="tab-child">
                                        <i class="fas fa-greater-than fa-xs"></i>
                                        Khoa KTO
                                    </li>
                                </ul>
                            </div>
                        </li >
                        <li class="tab-item nav-item">
                            <a href="#" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                                <i class="fas fa-user-cog"></i>
                                Admin
                            </a>
                        </li>
                        <li class="tab-item">
                            <a href="#" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                                <i class="fas fa-bell"></i>
                                Thông báo
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
                            <img src="../img/Logo-Thuy_Loi.png" alt="" width="32" height="32" class="rounded-circle me-2">
                            <strong>TLU</strong>
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <?php
                                $email = $_GET['user'];
                            ?>
                            <li><a class="dropdown-item" href="http://localhost/CNWeb/[PHP]profiles/profile.php?user=<?php echo $email; ?>">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="../[PHP]home/home.php">Sign out</a></li>
                        </ul>
                    </div>
                </div>
              </div>
              <div class="col-md-8 inFo" style="width: 74%;margin-left: -100px;">

                <div class="tab-info ">
                    <div class="search d-flex">
                        <div class="input-group rounded input-search">
                            <input type="search" class="form-control rounded" placeholder="Eg: Nguyễn Văn A" aria-label="Search"
                                aria-describedby="search-addon" />
                            <span type="submit" class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                    <table class="table table-bordered tableNew">
                        <thead class="">
                            <tr>
                            <th scope="col">Mã NV</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Chức vụ</th>
                            <th scope="col">Email</th>
                            <th scope="col">SĐT</th>
                            <th scope="col">Tên đơn vị</th>
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
                                $sql = "SELECT * from db_nhanvien,db_donvi where db_nhanvien.madv=db_donvi.madv";
                                $result = mysqli_query($conn,$sql);
                                
                                //b3  kiem tra va xu li tap ket qua  - ung voi cau lenh select  
                                if(mysqli_num_rows($result)>0){
                                    $i=1;
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; ?> </th>
                                            <td><?php echo $row['tennv']; ?> </td>
                                            <td><?php echo $row['chucvu']; ?> </td>
                                            <td><?php echo $row['email']; ?> </td>
                                            <td><?php echo $row['sodidong']; ?> </td>
                                            <td><?php echo $row['tendv']; ?> </td>
                                        </tr>
                            <?php
                                        $i++;
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="tab-info active">
                    <div class="search ">
                        <div class="input-group rounded input-search">
                            <input type="search" class="form-control rounded" placeholder="Eg: Nguyễn Văn A" aria-label="Search"
                            aria-describedby="search-addon" />
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="btn-admin d-flex float-end">
                        <a href="./CreateNV.php">
                            <button type="button" class="btn btn-primary btn-lg btn-create float-end">+ Tạo mới</button>
                        </a>
                        <!-- <button type="button" class="btn btn-primary btn-lg btn-save">Lưu thay đổi</button> -->
                    </div>
                    <table class="table table-bordered tableAdmin">
                        <thead class="table-fix">
                            <tr>
                            <th scope="col">Mã NV</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Chức vụ</th>
                            <th scope="col">Email</th>
                            <th scope="col">SĐT</th>
                            <th scope="col">Tên đơn vị</th>
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
                                $sql = "SELECT * from db_nhanvien,db_donvi where db_nhanvien.madv=db_donvi.madv";
                                $result = mysqli_query($conn,$sql);
                                
                                //b3  kiem tra va xu li tap ket qua  - ung voi cau lenh select  
                                if(mysqli_num_rows($result)>0){
                                    $i=1;
                                    while($row = mysqli_fetch_assoc($result)){
                                ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; ?> </th>
                                            <td><?php echo $row['tennv']; ?> </td>
                                            <td><?php echo $row['chucvu']; ?> </td>
                                            <td><?php echo $row['email']; ?> </td>
                                            <td><?php echo $row['sodidong']; ?> </td>
                                            <td><?php echo $row['tendv']; ?> </td>
                                            <td>
                                                <a href="UpdateNV.php?manv=<?php echo $row['manv']; ?>"><i class="fas fa-edit icon-edit"></i></a>
                                                <a href="DeleteNV.php?manv=<?php echo $row['manv']; ?>"><i class="fas fa-trash icon-delete"></i></a>
                                            </td>
                                        </tr>
                            <?php
                                        $i++;
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="tab-info " >
                    Thông báo
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
<?php
    include("../footer.php");
?>