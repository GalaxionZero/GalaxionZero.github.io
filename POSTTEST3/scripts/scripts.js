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
  const body = document.body;  // Correctly reference the body element
  
  // Define the two audio sources
  const defaultAudio = "assets/Aoharu.mp3";  // Default layout song
  const alternateAudio = "assets/Gestalt Angst.mp3";  // Alternate layout song
  
  // Play the default audio initially
  audioElement.src = defaultAudio;
  
  // Ensure audio only plays when the user interacts (for autoplay restrictions)
  audioElement.play().catch(error => {
    console.log("Autoplay prevented. Waiting for user interaction.");
  });

  // Toggle between layouts and audio when "Change OS" is clicked
  changeButton.addEventListener("click", function () {
      // Toggle the layout class
      body.classList.toggle("alternate-layout");

      // Switch audio based on the current layout
      if (body.classList.contains("alternate-layout")) {
          // If it's in the alternate layout, switch to alternate song
          audioElement.src = alternateAudio;
      } else {
          // Switch back to the default song
          audioElement.src = defaultAudio;
      }

      // Play the new song after the source is changed
      audioElement.play().catch(error => {
          console.log("Autoplay blocked after changing the audio source.");
      });
  });
});

const darkModeToggle = document.getElementById('dark-mode-toggle');

darkModeToggle.addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');
  document.hero-image.classList.toggle('dark-mode');
});

const news = document.getElementById('news');

news.addEventListener('click', () => {
  alert('COMING SOON...');
});


const hamburger = document.getElementById('hamburger');
const navbarlist = document.getElementById('navbar-list');

hamburger.addEventListener('click', () => {
    navbarlist.style.display = navbarlist.style.display === 'flex' ? 'none' : 'flex';
});