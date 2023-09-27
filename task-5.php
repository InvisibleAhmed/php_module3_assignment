<?php

function generatePassword($length) {
    // Define characters to include in the password
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numericChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    // Combine all character sets
    $allChars = $lowercaseChars . $uppercaseChars . $numericChars . $specialChars;

    // Initialize the password
    $password = '';

    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        // Get a random character from the combined character set
        $randomChar = $allChars[rand(0, strlen($allChars) - 1)];

        // Append the random character to the password
        $password .= $randomChar;
    }

    return $password;
}

// Generate a password with a length of 12 characters
$generatedPassword = generatePassword(12);

// Print the generated password
echo "Generated Password: $generatedPassword\n";

?>
