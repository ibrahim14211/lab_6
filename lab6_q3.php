<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>

<?php
// Function to calculate the area of a rectangle
function calculateArea($length, $width) {
    return $length * $width;
}

// Call the function with any value
$length = 5;   // Example length
$width = 10;   // Example width
$area = calculateArea($length, $width);

// Display the result
echo "The area of a rectangle with length $length and width $width is $area.";
?>

</body>
</html>
