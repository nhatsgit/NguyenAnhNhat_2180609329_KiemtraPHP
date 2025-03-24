<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Đăng nhập</h2>
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Mã Sinh Viên</label>
                <input type="text" name="MaSV" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
    </div>
</body>

</html>