<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weather_c = $_POST["weather_c"];
        $weather_result = '';
       
        if($weather_c < 20){
            $weather_result = "It's freezing!";
        }elseif($weather_c < 34){
            $weather_result = "It's cool.";
        }else{
            $weather_result = "It's warm.";
        }
    }
?>

<?php
    include 'header.php';
?>

<div class="wrapper">
    <h1>Weather Report</h1>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <div class="form-group">
            <label for="weather_c">Enter Weather C°:</label>
            <input type="text" name="weather_c" id="weather_c" required>
        </div>
        <div class="form-submit">
            <input type="submit" value="Get Weather">
        </div>
    </form>

    <?php
    if (isset($weather_result)) {
        echo "<div class='result'><p>Weather in $weather_result </p></div>";
    }
    ?>
</div>
    
</body>
</html>