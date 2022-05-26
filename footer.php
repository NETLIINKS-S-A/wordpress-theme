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
      /**
       * * Intersect sections to put animations
      */
      const section = {
        section1: document.getElementById('section-1'),
        section2: document.getElementById('section-2'),
        section3: document.getElementById('section-3'),
        section4: document.getElementById('section-4'),
        section5: document.getElementById('section-5'),
        section6: document.getElementById('section-6'),
      }

      /**
       * * loadSection
       * @params entrys, observer
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

      const observer = new IntersectionObserver(loadSection, {
        root: null,
        rootMargin: '500px 0px 0px 0px',
        threshold: 0.5
      });

      observer.observe(section.section1);
      observer.observe(section.section2);
      observer.observe(section.section3);
      observer.observe(section.section4);
      observer.observe(section.section5);
      observer.observe(section.section6);
    </script>

    <script>
      const navbar = document.querySelector('.navbar');

      window.addEventListener('scroll', ()=> {
        navbar.classList.toggle('navbar__toggled', window.scrollY > 50);
      }) 
    </script>

  </footer>

</body>
</html>
