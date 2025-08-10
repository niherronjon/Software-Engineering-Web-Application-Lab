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