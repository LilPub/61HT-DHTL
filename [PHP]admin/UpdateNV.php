<?php
    include('../menu-header.php');
?>
<main>
    <?php
    // Kết nối Database
    $conn = mysqli_connect('localhost', 'root', '', 'dhtl_danhba');
    if (!$conn) {
        die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
    }
    $manv = $_GET['manv'];
    $query = mysqli_query($conn, "select * from `db_nhanvien` where manv='$manv'");
    $row = mysqli_fetch_assoc($query);
    ?>
    <form method="POST" class="form">
        <h2>
            <i class="fas fa-edit"></i>    
            Sửa thành viên
        </h2>
        <label>
            <span>Họ và tên: </span>
            <input type="text" value="<?php echo $row['tennv']; ?>" name="tennv"></label><br />
        <label>
            <span>Chức vụ: </span>
            <input type="text" value="<?php echo $row['chucvu']; ?>" name="chucvu"></label><br />
        <label>
            <span>Email: </span>
            <input type="text" value="<?php echo $row['email']; ?>" name="email"></label><br />
        <label>
            <span>Phone: </span> 
            <input type="text" value="<?php echo $row['sodidong']; ?>" name="sodidong"></label><br />
        <input type="submit" value="Sửa" name="update_user" class="fix-info">
        <?php

        if (isset($_POST['update_user'])) {
            $manv = $_GET['manv'];
            $tennv = $_POST['tennv'];
            $chucvu = $_POST['chucvu'];
            $email = $_POST['email'];
            $sodidong = $_POST['sodidong'];
            // Create connection
            $conn = new mysqli("localhost", "root", "", "dhtl_danhba");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "UPDATE `db_nhanvien` SET tennv='$tennv',chucvu = '$chucvu', email='$email', sodidong='$sodidong' WHERE manv='$manv'";

            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }

            $conn->close();
            header("Location: /CNWeb/[PHP]admin/index.php");

        }
        ?>
        
    </form>
</main>

<?php
    include('../footer.php');
?>