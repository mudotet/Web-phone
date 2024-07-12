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
        $ten_may = $_GET['ten_may'];
        $id_loai_may = $_GET['id_loai_may'];
        $gia = $_GET['gia'];
        $sql ="INSERT INTO may (ten_may,id_loai_may,gia) VALUES ('$ten_may','$id_loai_may','$gia')";
                
        if ($conn->query($sql) === TRUE)
        {
            echo "Thêm máy thành công";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();

    ?>
    
</html>
