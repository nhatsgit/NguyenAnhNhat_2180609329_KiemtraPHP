<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Chỉnh Sửa Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h2>Chỉnh Sửa Sinh Viên</h2>
        <form action="index.php?action=update" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="MaSV" value="<?= $sinhVien['MaSV'] ?>">

            <label for="HoTen">Họ Tên:</label>
            <input type="text" name="HoTen" value="<?= $sinhVien['HoTen'] ?>" required>

            <label>Giới Tính:</label>
            <select name="GioiTinh">
                <option value="Nam" <?= ($sinhVien['GioiTinh'] == 'Nam') ? 'selected' : '' ?>>Nam</option>
                <option value="Nữ" <?= ($sinhVien['GioiTinh'] == 'Nữ') ? 'selected' : '' ?>>Nữ</option>
            </select>

            <label for="NgaySinh">Ngày Sinh:</label>
            <input type="date" name="NgaySinh" value="<?= $sinhVien['NgaySinh'] ?>" required>

            <label for="MaNganh">Ngành Học:</label>
            <select name="MaNganh">
                <?php foreach ($nganhs as $nganh): ?>
                    <option value="<?= $nganh['MaNganh'] ?>"><?= htmlspecialchars($nganh['TenNganh']) ?></option>
                <?php endforeach; ?>
            </select>

            <label for="Hinh">Chọn Hình Ảnh:</label>
            <input type="file" name="Hinh">
            <img src="public/uploads/<?= $sinhVien['Hinh'] ?>" width="50">

            <button type="submit">Cập Nhật</button>
        </form>
    </div>
</body>

</html>