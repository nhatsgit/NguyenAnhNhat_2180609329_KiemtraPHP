<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once "./app/models/HocPhanModel.php";

class HocPhanController
{
    public function index()
    {
        if (!isset($_SESSION["MaSV"])) {
            header("Location: index.php?action=login");
            exit();
        }

        $model = new HocPhanModel();
        $hocPhans = $model->getAllHocPhan();
        include "./app/views/hocphan_list.php";
    }
}
