<?php
$rows = [];

if (isset($_FILES["csvfile"]) && $_FILES["csvfile"]["error"] === UPLOAD_ERR_OK) {
    $file = fopen($_FILES["csvfile"]["tmp_name"], "r");

    // Đọc từng dòng CSV
    while (($data = fgetcsv($file, 1000, ",")) !== false) {
        $rows[] = $data;
    }

    fclose($file);
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Đọc tệp CSV</title>
<style>
    body { font-family: Arial; margin: 20px; }
    table { border-collapse: collapse; width: 100%; margin-top: 20px; }
    th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
    th { background: #f0f0f0; }
</style>
</head>
<body>

<h2>Đọc và hiển thị nội dung tệp CSV</h2>

<form method="POST" enctype="multipart/form-data">
    <label>Chọn tệp CSV:</label>
    <input type="file" name="csvfile" accept=".csv" required>
    <button type="submit">Tải dữ liệu</button>
</form>

<?php if (!empty($rows)): ?>
    <table>
        <thead>
            <tr>
                <?php foreach ($rows[0] as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i < count($rows); $i++): ?>
                <tr>
                    <?php foreach ($rows[$i] as $cell): ?>
                        <td><?= htmlspecialchars($cell) ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
<?php endif; ?>

</body>
</html>
