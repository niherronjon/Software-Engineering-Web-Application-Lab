// Function to find the largest number
function findMaxNumber(numbers) {
    let max = numbers[0]; // Assume first number is the largest
    for (let i = 1; i < numbers.length; i++) {
        if (numbers[i] > max) {
            max = numbers[i];
        }
    }
    return max;
}

// Example call
let largest = findMaxNumber([12, 5, 27, 8, 19]);

// Output
console.log(largest);