const galleryImages = document.querySelectorAll('.gallery-image');
let currentImageIndex = 0;

function showNextImage() {
  galleryImages[currentImageIndex].classList.remove('active');
  currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
  galleryImages[currentImageIndex].classList.add('active');
}

function switchImages() {
  // Hide the initial set of images after x seconds
  setTimeout(() => {
    for (let i = 0; i < 3; i++) {
      galleryImages[i].style.display = 'none';
    }
    // Display the new set of images
    setInterval(showNextImage, 3000);
  }, 5000); // Adjust the delay (in milliseconds) before switching images
}

// Start the initial slideshow
setInterval(showNextImage, 3000);

// Call the switchImages function to switch to a new set of images
switchImages();
