<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Thêm Sinh Viên</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class="container">
        <h2>Thêm Sinh Viên</h2>
        <form action="index.php?action=store" method="POST" enctype="multipart/form-data">
            <label for="MaSV">Mã SV:</label>
            <input type="text" name="MaSV" required>

            <label for="HoTen">Họ Tên:</label>
            <input type="text" name="HoTen" required>

            <label>Giới Tính:</label>
            <select name="GioiTinh">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>

            <label for="NgaySinh">Ngày Sinh:</label>
            <input type="date" name="NgaySinh" required>

            <label for="MaNganh">Ngành Học:</label>
            <select name="MaNganh">
                <?php foreach ($nganhs as $nganh): ?>
                    <option value="<?= $nganh['MaNganh'] ?>"><?= htmlspecialchars($nganh['TenNganh']) ?></option>
                <?php endforeach; ?>
            </select>

            <label for="Hinh">Chọn Hình Ảnh:</label>
            <input type="file" name="Hinh">

            <button type="submit">Lưu</button>
        </form>
    </div>
</body>

</html>