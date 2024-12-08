function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
  }
  return sum;
}

const numbers = [1, 2, 3, 4, 5];
const sum = calculateSum(numbers);
console.log(sum); // Output: 15

//The bug is the function doesn't handle non-numeric values in the input array. If the array contains strings or other non-numeric values, it will produce incorrect results or throw an error. 