<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user details from the form (POST)
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    
    // Convert height from cm to meters
    $heightInMeters = $height / 100;

    // Calculate BMI
    if ($heightInMeters > 0) {
        $bmi = $weight / ($heightInMeters * $heightInMeters);

        // Determine BMI category and health suggestions
        if ($bmi < 18.5) {
            $category = "Underweight";
            $suggestions = "Consider increasing your caloric intake with a balanced diet.";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            $category = "Normal weight";
            $suggestions = "Great job! Keep maintaining a balanced diet and regular exercise.";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            $category = "Overweight";
            $suggestions = "Consider a balanced diet and increasing your physical activity.";
        } else {
            $category = "Obese";
            $suggestions = "Consult with a healthcare provider about a weight loss plan.";
        }

        // Display the results, including name, age, and gender
        
        echo "<div class='container'>";
        echo "<h1>Result for $name</h1>";  // Display name here
        
        echo "<p>Your BMI is <strong>" . round($bmi, 2) . "</strong>.</p>";
        echo "<p>Category: <strong>$category</strong></p>";
        echo "<p>Age: $age</p>";  // Display age here
        echo "<p>Gender: $gender</p>";  // Display gender here
        echo "<p><strong>Health Suggestion:</strong> $suggestions</p>";
        echo "</div>";
    } else {
        echo "<p>Please enter valid height and weight.</p>";
    }
}
?>
