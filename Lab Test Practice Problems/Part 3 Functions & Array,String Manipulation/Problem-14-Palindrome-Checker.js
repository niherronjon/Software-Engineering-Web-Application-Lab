// Function to check if a word is a palindrome
function isPalindrome(word) {
    // Convert to lowercase for case-insensitive check
    let lowerCaseWord = word.toLowerCase();
    // Reverse the word
    let reversedWord = lowerCaseWord.split("").reverse().join("");
    // Check if original and reversed are the same
    return lowerCaseWord === reversedWord;
}

// Example calls
console.log(isPalindrome("Racecar")); // true
console.log(isPalindrome("Hello")); // false