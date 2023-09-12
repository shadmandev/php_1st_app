<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$name = "Md Shahib Shadman";
$age = 25;
$country = "Bangladesh";
$bio = "Dear, My first mission is to satisfy every client become I am a professional web developer to learns new updates every day. You will get full-time support at any time in any situation.";


?>

<?php
    include 'header.php';
?>
<div class="wrapper">
    <div class="personal-info-wrap">
        <p><strong>Name:</strong> <?php echo $name ?></p>
        <p><strong>Age:</strong> <?php echo $age ?></p>
        <p><strong>Country:</strong> <?php echo $country ?></p>
        <p><strong>Bio:</strong> <?php echo $bio ?></p>
    </div>
</div>


    


</body>
</html>