<?php

// اتصال بقاعدة البيانات

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
echo "<h3>تم الاتصال بقاعدة البيانات بنجاح</h3>";

// إنشاء جدول MyISAM

$sql_myisam = "
CREATE TABLE IF NOT EXISTS users_myisam (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50)
) ENGINE=MyISAM
";

if ($conn->query($sql_myisam) === TRUE) {
    echo "تم إنشاء جدول <b>MyISAM</b> بنجاح <br>";
} else {
    echo "خطأ في إنشاء جدول MyISAM: " . $conn->error . "<br>";
}

// إنشاء جدول InnoDB

$sql_innodb = "
CREATE TABLE IF NOT EXISTS users_innodb (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50)
) ENGINE=InnoDB
";

if ($conn->query($sql_innodb) === TRUE) {
    echo "تم إنشاء جدول <b>InnoDB</b> بنجاح <br>";
} else {
    echo "خطأ في إنشاء جدول InnoDB: " . $conn->error . "<br>";
}

// تجربة المعاملات مع InnoDB

$conn->begin_transaction();

try {
    $conn->query("INSERT INTO users_innodb (name) VALUES ('Ali')");
    $conn->query("INSERT INTO users_innodb (name) VALUES ('Ahmed')");
    
    // تنفيذ المعاملة
    $conn->commit();
    echo "تم تنفيذ المعاملة على جدول <b>InnoDB</b> بنجاح <br>";
} catch (Exception $e) {
    // التراجع عن المعاملة في حال حدوث خطأ
    $conn->rollback();
    echo "تم التراجع عن المعاملة بسبب خطأ <br>";
}

// إدراج بيانات في MyISAM (بدون معاملات)

$conn->query("INSERT INTO users_myisam (name) VALUES ('Sara')");
$conn->query("INSERT INTO users_myisam (name) VALUES ('Omar')");
echo "تم إدراج بيانات في جدول <b>MyISAM</b> بنجاح <br>";

// عرض البيانات من كلا الجدولين

echo "<h4>عرض البيانات من جدول MyISAM:</h4>";
$result_myisam = $conn->query("SELECT * FROM users_myisam");
while ($row = $result_myisam->fetch_assoc()) {
    echo "ID: " . $row['id'] . " - Name: " . $row['name'] . "<br>";
}

echo "<h4>عرض البيانات من جدول InnoDB:</h4>";
$result_innodb = $conn->query("SELECT * FROM users_innodb");
while ($row = $result_innodb->fetch_assoc()) {
    echo "ID: " . $row['id'] . " - Name: " . $row['name'] . "<br>";
}

// إغلاق الاتصال

$conn->close();
?>