<?php
    require 'connect.php';
    if(isset($_POST(['btnlogin'])&&($_POST['btnlogin'])){
        $so_dien_thoai = $_POST['so_dien_thoai'];
        $mat_khau = $_POST['mat_khau'];
        
        $sql = "SELECT * FROM khach_hang WHERE so_dien_thoai = '$so_dien_thoai' AND mat_khau = '$mat_khau'";
        $result = $conn->query($sql);
        if ($result->num_rows>0)
        {
            session_start();
            
            $_SESSION['so_dien_thoai'] = $so_dien_thoai;
            $_SESSION['mat_khau'] = $mat_khau;
            
            header('location:iphone.php');
            
        }
        else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();

    })
?>