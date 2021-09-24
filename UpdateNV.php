<!DOCTYPE html>
<html>

<head>
    <title>Update data</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
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
        <h2>Sửa thành viên</h2>
        <label>Họ và tên: <input type="text" value="<?php echo $row['tennv']; ?>" name="tennv"></label><br />
        <label>Chức vụ: <input type="text" value="<?php echo $row['chucvu']; ?>" name="chucvu"></label><br />
        <label>Email: <input type="text" value="<?php echo $row['email']; ?>" name="email"></label><br />
        <label>Phone: <input type="text" value="<?php echo $row['sodidong']; ?>" name="phone"></label><br />
        <input type="submit" value="sửa" name="update_user">
        <?php

        if (isset($_POST['update_user'])) {
            $manv = $_GET['manv'];
            $tennv = $_POST['tennv'];
            $chucvu = $_POST['chucvu'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            // Create connection
            $conn = new mysqli("localhost", "root", "", "dhtl_danhba");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "UPDATE `db_nhanvien` SET tennv='$tennv',chucvu = '$chucvu', email='$email', sodidong='$phone' WHERE manv='$manv'";

            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }

            $conn->close();
            header("Location: /CNWeb");

        }
        ?>
        
    </form>
</body>

</html>