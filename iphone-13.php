<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <style>
        .img-header{
            display: flex;
        }
        .img-one-more{
            margin: auto;
            width: 374px;
        }
        header{
            margin-top:-5px;
        }
        .banner-tophead{
            background-color: #e9efff;
            padding: 5px;
        }
        .nav{
            text-align: right;
        }
        a{
            text-decoration: none;
        }
        .img{
            height: auto;
            max-width: 100%;
            margin-right: 30px;
        }
        .slide{
            display: flex;
            margin-top: 10px;
            margin-bottom:10px
        }
        .img img{
            border-radius: 5px;
        }
        .subject-header{
            background-color: rgb(221, 27, 26);
            display: flex;
            width: 100%;
            height: 45px;
        }
        .logo{
            margin-top: -15px;
            margin-left: 8%;
        }
        .danh_muc{
           
            display:flex ;
            border: 1px solid rgb(200, 198, 198,0);
            background-color:hsla(0,0%,100%,.2); 
            border-radius: 10px;
            padding: 10px 0px ;
            margin: 5px 0px;
            margin-left: -44%; 
            background: rgba(200, 198, 198, 0.3);
            
        }
        #icon{
        
            color: white;
            font-size: 13px;
            margin-left: 5px;
        }
        #text{
        
            color: white;
            margin:-1px 7px;
            font-size: 13px;
        }
        #icon-map{
            margin-top: 10px;
            color: white;
            margin-left: 12px;
        }
        .map{
            display: flex;
            border: 1px solid rgb(200, 198, 198,0);
            background-color:hsla(0,0%,100%,.2); 
            border-radius: 10px;
            background: rgba(200, 198, 198, 0.3);
            margin: 5px 17px;
        }
        .text{
            color: white;
            margin-left: -5px;
            font-size: 13px;
            margin-right: 15px;
           
        }
        .phone{
            display: flex;
            margin-top: 5px;
            margin-left: 100px;
            margin-bottom: 5px;
            margin-right: 17px;
        }
        .locate{
            display: flex;
            margin: 5px 17px;
        }
        .truck{
            display: flex;
            margin: 5px 17px;
        }
        #icon-phone{
            margin-top: 10px;
            color: white;
            margin-left: 12px;
        }
        #icon-locate{
            margin-top: 10px;
            color: white;
            margin-left: 12px;
        }
        #icon-truck{
            margin-top: 10px;
            color: white;
            margin-left: 12px;
        }
        #icon-cart{
            margin-top: 10px;
            color: white;
            margin-left: 12px;
        }
        #icon-user{
            margin-top: 5px;
            color: white;
            padding-right: 30px;
        }
        .cart{
            display: flex;
            margin: 5px 17px;
        }
        .nav{
            border: 1px solid rgb(200, 198, 198,0);
            background-color:hsla(0,0%,100%,.2); 
            border-radius: 10px;
            background: rgba(200, 198, 198, 0.3);
            margin-left: 10px;
            padding: 0 10px;
        }
        #user{
            text-decoration: none;
            color: white;
        }
        .img{
            height: auto;
            max-width: 100%;
            margin-right: 30px;
        }
        .phone:hover{
            border: 1px solid rgb(200, 198, 198,0);
            background-color:hsla(0,0%,100%,.2); 
            border-radius: 10px;
            background: rgba(200, 198, 198, 0.3);
        }
        .truck:hover{
            border: 1px solid rgb(200, 198, 198,0);
            background-color:hsla(0,0%,100%,.2); 
            border-radius: 10px;
            background: rgba(200, 198, 198, 0.3);
        }
        .locate:hover{
            border: 1px solid rgb(200, 198, 198,0);
            background-color:hsla(0,0%,100%,.2); 
            border-radius: 10px;
            background: rgba(200, 198, 198, 0.3);
        }
        .user:hover{
            border: 1px solid rgb(200, 198, 198,0);
            background-color:hsla(0,0%,100%,.2); 
            border-radius: 10px;
            background: rgba(200, 198, 198, 0.3);
        }
        .cart:hover{
            border: 1px solid rgb(200, 198, 198,0);
            background-color:hsla(0,0%,100%,.2); 
            border-radius: 10px;
            background: rgba(200, 198, 198, 0.3);
        }
        .cps-input{
            border: 0;
            border-radius: 10px 10px 10px 10px;
            font-size: 16px;
            height: 34px;
            outline: none;
            margin-top: 5px;
            width: 100%;
            padding-right: 90px;
        }
        .img-section{
            text-align: center;
            margin-top: 100px;
        }
        .text-section{
            background-color: #fff;
            border-radius: 0;
            box-sizing: border-box;
            font-size: 15px;
            height: 100%;
            line-height: 24px;
            padding: 20px 20px 2px 0;
            width: 100%;
            margin-top: 20px;
            border: 0;
        }
        #text-section{
            border: 0;
            border-bottom: 1px solid rgba(145,158,171,.2);
            font-size: 15px;
            width : 30%;
            height: 40%;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 500px;
            outline:none;
            /* outline để mất viền khung */
        }
        .submit{
            padding-right: 640px;
            background: #e0052b;
            color: #fff;
            border-radius: 5px;
            display: block;
            font-size: 14px;
            font-weight: 600;
            margin: 20px auto 0;
            padding: 11px 0;
            text-align: center;
            width: 100%;
            border: 0;
        }
        .other-login hr{
            background-color: #dbdbdb;
            height: 1px;
            width: 100%;
        }
        .other-login{
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            
        }
        hr{
            border: none;
            display: block;
            height: 2px;
            margin: 1.5rem 1.5rem;
        }
        a{
            text-decoration: none;
            color: red;
            font-weight: bold;
        }
        #sign-up{
            display: flex;
        }
        .box-search i{
            position: absolute;
            font-size:15px;
            margin-left:335px;
            margin-top:-24px;
        }
        section{
            display: grid;
            grid-template-columns: 19% 19% 19% 19% 19%;
            margin-top:100px;
            margin-left:150px;
            margin-right:73px;
        }
        .may{
            border: 1px solid  black;
            text-align: center;
            margin-bottom: 5px;
            margin-left: 10px;
            border-radius:10px;
        }
        .loai-may{
            margin-left: 10px;
            border : 1px solid black;
            border-radius: 5px; 
            padding:6px
            
        }
        
    </style>
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
                            echo '<a href="iphone-15.php" title="" target=""><span class="loai-may">IPHONE 15 SERIES</span></a>';
                            echo '<a href="iphone-14.php" title="" target=""><span class="loai-may">IPHONE 14 SERIES</span></a>';
                            echo '<a href="iphone-13.php" title="" target=""><span class="loai-may" style="background-color:lightgrey">IPHONE 13 SERIES</span></a>';
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
                            if($row['id_loai_may'] == '3'){
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