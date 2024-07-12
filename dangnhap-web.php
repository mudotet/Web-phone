<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <style>
        header{
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
            margin-left: 25px;
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
            padding-right: 80px;
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
    </style>
</head>

<body>
    <header>
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
    </header>
    <section style="margin-left: 400px;margin-right: 400px;">
        <div>
            <div class="img-section">
                <img src="https://account.cellphones.com.vn/_nuxt/img/Shipper_CPS3.77d4065.png" width="20%">
                <h1>Đăng nhập tài khoản Smember</h1>
            </div>
        </div>
        <form action="login.php" method="post">
            <div class="text-section">
                <input id="text-section" type="text" placeholder="Nhập số điện thoại/email" name="so_dien_thoai">
            </div>
            <div class="text-section">
                <input id="text-section" type="password" placeholder="Nhập mật khẩu" name="mat_khau">
                <input type="hidden" value="1" name ="role_id">
            </div>
            <div style="text-align: right;">
                <p>Quên mật khẩu?</p>
            </div>
            <div>
                
                <input type="submit" value="Đăng nhập" class="submit" name="btnlogin">
            </div>
        </form>
       
        <div class="other-login">
            <hr>
            <p style="white-space: nowrap;font-size: 18px;">hoặc đăng nhập bằng</p>
            <hr>
        </div>
        <div id="sign-up">
            <div>
                <p>Bạn chưa có tài khoản?</p>
            </div>
            <div style="margin-top: 16px;margin-left: 5px;" >
                <a href="dang-ki-web.php">Đăng ký ngay</a>
            </div>
        </div>
    </section>
</body>
</html>