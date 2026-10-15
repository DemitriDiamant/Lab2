
<?php

// Lab 2: PHP Expressions and Control Structures
echo "<h1>Lab 2A: Expressions and Control Structures</h1>";

// 1. Expressions and Operators
echo "<h2>1. Expressions and Operators</h2>";

$x = -5;
$y = 3 * (abs(2 * $x) + 4);
echo "The value of y is: $y<br>";

// 2. Boolean Comparisons
echo "<h2>2. Comparisons</h2>";

var_dump(2 > 1);
echo "<br>";
var_dump(2 == 3);
echo "<br>";
var_dump("5" == 5);
echo "<br>";
var_dump("5" === 5);
echo "<br>";

// 3. Unary Operators
echo "<h2>3. Unary Operators</h2>";

$c = 5;
echo "Unary minus: " . (-$c) . "<br>";
echo "Unary plus: " . (+$c) . "<br>";
echo "Pre-increment: " . (++$c) . "<br>";

// 4. Operator Precedence
echo "<h2>4. Operator Precedence</h2>";

echo "Without parentheses: " . (2 + 3 * 4) . "<br>";
echo "With parentheses: " . ((2 + 3) * 4) . "<br>";

// 5. Assignment Associativity
echo "<h2>5. Assignment Associativity</h2>";

$level = $score = $time = 0;

echo "Level: $level<br>";
echo "Score: $score<br>";
echo "Time: $time<br>";

// 6. Equality and Assignment
echo "<h2>6. Equality and Assignment</h2>";

$a = 5;
$b = "5";
$c = 10;

var_dump($a == $b);
echo "<br>";
var_dump($a === $b);
echo "<br>";
var_dump($a == $c);
echo "<br>";

// 7. Logical Operators
echo "<h2>7. Logical Operators</h2>";

$a = 1;
$b = 0;

var_dump($a && $b);
echo "<br>";
var_dump($a || $b);
echo "<br>";
var_dump(!$b);
echo "<br>";

// 8. Scholarship Decision with if...else
echo "<h2>8. Scholarship Decision with if...else</h2>";

$gpa = 3.59;

if ($gpa >= 3.5) {
    echo "Student qualifies for a scholarship.<br>";
} else {
    echo "Student does not qualify for a scholarship.<br>";
}

// 9. Scholarship Decision with if...elseif...else
echo "<h2>9. Scholarship Decision with if...elseif...else</h2>";

if ($gpa >= 3.7) {
    echo "Full scholarship awarded.<br>";
} elseif ($gpa >= 3.5) {
    echo "Partial scholarship awarded.<br>";
} else {
    echo "No scholarship awarded.<br>";
}

// 10. Access Status
echo "<h2>10. Access Status</h2>";

$status = 'pending';

switch ($status) {
    case 'approved':
        echo "Access approved.<br>";
        break;

    case 'pending':
        echo "Access is pending.<br>";
        break;

    default:
        echo "Access denied or unknown status.<br>";
}

// 11. While Loop
echo "<h2>11. While Loop</h2>";

$fuel = 10;

while ($fuel > 1) {
    echo "There is enough fuel. Fuel level: $fuel<br>";
    $fuel--;
}

// 12. Multiplication Table
echo "<h2>12. Multiplication Table</h2>";

for ($i = 1; $i <= 12; $i++) {
    echo "12 x $i = " . (12 * $i) . "<br>";
}

?>
