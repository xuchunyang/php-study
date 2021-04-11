<?php

// 常量
define("MSG", "Hello, PHP!");

echo MSG . "\n";

// Array
$people = array("Tom", "Jerry", "Kevin");
echo $people[0];
echo $people[1];
echo $people[2];

$ids = array(23, 44, 11);
print_r($ids);

// 添加一个元素
$ids[3] = 100;
$ids[] = 9999;
var_dump($ids);

echo count($ids);

$students = [
    "Alice" => 23,
    "Jery" => 18,
    "Tom" => 33
];
print_r($students);
echo $students['Tom'];

$cars = [
    ["Honda", 20, 10],
    ["Toyota", 30, 20],
    ["Ford", 25, 15],
];

echo $cars[1][0];

function hr()
{
    $cols = intval(exec("tput cols"));
    echo "\n";
    for ($i = 0; $i < $cols; $i++) {
        echo "#";
    }
}

hr();

for ($i = 5; $i <= 10; $i++) {
    echo "Number $i\n";
}

$i = 5;
while ($i <= 10) {
    echo "Number $i\n";
    $i++;
}

$i = 5;
do {
    echo "Number $i\n";
    $i++;
} while ($i <= 10);

$names = ["Jack", "Bob", "Tom"];
foreach ($names as $name) {
    echo $name;
    echo "\n";
}

$customers = [
    "Jack" => 23,
    "Bob" => 13,
    "Tom" => 45
];

foreach ($customers as $name => $id) {
    echo "$name => $id\n";
}

// myFunction => Camel Case
// my_function => Lower Case
// MyFunction => Pascal Case (=> Class)

// function
function myFunction()
{
    echo "Hello, myFunction\n";
}

myFunction();
myFunction();

function countdown($n = 5)
{
    if ($n > 0) {
        echo $n;
        echo "\n";
        countdown(--$n);
    }
}

countdown(10);
hr();
countdown(3);
countdown();

// function makeCountdown($n) {
//     return function () {
//         countdown($n);
//     }
// }

function addNumbers($num1, $num2)
{
    return $num1 + $num2;
}

echo addNumbers(3, 4) . "\n";

// pass arg by reference
$myNum = 10;

function addFive($num)
{
    $num += 5;
}

function addTen(&$num)
{
    $num += 10;
}

addFive($myNum);
echo $myNum;

hr();

addTen($myNum);
echo $myNum;

function changeArray(&$arr)
{
    $arr[0] = 123;
}

$myArr = [1, 3, 5, 7];
changeArray($myArr);
print_r($myArr);

// 条件
//
/**
 * ==
 * ===
 * <
 * >
 * <=
 * >=
 * !=
 * !--
 */

$num = 5;

if ($num == '5') {
    echo "== 5 passed";
}

if ($num === '5') {
    echo "=== 5 passed";
}

if ($num < 6) {
    echo "< 6 pass";
}


if ($num < "6") {
    echo "< 6 pass";
}

var_dump(is_numeric("23"));
var_dump(true);
var_dump(false);

var_dump(1, 2, 2.3, null, false, [], "", new DateTime());

if (1 && 2) {
    echo "1 && 2\n";
}

if (1 and 2) {
    echo "1 AND 2\n";
}

if (1 and 2) {
    echo "1 and 2\n";
}

if (1 xor 0) {
    echo "1 xor 0\n";
}

$favColor = 'green';

switch ($favColor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;

    default:
        echo "Your favorite color is $favColor!";
        break;
}
echo "\n";

echo date("Y-m-d H:i:s P\n");
date_default_timezone_set("America/New_York");
echo date("Y-m-d H:i:s P\n");

$timestamp = mktime(0, 0, 0, 9, 10, 2021);
echo $timestamp . "\n";
echo date("Y-m-d H:i:s\n", $timestamp);

$yesterday = strtotime("yesterday");
echo $yesterday . "\n";
echo date("Y-m-d", $yesterday);