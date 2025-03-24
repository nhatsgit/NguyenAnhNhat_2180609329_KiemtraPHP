<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="container mt-4">
    <h2 class="text-center">Chi Tiết Sinh Viên</h2>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="public/uploads/<?= $student['Hinh'] ?>" class="img-thumbnail" alt="Hình SV">
                </div>
                <div class="col-md-8">
                    <p><strong>Mã SV:</strong> <?= $student['MaSV'] ?></p>
                    <p><strong>Họ Tên:</strong> <?= $student['HoTen'] ?></p>
                    <p><strong>Giới Tính:</strong> <?= $student['GioiTinh'] ?></p>
                    <p><strong>Ngày Sinh:</strong> <?= date('d/m/Y', strtotime($student['NgaySinh'])) ?></p>
                    <p><strong>Ngành Học:</strong> <?= $student['TenNganh'] ?></p>
                    <a href="index.php" class="btn btn-secondary">Quay lại</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>