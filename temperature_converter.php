<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $fromUnit = $_POST["fromUnit"];
        $toUnit = $_POST["toUnit"];
        
        if ($fromUnit == "celsius") {
            if ($toUnit == "celsius") {
                $result = $temperature;
            } elseif ($toUnit == "fahrenheit") {
                $result = round(($temperature * 9/5) + 32, 2);
            }
        } elseif ($fromUnit == "fahrenheit") {
            if ($toUnit == "celsius") {
                $result = round(($temperature - 32) * 5/9, 2);
            } elseif ($toUnit == "fahrenheit") {
                $result = $temperature;
            }
        }
    }
?>

    <?php
    include 'header.php';
    ?>
    
    <div class="wrapper">
        <h1>Temperature Converter</h1>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="temperature">Enter Temperature:</label>
                <input type="text" name="temperature" id="temperature" required>
            </div>
            <div class="form-group">
                <label for="fromUnit">From:</label>
                <select name="fromUnit" id="fromUnit">
                    <option value="celsius">Celsius</option>
                    <option value="fahrenheit">Fahrenheit</option>
                </select>
            </div>
            <div class="form-group">
                <label for="toUnit">To:</label>
                <select name="toUnit" id="toUnit">
                    <option value="celsius">Celsius</option>
                    <option value="fahrenheit">Fahrenheit</option>
                </select>
            </div>
            <div class="form-submit">
                <input type="submit" value="Convert">
            </div>
        </form>
        
        
        <?php
        if (isset($result)) {
            echo "<div class='result'><p>$temperature $fromUnit is equal to $result $toUnit</p></div>";
        }
        ?>
    </div>
   
    
    
</body>
</html>