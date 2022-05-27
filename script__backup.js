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

/**
 * Capture information when srcoll the page
 * 
 * @author Poll Castillo
 * @version 0.0.2
 * @event --scroll
 * 
 * 
 * ? for more informaton visit my github
*/
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


$toggleTheme.addEventListener('click', ()=> {
  $document.classList.toggle('isDark');

  // Save to LocalStorage
  const isDark = $document.classList.contains('isDark');
  isDark ? localStorage.setItem('Dark Mode', isDark) : localStorage.setItem('Dark Mode', isDark);
})

// Set DarkMode if is storaged
/**
 * Save darkmode if is on local-storage
 *
 * @author Poll Castillo
 * @version 3.0.9
 * 
 * ! Deprecated
 */
const verifyDarkModeStatus = () => {
  let themeStatus = JSON.parse(localStorage.getItem('Dark Mode'));

  themeStatus ? $document.classList.add('isDark') : $document.classList.remove('isDark');
}

verifyDarkModeStatus();

/**
 * ## loadSection
 * Load each entry detailed above
 * 
 * **author:** _PollCastillo_
 * 
 * **type:** arrow function
 * 
 * @param **loadSection `(entrys, observer) { ... }`**
 * @instructions
 * get entrys and use forEach method to
 * use each item from section
*/
 const loadSection = (entrys, observer)=> {
  entrys.forEach((entry)=> {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      console.log('entró');
    } else {
      entry.target.classList.remove('visible');
    }
  })
}