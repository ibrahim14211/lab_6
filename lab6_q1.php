<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
<?php  
// Define variables for your details
$name = "Ibrahim Asim Ibrahim Eltayeb";
$matric = "BI210051";
$course = "BIT21503 Web Development";
$year = "3rd Year";
$address = "86400,Taman U,Batu Pahat,Johor,Malaysia";
?>
<table border="1" cellpadding="5">
    <tr>
        <td><strong>Name</strong></td>
        <td><?php echo $name; ?></td>  
    </tr>
    <tr>
        <td><strong>Matric Number</strong></td>
        <td><?php echo $matric; ?></td>  
    </tr>
    <tr>
        <td><strong>Course</strong></td>
        <td><?php echo $course; ?></td>  
    </tr>
    <tr>
        <td><strong>Year of Study</strong></td>
        <td><?php echo $year; ?></td>  
    </tr>
    <tr>
        <td><strong>Address</strong></td>
        <td><?php echo $address; ?></td>  
    </tr>
</table>
</body>
</html>
