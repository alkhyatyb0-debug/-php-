<?php
$text = "Hello World";

// طول النص
echo strlen($text); // 11

// عدد الكلمات
echo str_word_count($text); // 2

// عكس النص
echo strrev($text); // "dlroW olleH"

// تكرار النص
echo str_repeat("Hi ", 3); // "Hi Hi Hi "

// تحويل إلى حروف صغيرة
echo strtolower($text); // "hello world"

// تحويل إلى حروف كبيرة
echo strtoupper($text); // "HELLO WORLD"

// أول حرف كبير
echo ucfirst("hello"); // "Hello"

// أول حرف كبير لكل كلمة
echo ucwords("hello world"); // "Hello World"
?>


<?php
$text = "Hello World, Welcome to PHP";

// البحث عن موضع نص
echo strpos($text, "World"); // 6
echo stripos($text, "world"); // 6 (غير حساس لحالة الأحرف)

// البحث عن نص وإرجاع الجزء المتبقي
echo strstr($text, "Welcome"); // "Welcome to PHP"

// استبدال نص
echo str_replace("PHP", "JavaScript", $text);
echo str_ireplace("php", "JavaScript", $text); // غير حساس لحالة الأحرف

// استبدال جزء من النص
echo substr_replace($text, "Universe", 6, 5); // "Hello Universe, Welcome to PHP"
?>

<?php
$text = "apple,banana,orange";

// تقسيم النص إلى مصفوفة
$fruits = explode(",", $text);

// دمج مصفوفة إلى نص
$newText = implode(" - ", $fruits); // "apple - banana - orange"

// تقسيم النص إلى أجزاء
$chunks = str_split($text, 5); // كل جزء 5 أحرف

// إزالة المسافات الزائدة
$spacedText = "   Hello World   ";
echo trim($spacedText);   // "Hello World"
echo ltrim($spacedText);  // "Hello World   "
echo rtrim($spacedText);  // "   Hello World"
?>

<?php
// تنسيق النص
$name = "Ali";
$age = 25;
echo sprintf("اسمي %s وعمري %d سنة", $name, $age);

// مقارنة النصوص
echo strcmp("hello", "hello"); // 0 (متساويين)
echo strcasecmp("HELLO", "hello"); // 0 (غير حساس لحالة الأحرف)

// الحصول على جزء من النص
$text = "Hello World";
echo substr($text, 6);    // "World"
echo substr($text, 0, 5); // "Hello"
echo substr($text, -3);   // "rld"

// إضافة مسافات أو أحرف
echo str_pad("Hello", 10, "*"); // "Hello*****"
echo str_pad("Hello", 10, "*", STR_PAD_LEFT); // "*****Hello"
?>

<?php
// إزالة علامات HTML
$userInput = "<script>alert('hello')</script>";
echo htmlspecialchars($userInput);

// تشفير وفك تشفير
$encoded = urlencode("Hello World & More");
echo $encoded; // "Hello+World+%26+More"
echo urldecode($encoded);

// إضافة شرطات مائلة
$path = "path/to/file";
echo addslashes($path);
?>


<?php
$longText = "This is a very long text that needs to be processed";

// كسر النص إلى أسطر
$wrapped = wordwrap($longText, 10, "<br>\n");

// إيجاد آخر ظهور لنص
$filename = "image.jpg.png";
echo strrpos($filename, "."); // 9
echo strrchr($filename, "."); // .png

// مقارنة بدون حساسية حالة الأحرف
echo strcasecmp("Hello", "hello"); // 0

// مقارنة جزء من النص
echo substr_compare("Hello World", "Hello", 0, 5); // 0
?>



<?php
$longText = "This is a very long text that needs to be processed";

// كسر النص إلى أسطر
$wrapped = wordwrap($longText, 10, "<br>\n");

// إيجاد آخر ظهور لنص
$filename = "image.jpg.png";
echo strrpos($filename, "."); // 9
echo strrchr($filename, "."); // .png

// مقارنة بدون حساسية حالة الأحرف
echo strcasecmp("Hello", "hello"); // 0

// مقارنة جزء من النص
echo substr_compare("Hello World", "Hello", 0, 5); // 0
?>


<?php
$text = "Hello World";

// تشفير
$md5 = md5($text);
$sha1 = sha1($text);
$crc = crc32($text);

// base64
$encoded = base64_encode($text);
$decoded = base64_decode($encoded);

// تشفير وفك تشفير rot13
$rot13 = str_rot13($text);
$original = str_rot13($rot13);

// توليد نص عشوائي
$random = bin2hex(random_bytes(16));
?>


<?php
$path = "/var/www/html/index.php";

// معلومات الملف
echo basename($path); // index.php
echo dirname($path); // /var/www/html
echo pathinfo($path, PATHINFO_EXTENSION); // php

$pathInfo = pathinfo($path);
/*
[
    "dirname" => "/var/www/html",
    "basename" => "index.php",
    "extension" => "php",
    "filename" => "index"
]
*/
?>



<?php
// تحويل إلى كود HTML
$text = "Hello <world>";
echo htmlentities($text); // Hello &lt;world&gt;
echo htmlspecialchars($text); // Hello &lt;world&gt;

// إزالة العلامات
$html = "<p>Hello <b>World</b></p>";
echo strip_tags($html); // Hello World
echo strip_tags($html, "<p>"); // <p>Hello World</p>

// تحويل الأحرف الخاصة في URLs
$url = "Hello World & More!";
echo rawurlencode($url); // Hello%20World%20%26%20More%21
echo urlencode($url); // Hello+World+%26+More%21

// تنسيق الأرقام
echo number_format(1234567.89, 2, ",", "."); // 1.234.567,89
echo money_format("%i", 1234.56); // depends on locale
?>



<?php
$text = "The quick brown fox jumps over the lazy dog";

// البحث باستخدام نمط
preg_match("/quick.*fox/", $text, $matches);
// $matches[0] = "quick brown fox"

// البحث عن جميع التطابقات
preg_match_all("/\b\w{3}\b/", $text, $matches);
// كلمات من 3 أحرف

// الاستبدال باستخدام نمط
$newText = preg_replace("/\b\w{4}\b/", "****", $text);
// استبدال كلمات من 4 أحرف

// تقسيم باستخدام نمط
$words = preg_split("/\s+/", $text);
?>



<?php
// تحويل ترميز النص
$utf8Text = "مرحبا بالعالم";
// $isoText = iconv("UTF-8", "ISO-8859-6", $utf8Text);

// دوال mb_ للتعامل مع المحارف متعددة البايت
echo mb_strlen("مرحبا"); // 5
echo mb_substr("مرحبا بالعالم", 0, 5); // "مرحبا"
echo mb_strpos("مرحبا بالعالم", "بالعالم"); // 6

// تحويل حالة الأحرف مع دعم اليونيكود
echo mb_strtolower("Hello World"); // hello world
echo mb_strtoupper("Hello World"); // HELLO WORLD
?>


<?php
// توليد نص من أحرف عشوائية
$randomString = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 10);

// إنشاء نص لوريم إيبسوم
// $lorem = "Lorem ipsum dolor sit amet...";

// تحويل المصفوفة إلى نص مع تنسيق
$data = ["name" => "Ali", "age" => 25];
echo http_build_query($data); // name=Ali&age=25

// نسخ جزء من النص
$source = "Hello World";
$dest = "";
strcpy($dest, $source);
?>


<?php
// التحقق من نوع المحتوى
$text1 = "Hello123";
$text2 = "12345";
$text3 = "12.34";

echo ctype_alpha($text1); // false
echo ctype_alnum($text1); // true
echo ctype_digit($text2); // true
echo ctype_print($text1); // true
echo is_numeric($text3); // true

// التحقق من البداية والنهاية
$filename = "document.pdf";
echo str_starts_with($filename, "document"); // true
echo str_ends_with($filename, ".pdf"); // true
?>





