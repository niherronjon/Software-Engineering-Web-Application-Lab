// Problem 16: Dynamic Greeting
const heading = document.getElementById("welcome-message");
const changeBtn = document.getElementById("change-text-btn");

changeBtn.addEventListener("click", function() {
    heading.innerText = "Welcome, JavaScript Coder!";
});

// Problem 17: The Light Switch
const body = document.querySelector("body");
const toggleBtn = document.getElementById("toggle-mode-btn");

toggleBtn.addEventListener("click", function() {
    body.classList.toggle("dark-mode");
});

// Problem 18: Add Item to a List
const addItemBtn = document.getElementById("add-item-btn");
const newItemInput = document.getElementById("new-item-input");
const todoList = document.getElementById("todo-list");

addItemBtn.addEventListener("click", function() {
    const newItemText = newItemInput.value.trim(); // Get text and remove whitespace
    if (newItemText !== "") {
        const li = document.createElement("li"); // Create new <li>
        li.textContent = newItemText; // Set text
        todoList.appendChild(li); // Add to list
        newItemInput.value = ""; // Clear input
    }
});