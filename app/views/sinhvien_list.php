<!-- sinhvien_list.php -->
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="container mt-4">
    <h2 class="text-center">Danh sách Sinh Viên</h2>
    <a href="index.php?action=create" class="btn btn-primary mb-3">Thêm Sinh Viên</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Mã SV</th>
                <th>Họ Tên</th>
                <th>Giới Tính</th>
                <th>Ngày Sinh</th>
                <th>Ngành</th>
                <th>Hình</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $sinhViens->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['MaSV'] ?></td>
                    <td><?= $row['HoTen'] ?></td>
                    <td><?= $row['GioiTinh'] ?></td>
                    <td><?= date('d/m/Y', strtotime($row['NgaySinh'])) ?></td>
                    <td><?= $row['TenNganh'] ?></td>
                    <td>
                        <img src="public/uploads/<?= $row['Hinh'] ?>" class="img-thumbnail" width="50" alt="Hình SV">
                    </td>
                    <td>
                        <a href="index.php?action=edit&id=<?= $row['MaSV'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                        <a href="index.php?action=delete&id=<?= $row['MaSV'] ?>" class="btn btn-danger btn-sm">Xóa</a>
                        <a href="index.php?action=detail&id=<?= $row['MaSV'] ?>" class="btn btn-danger btn-sm">Chi tiết</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>