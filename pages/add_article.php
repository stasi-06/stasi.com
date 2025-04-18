<?php
include '../includes/db.php';

// Обработка отправки формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = pg_escape_string($_POST['title']);
    $content = pg_escape_string($_POST['content']);

    $result = pg_query_params(
        $db_conn,
        "INSERT INTO articles (title, content) VALUES ($1, $2)",
        [$title, $content]
    );

    if ($result) {
        header("Location: /articles.php");
        exit;
    } else {
        echo "Ошибка: " . pg_last_error($db_conn);
    }
}
?>

<h2>Добавить статью</h2>
<form method="POST" action="">
    <label>Заголовок:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Содержание:</label><br>
    <textarea name="content" rows="5" cols="40" required></textarea><br><br>

    <button type="submit">Добавить статью</button>
</form>
