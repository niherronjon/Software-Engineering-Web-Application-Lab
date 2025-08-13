// Function to capitalize first letter of each name
function capitalizeNames(names) {
    return names.map(name => name.charAt(0).toUpperCase() + name.slice(1));
}


let names = ["john", "mary", "peter"];

let capitalized = capitalizeNames(names);

console.log(capitalized);
