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
                            $sql .= "AND servicios.id_cat_servicio = 1";
                            $sql .= " ORDER BY servicio_id  LIMIT 2;";
                            $sql .= "SELECT servicio_id, nombre_servicio, tipo_servicio, duracion_servicio, precio_servicio, descripcion, cat_servicios, icono ";
                            $sql .= "FROM servicios ";
                            $sql .= "INNER JOIN categoria_servicios ";
                            $sql .= "ON servicios.id_cat_servicio = categoria_servicios.id_categoria ";
                            $sql .= "AND servicios.id_cat_servicio = 2 ";
                            $sql .= " ORDER BY servicio_id  LIMIT 2;";
                            $sql .= "SELECT servicio_id, nombre_servicio, tipo_servicio, duracion_servicio, precio_servicio, descripcion, cat_servicios, icono ";
                            $sql .= "FROM servicios ";
                            $sql .= "INNER JOIN categoria_servicios ";
                            $sql .= "ON servicios.id_cat_servicio = categoria_servicios.id_categoria ";
                            $sql .= "AND servicios.id_cat_servicio = 3 ";
                            $sql .= " ORDER BY servicio_id  LIMIT 2;";
                            $resultado= $conn->query($sql);
                        } catch (\Exception $e) {
                            echo $e->getMessage();
                        }
                    ?>

                    <?php $conn->multi_query($sql); ?>

                    <?php
                        do{
                            $resultado = $conn->store_result();
                            $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>

                            <?php $i = 0; ?>    
                            <?php foreach($row as $servicio): ?> 
                                <?php if ($i % 2 == 0) { ?>

                                <div id="<?php echo strtolower($servicio['id_cat_servicio']) ?>" class="info-curso ocultar clearflix">

                                <?php } ?>   
                                    <div class="detalle-evento">
                                        <h3><?php echo utf8_econde($servicio['nombre_servicio']) ?></h3>
                                        <p> <?php echo $servicio['descripcion']; ?> </p>
                                        <p><i class="far fa-clock" aria-hidden="true"></i> <?php echo $servicio['tipo_servicio']; ?> </p>
                                        <p><i class="fas fa-hourglass-start" aria-hidden="true"></i> <?php echo $servicio['duracion_servicio']; ?> </p>
                                        <p><i class="fas fa-euro-sign" aria-hidden="true"></i> <?php echo $servicio['precio_servicio']; ?></p>
                                    </div>

                                    <?php if($i % 2 == 1):  ?>
                                        <a href="servicios.php" class="button float-right">Ver todos</a>
                                    <?php endif; ?>

                                </div>
                                <?php $i++; ?>
                            <?php endforeach; ?> 
                            <?php $resultado->free(); ?>

                    <?php } while ($conn->more_results() && $conn->next_result()); ?> 
                    
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