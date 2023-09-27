
<?php

function removeEvenNumbersAndPrint($numbers) {
    // Create an empty array to store the odd numbers
    $oddNumbers = array();

    // Iterate through the original array
    foreach ($numbers as $number) {
        // Check if the number is odd (not divisible by 2)
        if ($number % 2 !== 0) {
            // Add odd number to the new array
            $oddNumbers[] = $number;
        }
    }

    // Print the resulting array with each element on a new line
    foreach ($oddNumbers as $oddNumber) {
        echo $oddNumber . "<br>";
    }
}

// Create an array containing numbers 1 to 10
$numbers = range(1, 10);

// Call the function with the provided array
removeEvenNumbersAndPrint($numbers);

?>
