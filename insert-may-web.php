<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            margin: 10px 0;
        }

        
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        

        #check_ten_may {
            color: #f00;
        }

        #check_ten_may::before {
            content: "⚠ ";
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            document.querySelector('#submit').disabled = true;
            document.querySelector('#ten_may').onkeyup = function(){ //An dong thong bao <span>
                if(document.querySelector('#ten_may').value.length >=5){
                    
                    document.querySelector('#check_ten_may').textContent  = ``
                }
                else{
                    document.querySelector('#submit').disabled = true;
                    document.querySelector('#check_ten_may').textContent  = `Tên của máy cần có 5 kí tự trở lên`
                }
                document.querySelector('#check').onclick = check;
                function check() {
                    const ten_may = document.querySelector('#ten_may').value;
                    const gia = document.querySelector('#gia').value;
                    if(!ten_may || !gia){
                        alert("Hay nhap day du thong tin");
                    }
                    else{
                        alert("Co the them may thanh cong")
                        document.querySelector('#submit').disabled = false;
                    }
                    }
                }
            }
        )
    </script>
</head>
<body>
    <form action='insert-may.php' method="get">
        <h1>Thêm máy</h1>
        <p>Tên máy</p>
            <input type="text" name="ten_may" id="ten_may"/><br/>
        <span id="check_ten_may"></span>
        <p>ID loại máy</p>
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
                    if($row['id_loai_may'] == '1'){
                        echo '<img src="iphone-11-64gb.png" alt=""  style="width: 150px;">';
                    }
                    echo "<option value='".$row["id_loai_may"]."'>".$row["ten_loai_may"]."</option>";
                }
            }
            ?>
        </select>
        <p>Giá</p>
            <input type="text" name="gia" id="gia" step="0.01"/><br/>
            <input type="button" value="Check" id="check"><input type="submit" value="Đăng ký" id="submit" style="margin-left:40px"/>
</body>
</html>