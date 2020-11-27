<?php include_once 'includes/templates/header.php'; ?>

    <!--barra-->
    <section class="seccion contenedor">
        <h2>T - CUIDO somos tu clínica de estética y bienestar en Betanzos</h2>
        <p>Con más de 15 años de experiencia en el sector ofrecemos servicios con las técnicas más avanzadas del mercado unidas a los mejores productos de alta cosmética ofreciendo a nuestros clientes soluciones que funcionan,empezando por nuestro diagnóstico
            gratuito personalizado. Además disponemos de unas confortables instalaciones con circuito spa privado, que harán de tu visita una experiencia inolvidable.
        </p>
    </section>
    <!-- seccion -->

    
    <section class="programa">
        <div class="contenedor-img">
            <img src="img/fondo.jpg" alt="">  
        </div>
        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Servicios</h2>
                    <?php
                        try{
                            require_once('includes/funciones/bd_conexion.php');
                            $sql = "SELECT * FROM `categoria_servicios`";
                            $resultado= $conn->query($sql);
                        } catch (\Exception $e) {
                            echo $e->getMessage();
                        }
                    ?>
                
                    <nav class="menu-programa">
                        <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                            <?php $categoria = $cat['cat_servicios']; ?>
                                <a href="#<?php echo strtolower($categoria) ?>">
                                    <i class="<?php echo $cat['icono'] ?>" aria-hidden="true"></i> <?php echo $categoria ?>
                                </a>
                        <?php } ?>
                    </nav>

                    <?php
                        try{
                            require_once('includes/funciones/bd_conexion.php');
                            $sql = "SELECT servicio_id, nombre_servicio, tipo_servicio, duracion_servicio, precio_servicio, descripcion, cat_servicios, icono ";
                            $sql .= "FROM servicios ";
                            $sql .= "INNER JOIN categoria_servicios ";
                            $sql .= "ON servicios.id_cat_servicio = categoria_servicios.id_categoria ";
                            $sql .= " ORDER BY servicio_id ";
                            $resultado= $conn->query($sql);
                        } catch (\Exception $e) {
                            echo $e->getMessage();
                        }
                    ?>

                    <div id="masajes" class="info-curso ocultar clearflix">
                        <div class="detalle-evento">
                            <h3>Masaje relajante</h3>
                            <p>Clásico, Suave y Equilibrado.</p>
                            <p><i class="far fa-clock" aria-hidden="true"></i>Individual</p>
                            <p><i class="fas fa-hourglass-start" aria-hidden="true"></i>45m</p>
                            <p><i class="fas fa-euro-sign" aria-hidden="true"></i>49</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Masaje Descontracturante</h3>
                            <p>Energético, Fuerte y Recuperador.</p>
                            <p><i class="far fa-clock" aria-hidden="true"></i>Pareja</p>
                            <p><i class="fas fa-hourglass-start" aria-hidden="true"></i>30m</p>
                            <p><i class="fas fa-euro-sign" aria-hidden="true"></i></i>35</p>
                        </div>
                        <a href="servicios.php" class="button float-right">Ver todos</a>
                    </div>

                    <!--masajes-->
                    <div id="rituales" class="info-curso ocultar clearflix">
                        <div class="detalle-evento">
                            <h3>Ritual de belleza</h3>
                            <p><i class="far fa-clock" aria-hidden="true"></i>Individual</p>
                            <p><i class="fas fa-hourglass-start" aria-hidden="true"></i>50m</p>
                            <p><i class="fas fa-euro-sign" aria-hidden="true"></i></i>79</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Ritual Chocolaterapia</h3>
                            <p><i class="far fa-clock" aria-hidden="true"></i>Pareja</p>
                            <p><i class="fas fa-hourglass-start" aria-hidden="true"></i>30m</p>
                            <p><i class="fas fa-euro-sign" aria-hidden="true"></i></i>67</p>
                        </div>
                        <a href="servicios.php" class="button float-right">Ver todos</a>
                    </div>
                    <!--rituales-->
                    <div id="circuitos" class="info-curso ocultar clearflix">
                        <div class="detalle-evento">
                            <h3>Circuito Relax</h3>
                            <p><i class="far fa-clock" aria-hidden="true"></i>Individual</p>
                            <p><i class="fas fa-hourglass-start" aria-hidden="true"></i>60m</p>
                            <p><i class="fas fa-euro-sign" aria-hidden="true"></i></i>69</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Circuito Oriental</h3>
                            <p><i class="far fa-clock" aria-hidden="true"></i>Pareja</p>
                            <p><i class="fas fa-hourglass-start" aria-hidden="true"></i>25m</p>
                            <p><i class="fas fa-euro-sign" aria-hidden="true"></i></i>80</p>
                        </div>
                        <a href="servicios.php" class="button float-right">Ver todos</a>
                    </div>
                    <!--circuitos-->
                </div>
                <!-- programa evento -->
            </div>
            <!-- contenedor -->
        </div>
        <!-- contenido programa-->
    </section>
    <!-- programa-->
    
    <!--
    <section class="servicios contenedor seccion">
    </section>

    -->
    <?php include_once 'includes/templates/peluqueria.php'; ?> 

    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero"> </p> Empleados </li>
                <li>
                    <p class="numero"> </p> Centros </li>
                <li>
                    <p class="numero"> </p> Cursos </li>
                <li>
                    <p class="numero"> </p> Rebajas </li>

            </ul>
        </div>
    </div>


    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Coloración intensa</h3>
                        <p class="numero">30.80€</p>
                        <ul>
                            <li><i class="fas fa-check"></i> Asesoramiento</li>
                            <li><i class="fas fa-check"></i> Coloracioón/tintura</li>
                            <li><i class="fas fa-check"></i> Lavado (champú + masaje relajante)</li>
                            <li><i class="fas fa-check"></i> Eliminiación de la humedad</li>
                            <li><i class="fas fa-check"></i> Bebida de cortersía</li>
                        </ul>
                        <a href="" class="button hollow">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Coloración luminosidad</h3>
                        <p class="numero">35.80€</p>
                        <ul>
                            <li><i class="fas fa-check"></i> Asesoramiento</li>
                            <li><i class="fas fa-check"></i> Coloracioón/tintura</li>
                            <li><i class="fas fa-check"></i> Lavado (champú + masaje relajante)</li>
                            <li><i class="fas fa-check"></i> Eliminiación de la humedad</li>
                            <li><i class="fas fa-check"></i> Bebida de cortersía</li>
                        </ul>
                        <a href="" class="button">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Color Bienestar</h3>
                        <p class="numero">75€</p>
                        <ul>
                            <li><i class="fas fa-check"></i> Asesoramiento</li>
                            <li><i class="fas fa-check"></i> Coloracioón/tintura</li>
                            <li><i class="fas fa-check"></i> Lavado (champú + masaje relajante)</li>
                            <li><i class="fas fa-check"></i> Eliminiación de la humedad</li>
                            <li><i class="fas fa-check"></i> Bebida de cortersía</li>
                        </ul>
                        <a href="" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <div id="mapa" class="mapa">

    </div>

    <section class="section">
        <h2>Consejos</h2>
        <div class="consejos contenedor clearfix">
            <div class="consejo">
                <blockquote>
                    <p>Si tu hijo o hija se ha empeñado en que quiere el pelo largo, hay que tener una serie de medidas en la cabeza para que pueda cumplir su objetivo ya que darles la oportunidad de que lleven el pelo como quieren les dará seguridad, autonomía
                        y desarrollo de su propia personalidad.</p>
                    <footer class="info-consejo clearfix">
                       <img src="img/testimonial.jpg" alt="">
                        <cite>Virginia Carmona <span>Gerente</span></cite>
                    </footer>
                </blockquote>
            </div>

            <div class="consejo">
                <blockquote>
                    <p>Hay que tener en cuenta el diagnostico previo antes de realizar cualquier servicio, ya que hay resolverán todas las dudas tanto de precio como de los servicios que realmente se quieran realizar. Teniendo en cuenta que no todas las peluquerías realizan este tipo de asesoramiento personalizado y gratuito..</p>
                    <footer class="info-consejo clearfix">
                        <img src="img/testimonial.jpg" alt="">
                        <cite>Laura Pardo <span>Gerente</span></cite>
                    </footer>
                </blockquote>
            </div>

            <div class="consejo">
                <blockquote>
                    <p>Servicios, salones que estén actualizados en las ultimas tendencias, expertos en color y con un abanico amplio de varios servicios complementarios, donde siempre puedas elegir y disfrutar de tus necesidades.</p>
                    <footer class="info-consejo clearfix">
                        <img src="img/testimonial.jpg" alt="">
                        <cite>Antía García <span>Gerente</span></cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p> Regístrate al newsletter</p>
            <h3>T-cuido</h3>
            <a href="#" class="button transparente">Registro</a>
        </div>
    </div>

    <section class="seccion">
        <h2>¡Cuentra atrás para la semana fantástica!</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li>
                    <p id="dias" class="numero"></p> días</li>
                <li>
                    <p id="horas" class="numero"></p> horas</li>
                <li>
                    <p id="minutos" class="numero"></p> minutos</li>
                <li>
                    <p id="segundos" class="numero"></p> segundos</li>
            </ul>
        </div>
    </section>


    <?php include_once 'includes/templates/footer.php'; ?>