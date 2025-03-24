<?php
require_once "./app/models/DangKyModel.php";

class DangKyController
{
    public function dangKy()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $maSV = $_POST["MaSV"];
            $maHP = $_POST["MaHP"];

            $model = new DangKyModel();
            if ($model->dangKyHocPhan($maSV, $maHP)) {
                echo "Đăng ký thành công!";
            } else {
                echo "Đăng ký thất bại!";
            }
        }
    }
    public function dangKyTam($maHP)
    {
        // Kiểm tra và khởi động session nếu chưa có
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Kiểm tra nếu $maHP không hợp lệ (tránh lỗi undefined hoặc trống)
        if (empty($maHP)) {
            header("Location: index.php?action=list&error=invalid_maHP");
            exit;
        }

        // Khởi tạo giỏ hàng nếu chưa tồn tại
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // Kiểm tra xem học phần đã có trong giỏ hàng chưa, tránh trùng lặp
        if (!in_array($maHP, $_SESSION['cart'], true)) {
            $_SESSION['cart'][] = $maHP;
        }

        // Chuyển hướng về trang danh sách học phần
        header("Location: index.php?action=list&success=added");
        exit;
    }

    public function xacNhanDangKy($maSV)
    {
        if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
            echo "Không có học phần nào trong giỏ hàng!";
            return;
        }

        require_once "models/DangKyModel.php";
        $model = new DangKyModel();

        foreach ($_SESSION['cart'] as $maHP) {
            $model->dangKyHocPhan($maSV, $maHP);
        }

        // Xóa giỏ hàng sau khi đăng ký thành công
        unset($_SESSION['cart']);

        echo "Đăng ký thành công!";
        header("Location: index.php?action=my_courses");
    }
}
