<?php
        try{
            require_once('includes/funciones/bd_conexion.php');
            $sql =" SELECT * FROM `peluqueria` ";
            $resultado= $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
?>

<section class="servicios contenedor seccion">
    <h2>Peluqueria</h2>
        <ul class="lista-servicios clearfix">
            <?php while( $peluqueria = $resultado->fetch_assoc() ) { ?> 
                <li>
                    <div class="servicio">
                        <a class="peluqueria-info" href="#peluqueria<?php echo $peluqueria['peluqueria_id']; ?>">
                            <img src="<?php echo $peluqueria['logo_peluqueria'] ?>">
                            <p><?php echo $peluqueria['nombre_peluqueria'] ?></p>
                        </a>
                    </div>
                </li>
                <div style="display:none;">
                    <div class="peluqueria-info" id="peluqueria<?php echo $peluqueria['peluqueria_id']; ?>">
                        <img src="<?php echo $peluqueria['logo_peluqueria'] ?>">
                        <h2><?php echo $peluqueria ['nombre_peluqueria'] ?></h2>
                        <p><?php echo $peluqueria['descripcion_peluqueria']?></p>
                    </div>
                </div>
            <?php } ?>
        </ul>
</section> 

<?php
    $conn->close();
?>