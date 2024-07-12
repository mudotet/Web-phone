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
        $ten_loai_may = $_GET['ten_loai_may'];
        $id_hang_may = $_GET['id_hang_may'];
        $id_nha_cung_cap = $_GET['id_nha_cung_cap'];
        $sql ="INSERT INTO loai_may (ten_loai_may,id_hang_may,id_nha_cung_cap) VALUES ('$ten_loai_may','$id_hang_may','$id_nha_cung_cap')";
                
        if ($conn->query($sql) === TRUE)
        {
            echo "Them loai may thanh cong";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();

    ?>
    
</html>
