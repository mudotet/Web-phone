<?php
    require 'connect.php';
    mysqli_set_charset($conn, 'UTF8');
    $ten_may = $_GET['ten_may'];
    $sql = "SELECT * FROM `may` WHERE ten_may LIKE '$ten_may%'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
       
        while($row = $result->fetch_assoc()){
            
            echo '<div class="may">';
                            if($row['id_may'] == '1'){
                                echo '<img src="iphone-11-64gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '2'){
                                echo '<img src="iphone-11-128gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '3'){
                                echo '<img src="iphone-12-promax-128gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '4'){
                                echo '<img src="iphone-12-64gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '5'){
                                echo '<img src="iphone-12-128gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '6'){
                                echo '<img src="iphone-12-mini-64gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '7'){
                                echo '<img src="iphone-12-pro-128gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '8'){
                                echo '<img src="iphone-13-128gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '9'){
                                echo '<img src="iphone-13-pro-max-128gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '10'){
                                echo '<img src="iphone-13-pro-max-256gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '11'){
                                echo '<img src="iphone-13-pro-128gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '12'){
                                echo '<img src="iphone-13-256gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '13'){
                                echo '<a href="click_dt.html" title="" target="">
                                <img src="iphone-14-pro-max-128gb.png" alt=""  style="width: 150px;"></a>';
                            }
                            if($row['id_may'] == '14'){
                                echo '<img src="iphone-14-pro-128gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '15'){
                                echo '<img src="iphone-14-128gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '16'){
                                echo '<img src="iphone-14-pro-max-256gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '17'){
                                echo '<img src="iphone-14-plus-128gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '18'){
                                echo '<img src="iphone-15-pro-max-256gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '19'){
                                echo '<img src="iphone-15-128gb.png" alt=""  style="width: 150px;">';
                            }

                            if($row['id_may'] == '20'){
                                echo '<img src="iphone-15-plus-128gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '21'){
                                echo '<img src="iphone-15-pro-128gb.png" alt=""  style="width: 150px;">';
                            }
                            if($row['id_may'] == '22'){
                                echo '<img src="iphone-15-pro-256gb.png" alt=""  style="width: 150px;">';
                            }

                            echo "<br>";
                            echo "<p>".$row['ten_may']."</p>";
                            echo "<br>";
                            echo "<p>Gia:".$row['gia'].".000₫</p>";
                            echo "<a href=''>
                            <img src='gio-hang.jpg' alt='' width=15px><span>Mua hang</span>
                            </a>";
                            echo '</div>';
        }
    }
?>