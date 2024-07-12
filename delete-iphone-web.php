<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="delete-may.css">
</head>
<body>
    <?php
    require 'connect.php';
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM may INNER JOIN loai_may ON may.id_loai_may = loai_may.id_Loai_may";
    $result = $conn->query($sql);
    ?>
    <form action="" method="get">
    <h1>Bảng thông tin máy</h1>
    <table>
        <tr>
            <th>Select</th>
            <th>Tên máy</th>
            <th>Loại máy</th>
            
        </tr>
        <?php
            if ($result->num_rows > 0)
            {
                for ($i=0; $i<$result->num_rows; $i++)
                {
                    $row = $result->fetch_assoc();
                    echo "<tr>";
                    echo "<td><input type='checkbox' name='checkbox[]' value='".$row['id_may']."'></td>" ;
                    echo "<td>".$row['ten_may']."</td>" ;
                    echo "<td value='".$row['id_loai_may']."'>".$row['ten_loai_may']."</td>";
                    echo "</tr>";    
                }
            }
            else{
                echo " loi";
            }
        ?>

    </table>
    <input type="submit" name="delete" value = "delete">
    </form>
            <?php
            if(isset($_GET['delete'])) {
                if (isset ($_GET['checkbox'])) {
                    $chkarr = $_GET['checkbox'];
                    foreach ($chkarr as $id_may) { 
                        $sql = "DELETE FROM may WHERE id_may=$id_may";
                        $result = $conn->query($sql); 
                    }
                    
                    echo "Đã xóa thành công";
                }
            }
    
        
    
            $conn->close();
            ?>
    
</body>
</html>