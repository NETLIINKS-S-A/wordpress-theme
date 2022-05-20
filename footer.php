<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	<footer class="foo">
    <div class="container">
      <div class="horizontal-align space-between margin-t-b-4">
        <a href="#" class="foo-logo" onclick="window.open('https://play.google.com/store/apps/developer?id=Netliinks')">
          <img src="https://netliinks.com/wp-content/uploads/2022/05/footer-dark.png" alt="NETLIINKS S.A." class="footer-icon-light">

          <img src="https://netliinks.com/wp-content/uploads/2022/05/footer-light.png" alt="NETLIINKS S.A." class="footer-icon-dark">
          <span>
            <p>NETLIINKS</p>
            <p>PlayStore</p>
          </span>
        </a>

        <a href="#"></a>
      </div>

      <hr>

      <div class="foo-bar">
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="aplicaciones.html">Aplicaciones</a></li>
          <li><a href="politicasdeprivacidad.html">Privacidad</a></li>
        </ul>
      </div>

      <hr>

      <div class="text-center">
        <p class="copyright">&copy; 2022 NETLIINKS S.A. - Elaborado por <a href="https://github.com/alecastillo96/NETLIINKSSA">SYSMONK</a></p>
      </div>
    </div>
    <script>feather.replace();</script>
    <script>
      const objs = {
        document: document.querySelector('html'),
        toggleDarkMode: document.getElementById('toggle-theme'),
        navbar: document.getElementById('show-menu'),
        navbarMenu: document.getElementById('navbar__menu'),
        menuWrapper: document.getElementById('wrapper-page-min')
      }

      const $navbar = objs.navbar;
      const $menu = objs.navbarMenu;
      const $wrapper = objs.menuWrapper;

      // These objects helps to change the entire theme
      const $document = objs.document;
      const $toggleTheme = objs.toggleDarkMode;

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
    </script>

  </footer>

</body>
</html>
