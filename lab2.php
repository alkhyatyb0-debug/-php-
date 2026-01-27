<?php
date_default_timezone_set("Asia/Aden");

$filename = "log.txt";
$content  = "تم الدخول  بتاريخ: " . date("Y-m-d H:i:s") . "\n";

file_put_contents($filename, $content, FILE_APPEND);

echo "<h4>سجل :</h4>";
echo nl2br(file_get_contents($filename));
?>