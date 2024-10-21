<?php
// Variables  
$fname = $_GET["fname"];
$lname = $_GET["lname"];
$email = $_GET["email"];

//Database connection
$servername = "localhost";
$username = "root"; 
$password = "";
$dbname = "juy"; //database name

//For connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the users table
$sql = "INSERT INTO users (fname, lname, email) VALUES ('$fname', '$lname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New records inserted successfully!" ."<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>

<?php
echo "Welcome! " . $_GET["fname"] . " " . $_GET["lname"] . "<br>";
echo "Your email address is " . $_GET["email"];
?>
