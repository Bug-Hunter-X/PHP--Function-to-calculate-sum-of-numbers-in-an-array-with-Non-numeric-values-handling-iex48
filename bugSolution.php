function calculateSumImproved(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    if (is_numeric(numbers[i])) {
      sum += numbers[i];
    }
  }
  return sum;
}

const numbersWithNonNumeric = [1, 2, 'a', 4, 5];
const improvedSum = calculateSumImproved(numbersWithNonNumeric);
console.log(improvedSum); // Output: 12

//This improved version handles non-numeric values correctly.