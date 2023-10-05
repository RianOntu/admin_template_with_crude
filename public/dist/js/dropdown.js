const menuButtons = document.querySelectorAll('.menu-button');
const menuLists = document.querySelectorAll('.menu-list');

menuButtons.forEach((button, index) => {
  button.addEventListener('click', function(event) {
    menuLists[index].classList.toggle('active');
  });
});
