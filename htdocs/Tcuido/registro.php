<?php include_once 'includes/templates/header.php'; ?>
<!--barra-->

<section class="seccion contenedor">
    <h2>PEDIDOS ONLINE</h2>
    <form id="registro" class="registro" action="index.html" method="post">
        <div id="datos_cliente" class="registro caja clearfix">
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" placeholder="tu Nombre">
            </div>

            <div class="campo">
                <label for="apelido">Apellido:</label>
                <input type="text" id="apelido" placeholder="tu Apellido">
            </div>

            <div class="campo">
                <label for="email">Email:</label>
                <input type="text" id="email" placeholder="tu Email">
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
                            <input type="number" min="0" id="coloracion_intensa" size="3" placeholder="0">
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
                            <input type="number" min="0" id="coloracion_luminosidad" size="3" placeholder="0">
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
                            <input type="number" min="0" id="color_bienestar" size="3" placeholder="0">
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <!--paquetes-->

        <div id="eventos" class="eventos clearfix">
            <h3>Busca tu producto</h3>
            <div class="caja">
                <div id="estetica" class="contenido-dia clearfix">
                    <h4>Estética</h4>
                    <div>
                        <p>Consulta 1</p>
                        <label><input type="checkbox" name="registro[]" id="sala_01" value="sala"><price>3,00€ - 18,90€</price> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="sala_02" value="sala_02"><price>75€ - 375€</price> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="sala_03" value="sala_03"><price>35€ - 175€ </price> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="sala_04" value="sala_04"><price>55€ - 300€ </price> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="sala_05" value="sala_05"><price>40€ - 120€  </price> Limpieza de Cutis</label>
                    </div>
                    <div>
                        <p>Consulta 2:</p>
                        <label><input type="checkbox" name="registro[]" id="sala_01" value="sala"><price>3,00€ - 18,90€</price> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="sala_02" value="sala_02"><price>75€ - 375€</price> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="sala_03" value="sala_03"><price>35€ - 175€ </price> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="sala_04" value="sala_04"><price>55€ - 300€ </price> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="sala_05" value="sala_05"><price>40€ - 120€  </price> Limpieza de Cutis</label>
                    </div>
                    <div>
                        <p>Consulta 3:</p>
                        <label><input type="checkbox" name="registro[]" id="sala_01" value="sala"><price>3,00€ - 18,90€</price> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="sala_02" value="sala_02"><price>75€ - 375€</price> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="sala_03" value="sala_03"><price>35€ - 175€ </price> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="sala_04" value="sala_04"><price>55€ - 300€ </price> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="sala_05" value="sala_05"><price>40€ - 120€  </price> Limpieza de Cutis</label>
                    </div>
                </div>
                <!--#estetica-->
                <div id="opi" class="contenido-dia clearfix">
                    <h4>OPI</h4>
                    <div>
                        <p>Consulta 1</p>
                        <label><input type="checkbox" name="registro[]" id="sala_01" value="sala"><price>3,00€ - 18,90€</price> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="sala_02" value="sala_02"><price>75€ - 375€</price> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="sala_03" value="sala_03"><price>35€ - 175€ </price> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="sala_04" value="sala_04"><price>55€ - 300€ </price> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="sala_05" value="sala_05"><price>40€ - 120€  </price> Limpieza de Cutis</label>
                    </div>
                    <div>
                        <p>Consulta 2:</p>
                        <label><input type="checkbox" name="registro[]" id="sala_01" value="sala"><price>3,00€ - 18,90€</price> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="sala_02" value="sala_02"><price>75€ - 375€</price> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="sala_03" value="sala_03"><price>35€ - 175€ </price> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="sala_04" value="sala_04"><price>55€ - 300€ </price> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="sala_05" value="sala_05"><price>40€ - 120€  </price> Limpieza de Cutis</label>
                    </div>
                    <div>
                        <p>Consulta 3:</p>
                        <label><input type="checkbox" name="registro[]" id="sala_01" value="sala"><price>3,00€ - 18,90€</price> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="sala_02" value="sala_02"><price>75€ - 375€</price> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="sala_03" value="sala_03"><price>35€ - 175€ </price> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="sala_04" value="sala_04"><price>55€ - 300€ </price> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="sala_05" value="sala_05"><price>40€ - 120€  </price> Limpieza de Cutis</label>
                    </div>
                </div>
                <!--#opi-->
                <div id="peluqueria" class="contenido-dia clearfix">
                    <h4>Peluqería</h4>
                    <div>
                        <p>Consulta 1</p>
                        <label><input type="checkbox" name="registro[]" id="sala_01" value="sala"><price>3,00€ - 18,90€</price> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="sala_02" value="sala_02"><price>75€ - 375€</price> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="sala_03" value="sala_03"><price>35€ - 175€ </price> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="sala_04" value="sala_04"><price>55€ - 300€ </price> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="sala_05" value="sala_05"><price>40€ - 120€  </price> Limpieza de Cutis</label>
                    </div>
                    <div>
                        <p>Consulta 2:</p>
                        <label><input type="checkbox" name="registro[]" id="sala_01" value="sala"><price>3,00€ - 18,90€</price> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="sala_02" value="sala_02"><price>75€ - 375€</price> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="sala_03" value="sala_03"><price>35€ - 175€ </price> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="sala_04" value="sala_04"><price>55€ - 300€ </price> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="sala_05" value="sala_05"><price>40€ - 120€  </price> Limpieza de Cutis</label>
                    </div>
                    <div>
                        <p>Consulta 3:</p>
                        <label><input type="checkbox" name="registro[]" id="sala_01" value="sala"><price>3,00€ - 18,90€</price> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="sala_02" value="sala_02"><price>75€ - 375€</price> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="sala_03" value="sala_03"><price>35€ - 175€ </price> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="sala_04" value="sala_04"><price>55€ - 300€ </price> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="sala_05" value="sala_05"><price>40€ - 120€  </price> Limpieza de Cutis</label>
                    </div>
                </div>
                <!--#peluqueria-->
                <div id="promociones" class="contenido-dia clearfix">
                    <h4>Promociones Web</h4>
                    <div>
                        <p>Consulta 1</p>
                        <label><input type="checkbox" name="registro[]" id="sala_01" value="sala"><price>3,00€ - 18,90€</price> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="sala_02" value="sala_02"><price>75€ - 375€</price> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="sala_03" value="sala_03"><price>35€ - 175€ </price> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="sala_04" value="sala_04"><price>55€ - 300€ </price> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="sala_05" value="sala_05"><price>40€ - 120€  </price> Limpieza de Cutis</label>
                    </div>
                    <div>
                        <p>Consulta 2:</p>
                        <label><input type="checkbox" name="registro[]" id="sala_01" value="sala"><price>3,00€ - 18,90€</price> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="sala_02" value="sala_02"><price>75€ - 375€</price> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="sala_03" value="sala_03"><price>35€ - 175€ </price> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="sala_04" value="sala_04"><price>55€ - 300€ </price> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="sala_05" value="sala_05"><price>40€ - 120€  </price> Limpieza de Cutis</label>
                    </div>
                    <div>
                        <p>Consulta 3:</p>
                        <label><input type="checkbox" name="registro[]" id="sala_01" value="sala"><price>3,00€ - 18,90€</price> Depilación Hilo y Cera</label>
                        <label><input type="checkbox" name="registro[]" id="sala_02" value="sala_02"><price>75€ - 375€</price> Depilación Láser Diodo</label>
                        <label><input type="checkbox" name="registro[]" id="sala_03" value="sala_03"><price>35€ - 175€ </price> Estética Corporal</label>
                        <label><input type="checkbox" name="registro[]" id="sala_04" value="sala_04"><price>55€ - 300€ </price> Estética facial</label>
                        <label><input type="checkbox" name="registro[]" id="sala_05" value="sala_05"><price>40€ - 120€  </price> Limpieza de Cutis</label>
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
                        <input type="number" min="0" id="mechas_balaye" size="3" placeholder="0">
                    </div>

                    <div class="orden">
                        <label for="alisado_kertina">Alisado de Kertina 95€ <small>(Antes 170€)</small></label>
                        <input type="number" min="0" id="alisado_kertina" size="3" placeholder="0">
                    </div>

                    <div class="orden">
                        <label for="regalo"> Seleccione un regalo </label> <br>
                        <select id="regalo" required>
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
                    <input id="btnRegistro" type="submit" class="button" value="Pagar">
                </div>
                <!-- total -->
            </div>
            <!-- caja -->
        </div>
        <!--Resuemn-->
    </form>
</section>
<?php include_once 'includes/templates/footer.php'; ?>