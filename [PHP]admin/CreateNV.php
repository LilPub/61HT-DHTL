<?php
    include("../menu-header.php");
?>
    <main>
        <form method="POST" class="form">
            <?php
                ob_start();
                include("../connection.php");
            ?>
            <h2>
                <i class="fas fa-plus-square"></i>
                Thêm thành viên
            </h2>
            <label >
                <span>Họ và tên:</span> 
                <input type="text" name="tennv"></label><br />
            <label>
                <span>Chức vụ: </span>
                <input type="text" name="chucvu"></label><br />
            <label>
                <span>Email: </span>
                <input type="text" name="email"></label><br />
            <label>
                <span>Phone: </span>
                <input type="text" name="sodidong"></label><br />
            <label>
                <span>Tên đơn vị: </span>
                <select name="madv" id="" class="select-unit-work">
                    <?php
                        // $conn = mysqli_connect('localhost', 'root', '', 'dhtl_danhba');
                        // if (!$conn) {
                        //     die("Kết nối thất bại ");
                        // }

                        $sql = "SELECT* from db_donvi";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)>0){
                            while ($row = mysqli_fetch_assoc($result)){
                                echo '<option value="'.$row['madv'].'">'.$row['tendv'].'</option>';
                            }
                        }
                        // mysqli_close($conn);
                    ?>
                </select>
            </label><br />
            <input type="submit" value="Thêm" name="create_nv" class="fix-info">

            <?php
            if(isset($_POST['create_nv'])){
                $tennv = $_POST['tennv'];
                $chucvu = $_POST['chucvu'];
                $email = $_POST['email'];
                $sodidong = $_POST['sodidong'];
                $madv = $_POST['madv'];
                // Kết nối Database
                // $conn = mysqli_connect('localhost', 'root', '', 'dhtl_danhba');
                // if (!$conn) {
                //     die("Kết nối thất bại ");
                // }

                $sql = "INSERT INTO db_nhanvien ( tennv, chucvu, email, sodidong, madv) VALUES
                ('$tennv', '$chucvu', '$email', '$sodidong', '$madv')";

                if(mysqli_query($conn,$sql)==TRUE){
                    echo"Thêm thành công";
                }else{
                    echo"Chưa thêm được";
                }

                mysqli_close($conn);
                header("Location: /CNWeb/[PHP]admin/index.php");
            }
            ?>
        </form>
    </main>
<?php
    include("../footer.php")
?>