// Function to count vowels in a string
function countVowels(text) {
    let count = 0;
    let vowels = "aeiou";

    // Convert to lowercase to make it case-insensitive
    text = text.toLowerCase();

    // Loop through each character
    for (let char of text) {
        if (vowels.includes(char)) {
            count++;
        }
    }
    return count;
}

// Example call
let result = countVowels("Hello World");

// Output
console.log(result);