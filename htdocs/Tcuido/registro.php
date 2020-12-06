<?php include_once 'includes/templates/header.php'; ?>
<!--barra-->

<section class="seccion contenedor">
    <h2>CITA ON-LINE</h2>
    <form id="registro" class="registro" action="validar_registro.php" method="post">
        <div id="datos_cliente" class="registro caja clearfix">
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="tu Nombre">
            </div>

            <div class="campo">
                <label for="apelido">Apellido:</label>
                <input type="text" id="apelido" name="apelido" placeholder="tu Apellido">
            </div>

            <div class="campo">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="tu Email">
            </div>

            <div id="error"></div>
        </div>
        <!--datos_usuario-->
        <div id="paquetes" class="paquetes">
            <h3>Elige tu coloración</h3>
            <ul class="lista-precios cleafix">
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
                        <div class="orden">
                            <label for="coloracion_intensa">Cantidad:</label>
                            <input type="number" min="0" id="coloracion_intensa" size="3" name="coloracion[]" placeholder="0">
                        </div>
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
                        <div class="orden">
                            <label for="coloracion_luminosidad">Cantidad:</label>
                            <input type="number" min="0" id="coloracion_luminosidad" size="3" name="coloracion[]" placeholder="0">
                        </div>
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
                        <div class="orden">
                            <label for="color_bienestar">Cantidad:</label>
                            <input type="number" min="0" id="color_bienestar" size="3" name="coloracion[]" placeholder="0">
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <!--paquetes-->

        <div id="eventos" class="eventos clearfix">
            <h3>Escoge día y hora</h3>
            <div class="caja">
                <div id="estetica" class="contenido-producto clearfix">
                    <h4>Estética</h4>
                    <div>
                        <p>Lunes</p>
                        <label><input type="checkbox" name="registro[]" id="est_01" value="est_01"><a>09:50h</a> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="est_02" value="est_02"><a>10:30h</a> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="est_03" value="est_03"><a>11:15h </a> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="est_04" value="est_04"><a>12:45h </a> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="est_05" value="est_05"><a>13:50h </a> Limpieza de Cutis</label>
                    </div>
                    <div>
                        <p>Martes</p>
                        <label><input type="checkbox" name="registro[]" id="est_06" value="est_06"><a>09:30h</a> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="est_07" value="est_07"><a>10:20h</a> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="est_08" value="est_08"><a>11:50h </a> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="est_09" value="est_09"><a>13:10h </a> Estética facial</label>
                    </div>
                    <div>
                        <p>Miércoles</p>
                        <label><input type="checkbox" name="registro[]" id="salaest_01" value="salaest_01"><a>10:40h</a> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="salaest_02" value="salaest_02"><a>11:50h</a> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="salaest_03" value="salaest_03"><a>15:30h </a> Estética Corporal</label>
                        
                    </div>
                
                </div>
                <!--#estetica-->
                <div id="opi" class="contenido-producto clearfix">
                    <h4>OPI</h4>
                    <div>
                        <p>Lunes</p>
                        <label><input type="checkbox" name="registro[]" id="opi_01" value="opi_01"><a>09:25h</a> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="opi_02" value="opi_02"><a>10:35h</a> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="opi_03" value="opi_03"><a>11:50h </a> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="opi_04" value="opi_04"><a>12:40h </a> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="opi_05" value="opi_05"><a>13:50h </a> Limpieza de Cutis</label>
                    </div>
                    <div>
                        <p>Martes</p>
                        <label><input type="checkbox" name="registro[]" id="opi_06" value="opi_06"><a>09:30h</a> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="opi_07" value="opi_07"><a>10:30h</a> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="opi_08" value="opi_08"><a>11:30h </a> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="opi_09" value="opi_09"><a>12:30h </a> Estética facial</label>
                    </div>
                    <div>
                        <p>Miércoles</p>
                        <label><input type="checkbox" name="registro[]" id="salaopi_01" value="salaopi_01"><a>10:30h</a> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="salaopi_02" value="salaopi_02"><a>11:30h</a> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="salaopi_03" value="salaopi_03"><a>12:30h </a> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="salaopi_04" value="salaopi_04"><a>13:30h </a> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="salaopi_05" value="salaopi_05"><a>16:30h  </a> Limpieza de Cutis</label>
                    </div>
                </div>
                <!--#opi-->
                <div id="peluqueria" class="contenido-producto clearfix">
                    <h4>Peluqería</h4>
                    <div>
                        <p>Lunes</p>
                        <label><input type="checkbox" name="registro[]" id="pel_01" value="pel_01"><a>10:30h</a> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="pel_02" value="pel_02"><a>11:30h</a> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="pel_03" value="pel_03"><a>13:30h</a> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="pel_05" value="pel_04"><a>15:30h</a> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="pel_05" value="pel_05"><a>16:30h </a> Limpieza de Cutis</label>
                    </div>
                    <div>
                        <p>Martes</p>
                        <label><input type="checkbox" name="registro[]" id="pel_06" value="pel_06"><a>11:30h</a> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="pel_07" value="pel_07"><a>14:30h</a> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="pel_08" value="pel_08"><a>16:30h </a> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="pel_09" value="pel_09"><a>17:20h </a> Estética facial</label>
                    </div>
                    <div>
                        <p>Miércoles</p>
                        <label><input type="checkbox" name="registro[]" id="salapel_01" value="salapel_01"><a>16:30h</a> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="salapel_02" value="salapel_02"><a>17:30h</a> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="salapel_03" value="salapel_03"><a>18:10h </a> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="salapel_04" value="salapel_04"><a>18:50h </a> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="salapel_05" value="salapel_05"><a>19:15h  </a> Limpieza de Cutis</label>
                    </div>
                </div>
                <!--#peluqueria-->
                <div id="promociones" class="contenido-producto clearfix">
                    <h4>Promociones Web</h4>
                    <div>
                        <p>Lunes</p>
                        <label><input type="checkbox" name="registro[]" id="prom_01" value="prom_02"><a>09:50h</a> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="prom_02" value="prom_02"><a>10:15h</a> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="prom_03" value="prom_03"><a>11:45h </a> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="prom_04" value="prom_04"><a>15:50h </a> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="prom_05" value="prom_05"><a>16:45h  </a> Limpieza de Cutis</label>
                    </div>
                    <div>
                        <p>Martes</p>
                        <label><input type="checkbox" name="registro[]" id="prom_06" value="prom_06"><a>15:50h</a> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="prom_07" value="prom_07"><a>16:30h</a> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="prom_08" value="prom_08"><a>17:50h </a> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="prom_09" value="prom_09"><a>19h </a> Estética facial</label>
                    </div>
                    <div>
                        <p>Miércoles</p>
                        <label><input type="checkbox" name="registro[]" id="salaprom_01" value="salaprom_01"><a>13:00h</a> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="salaprom_02" value="salaprom_02"><a>16:00h</a> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="salaprom_03" value="salaprom_03"><a>17:00h </a> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="salaprom_04" value="salaprom_04"><a>18:00h</a> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="salaprom_05" value="salaprom_05"><a>19:00h  </a> Limpieza de Cutis</label>
                    </div>
                </div>
            </div>
            <!--.promociones-->
        </div>
        <!--#eventos-->

        <div id="resumen" class="resumen">
            <h3>Pagos y extras</h3>
            <div class="caja clearfix">
                <div class="extras">
                    <div class="orden">
                        <label for="mechas_balaye">Mechas Balaye 45€ <small>(Antes 90,90€)</small></label>
                        <input type="number" min="0" id="mechas_balaye" name="pedido_mechas" size="3" placeholder="0">
                    </div>

                    <div class="orden">
                        <label for="alisado_kertina">Alisado de Kertina 95€ <small>(Antes 170€)</small></label>
                        <input type="number" min="0" id="alisado_kertina" name="pedido_alisado" size="3" placeholder="0">
                    </div>

                    <div class="orden">
                        <label for="regalo"> Seleccione un regalo </label> <br>
                        <select id="regalo" name="regalo" required>
                                <option value=""> Seleccione una opción --</option>
                                <option value="ETI">Tratamiento purificante</option>
                                <option value="PUL">Limpieza de cutis</option>
                                <option value="PLU">Estética corporal</option>
                            </select>
                    </div>
                    <!-- orden -->
                    <input type="button" id="calcular" class="button" value="Calcular">
                </div>
                <!--calcular-->
                <div class="total">
                    <p>Resumen</p>
                    <div id="lista-productos">

                    </div>
                    <p>Total:</p>
                    <div id="suma-total"></div>
                    <input type="hidden" name="total_pedido" id="total_pedido">
                    <input id="btnRegistro" type="submit" name="submit" class="button" value="Pagar">
                </div>
                <!-- total -->
            </div>
            <!-- caja -->
        </div>
        <!--Resumen-->
    </form>
</section>
<?php include_once 'includes/templates/footer.php'; ?>