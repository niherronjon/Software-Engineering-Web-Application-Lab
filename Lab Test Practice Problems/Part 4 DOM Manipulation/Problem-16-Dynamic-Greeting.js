// Problem 16: Dynamic Greeting
const heading = document.getElementById("welcome-message");
const changeBtn = document.getElementById("change-text-btn");

changeBtn.addEventListener("click", function() {
    heading.innerText = "Welcome, JavaScript Coder!";
});