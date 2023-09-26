<?php
    function calculateAverageGrades($studentGrades) {
        foreach ($studentGrades as $student => $grades) {
            // Calculate the average grade for each student
            $averageGrade = array_sum($grades) / count($grades);
            
            // Print the average grade for the current student
            echo "Average grade for $student: $averageGrade\n";
        }
    }

    // Create a multidimensional array to store student grades
    $studentGrades = array(
        "Student 1" => array("Math" => 85, "English" => 92, "Science" => 78),
        "Student 2" => array("Math" => 88, "English" => 95, "Science" => 90),
        "Student 3" => array("Math" => 75, "English" => 80, "Science" => 85)
    );

    // Call the function with the array of student grades
    calculateAverageGrades($studentGrades);
?>
