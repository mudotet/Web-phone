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
        $ten_hang = $_GET['ten_hang'];
        $sql ="INSERT INTO hang (ten_hang) VALUES ('$ten_hang')";
                
        if ($conn->query($sql) === TRUE)
        {
            echo "Them hang thanh cong";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();

    ?>
    
</html>
