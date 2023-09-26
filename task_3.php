<?php
    function sortGradesDescending($grades) {
        // Sort the grades array in descending order
        arsort($grades);
        
        // Print the sorted grades as an array
        print_r($grades);
    }

    // Create an array with the given values
    $grades = array(85, 92, 78, 88, 95);

    // Call the function with the array of grades
    sortGradesDescending($grades);
?>
