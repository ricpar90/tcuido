<?php 
function coloracion_json(&$coloracion, &$mechas = 0, &$alisado = 0){
    $tipo_coloracion = array(0=> 'coloracion_intensa', 1=> 'coloracion_luminosidad', 2=> 'color_bienestar');
    $total_coloracion = array_combine($tipo_coloracion, $coloracion);
    $json = array();
 
    foreach($total_coloracion as  $key => $coloracion):
        if((int) $coloracion > 0):
            $json[$key] = (int) $coloracion;
        endif;
 
    endforeach;

    $alisado= (int) $alisado;
    if ($alisado > 0):
        $json['alisado'] = $alisado;
    endif;

    $mechas= (int) $mechas;
    if ($mechas > 0):
        $json['mechas'] = $mechas;
    endif;

    return json_encode($json);
}

function productos_json(&$productos){
    $productos_json= array();
    foreach($productos as $producto):
        $productos_json['productos'][] = $producto;
    endforeach;

    return json_encode($productos_json);
}
 
?>