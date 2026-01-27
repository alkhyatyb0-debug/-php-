<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

echo "تم الاتصال بقاعدة البيانات بنجاح";

$conn->close();
?>