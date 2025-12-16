<?php
//            طرق التعامل مع الملفات     

// فتح ملف للقراءة
$file = fopen("example.txt", "r") or die("Unable to open file!");
// قراءة محتوى الملف
$content = fread($file, filesize("example.txt"));
// إغلاق الملف
fclose($file);
echo $content;
//--------------------------------------------

//    كتابة في ملف

php
<?php
// فتح ملف للكتابة (إذا لم يوجد يتم إنشاؤه)
$file = fopen("example.txt", "w") or die("Unable to open file!");
$txt = "Hello World\n";
fwrite($file, $txt);
fclose($file);
//-------------------------------------------

//         إضافة محتوى إلى ملف موجود

php
<?php
$file = fopen("example.txt", "a") or die("Unable to open file!");
$txt = "Appended text\n";
fwrite($file, $txt);
fclose($file);

//------------------------------------------------


//               قراءة ملف سطر بسطر

php
<?php
$file = fopen("example.txt", "r") or die("Unable to open file!");
while(!feof($file)) {
  echo fgets($file) . "<br>";
}
fclose($file);

//------------------------------------------------

//            دوال مفيدة للتعامل مع الملفات

php
<?php
// فحص وجود الملف
if (file_exists("example.txt")) {
    echo "File exists.";
}

// معرفة حجم الملف
echo "File size: " . filesize("example.txt") . " bytes";

// نسخ الملف
copy("example.txt", "example_copy.txt");

// إعادة تسمية الملف
rename("example_copy.txt", "new_example.txt");

// حذف الملف
unlink("new_example.txt");

// قراءة الملف كسلسلة نصية
$content = file_get_contents("example.txt");

// كتابة محتوى إلى الملف (استبدال المحتوى القديم)
file_put_contents("example.txt", "New content");

//---------------------------------------------------------------------------

2. دوال الوقت والتاريخ في PHP

//                الوقت الحالي

php
<?php
// الوقت الحالي ك timestamp
echo time() . "<br>"; // عدد الثواني منذ 1 يناير 1970

// التاريخ والوقت الحاليين بصيغة نصية
echo date("Y-m-d H:i:s") . "<br>"; // 2023-12-25 14:30:00


//            تنسيق التاريخ والوقت

php
<?php
$timestamp = time();

echo date("Y-m-d", $timestamp) . "<br>"; // 2023-12-25
echo date("d/m/Y", $timestamp) . "<br>"; // 25/12/2023
echo date("l, F j, Y", $timestamp) . "<br>"; // Monday, December 25, 2023
echo date("h:i:s A", $timestamp) . "<br>"; // 02:30:00 PM


//           إنشاء timestamp من تاريخ

php
<?php
// mktime(hour, minute, second, month, day, year)
$timestamp = mktime(14, 30, 0, 12, 25, 2023);
echo date("Y-m-d H:i:s", $timestamp) . "<br>"; // 2023-12-25 14:30:00

// strtotime لتحويل نص تاريخ إلى timestamp
echo strtotime("now") . "<br>";
echo strtotime("10 September 2023") . "<br>";
echo strtotime("+1 day") . "<br>";
echo strtotime("next Monday") . "<br>";


//          مقارنة التواريخ

php
<?php
$date1 = strtotime("2023-12-25");
$date2 = strtotime("2023-12-31");

$diff = $date2 - $date1;
$days = floor($diff / (60 * 60 * 24));
echo "Difference: " . $days . " days<br>";


//                الكائن DateTime

php
<?php
// إنشاء كائن DateTime
$date = new DateTime();

echo $date->format('Y-m-d H:i:s') . "<br>";

// إضافة وقت
$date->add(new DateInterval('P10D')); // إضافة 10 أيام
echo $date->format('Y-m-d') . "<br>";

// طرح وقت
$date->sub(new DateInterval('P5D')); // طرح 5 أيام
echo $date->format('Y-m-d') . "<br>";

// مقارنة كائني DateTime
$date1 = new DateTime('2023-12-25');
$date2 = new DateTime('2023-12-31');

if ($date1 < $date2) {
    echo "Date1 is earlier than Date2<br>";
}

// الفرق بين تاريخين
$interval = $date1->diff($date2);
echo $interval->format('%R%a days'); // +6 days


//---------------------------------------------------------------

3. التعامل مع المنطقة الزمنية في PHP

//            إعداد المنطقة الزمنية

php
<?php
// عرض المنطقة الزمنية الحالية
echo date_default_timezone_get() . "<br>"; // UTC

// تغيير المنطقة الزمنية افتراضيًا
date_default_timezone_set('Africa/Cairo');
echo date_default_timezone_get() . "<br>"; // Africa/Cairo

// عرض الوقت بعد تغيير المنطقة الزمنية
echo date('Y-m-d H:i:s') . "<br>";


 //              قائمة المناطق الزمنية المتاحة

php
<?php
// الحصول على جميع المناطق الزمنية
$timezones = DateTimeZone::listIdentifiers();

foreach ($timezones as $timezone) {
    echo $timezone . "<br>";
}


//          مع المناطق الزمنية في كائن DateTime

php
<?php
// إنشاء كائن DateTime بمنطقة زمنية محددة
$date = new DateTime('now', new DateTimeZone('America/New_York'));
echo $date->format('Y-m-d H:i:s') . "<br>";

// تغيير المنطقة الزمنية لكائن DateTime
$date->setTimezone(new DateTimeZone('Asia/Riyadh'));
echo $date->format('Y-m-d H:i:s') . "<br>";


//          مثال عملي: تحويل الوقت بين المناطق الزمنية

php
<?php
// وقت في نيويورك
$newYorkTime = new DateTime('2023-12-25 10:00:00', new DateTimeZone('America/New_York'));

// تحويل إلى توقيت الرياض
$newYorkTime->setTimezone(new DateTimeZone('Asia/Riyadh'));
echo "Time in Riyadh: " . $newYorkTime->format('Y-m-d H:i:s') . "<br>";

// تحويل إلى توقيت القاهرة
$newYorkTime->setTimezone(new DateTimeZone('Africa/Cairo'));
echo "Time in Cairo: " . $newYorkTime->format('Y-m-d H:i:s') . "<br>";


//           حساب فروق التوقيت

php
<?php
$date1 = new DateTime('2023-12-25 10:00:00', new DateTimeZone('America/New_York'));
$date2 = new DateTime('2023-12-25 10:00:00', new DateTimeZone('Asia/Riyadh'));

// تحويل كلاهما إلى UTC للمقارنة
$date1->setTimezone(new DateTimeZone('UTC'));
$date2->setTimezone(new DateTimeZone('UTC'));

echo "Date1 (UTC): " . $date1->format('Y-m-d H:i:s') . "<br>";
echo "Date2 (UTC): " . $date2->format('Y-m-d H:i:s') . "<br>";

if ($date1 == $date2) {
    echo "The times are the same in UTC<br>";
} else {
    echo "The times are different in UTC<br>";
}

//----------------------------------------------------


