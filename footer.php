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

	<footer class="footer">
    <div class="footer__container">
      <div class="margin-t-b-4">
        <a href="#" class="footer__logo" onclick="window.open('https://play.google.com/store/apps/developer?id=Netliinks')">
          <img src="https://netliinks.com/wp-content/uploads/2022/05/footer-light.png" alt="NETLIINKS S.A." class="footer-icon-dark">
          <span>
            <p>NETLIINKS</p>
            <p>PlayStore</p>
          </span>
        </a>

        <a href="#"></a>
      </div>

      <hr>

      <div class="footer__navbar">
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="aplicaciones.html">Aplicaciones</a></li>
          <li><a href="politicasdeprivacidad.html">Privacidad</a></li>
        </ul>
      </div>

      <hr>

      <div class="footer__copyright">
        <p class="copyright__content">&copy; 2022 NETLIINKS S.A. - Elaborado por <a href="https://github.com/alecastillo96/NETLIINKSSA">SYSMONK</a></p>
      </div>
    </div>
    <script>feather.replace();</script>
    <script>
      const DOCUMENT = document.querySelector('body');
      const NAVBAR = document.querySelector('.navbar');
      const TOGGLE_MENU = document.getElementById('show-menu');
      const NAVBAR_MENU = document.querySelector('.navbar__right');
      const NAVBAR_MENU_LINKS = document.querySelectorAll('.navbar__right a');
      const THEME_TOGGLE = document.getElementById('toggleTheme');
      const CONSULTINGPRICE = document.getElementById('consultingPrice');

      const section = {
        f: document.getElementById('section-1'),
        s: document.getElementById('section-2'),
        t: document.getElementById('section-3'),
        fr: document.getElementById('section-4'),
        ft: document.getElementById('section-5'),
        sx: document.getElementById('section-6'),
        st: document.getElementById('section-7'),
        et: document.getElementById('section-8')
      }

      /* intersecting objects */
      const loadSection = (entrys, observer)=> {
        entrys.forEach((entry)=> {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
          } else {
            entry.target.classList.remove('visible');
          }
        })
      }
      // observer
      const observer = new IntersectionObserver(loadSection, {
        root: null,
        rootMargin: '500px 0px 0px 0px',
        threshold: 0.5
      });

      observer.observe(section.f);
      observer.observe(section.s);
      observer.observe(section.t);
      observer.observe(section.fr);
      observer.observe(section.ft);
      observer.observe(section.sx);
      observer.observe(section.st);
      observer.observe(section.et);
      
      /* animation for navbar */
      window.addEventListener('scroll', ()=> {
        NAVBAR.classList.toggle('navbar__toggled', window.scrollY > 100);
      });
      
      /* on submit may appear a modal with prices */
      CONSULTINGPRICE.addEventListener('submit', (e)=> {
        e.preventDefault();
        alert('debería aparecer la lista de precios en algún lugar');
      });

      /* toggle color scheme */
      THEME_TOGGLE.addEventListener('click', ()=> {
        DOCUMENT.classList.toggle('isDark');

        // save theme status to localstorage
        const isDark = DOCUMENT.classList.contains('isDark');

        isDark ? localStorage.setItem('Dark Mode', isDark) : localStorage.setItem('Dark Mode', isDark);
      })

      // verify and load localStorage data{}
      const saveThemeToLocalStorage = ()=> {
        let themeStatus = JSON.parse(localStorage.getItem('Dark Mode'));
        themeStatus ? DOCUMENT.classList.add('isDark') : DOCUMENT.classList.remove('isDark');
      }

      saveThemeToLocalStorage();

      /* toggle responsive button */
      TOGGLE_MENU.addEventListener('click', ()=> {
        TOGGLE_MENU.classList.toggle('anicon__active');
        NAVBAR_MENU.classList.toggle('menu');
        NAVBAR_MENU.classList.toggle('navbar__right');
      })

      NAVBAR_MENU_LINKS.forEach((link)=> {
        link.addEventListener('click', ()=> {
          TOGGLE_MENU.classList.toggle('anicon__active');
          NAVBAR_MENU.classList.toggle('menu');
          NAVBAR_MENU.classList.toggle('navbar__right');
        })
      })
    </script>

  </footer>

</body>
</html>
