const audio = document.getElementById('background-audio');
const toggleButton = document.getElementById('audio-toggle');

toggleButton.addEventListener('click', () => {
  if (audio.autoplay) {
    audio.autoplay = false;
    audio.pause();
  } else {
    audio.autoplay = true;
    audio.play();
  }
});


document.addEventListener("DOMContentLoaded", function () {
  const changeButton = document.getElementById("dark-mode-toggle");
  const audioElement = document.getElementById("background-audio");
  const body = document.body;

  const defaultAudio = "assets/Aoharu.mp3"; 
  const alternateAudio = "assets/Gestalt Angst.mp3";
  
  audioElement.src = defaultAudio;
  
  audioElement.play().catch(error => {
    console.log("Autoplay prevented. Waiting for user interaction.");
  });

  changeButton.addEventListener("click", function () {
      body.classList.toggle("alternate-layout");

      if (body.classList.contains("alternate-layout")) {
          audioElement.src = alternateAudio;
      } else {
          audioElement.src = defaultAudio;
      }
      audioElement.play().catch(error => {
          console.log("Autoplay blocked after changing the audio source.");
      });
  });
});

const darkModeToggle = document.getElementById('dark-mode-toggle');

darkModeToggle.addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');
  document.hero-image.classList.toggle('dark-mode');
  document.container-card.classList.toggle('dark-mode');
  document.navbar-section.classList.toggle('dark-mode');
});