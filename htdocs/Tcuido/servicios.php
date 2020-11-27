<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
    <h2>Nuestros servicios</h2>
    
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

    <div class="galeria">
        <?php
            $galeria= array();
            while( $servicios = $resultado->fetch_assoc() ){ 

                

                // Otiene la modalidad del evento

                $tipo = $servicios['tipo_servicio'];
                $categoria = $servicios['cat_servicios'];
                
                $servicio = array(
                    'titulo' => $servicios['nombre_servicio'],
                    'tipo' => $servicios['tipo_servicio'],
                    'duracion' => $servicios['duracion_servicio'],
                    'precio' => $servicios['precio_servicio'],
                    'descripcion' => $servicios['descripcion'],
                    'icono' => 'fa' . " " . $servicios['icono'],
                    'categoria' => $servicios['cat_servicios']
                );
        
                $galeria[$categoria][] = $servicio;
                
                ?>


                <?php  } //While de fetch_assoc()  ?>

                <?php
                    //Imprime todos los servicios
                    foreach($galeria as $cat => $lista_servicios) { ?>
                        <h3>
                            <i class="<?php echo $servicio['icono']; ?>" aria-hidden="true"></i>
                            <?php echo $cat; ?> 
                        </h3>

                        <?php foreach($lista_servicios as $servicio) { ?>
                            <div class="cat">
                                <p class="titulo">
                                    <?php echo $servicio['titulo']; ?>
                                </p>

                                <p class="descripcion">
                                    <?php echo $servicio['descripcion']; ?>
                                </p>

                                <p class="tipo">
                                    <i class="far fa-user" aria-hidden="true"></i>
                                    <?php echo $servicio['tipo'];  ?>
                                </p>

                                <p class="duracion">
                                    <i class="fas fa-hourglass-start" aria-hidden="true"></i>
                                    <?php echo $servicio['duracion']; ?>
                                </p>

                                <p class="precio">
                                    <i class="fas fa-euro-sign" aria-hidden="true"></i>
                                    <?php echo $servicio['precio']; ?>
                                </p>
                            </div>

                          

                       <?php } // fin foreach servicios ?>

                    <?php } // fin foreach de categorias ?>

               

    </div>

    <?php
        $conn->close();
    ?>

</section>

    <?php include_once 'includes/templates/footer.php'; ?>