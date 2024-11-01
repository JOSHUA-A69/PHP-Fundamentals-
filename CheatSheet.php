<?php
// PHP Fundamentals Example
// ====================================

// 1. VARIABLES & DATA TYPES
// PHP supports several data types: strings, integers, floats, booleans, arrays, objects, NULL, etc.

$stringVar = "Hello, World!";    // String
$intVar = 42;                    // Integer
$floatVar = 3.14;                // Float
$boolVar = true;                 // Boolean
$arrayVar = ["apple", "banana", "cherry"]; // Array

echo $stringVar . "<br>";
echo "Integer: $intVar, Float: $floatVar, Boolean: " . ($boolVar ? "true" : "false") . "<br>";

// 2. CONSTANTS
// Constants cannot be changed once declared.

define("PI", 3.14159);
echo "The value of PI is " . PI . "<br>";

// 3. CONTROL STRUCTURES
// Conditional statements and loops

// If-Else Statement
if ($intVar > 40) {
    echo "intVar is greater than 40<br>";
} else {
    echo "intVar is 40 or less<br>";
}

// Switch Statement
$fruit = "apple";
switch ($fruit) {
    case "apple":
        echo "You chose apple<br>";
        break;
    case "banana":
        echo "You chose banana<br>";
        break;
    default:
        echo "Unknown fruit<br>";
}

// Loops
// While Loop
$count = 0;
while ($count < 3) {
    echo "Count is $count<br>";
    $count++;
}

// For Loop
for ($i = 0; $i < 3; $i++) {
    echo "For loop iteration $i<br>";
}

// Foreach Loop
foreach ($arrayVar as $value) {
    echo "Fruit: $value<br>";
}

// 4. FUNCTIONS
// Functions can accept parameters and return values.

function add($a, $b) {
    return $a + $b;
}

echo "Addition result: " . add(5, 10) . "<br>";

// 5. ARRAYS
// PHP arrays can be indexed or associative.

$indexedArray = [1, 2, 3];                  // Indexed Array
$assocArray = ["name" => "John", "age" => 30]; // Associative Array

echo "Indexed Array: " . $indexedArray[1] . "<br>";
echo "Associative Array: Name is " . $assocArray["name"] . "<br>";

// 6. ARRAY FUNCTIONS
// PHP has many built-in array functions.

array_push($indexedArray, 4); // Add an element to the array
print_r($indexedArray);
echo "<br>";

// 7. STRING FUNCTIONS
// Useful functions for manipulating strings.

$str = "Hello, World!";
echo "Length of string: " . strlen($str) . "<br>";
echo "Uppercase: " . strtoupper($str) . "<br>";

// 8. DATE & TIME
// The `date()` function formats a timestamp.

echo "Current date: " . date("Y-m-d H:i:s") . "<br>";

// 9. SUPERGLOBALS
// Superglobals are special variables that are always accessible, e.g., $_GET, $_POST, $_SERVER.

echo "PHP Self: " . $_SERVER['PHP_SELF'] . "<br>";

// 10. FORMS & GET/POST REQUESTS
// Handling GET and POST requests from forms (requires HTML form to test fully).

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    echo "Form submitted. Name: $name<br>";
}

// 11. FILE HANDLING
// Reading and writing files in PHP.

$file = fopen("example.txt", "w"); // Open file for writing
fwrite($file, "Hello, file!");     // Write to file
fclose($file);                     // Close file

$file = fopen("example.txt", "r"); // Open file for reading
echo "File content: " . fread($file, filesize("example.txt")) . "<br>";
fclose($file);

// 12. ERROR HANDLING
// Handling errors using try-catch blocks.

try {
    $num = 10 / 0; // Division by zero, will throw an exception
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "<br>";
}

// 13. CLASSES & OBJECTS
// Object-Oriented Programming (OOP) basics in PHP.

class Animal {
    public $name;
    private $type;

    function __construct($name, $type) {
        $this->name = $name;
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }
}

$dog = new Animal("Buddy", "Dog");
echo "Animal name: " . $dog->name . ", Type: " . $dog->getType() . "<br>";

// 14. JSON ENCODING & DECODING
// Converting arrays or objects to JSON and vice versa.

$jsonString = json_encode($assocArray); // Encode associative array to JSON
echo "JSON String: $jsonString<br>";

$decodedArray = json_decode($jsonString, true); // Decode JSON string back to array
echo "Decoded JSON Name: " . $decodedArray["name"] . "<br>";

// 15. SESSIONS
// Starting and using sessions to store user data.

session_start();
$_SESSION["user"] = "John Doe";
echo "Session user: " . $_SESSION["user"] . "<br>";

// 16. COOKIES
// Setting and retrieving cookies.

setcookie("username", "JaneDoe", time() + (86400 * 30), "/"); // Set cookie for 1 day
if(isset($_COOKIE["username"])) {
    echo "Cookie value: " . $_COOKIE["username"] . "<br>";
}

// 17. CLOSING PHP TAG
// Closing PHP tag is optional if the file is purely PHP (helps avoid unwanted whitespace).

?>
