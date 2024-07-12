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
        $id_may = $_GET['id_may'];
        $ten_may = $_GET['ten_may'];
        $id_loai_may = $_GET['id_loai_may'];
        $gia = $_GET['gia'];
        $id_may_1 = $_GET['id_may_1'];
        $sql ="UPDATE may SET id_may='$id_may_1',ten_may='$ten_may',id_loai_may='$id_loai_may',gia='$gia' WHERE id_may='$id_may'";
        if ($conn->query($sql) === TRUE)
        {
            echo "Update máy thành công";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();

    ?>
    
</html>
