<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
                    
<?php
            require 'connect.php';
            mysqli_set_charset($conn,'UTF8');
            $ten_tai_khoan = $_POST['ten_tai_khoan'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $mat_khau = $_POST['mat_khau'];
            $sql = "SELECT * FROM khach_hang WHERE so_dien_thoai ='$so_dien_thoai'  AND mat_khau ='$mat_khau'";
            $result = $conn -> query($sql);
            if ($result->num_rows > 0)
            {
                while ($row = $result->fetch_assoc()) { 
                    session_start();
                    $_SESSION['so_dien_thoai'] = $so_dien_thoai;
                    
                    echo "Xin chào <span value='$so_dien_thoai'>".$row['ten_tai_khoan']."</span> bạn đã đăng nhập thành công";
                    echo 'Click vao day de <a href="dangnhap-web.php">Log out</a>';
                }
            }
            else
            {
                echo "Tài khoản không tồn tại";
            }
            $conn -> close();
        
        ?>
</body>
</html>