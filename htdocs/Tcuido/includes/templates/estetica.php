<?php
        try{
            require_once('includes/funciones/bd_conexion.php');
            $sql =" SELECT * FROM `estetica` ";
            $resultado= $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
 ?>

    <section class="servicios contenedor seccion">
        <h2>Estética</h2>
        <ul class="lista-servicios clearfix">
            <?php while( $estetica = $resultado->fetch_assoc() ) { ?> 
                <li>
                    <div class="servicio">
                        <a class="estetica-info" href="#estetica<?php echo $estetica['estetica_id']; ?>">
                            <img src="<?php echo $estetica['logo_estetica'] ?>">
                            <p><?php echo $estetica['nombre_estetica'] ?></p>
                        </a>
                    </div>
                </li>
                <div style="display:none;">
                    <div class="estetica-info" id="estetica<?php echo $estetica['estetica_id']; ?>">
                        <img src="<?php echo $estetica['logo_estetica'] ?>">
                        <h2><?php echo $estetica ['nombre_estetica'] ?></h2>
                        <p><?php echo $estetica['descripcion']?></p>
                    </div>
                </div>
            <?php } ?>
        </ul>
    </section>     

    <?php
        $conn->close();
    ?>