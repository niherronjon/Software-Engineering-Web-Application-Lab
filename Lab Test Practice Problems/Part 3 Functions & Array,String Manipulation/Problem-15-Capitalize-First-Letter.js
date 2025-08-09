// Function to capitalize first letter of each name
function capitalizeNames(names) {
    return names.map(name => name.charAt(0).toUpperCase() + name.slice(1));
}

// Example data
let names = ["john", "mary", "peter"];

// Example call
let capitalized = capitalizeNames(names);

// Output
console.log(capitalized);