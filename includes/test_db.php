<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$conn = pg_connect("host=localhost dbname=stasya user=postgres password=password");
if (!$conn) {
    die("Ошибка подключения: " . pg_last_error());
}
echo "Подключение к PostgreSQL успешно!";
pg_close($conn);
?>
