const menuButton = document.getElementById('dropdownMenuButton');
const menu = document.getElementById('menu');
menuButton.addEventListener('click', function(event) {
  
  if (menu.classList.toggle('active')) {
    const menuHeight = Array.from(menu.children).map(item => item.clientHeight).reduce((a, b) => a + b, 0);
    menu.style.height = menuHeight + 'px';
  } else {
    menu.style.height = 0;
  }
});