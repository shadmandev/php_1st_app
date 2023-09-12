<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include 'header.php';
?>


    <div class="wrapper">
            
        <h1>Grade Calculator</h1>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $assignmentScore = $_POST["assignment_score"];
            $quizScore = $_POST["quiz_score"];
            $examScore = $_POST["live_test_score"];
            
            // You can assign different weights to these scores if needed
            $assignmentWeight = 0.3;
            $quizWeight = 0.2;
            $examWeight = 0.5;
            
            // Calculate the weighted average
            $average = ($assignmentScore * $assignmentWeight) + ($quizScore * $quizWeight) + ($examScore * $examWeight);
        }
        ?>
        
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="assignment_score">Assignment Score:</label>
                <input type="number" name="assignment_score" id="assignment_score" required>
            </div>
            <div class="form-group">
                <label for="quiz_score">Quiz Score:</label>
                <input type="number" name="quiz_score" id="quiz_score" required>
            </div>
            <div class="form-group">
                <label for="live_test_score">Live Test Score:</label>
                <input type="number" name="live_test_score" id="live_test_score" required>
            </div>
            <div class="form-submit">
                <input type="submit" value="Calculate">
            </div>
        </form>
        
        <?php
        if (isset($average)) {
            echo "<div class='result'><p>Average Grade: " . number_format($average, 2) . "</p></div>";
        }
        ?>
    </div>
</body>
</html>