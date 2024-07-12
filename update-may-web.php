<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="update-may.css">
</head>
<body>
   
    <form action='update-may.php' method="get">
    <h1>Update</h1>
        <div class="update-form">
            <p>ID máy<p> 
                <input type="text" name="id_may_1"/><br/>
            <p>Tên máy<p>
                <input type="text" name="ten_may"/><br/>
            <p>Loại máy<p>
            <select name="id_loai_may" id="">
                <?php
                require 'connect.php';
                mysqli_set_charset($conn,'UTF8');
                $sql = "SELECT * FROM loai_may";
                $result = $conn -> query($sql);
                if ($result->num_rows > 0)
                {  
                    while($row = $result ->fetch_assoc())
                    {
                        
                        echo "<option value='".$row["id_loai_may"]."'>".$row["ten_loai_may"]."</option>";
                    }
                }
                ?>
            </select>
            <p>Giá<p>
                <input type="text" name="gia"/><br/>
            <p>Update where:</p>
            <p>ID máy<p> 
                <input type="text" name="id_may"/><br/>
                <input type="submit" value="update"/>
        </div>
    </form>       
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
                <th>Giá</th>
            </tr>
            <?php
                if ($result->num_rows > 0)
                {
                    for ($i=0; $i<$result->num_rows; $i++)
                    {
                        $row = $result->fetch_assoc();
                        echo "<tr>";
                        echo "<td>".$row['id_may']."</td>" ;
                        echo "<td>".$row['ten_may']."</td>" ;
                        echo "<td value='".$row['id_loai_may']."'>".$row['ten_loai_may']."</td>";
                        echo "<td>".$row['gia']."<span>.000₫</span></td>" ;
                        echo "</tr>";    
                    }
                }
                else{
                    echo " loi";
                }
            ?>

        </table>
        </form>
        
</body>
</html>