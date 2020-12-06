<?php include_once 'includes/templates/header.php'; ?>
<section class="seccion contenedor">
    <h2>Resumen registro</h2>

    <?php if  (isset($_POST['submit'])):
        $nombre = $_POST['nombre'];
        $apelido = $_POST['apelido'];
        $email = $_POST['email'];
        $regalo = $_POST['regalo'];
        $total = $_POST['total_pedido'];
        $fecha = date('Y-m-d H:i:s');

        //Coloracion
        $coloracion = $_POST['coloracion'];
        $mechas = $_POST['pedido_mechas'];
        $alisado = $_POST['pedido_alisado'];
        include_once 'includes/funciones/funciones.php';
        $pedido= productos_json($coloracion, $mechas, $alisado);
        
        //Productos
        $productos = $_POST['registro'];
        $registro = productos_json($productos);

        try{
            require_once('includes/funciones/bd_conexion.php');
            $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, coloracion_extras, estetica_registrado, id_regalo, total_pagado)  VALUES (?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssssis", $nombre, $apelido, $email, $fecha, $pedido, $registro, $regalo, $total);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            header('Location: validar_registro.php?exitoso=1');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    ?>

    <?php endif; ?>

    <?php if(isset($_GET['exitoso'])):

        if($_GET['exitoso'] == "1"):
            echo "¡Se han registrado tu pedido correctamente!";
        endif;
    endif; ?>

    </div>
</section>   

<?php include_once 'includes/templates/footer.php'; ?>



