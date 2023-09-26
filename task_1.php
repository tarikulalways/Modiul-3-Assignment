<?php
    function modifyText($text) {
        // Convert the string to all lowercase
        $text = strtolower($text);
        
        // Replace "brown" with "red" in the string
        $text = str_replace("brown", "red", $text);
        
        // Print the modified text
        echo $text;
    }

    // Original text
    $text = "The quick brown fox jumps over the lazy dog.";

    // Call the function with the original text
    modifyText($text);
    
?>
