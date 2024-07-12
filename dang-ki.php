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
        $ten_tai_khoan = $_GET['ten_tai_khoan'];
        $mat_khau = $_GET['mat_khau'];
        $email = $_GET['email'];
        $so_dien_thoai = $_GET['so_dien_thoai'];
        $sql ="INSERT INTO khach_hang (ten_tai_khoan,mat_khau,email,so_dien_thoai) VALUES ('$ten_tai_khoan','$mat_khau','$email','$so_dien_thoai')";
                
        if ($conn->query($sql) === TRUE)
        {
            echo "Dang ki tai khoan thanh cong";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();

    ?>
    
</html>
