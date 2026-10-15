
<?php

// Lab 2C: Constructors, Constants, and Inheritance
echo "<h1>Lab 2C: User and Tutor Classes</h1>";

// Function to remove extra spaces
function cleanText($value)
{
    return trim(preg_replace('/\s+/', ' ', $value));
}

// User Class
class User
{
    public const STATUS_ACTIVE = 'active';

    public $name;
    public $email;
    public $status;

    public function __construct($name, $email)
    {
        // Clean and store the name
        $this->name = cleanText($name);

        // Clean and lowercase the email
        $this->email = strtolower(
            cleanText($email)
        );

        // Set active status
        $this->status = self::STATUS_ACTIVE;
    }
}

// Tutor Class inherits from User
class Tutor extends User
{
    public $subject;

    public function __construct($name, $email, $subject)
    {
        // Call the parent constructor
        parent::__construct($name, $email);

        // Clean and store the subject
        $this->subject = cleanText($subject);
    }

    public function profileSummary()
    {
        return "Tutor Name: " . $this->name . "<br>" .
               "Email: " . $this->email . "<br>" .
               "Subject: " . $this->subject . "<br>";
    }
}

// Create a Tutor object
$tutor = new Tutor(
    "  Demitri   Diamant  ",
    "  DEMITRI@EXAMPLE.COM  ",
    "  Mathematics  "
);

// Display the tutor profile
echo "<h2>Tutor Profile</h2>";
echo $tutor->profileSummary();

// Display the user's active status
echo "Status: " . $tutor->status . "<br>";

?>
