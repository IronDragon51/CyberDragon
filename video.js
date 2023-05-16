// Load the YouTube Player API asynchronously
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// Create a YouTube player
var player;
function onYouTubePlayerAPIReady() {
  player = new YT.Player('video-foreground', {
    videoId: 'XSfE0jcXrB0',
    playerVars: {
      autoplay: 1,
      controls: 0,
      loop: 1,
      modestbranding: 1,
      showinfo: 0,
      disablekb: 1,
      playlist: 'XSfE0jcXrB0'
    },
    events: {
      onReady: function(event) {
        event.target.mute();
      }
    }
  });
}
