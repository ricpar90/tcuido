<footer class="site-footer">
    <div class="contenedor clearfix">
        <div class="footer-informacion">
            <h3>Sobre <span>T-cuido</span></h3>
            <p>Con más de 15 años de experiencia en el sector ofrecemos servicios con las técnicas más avanzadas del mercado unidas a los mejores productos de alta cosmética ofreciendo a nuestros clientes soluciones que funcionan,empezando por nuestro
                diagnóstico gratuito personalizado. Además disponemos de unas confortables instalaciones con circuito spa privado, que harán de tu visita una experiencia inolvidable.</p>
        </div>
        <div class="ultimos-tweets">
            <h3>Últimos <span>tweets</span></h3>
            <a class="twitter-timeline" data-width="400" data-height="300" data-theme="light" href="https://twitter.com/Tcuido1?ref_src=twsrc%5Etfw">Tweets by ricpar90</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="menu">
            <h3>Redes <span>sociales</span></h3>
            <nav class="redes-sociales-footer">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i>  981 67 30 61</a>
            </nav>
        </div>
    </div>
        <p class="copyright">Todos los derechos Reservados T-cuido 2019</p>
</footer>

    <script src="js/vendor/modernizr-3.8.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script> -
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.lettering.js"></script>
    <script src="js/jquery.countdown.min.js"></script>

    <?php
        $archivo = basename($_SERVER['PHP_SELF']);
        $pagina = str_replace('.php', "", $archivo);
        if ($pagina == 'estetica'){
            echo '<script src="js/jquery.colorbox-min.js"></script>';
        } else if($pagina == 'instalaciones'){
            echo '<script src="js/lightbox.js"></script>';
        } else if($pagina == 'index'){
            echo '<script src="js/jquery.colorbox-min.js"></script>';
        }
    ?>
    
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>

</body>

</html>