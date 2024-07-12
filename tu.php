<?php
// Thêm các đoạn mã kiểm tra quyền admin trước khi hiển thị chức năng thêm, sửa, xóa
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (isset($_SESSION['so_dien_thoai'])) {
    $so_dien_thoai = $_SESSION['so_dien_thoai'];

    // Lấy thông tin về quyền của người dùng từ cơ sở dữ liệu
    require 'connect.php'; // Điều chỉnh đường dẫn và tên file cho phù hợp
    $sql = "SELECT role_id FROM khach_hang WHERE so_dien_thoai = $so_dien_thoai";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $role_id = $row['role_id'];

        // Nếu người dùng có quyền admin, thì hiển thị các chức năng thêm, sửa, xóa
        if ($role_id === '1') {
            echo "<div>";
            echo "<ul>";
            echo "<li><a href='them_hang.php' style='color:#444;'>Thêm hãng</a></li>";
            echo "<li><a href='xoa_hang.php' style='color:#444;'>Xóa hãng</a></li>";
            echo "<li><a href='show_hang.php' style='color:#444;'>Sửa hãng</a></li>";
            echo "<li><a href='search_hang_loaimay.php' style='color:#444;'>Tìm hãng</a></li>";
            echo "</ul>";
            echo "</div>";
        }
    }

    $conn->close();
}
?>