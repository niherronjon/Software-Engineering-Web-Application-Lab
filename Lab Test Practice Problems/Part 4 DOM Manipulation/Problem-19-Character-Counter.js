// Problem 19: Character Counter
const charCountSpan = document.getElementById("char-count");
const newItemInput = document.getElementById("new-item-input");

newItemInput.addEventListener("keyup", function() {
    charCountSpan.innerText = newItemInput.value.length;
});