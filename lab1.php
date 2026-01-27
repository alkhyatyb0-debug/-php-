<?php

                                                                  // دوال المصفوفات 

// count()
$arr = [1, 2, 3];
echo "count: " . count($arr) . "<br>";

// array_push()
$arr = [1, 2];
array_push($arr, 3);
echo "array_push: ";
print_r($arr);
echo "<br>";

// array_pop()
$arr = [1, 2, 3];
array_pop($arr);
echo "array_pop: ";
print_r($arr);
echo "<br>";

// array_shift()
$arr = [1, 2, 3];
array_shift($arr);
echo "array_shift: ";
print_r($arr);
echo "<br>";

// array_unshift()
$arr = [2, 3];
array_unshift($arr, 1);
echo "array_unshift: ";
print_r($arr);
echo "<br>";

// array_merge()
$a = [1, 2];
$b = [3, 4];
$c = array_merge($a, $b);
echo "array_merge: ";
print_r($c);
echo "<br>";

// array_slice()
$arr = [1, 2, 3, 4, 5];
$part = array_slice($arr, 1, 3);
echo "array_slice: ";
print_r($part);
echo "<br>";

// array_splice()
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 2, 2);
echo "array_splice: ";
print_r($arr);
echo "<br>";

// in_array()
$arr = ["apple", "banana"];
echo "in_array: " . in_array("banana", $arr) . "<br>";

// array_search()
$arr = ["a" => 10, "b" => 20];
echo "array_search: " . array_search(20, $arr) . "<br>";

// array_keys()
$arr = ["a" => 1, "b" => 2];
echo "array_keys: ";
print_r(array_keys($arr));
echo "<br>";

// array_values()
$arr = ["a" => 1, "b" => 2];
echo "array_values: ";
print_r(array_values($arr));
echo "<br>";

// sort()
$arr = [3, 1, 2];
sort($arr);
echo "sort: ";
print_r($arr);
echo "<br>";

// rsort()
$arr = [1, 3, 2];
rsort($arr);
echo "rsort: ";
print_r($arr);
echo "<br>";

// asort()
$arr = ["a" => 3, "b" => 1];
asort($arr);
echo "asort: ";
print_r($arr);
echo "<br>";

// ksort()
$arr = ["b" => 2, "a" => 1];
ksort($arr);
echo "ksort: ";
print_r($arr);
echo "<br>";

// array_reverse()
$arr = [1, 2, 3];
$r = array_reverse($arr);
echo "array_reverse: ";
print_r($r);
echo "<br>";

// array_map()
$arr = [1, 2, 3];
$new = array_map(fn($x)=>$x*2, $arr);
echo "array_map: ";
print_r($new);
echo "<br>";

// array_filter()
$arr = [1, 2, 3, 4];
$even = array_filter($arr, fn($x)=>$x % 2 == 0);
echo "array_filter: ";
print_r($even);
echo "<br>";

// array_reduce()
$arr = [1, 2, 3];
$sum = array_reduce($arr, fn($c, $x)=>$c + $x, 0);
echo "array_reduce: $sum<br>";

                                                         // دوال النصوص

// strlen()
echo "strlen: " . strlen("Hello") . "<br>";

// str_word_count()
echo "str_word_count: " . str_word_count("Hello world") . "<br>";

// strrev()
echo "strrev: " . strrev("Hello") . "<br>";

// strpos()
echo "strpos: " . strpos("Hello world", "world") . "<br>";

// str_replace()
echo "str_replace: " . str_replace("world", "PHP", "Hello world") . "<br>";

// strtoupper()
echo "strtoupper: " . strtoupper("hello") . "<br>";

// strtolower()
echo "strtolower: " . strtolower("HELLO") . "<br>";

// ucfirst()
echo "ucfirst: " . ucfirst("hello") . "<br>";

// ucwords()
echo "ucwords: " . ucwords("hello world") . "<br>";

// trim()
echo "trim: " . trim("   hi   ") . "<br>";

// ltrim()
echo "ltrim: " . ltrim("   hi") . "<br>";

// rtrim()
echo "rtrim: " . rtrim("hi   ") . "<br>";

// explode()
$parts = explode("-", "A-B-C");
echo "explode: ";
print_r($parts);
echo "<br>";

// implode()
echo "implode: " . implode("-", ["A", "B", "C"]) . "<br>";

// substr()
echo "substr: " . substr("Hello", 1, 3) . "<br>";

// str_repeat()
echo "str_repeat: " . str_repeat("Hi", 3) . "<br>";

// strcmp()
echo "strcmp: " . strcmp("a", "b") . "<br>";

// htmlspecialchars()
echo "htmlspecialchars: " . htmlspecialchars("<p>Hi</p>") . "<br>";

// number_format()
echo "number_format: " . number_format(12345.678, 2) . "<br>";

// md5()
echo "md5: " . md5("text") . "<br>";

?>