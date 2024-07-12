<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="iphone.css">
    
</head>
<body>
<div>
        <header>
            <div class="banner-tophead">
                <div class="img-header">
                    <div class="img-one-more">
                        <a href="#"><img src="https://cdn2.cellphones.com.vn/x30,webp,q100/https://dashboard.cellphones.com.vn/storage/top-banner-chinh-sach-bao-hanh-doi-tra.png" alt="Top Banner Mobile dịch vụ bảo hành"></a>
                    </div>
                    <div class="img-one-more">
                        <a href="#"><img src="https://cdn2.cellphones.com.vn/x30,webp,q100/https://dashboard.cellphones.com.vn/storage/top-banner-chinh-hang-xuat-vat-day-du.png" alt="TOP banner mobile sản phẩm chính hãng đầy đủ VAT"></a>
                    </div>
                    <div class="img-one-more">
                        <a href="#"><img src="https://cdn2.cellphones.com.vn/x30,webp,q100/https://dashboard.cellphones.com.vn/storage/top-banner-giao-nhanh-mien-phi.png" alt="TOP banner mobile giao nhanh miễn phí"></a>
                    </div>
                </div>
            </div>
            <div class="subject-header">
                <div class="logo">
                    <img src="https://brademar.com/wp-content/uploads/2022/10/CellphoneS-Logo-PNG-1.png" width="16%"  alt="">
                </div>
                <div class="danh_muc">
                    <div id="icon">
                        <i class="fa-solid fa-list"></i>
                    </div>
                    <div id="text">
                        Danh mục
                    </div>
                </div>
                <div class="map">
                    <div id="icon-map">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div style="padding-left: 10px;">
                        <div class="text">
                            Xem giá tại
                        </div>
                        <div style="color: white; font-size: 15px;margin-left: -3px;">
                            Hà Nội
                        </div>
                    </div>
                </div>
                <div class="box-search">
                    <div>
                        <input class="cps-input" type="text" placeholder="Bạn cần tìm gì?" id="insearch">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="phone">
                    <div id="icon-phone">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div style="padding-left: 10px;">
                        <div class="text">
                            Gọi mua hàng
                        </div>
                        <div style="color: white; font-size: 15px;margin-left: -3px;">
                            0359189033
                        </div>
                    </div>
                </div>
                <div class="locate">
                    <div id="icon-locate">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div style="padding-left: 10px;">
                        <div class="text">
                            Cửa hàng
                        </div>
                        <div style="color: white; font-size: 15px;margin-left: -3px;">
                            gần đây
                        </div>
                    </div>
                </div>
                <div class="truck">
                    <div id="icon-truck">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <div style="padding-left: 10px;">
                        <div class="text">
                            Tra cứu
                        </div>
                        <div style="color: white; font-size: 15px;margin-left: -3px;">
                            đơn hàng
                        </div>
                    </div>
                </div>
                <div class="cart">
                    <div id="icon-cart">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div style="padding-left: 10px;">
                        <div class="text">
                            Giỏ
                        </div>
                        <div style="color: white; font-size: 15px;margin-left: -3px;">
                            hàng
                        </div>
                    </div>
                </div>
                <div class="nav">
                    <div id="icon-user">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div style="font-size: 15px;margin-left: -3px;">
                        <a id="user" href="dangnhap.php"><span>Đăng nhập</span></a>
                    </div>
                </div>
            </div>
        </header>
        <div style="margin-left: 150px;">
            <div class="slide">
                <div class="img">
                    <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:595:0/q:80/plain/https://dashboard.cellphones.com.vn/storage/banner-cate-apple.png" alt="">
                </div>
                <div class="img">
                    <img src="https://cdn2.cellphones.com.vn/insecure/rs:fill:595:0/q:80/plain/https://dashboard.cellphones.com.vn/storage/apple-pay-cate-08.png" alt="" >
                </div>
            </div>
        </div>
    </div>
    <div style='margin-left:141px'>
    <a href='iphone.php'><span style='margin-left: 10px;border : 1px solid black;border-radius: 5px;padding:6px'><img src='logo-apple.png' width=130px height=20px></span></a>
        <?php
        require 'connect.php';
        mysqli_set_charset($conn,'UTF8');
        $sql = "SELECT * FROM loai_may";
        $result = $conn->query($sql);
        if ($result->num_rows>0)
            {
            
                while($row = $result->fetch_assoc())
                    {
                        if($row['id_loai_may'] == '1'){
                            echo '<a href="iphone-15.php" title="" target=""><span class="loai-may" style="background-color:lightgrey">IPHONE 15 SERIES</span></a>';
                            echo '<a href="iphone-14.php" title="" target=""><span class="loai-may">IPHONE 14 SERIES</span></a>';
                            echo '<a href="iphone-13.php" title="" target=""><span class="loai-may">IPHONE 13 SERIES</span></a>';
                            echo '<a href="iphone-12.php" title="" target=""><span class="loai-may">IPHONE 12 SERIES</span></a>';
                            echo '<a href="iphone-11.php" title="" target=""><span class="loai-may">IPHONE 11 SERIES</span></a>';
                        }
                    }}
        ?>
    </div>
    <section>
        <?php
            require 'connect.php';
            mysqli_set_charset($conn,'UTF8');
            $sql = "SELECT * FROM may INNER JOIN loai_may ON may.id_loai_may = loai_may.id_loai_may";
            $result = $conn->query($sql);
            if ($result->num_rows>0)
                {
                
                    while($row = $result->fetch_assoc())
                        {
                            if($row['id_loai_may'] == '5'){
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
                        }}
        ?>
    </section>