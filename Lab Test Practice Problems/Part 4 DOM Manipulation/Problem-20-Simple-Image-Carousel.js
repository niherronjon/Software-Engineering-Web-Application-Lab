// Problem 20: Simple Image Carousel
const imageUrls = [
    "https://via.placeholder.com/300x200?text=Image+1",
    "https://via.placeholder.com/300x200?text=Image+2",
    "https://via.placeholder.com/300x200?text=Image+3"
];

const galleryImg = document.getElementById("gallery-img");
const nextImgBtn = document.getElementById("next-img-btn");

let currentIndex = 0;

nextImgBtn.addEventListener("click", function() {
    // Move to next image index; loop back if at end
    currentIndex = (currentIndex + 1) % imageUrls.length;
    galleryImg.src = imageUrls[currentIndex];
});