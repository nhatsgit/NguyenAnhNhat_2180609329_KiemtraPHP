<?php
require_once 'app/controllers/SinhVienController.php';
require_once 'app/controllers/HocPhanController.php';
require_once 'app/controllers/DangKyController.php';
require_once 'app/controllers/AuthController.php';

$controller = new SinhVienController();
$hocphan = new HocPhanController();
$dangky = new DangKyController();
$auth = new AuthController();
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

if ($action == 'create') $controller->create();
elseif ($action == 'store') $controller->store();
elseif ($action == 'list') $controller->cart();
elseif ($action == 'edit') $controller->edit($id);
elseif ($action == 'update') $controller->update($id);
elseif ($action == 'delete') $controller->delete($id);
elseif ($action == 'detail') $controller->detail($id);
elseif ($action == 'listhp') $hocphan->index($id);
elseif ($action == 'dangky') $dangky->dangKy($id);
elseif ($action == 'addcart') $dangky->dangKyTam($id);
elseif ($action == 'login') $auth->login($id);
elseif ($action == 'logout') $auth->logout($id);
else $controller->index();
