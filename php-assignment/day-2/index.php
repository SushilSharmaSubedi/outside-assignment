<?php
/* 
write a php script that:
Connects to the MySQL database.
Executes a SQL query to select all records from the students table.
Converts the result set into an array.
Determines whether the array is associative or multidimensional and outputs the result.

*/

// Database connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "php-basic";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute SQL query
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Convert result set into an array
    $students = [];
    while($row = $result->fetch_assoc()) {
        $students[] = $row;
    }

    // Determine if the array is associative or multidimensional
    if (array_keys($students) !== range(0, count($students) - 1)) {
        echo "The array is associative.";
    } else {
        echo "The array is multidimensional.";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
