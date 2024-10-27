<?php
// Core PHP Syntax Example

// 1. Variables
// Declaring variables with different data types
$name = "John";  // string
$age = 30;       // integer
$height = 1.75;  // float
$isAdmin = true; // boolean

// 2. Arrays
// Creating an array of user data
$userData = ["name" => $name, "age" => $age, "height" => $height];

// 3. Conditionals
// Checking if user is an admin
if ($isAdmin) {
    echo "Welcome, Admin $name!<br>";
} else {
    echo "Welcome, $name!<br>";
}

// 4. Loops
// Using a foreach loop to display user data
echo "User Information:<br>";
foreach ($userData as $key => $value) {
    echo ucfirst($key) . ": $value<br>";
}

// 5. Functions
// Defining a function to greet a user
function greetUser($userName) {
    return "Hello, $userName! Nice to see you.<br>";
}

// Calling the function
echo greetUser($name);

// 6. Connecting to a MySQL Database
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "example_database";

// Creating a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to the database successfully!<br>";
}

// 7. SQL Insert Example
// SQL statement to insert a new user into a table
$sql = "INSERT INTO users (name, age, height) VALUES ('$name', $age, $height)";

// Executing the SQL query and checking if it was successful
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// 8. SQL Select Example
// SQL query to retrieve users from the table
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Checking if there are results and displaying them
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "User: " . $row["name"] . ", Age: " . $row["age"] . ", Height: " . $row["height"] . "<br>";
    }
} else {
    echo "No users found.<br>";
}

// Closing the database connection
$conn->close();
?>
