<?php
$db_conn = pg_connect("host=localhost dbname=stasya user=postgres password=password")
    or die("Ошибка подключения к БД: " . pg_last_error());
?>
