<?php
// إنشاء مصفوفة
$fruits = array("apple", "banana", "orange");
$numbers = [1, 2, 3, 4, 5];

// إضافة عنصر
array_push($fruits, "grape");
$fruits[] = "mango"; // الطريقة المختصرة

// حذف آخر عنصر
array_pop($fruits);

// حذف أول عنصر
array_shift($fruits);

// إضافة في البداية
array_unshift($fruits, "strawberry");
?>

<?php
$numbers = [1, 2, 3, 4, 5];

// عدد العناصر
echo count($numbers); // 5

// البحث عن عنصر
echo in_array(3, $numbers); // true

// دمج مصفوفات
$array1 = [1, 2];
$array2 = [3, 4];
$merged = array_merge($array1, $array2);

// استخراج جزء من المصفوفة
$slice = array_slice($numbers, 1, 3); // [2, 3, 4]

// فرز المصفوفة
sort($numbers); // تصاعدي
rsort($numbers); // تنازلي

// الحصول على المفاتيح
$keys = array_keys(["name" => "Ali", "age" => 25]); // ["name", "age"]

// الحصول على القيم
$values = array_values(["name" => "Ali", "age" => 25]); // ["Ali", 25]
?>

<?php
$users = [
    ["name" => "Ali", "age" => 25],
    ["name" => "Sara", "age" => 30]
];

// array_map - تطبيق دالة على كل عنصر
$names = array_map(function($user) {
    return $user['name'];
}, $users);

// array_filter - تصفية المصفوفة
$adults = array_filter($users, function($user) {
    return $user['age'] >= 18;
});

// array_reduce - اختزال المصفوفة
$totalAge = array_reduce($users, function($carry, $user) {
    return $carry + $user['age'];
}, 0);
?>

<?php
$users = [
    ["name" => "Ali", "age" => 30],
    ["name" => "Sara", "age" => 25],
    ["name" => "Mohamed", "age" => 35]
];

// الفرز حسب العمر
usort($users, function($a, $b) {
    return $a['age'] - $b['age'];
});

// الفرز حسب المفتاح
ksort($users); // تصاعدي حسب المفاتيح
krsort($users); // تنازلي حسب المفاتيح

// الفرز مع الحفاظ على المفاتيح
asort($users); // للقيم
arsort($users); // للقيم تنازلي

// الفرز الطبيعي
$files = ["file10", "file2", "file1"];
natsort($files); // ["file1", "file2", "file10"]
?>


<?php
$array1 = [1, 2, 3];
$array2 = [2, 3, 4];
$array3 = [3, 4, 5];

// الفرق بين المصفوفات
$diff = array_diff($array1, $array2); // [1]

// الفرق مع المقارنة بالمفاتيح
$arrayA = ["a" => 1, "b" => 2];
$arrayB = ["a" => 1, "c" => 3];
$diffAssoc = array_diff_assoc($arrayA, $arrayB); // ["b" => 2]

// التقاطع بين المصفوفات
$intersect = array_intersect($array1, $array2); // [2, 3]

// دمج مع إزالة التكرار
$unique = array_unique([1, 2, 2, 3, 3, 3]); // [1, 2, 3]

// دمج مع الحفاظ على المفاتيح
$combined = array_combine(["name", "age"], ["Ali", 25]);
// ["name" => "Ali", "age" => 25]
?>

<?php
$numbers = [1, 2, 3, 4, 5];

// مجموع القيم
echo array_sum($numbers); // 15

// حاصل ضرب القيم
echo array_product($numbers); // 120

// القيمة العظمى والصغرى
echo max($numbers); // 5
echo min($numbers); // 1

// عد القيم
$colors = ["red", "blue", "red", "green"];
$counts = array_count_values($colors);
// ["red" => 2, "blue" => 1, "green" => 1]
?>


<?php
$students = [
    ["name" => "Ali", "grades" => [85, 90, 78]],
    ["name" => "Sara", "grades" => [92, 88, 95]],
    ["name" => "Mohamed", "grades" => [76, 84, 89]]
];

// تسطيح مصفوفة متعددة الأبعاد
$flattened = array_merge(...array_column($students, 'grades'));

// البحث في مصفوفة متعددة الأبعاد
$found = array_filter($students, function($student) {
    return in_array(90, $student['grades']);
});
?>



