<?php
function parseQuestions($text) {
    $blocks = preg_split("/\r?\n\s*\r?\n/", trim($text));
    $questions = [];

    foreach ($blocks as $block) {
        $lines = array_values(array_filter(array_map('trim', preg_split("/\r?\n/", $block))));
        if (count($lines) === 0) continue;

        $questionText = array_shift($lines);
        $options = [];
        $answer = '';

        foreach ($lines as $line) {
            if (stripos($line, 'ANSWER') === 0) {
                $answer = trim(preg_replace('/^ANSWER\s*:?\s*/i', '', $line));
            } else {
                $options[] = $line;
            }
        }

        $questions[] = [
            'question' => $questionText,
            'options' => $options,
            'answer'  => $answer
        ];
    }

    return $questions;
}

$questions = [];

if (isset($_FILES['quizfile']) && $_FILES['quizfile']['error'] === UPLOAD_ERR_OK) {
    $content = file_get_contents($_FILES['quizfile']['tmp_name']);
    $questions = parseQuestions($content);
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Đề thi trắc nghiệm</title>
<style>
    body { font-family: Arial; max-width: 900px; margin: 20px auto; line-height: 1.6; }
    .question { border: 1px solid #ddd; background: #fafafa; padding: 15px; margin-bottom: 15px; border-radius: 8px; }
    .options { margin-top: 8px; padding-left: 18px; }
    .option { margin: 4px 0; }
    .answer { margin-top: 10px; color: green; font-weight: bold; }
</style>
</head>
<body>

<h2>Đề thi trắc nghiệm</h2>

<form method="POST" enctype="multipart/form-data" style="margin-bottom:18px;">
    <label>Chọn file .txt: </label>
    <input type="file" name="quizfile" accept=".txt" required>
    <button type="submit">Tải đề thi</button>
</form>

<?php if (empty($questions)): ?>
    <p>Chưa có đề thi. Hãy tải file TXT theo đúng định dạng.</p>
<?php endif; ?>

<?php foreach ($questions as $i => $q): ?>
    <div class="question">
        <strong>Câu <?= $i + 1 ?>:</strong> <?= htmlspecialchars($q['question']) ?>

        <div class="options">
            <?php foreach ($q['options'] as $opt): ?>
                <div class="option"><?= htmlspecialchars($opt) ?></div>
            <?php endforeach; ?>
        </div>

        <div class="answer">Đáp án đúng: <?= htmlspecialchars($q['answer']) ?></div>
    </div>
<?php endforeach; ?>

</body>
</html>
