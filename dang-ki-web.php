<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dang-ki.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            document.querySelector('#submit').disabled = true;
            document.querySelector('#ten_tai_khoan').onkeyup = function(){ //An dong thong bao <span>
                if(document.querySelector('#ten_tai_khoan').value.length >=5){
                    
                    document.querySelector('#check_login').textContent  = ``
                }
                else{
                    document.querySelector('#submit').disabled = true;
                    document.querySelector('#check_login').textContent  = `Ten dang nhap can 5 ki tu tro len`
                }
                document.querySelector('#check').onclick = check;
                function check() {
                    const check_pass = document.querySelector('#check_mat_khau').value;
                    const pass = document.querySelector('#mat_khau').value;
                    const email = document.querySelector('#email').value;
                    if(check_pass != pass){
                        alert("Nhap lai mat khau khong dung")
                    }
                    else if (email.indexOf('@') === -1) {
                        alert("Email cần chứa ký tự @");
                    }
                    else{
                        alert("Co the dang ki thanh cong")
                        document.querySelector('#submit').disabled = false;
                    }
                }
            }
        })
    </script>
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
                    <form method='get'>
                        <input class="cps-input" type="text" placeholder="Bạn cần tìm gì?" id="ten_may">
                    </form>
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
        
    </div>
    <form action='dang-ki.php' method="get">
        <div class="border">
            <img class="logo-cell" src="logo-cell.png" width=30%>
            <h1>Đăng ký tài khoản Smember</h1>
            <p>Tên tài khoản</p> 
                <input type="text" name="ten_tai_khoan" id="ten_tai_khoan"/><br/>
            <span id="check_login"></span>
            <p>Mật khẩu</p>
                <input type="text" name="mat_khau" id = "mat_khau"/><br/>
            <p>Nhập lại mật khẩu</p>
                <input type="text" name="check_mat_khau" id="check_mat_khau"/><br/>
            <p>Email</p>
                <input type="text" name="email" id="email"/><br/>
            <p>Số điện thoại</p>
                <input type="text" name="so_dien_thoai" id="so_dien_thoai"/><br/>
                <input class="submit-button1" type="button" value="Check" id="check"><input class="submit-button" type="submit" value="Đăng ký" id="submit" style="margin-left:40px"/>
        
        
    </form>
    <p style="text-align:center">Bạn đã có tài khoản? <a href="dangnhap-web.php"><span>Đăng nhập ngay</span></a></p>
</html>