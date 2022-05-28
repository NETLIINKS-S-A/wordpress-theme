const objs = {
  document: document.querySelector('html'),
  toggleDarkMode: document.getElementById('toggle-theme'),
  navbar: document.getElementById('show-menu'),
  navbarMenu: document.getElementById('navbar__menu'),
  menuWrapper: document.getElementById('wrapper-page-min'),
  header: document.querySelector('.header'),
  section: document.querySelector('.section__1'),
  navigation: document.querySelector('.navbar')
}

$navbar.addEventListener('click', (e)=> {
  const $button = $navbar;

  e.preventDefault();
  $button.classList.toggle('anicon-active');
  $menu.classList.toggle('isShow');
});