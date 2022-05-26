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

const $navbar = objs.navbar;
const $menu = objs.navbarMenu;
const $wrapper = objs.menuWrapper;

// These objects helps to change the entire theme
const $document = objs.document;
const $toggleTheme = objs.toggleDarkMode;

const scrollCapture = ()=> {
  window.addEventListener('scroll', (e)=> {
    
      console.log(window.screen.availHeight);
      console.log(`Elemento ${objs.section.toString()}`);
    
  });

}

scrollCapture();


// ===================================================
// TOGGLE MENU                                     ===
// ===================================================
$navbar.addEventListener('click', (e)=> {
  const $button = $navbar;

  e.preventDefault();
  $button.classList.toggle('anicon-active');
  $menu.classList.toggle('isShow');
});

// ===================================================
// DARKMODE                                        ===
// ===================================================
$toggleTheme.addEventListener('click', ()=> {
  $document.classList.toggle('isDark');

  // Save to LocalStorage
  const isDark = $document.classList.contains('isDark');
  isDark ? localStorage.setItem('Dark Mode', isDark) : localStorage.setItem('Dark Mode', isDark);
})

// Set DarkMode if is storaged
const verifyDarkModeStatus = () => {
  let themeStatus = JSON.parse(localStorage.getItem('Dark Mode'));

  themeStatus ? $document.classList.add('isDark') : $document.classList.remove('isDark');
}

verifyDarkModeStatus();