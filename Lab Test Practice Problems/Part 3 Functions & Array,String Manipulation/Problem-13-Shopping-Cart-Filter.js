// Function to filter prices
function filterByPrice(prices, minimumPrice) {
    return prices.filter(price => price >= minimumPrice);
}

// Example data
let prices = [10, 25, 8, 42, 15, 5];
let minimumPrice = 20;

// Example call
let filteredPrices = filterByPrice(prices, minimumPrice);

// Output
console.log(filteredPrices);