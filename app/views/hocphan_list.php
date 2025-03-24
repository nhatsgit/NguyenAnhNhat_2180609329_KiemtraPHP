<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Danh sách Học Phần</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h2>Danh sách Học Phần</h2>
            <div>
                <span class="me-3">Xin chào, <?= $_SESSION["MaSV"] ?></span>
                <a href="index.php?action=logout" class="btn btn-danger btn-sm">Đăng xuất</a>
            </div>
        </div>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Mã HP</th>
                    <th>Tên Học Phần</th>
                    <th>Số Tín Chỉ</th>
                    <th>Đăng Ký</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $hocPhans->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row["MaHP"] ?></td>
                        <td><?= $row["TenHP"] ?></td>
                        <td><?= $row["SoTinChi"] ?></td>
                        <td>
                            <form action="index.php?action=addcart" method="POST">
                                <input type="hidden" name="MaHP" value="<?= $row["MaHP"] ?>">
                                <input type="hidden" name="MaSV" value="<?= $_SESSION["MaSV"] ?>">
                                <button type="submit" class="btn btn-primary btn-sm">Đăng Ký</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>