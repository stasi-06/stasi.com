<?php
include 'includes/db.php';

$result = pg_query($db_conn, "SELECT * FROM articles ORDER BY created_at DESC");

while ($row = pg_fetch_assoc($result)) {
    echo "<div class='article'>
            <h2>" . htmlspecialchars($row['title']) . "</h2>
            <p>" . nl2br(htmlspecialchars($row['content'])) . "</p>
            <small>Дата: " . $row['created_at'] . "</small>
            <hr>
          </div>";
}
?>
