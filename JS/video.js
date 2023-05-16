document.addEventListener("DOMContentLoaded", function() {
  var videoBackground = document.getElementById("video-background");
  videoBackground.addEventListener("ended", function() {
    this.currentTime = 0;
    this.play();
  });
});