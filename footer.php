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
      /**
       * * Intersect sections to put animations
      */
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

      /* A function that is called when the user scrolls the page. */
      const loadSection = (entrys, observer)=> {
        entrys.forEach((entry)=> {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
          } else {
            entry.target.classList.remove('visible');
          }
        })
      }

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
    </script>

    <script>
      const navbar = document.querySelector('.navbar');

      window.addEventListener('scroll', ()=> {
        navbar.classList.toggle('navbar__toggled', window.scrollY > 100);
      }) 
    </script>

  </footer>

</body>
</html>
