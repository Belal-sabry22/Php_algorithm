<?php
// Get the form data from the POST request
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$num4 = $_POST['num4'];
$num5 = $_POST['num5'];
$numbers3 = [$num1, $num2, $num3];
$numbers4 = [$num1, $num2, $num3, $num4];
$numbers5 = [$num1, $num2, $num3, $num4, $num5];

// first task
// Initialize the largest number to the first number
$largest = $num1;

// Loop through the remaining numbers
$numbers = array($num2, $num3);
foreach ($numbers as $number) {
    if ($number > $largest) {
        $largest = $number;
    }
}
// Display the result
if (isset($_POST['first'])) {
    echo "<h2>The largest number is: $largest</h2>";
}
// 2 task
// Initialize the count to 0

$count = 0;
foreach ($numbers4 as $number) {
    if ($number % 2 == 1) {
        $count++;
    }
}

// Display the result
if (isset($_POST['second'])) {
    echo "<h2>The odd numbers are: $count</h2>";
}
// 3 task
// Initialize the count to 0
$greater = [];
foreach ($numbers4 as $number) {
    if ($number > 10) {
        $greater[] = $number;
    }
}

// Display the result
if (isset($_POST['third'])) {
    echo "<h2>The numbers greater than 10 are: " . implode(" , ", $greater) . "</h2>";
}
// 4 task
// Initialize counters for each range
$count025 = 0;
$count2650 = 0;
$count5175 = 0;
$count76100 = 0;

// Check if form is submitted
// Count numbers in each range
foreach ($numbers4 as $num) {
    if ($num >= 0 && $num <= 25) {
        $count025++;
    } elseif ($num >= 26 && $num <= 50) {
        $count2650++;
    } elseif ($num >= 51 && $num <= 75) {
        $count5175++;
    } elseif ($num >= 76 && $num <= 100) {
        $count76100++;
    }
}

if (isset($_POST["fourth"])) {
    // Display the results
    echo "<h2>Number Range Count</h2>";
    echo "<p>Numbers in range [0,25]: $count025</p>";
    echo "<p>Numbers in range [26,50]: $count2650</p>";
    echo "<p>Numbers in range [51,75]: $count5175</p>";
    echo "<p>Numbers in range [76,100]: $count76100</p>";
}
// 5 task

// Initialize the largest number to the first number
$largest = $num1;
$smallest = $num2;
// Loop through the remaining numbers
foreach ($numbers4 as $number) {
    if ($number > $largest) {
        $largest = $number;
    } elseif ($number < $smallest) {
        $smallest = $number;
    }
}

// Display the result
if (isset($_POST['fifth'])) {
    echo "<h2>The largest number is: $largest</h2>";
    echo "<h2>The smallest number is: $smallest</h2>";
}
// 6 task //
// Initialize the sum  
$sum = 0;
// Loop through the remaining numbers
foreach ($numbers4 as $number) {
    $sum += $number;
}

// Calculate the average
$average = $sum / 4;
// Display the result
if (isset($_POST['sixth'])) {
    echo "<h2>The average of 4 number is: $average</h2>";
}
// 7 task //

$isDuplicate = false;

for ($i = 0; $i < count($numbers4); $i++) {
    for ($j = $i + 1; $j < count($numbers4); $j++) {
        if ($numbers4[$i] == $numbers4[$j]) {
            $isDuplicate = true;
            break 2; // exit both loops
        }
    }
}

if (isset($_POST['seventh'])) {
    if ($isDuplicate) {
        echo "<h2>Duplicate numbers found!</h2>";
    } else {
        echo "<h2>No duplicate numbers found.</h2>";
    }
}

// 8 task //
$isDifferenceMoreThan10 = false;

for ($i = 0; $i < count($numbers4); $i++) {
    for ($j = $i + 1; $j < count($numbers4); $j++) {
        $difference = abs($numbers4[$i] - $numbers4[$j]);
        if ($difference > 10) {
            $isDifferenceMoreThan10 = true;
            break 2; // exit both loops
        }
    }
}
if (isset($_POST['eighth'])) {
    if ($isDifferenceMoreThan10) {
        echo "<h2>Difference between two numbers is more than 10.</h2>";
    } else {
        echo "<h2>No difference between two numbers is more than 10.</h2>";
    }
}

// 9 task //
$sum = 0;
$product = 1;

foreach ($numbers4 as $number) {
    $sum += $number;
    $product *= $number;
}
if (isset($_POST['ninth'])) {
    if ($sum > $product) {
        echo "<h2>The sum is greater than the product.</h2>";
    } elseif ($product > $sum) {
        echo "<h2>The product is greater than the sum.</h2>";
    } else {
        echo "<h2>The sum and product are equal.</h2>";
    }
}
// 10 task //
$largest = max($numbers5);
$smallest = min($numbers5);
$i = 0;

while ($i < count($numbers5)) {
    if ($numbers5[$i] > $largest) {
        $largest = $numbers5[$i];
    }
    if ($numbers5[$i] < $smallest) {
        $smallest = $numbers5[$i];
    }
    $i++;
}

if (isset($_POST['tenth'])) {
    echo "<h2>Largest number: $largest</h2>";
    echo "<h2>Smallest number: $smallest</h2>";
}
