<?php
    function generatePassword($length) {
        // Define character sets
        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $specialChars = '!@#$%^&*()_+';
        
        // Combine all character sets
        $allChars = $lowercase . $uppercase . $numbers . $specialChars;
        
        // Initialize the password variable
        $password = '';
        
        // Get the total number of characters in $allChars
        $numChars = strlen($allChars);
        
        // Generate the password
        for ($i = 0; $i < $length; $i++) {
            // Pick a random character from $allChars
            $randomChar = $allChars[rand(0, $numChars - 1)];
            
            // Append the random character to the password
            $password .= $randomChar;
        }
        
        return $password;
    }

    // Generate a password with a length of 12 characters
    $password = generatePassword(12);

    // Print the generated password
    echo $password;
?>
