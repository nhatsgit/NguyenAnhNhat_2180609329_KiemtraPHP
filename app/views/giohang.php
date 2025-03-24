<h2>Giỏ Hàng Đăng Ký</h2>
<table>
    <tr>
        <th>Mã HP</th>
        <th>Hành động</th>
    </tr>
    <?php if (!empty($cart)): ?>
        <?php foreach ($cart as $maHP): ?>
            <?php if (!empty($maHP)): ?> <!-- Kiểm tra tránh null -->
                <tr>
                    <td><?= htmlspecialchars($maHP, ENT_QUOTES, 'UTF-8') ?></td>
                    <td><a href="index.php?action=remove_from_cart&maHP=<?= urlencode($maHP) ?>">Xóa</a></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">Giỏ hàng trống</td>
        </tr>
    <?php endif; ?>
</table>
<a href="index.php?action=confirm_registration">Xác nhận đăng ký</a>