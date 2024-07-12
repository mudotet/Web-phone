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
        $ten_nha_cung_cap = $_GET['ten_nha_cung_cap'];
        $email = $_GET['email'];
        $so_dien_thoai = $_GET['so_dien_thoai'];
        $sql ="INSERT INTO nha_cung_cap (ten_nha_cung_cap,email,so_dien_thoai) VALUES ('$ten_nha_cung_cap','$email','$so_dien_thoai')";
                
        if ($conn->query($sql) === TRUE)
        {
            echo "Them nha cung cap thanh cong";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();

    ?>
    
</html>
