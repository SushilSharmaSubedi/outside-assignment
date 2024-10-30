<?php
// Sanitize and validate inputs
try {
    $name = htmlspecialchars(trim($_POST['name'])); // Remove whitespace and convert special characters to HTML entities
    $age = filter_var($_POST['age'], FILTER_VALIDATE_INT); // Validate age as an integer
    $color = htmlspecialchars(trim($_POST['fav_color'])); // Remove whitespace and convert special characters to HTML entities
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage(); // Display error message if exception occurs
    exit;
}

if (!$name || !$age || !$color) {
    echo "Invalid input. Please go back and try again."; // Check if any input is invalid
    exit;
}

// Display personalized greeting
echo "Hello, $name!<br>";

// Check if the user is an adult or a minor
if ($age >= 18) {
    echo "You are an adult.<br>"; // Age 18 or older is considered an adult
} else {
    echo "You are a minor.<br>"; // Under 18 is considered a minor
}

// Use a switch statement for favorite color
switch (strtolower($color)) { // Convert color to lowercase for case-insensitive comparison
    case 'red':
        echo "Red is a bold choice!<br>";
        break;
    case 'blue':
        echo "Blue is calming.<br>";
        break;
    case 'green':
        echo "Green represents nature.<br>";
        break;
    default:
        echo "That's an interesting choice!<br>"; // Default case for any other color
        break;
}

// Display a list of numbers from 1 to the user's age
echo "Here is a list of the years you have lived:<br>";
for ($i = 1; $i <= $age; $i++) { // Loop from 1 to the user's age
    echo "$i<br>"; // Display each year
}
?>
