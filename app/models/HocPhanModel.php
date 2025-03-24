<?php
require_once "Database.php";

class HocPhanModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    public function getAllHocPhan()
    {
        $sql = "SELECT * FROM HocPhan";
        return $this->conn->query($sql);
    }

    public function getHocPhanById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM HocPhan WHERE MaHP = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
