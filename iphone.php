<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type='text/javascript'>
        function tim_kiem_may(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200){
                    document.querySelector('#info').innerHTML = this.responseText;
                }
            }
            const ten_may = document.querySelector('#ten_may').value
            xmlhttp.open('GET', "search_may.php?ten_may=" + ten_may, true);
            xmlhttp.send();
        }
        document.addEventListener("DOMContentLoaded", function(){
            document.querySelector('#ten_may').onkeyup = tim_kiem_may;
        })
    </script>
    <link rel="stylesheet" href="iphone.css">
</head>
<body> 
    <?php
            // Thêm các đoạn mã kiểm tra quyền admin trước khi hiển thị chức năng thêm, sửa, xóa
            session_start();

            // Kiểm tra xem người dùng đã đăng nhập hay chưa
            if (isset($_SESSION['so_dien_thoai'])) {
                $so_dien_thoai = $_SESSION['so_dien_thoai'];
                $logined = '<a href="dangnhap-web.php"><span style="color:white" value="'.$so_dien_thoai.'">'.$so_dien_thoai.'</span></a>';

                // Lấy thông tin về quyền của người dùng từ cơ sở dữ liệu
                require 'connect.php'; // Điều chỉnh đường dẫn và tên file cho phù hợp
                $sql = "SELECT role_id FROM khach_hang WHERE so_dien_thoai = $so_dien_thoai";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $role_id = $row['role_id'];

                    // Nếu người dùng có quyền admin, thì hiển thị các chức năng thêm, sửa, xóa
                    if ($role_id === '1') {
                        $insert = "<a class='border rounded' href='insert-may-web.php'>Thêm máy</a>";
                        $delete = "<a class='border rounded' href='delete-iphone-web.php'>Xóa máy</a>";
                        $update = "<a class='border rounded' href='update-may-web.php'>Update máy</a>";
                    }
                }

                $conn->close();
            }
            else{
                $logined = '<a href="dangnhap-web.php"><span style="color:white" >Đăng nhập</span></a>';
            }
    ?>
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
                        <a id="user" href="dangnhap.php"><?= $logined ?></a>
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
        $sql = "SELECT * FROM hang";
        $result = $conn->query($sql);
        if ($result->num_rows>0)
            {
            
                while($row = $result->fetch_assoc())
                    {
                        if($row['id_hang'] == '1'){
                            echo '<a href="iphone-15.php" title="" target=""><span class="loai-may">IPHONE 15 SERIES</span></a>';
                            echo '<a href="iphone-14.php" title="" target=""><span class="loai-may">IPHONE 14 SERIES</span></a>';
                            echo '<a href="iphone-13.php" title="" target=""><span class="loai-may">IPHONE 13 SERIES</span></a>';
                            echo '<a href="iphone-12.php" title="" target=""><span class="loai-may">IPHONE 12 SERIES</span></a>';
                            echo '<a href="iphone-11.php" title="" target=""><span class="loai-may">IPHONE 11 SERIES</span></a>';
                        }
                    }}
        ?>
    <a id="user" href=""><?= $insert ?></a>
    <a id="user" href=""><?= $delete ?></a>
    <a id="user" href=""><?= $update ?></a>
    </div>
    
    
    <section id='info'>
        <?php
        require 'connect.php';
        mysqli_set_charset($conn,'UTF8');
        $sql = "SELECT * FROM may INNER JOIN loai_may ON may.id_loai_may = loai_may.id_loai_may
        INNER JOIN hang ON loai_may.id_hang_may = hang.id_hang";
        $result = $conn->query($sql);
        if ($result->num_rows>0)
            {
            
                while($row = $result->fetch_assoc())
                    {
                        if($row['id_hang'] == '1'){
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
                                echo '<a href="click_dt.php" title="" target="">
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
                            echo "<p>Giá:".$row['gia'].".000₫</p>";
                            echo "<a href=''>
                            <img src='gio-hang.jpg' alt='' width=15px><span>Mua hàng</span>
                            </a>";
                            echo '</div>';
                            
                        }   
                        
                    }
            }
        ?>
    </section>
    
</body>
<div style='border-top:1px solid black'></div>
<footer>
        <div class="footer_detail">
            <div>
                <p class="tong_dai">Tổng đài hỗ trợ miễn phí</p>
                <div class="footer_font_size">Gọi mua hàng <span style="font-weight: 900;">1800.2097</span> (7h30 - 22h00)</div>
                <div class="footer_font_size">Gọi khiếu nại <span style="font-weight: 900;">1800.2063</span> (8h00 - 21h30)</div>
                <div class="footer_font_size">Gọi bảo hành <span style="font-weight: 900;">1800.2064</span> (8h00 - 21h00)</div>
            </div>
            <div>
                <p class="tong_dai">Phương thức thanh toán</p>
                <div class="phuong_thuc_icon">
                    <div> 
                        <img src="https://cdn2.cellphones.com.vn/x35,webp/media/wysiwyg/apple-pay-og.png" alt=""><br>
                        <img src="https://cdn2.cellphones.com.vn/x35,webp/media/logo/payment/mpos-logo.png" alt=""><br>
                        <img src="https://cdn2.cellphones.com.vn/x/media/wysiwyg/fundiin.png" alt="">
                    </div>
                    <div>
                        <img src="https://cdn2.cellphones.com.vn/x35,webp/media/logo/payment/vnpay-logo.png" alt=""><br>
                        <img src="https://cdn2.cellphones.com.vn/x35,webp/media/logo/payment/kredivo-logo.png" alt="">
                    </div>
                    <div>
                        <img src="https://cdn2.cellphones.com.vn/x/media/wysiwyg/momo_1.png" alt=""><br>
                        <img src="https://cdn2.cellphones.com.vn/x35,webp/media/logo/payment/zalopay-logo.png" alt="">
                    </div>
                    <div>
                        <img src="https://cdn2.cellphones.com.vn/x35,webp/media/logo/payment/onepay-logo.png" alt=""><br>
                        <img src="https://cdn2.cellphones.com.vn/x35,webp/media/logo/payment/alepay-logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_detail">
            <p class="tong_dai">Thông tin chính sách</p>
            <ul class="ul_footer">
                <li class="footer_font_size">Mua hàng và thanh toán Online</li>
                <li class="footer_font_size">Mua hàng trả góp Online</li>
                <li class="footer_font_size">Chính sách giao hàng</li>
                <li class="footer_font_size">Tra điểm Smember</li>
                <li class="footer_font_size">Xem ưu đãi Smember</li>
                <li class="footer_font_size">Tra thông tin bảo hành</li>
                <li class="footer_font_size">Tra cứu hoá đơn điện tử</li>
                <li class="footer_font_size">Thông tin hoá đơn mua hàng</li>
                <li class="footer_font_size">Trung tâm bảo hành chính hãng</li>
                <li class="footer_font_size">Quy định về việc sao lưu dữ liệu</li>
            </ul>
        </div>
        <div class="footer_detail">
            <p class="tong_dai">Dịch vụ và thông tin khác</p>
            <ul class="ul_footer">
                <li class="footer_font_size">Khách hàng doanh nghiệp (B2B)</li>
                <li class="footer_font_size">Ưu đãi thanh toán</li>
                <li class="footer_font_size">Quy chế hoạt động</li>
                <li class="footer_font_size">Chính sách Bảo hành</li>
                <li class="footer_font_size">Liên hệ hợp tác kinh doanh</li>
                <li class="footer_font_size">Tuyển dụng</li>
                <li class="footer_font_size">Dịch vụ bảo hành điện thoại</li>
                <li class="footer_font_size">Dịch vụ bảo hành mở rộng</li>
            </ul>
        </div>
        <div class="footer_detail">
            <p class="tong_dai">Kết nối với CellphoneS</p>
            <div class="phuong_thuc_icon">
                <div><img src="https://cdn2.cellphones.com.vn/44x,webp/media/logo/social/cellphones-youtube.png" alt=""></div>
                <div><img src="https://cdn2.cellphones.com.vn/44x,webp/media/logo/social/cellphones-facebook.png" alt=""></div>
                <div><img src="https://cdn2.cellphones.com.vn/44x,webp/media/logo/social/cellphones-instagram.png" alt=""></div>
                <div><img src="https://cdn2.cellphones.com.vn/44x,webp/media/logo/social/cellphones-tiktok.png" alt=""></div>
                <div><img src="https://cdn2.cellphones.com.vn/44x,webp/media/logo/social/cellphones-zalo.png" alt=""></div>
            </div>
            <p class="tong_dai">Website thành viên</p>
            <div>
                <p class="footer_font_size">Hệ thống bảo hành sửa chữa Điện thoại - Máy tính</p>
                <div><img src="https://cdn2.cellphones.com.vn/x30,webp/media/logo/corp-members/dienthoaivui.png" alt=""></div>
            </div>
            <div>
                <p class="footer_font_size">Trung tâm bảo hành uỷ quyền Apple</p>
                <div><img src="https://cdn2.cellphones.com.vn/x/media/wysiwyg/Logo_CareS_1.png" alt=""></div>
            </div>
            <div>
                <p class="footer_font_size">Kênh thông tin giải trí công nghệ cho giới trẻ</p>
                <div><img src="https://cdn2.cellphones.com.vn/x30,webp/media/logo/corp-members/schanel.png" alt=""></div>
            </div>
            <div>
                <p class="footer_font_size">Trang thông tin công nghệ mới nhất</p>
                <div><img src="https://cdn2.cellphones.com.vn/x30,webp/media/logo/corp-members/sforum.png" alt=""></div>
            </div>
        </div>
    </footer>
</html>