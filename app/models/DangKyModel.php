<?php
require_once "Database.php";

class DangKyModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    public function dangKyHocPhan($maSV, $maHP)
    {
        // Kiểm tra xem sinh viên đã có MaDK trong bảng DangKy chưa
        $stmt = $this->conn->prepare("SELECT MaDK FROM DangKy WHERE MaSV = ?");
        $stmt->bind_param("s", $maSV);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if (!$row) {
            // Nếu sinh viên chưa có MaDK, thêm mới vào bảng DangKy
            $stmt = $this->conn->prepare("INSERT INTO DangKy (NgayDK, MaSV) VALUES (NOW(), ?)");
            $stmt->bind_param("s", $maSV);
            $stmt->execute();

            // Lấy MaDK vừa tạo
            $maDK = $this->conn->insert_id;
        } else {
            $maDK = $row["MaDK"];
        }

        // Thêm vào bảng ChiTietDangKy
        $stmt = $this->conn->prepare("INSERT INTO ChiTietDangKy (MaDK, MaHP) VALUES (?, ?)");
        $stmt->bind_param("is", $maDK, $maHP);
        return $stmt->execute();
    }
}
