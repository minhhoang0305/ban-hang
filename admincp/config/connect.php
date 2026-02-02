<?php
$mysqli = new mysqli("db", "root", "root", "banhang");

if ($mysqli->connect_errno) {
    die("Kết nối thất bại: " . $mysqli->connect_error);
}
