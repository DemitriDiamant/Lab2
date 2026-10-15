
<?php

// Lab 2B: PHP Functions and Basic Objects
echo "<h1>Lab 2B: Functions and Objects</h1>";

// 1. Function with Parameters and Return Value
echo "<h2>1. Function with Parameters and Return Value</h2>";

function formatName($first, $middle, $last)
{
    $first = ucfirst(strtolower(trim($first)));
    $middle = ucfirst(strtolower(trim($middle)));
    $last = ucfirst(strtolower(trim($last)));

    return "$first $middle $last";
}

echo formatName("john", "michael", "smith") . "<br>";

// 2. Function That Returns an Array
echo "<h2>2. Function That Returns an Array</h2>";

function cleanNameParts($first, $middle, $last)
{
    return [
        ucfirst(strtolower(trim($first))),
        ucfirst(strtolower(trim($middle))),
        ucfirst(strtolower(trim($last)))
    ];
}

$nameParts = cleanNameParts("jane", "marie", "doe");

echo "First name: " . $nameParts[0] . "<br>";
echo "Middle name: " . $nameParts[1] . "<br>";
echo "Last name: " . $nameParts[2] . "<br>";

// 3. Variable Scope
echo "<h2>3. Variable Scope</h2>";

$first = "Maria";
$last = "Chen";

function buildFullName()
{
    global $first, $last;
    return "$first $last";
}

echo "Using global variables: " . buildFullName() . "<br>";

function buildFullName2($first, $last)
{
    return "$first $last";
}

echo "Using parameters: " .
    buildFullName2($first, $last) . "<br>";

// 4. Static Variable
echo "<h2>4. Static Variable</h2>";

function nextTicketNumber()
{
    static $ticket = 0;
    $ticket++;
    return $ticket;
}

echo "Ticket number: " . nextTicketNumber() . "<br>";
echo "Ticket number: " . nextTicketNumber() . "<br>";
echo "Ticket number: " . nextTicketNumber() . "<br>";

// 5. User Class
echo "<h2>5. User Class</h2>";

class User
{
    public $name;
    public $email;

    public function display()
    {
        return $this->name;
    }
}

$user = new User();
$user->name = "John Smith";
$user->email = "john@example.com";

echo "User name: " . $user->display() . "<br>";
echo "User email: " . $user->email . "<br>";

// 6. Constructor and Password Hashing
echo "<h2>6. Constructor and Password Hashing</h2>";

class User2
{
    public $name;
    private $passwordHash;

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->passwordHash = password_hash(
            $password,
            PASSWORD_DEFAULT
        );
    }
}

$user2 = new User2("Jane Doe", "SamplePassword123");

echo "<pre>";
print_r($user2);
echo "</pre>";

?>
