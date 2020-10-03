let toggleMenu = function(e) {
  e.preventDefault();
  console.log('flyout activating.');
  let flyout = document.getElementById('mobMenu');
  flyout.classList.toggle('opacity-0');
  flyout.classList.toggle('scale-0');
};

document.getElementById("mobMenuControl").addEventListener('click', toggleMenu);
document.getElementById("mobMenuClose").addEventListener('click', toggleMenu);