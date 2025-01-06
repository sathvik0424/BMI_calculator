<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator - Weight & Height</title>
    <link rel="stylesheet" href="style.css">    
</head>

<body>
    <div class="container">
        <h1>Enter Your Weight and Height</h1>
        <form action="success.php" method="POST">
            <!-- Hidden fields to pass name, age, and gender to success.php -->
            <input type="hidden" name="name" value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'raja'; ?>">
            <input type="hidden" name="age" value="<?php echo isset($_GET['age']) ? htmlspecialchars($_GET['age']) : '50'; ?>">
            <input type="hidden" name="gender" value="<?php echo isset($_GET['gender']) ? htmlspecialchars($_GET['gender']) : 'Male'; ?>">

            <div class="input-group">
                <label for="weight">Weight (kg):</label>
                <input type="number" id="weight" name="weight" required>
            </div>
            <div class="input-group">
                <label for="height">Height (cm):</label>
                <input type="number" id="height" name="height" required>
            </div>
            <button type="submit">Calculate BMI</button>
        </form>
    </div>
</body>
</html>
