document.addEventListener("DOMContentLoaded", function () {
  const filmPosters = document.getElementById("filmPosters");
  const posters = filmPosters.getElementsByClassName("film-poster");
  let currentPosterIndex = 0;
  // Sélectionnez tous les boutons "Plus d'infos"
const infoButtons = document.querySelectorAll('.info-button');

// Ajoutez un gestionnaire d'événements pour chaque bouton
infoButtons.forEach(button => {
    button.addEventListener('click', function () {
        // Sélectionnez la carte parente de ce bouton
        const filmCard = this.closest('.film-card');

        // Décalez la carte en haut à gauche
        filmCard.style.position = 'fixed';
        filmCard.style.top = '0';
        filmCard.style.left = '0';
        filmCard.style.width = '100%';
        filmCard.style.height = '100%';
        filmCard.style.zIndex = '1000';

        // Affichez le reste des informations (film-details)
        const filmDetails = filmCard.querySelector('.film-details');
        filmDetails.style.opacity = '1';
    });
});


  function showPosters() {
      const leftIndex = (currentPosterIndex - 1 + posters.length) % posters.length;
      const rightIndex = (currentPosterIndex + 1) % posters.length;

      posters[leftIndex].style.transform = "scale(0.8)";
      posters[currentPosterIndex].style.transform = "scale(0.8)";
      posters[rightIndex].style.transform = "scale(0.8)";

      posters[leftIndex].style.order = "1";
      posters[currentPosterIndex].style.order = "2";
      posters[rightIndex].style.order = "3";
  }

  function slideLeft() {
      currentPosterIndex = (currentPosterIndex - 1 + posters.length) % posters.length;
      showPosters();
  }

  function slideRight() {
      currentPosterIndex = (currentPosterIndex + 1) % posters.length;
      showPosters();
  }

  document.getElementById("arrowLeft").addEventListener("click", slideLeft);
  document.getElementById("arrowRight").addEventListener("click", slideRight);

  // Afficher la première affiche au chargement de la page
  showPosters();
});