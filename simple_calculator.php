<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
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
        $operation = $_POST["operation"];
        
        // Perform the selected arithmetic operation
        $result = 0;
        if ($operation == "addition") {
            $result = $number1 + $number2;
        } elseif ($operation == "subtraction") {
            $result = $number1 - $number2;
        } elseif ($operation == "multiplication") {
            $result = $number1 * $number2;
        } elseif ($operation == "division") {
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                $result = "Cannot divide by zero";
            }
        } else {
            $result = "Invalid operation";
        }
    }
?>

<div class="wrapper">
    <h1>Simple Calculator</h1>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <div class="form-group">
            <label for="number1">Enter the first number:</label>
            <input type="number" name="number1" id="number1" required>
        </div>
        <div class="form-group">
            <label for="number2">Enter the second number:</label>
            <input type="number" name="number2" id="number2" required>
        </div>
        <div class="form-group">
            <label for="operation">Select operation:</label>
            <select name="operation" id="operation">
                <option value="addition">Addition (+)</option>
                <option value="subtraction">Subtraction (-)</option>
                <option value="multiplication">Multiplication (*)</option>
                <option value="division">Division (/)</option>
            </select>
        </div>
        <div class="form-submit">
            <input type="submit" value="Calculate">
        </div>
    </form>

    <?php
    if (isset($result)) {
        echo "<div class='result'><p>Result: $result</p></div>";
    }
    ?>
</div>


</body>
</html>