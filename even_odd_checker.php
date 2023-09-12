<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        
        if (is_numeric($number)) {
            if ($number % 2 == 0) {
                $result = "Even";
            } else {
                $result = "Odd";
            }
        } else {
            $result = "Please enter a valid number.";
        }
    }
?>
    
<?php
    include 'header.php';
?>

<div class="wrapper">
    <h1>Even or Odd Checker</h1>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <div class="form-group">
            <label for="number">Enter a Number:</label>
            <input type="text" name="number" id="number" required>
        </div>
        <div class="form-submit">
            <input type="submit" value="Check">
        </div>
    </form>

    <?php
        if (isset($result)) {
            echo "<div class='result'><p>The number is: $result</p></div>";
        }
    ?>
</div>

</body>
</html>