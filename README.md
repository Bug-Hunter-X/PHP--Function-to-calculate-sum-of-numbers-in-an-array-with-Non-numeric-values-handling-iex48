# PHP Function to Calculate Sum of Numbers in an Array

This PHP code demonstrates a function that calculates the sum of numbers in an array.  However, it also highlights a common error: it doesn't gracefully handle non-numeric values within the array.  The solution demonstrates how to robustly address this issue.

## Bug

The original `calculateSum` function fails if the input array contains any non-numeric values.  It will either produce incorrect results or throw an error.

## Solution

The `calculateSumImproved` function addresses this by using `is_numeric()` to check each element before adding it to the sum.  If an element is not numeric, it is skipped, preventing errors and ensuring correct results.

## How to run the code:
1. Save the code as `bug.php` and `bugSolution.php`.
2. Run the files from your terminal using `php bug.php` and `php bugSolution.php`.