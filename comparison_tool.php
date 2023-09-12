<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    include 'header.php';
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        
        $largerNumber = ($number1 > $number2) ? $number1 : $number2;
    }
?>

<div class="wrapper">
    <h1>Comparison Tool</h1>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <div class="form-group">
            <label for="number1">Enter the first number:</label>
            <input type="number" name="number1" id="number1" required>
        </div>
        <div class="form-group">
            <label for="number2">Enter the second number:</label>
            <input type="number" name="number2" id="number2" required>
        </div>
        <div class="form-submit">        
            <input type="submit" value="Find Larger Number">
        </div>
    </form>

    <?php
        if (isset($largerNumber)) {
            echo "<div class='result'><p>The larger number is: $largerNumber</p></div>";
        }
    ?>
</div>


</body>
</html>