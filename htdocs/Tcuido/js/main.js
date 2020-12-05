(function() {
    "use strict";

    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function() {

        if (document.getElementById('mapa')) {
            var map = L.map('mapa').setView([43.279619, -8.21036], 20);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([43.279619, -8.21036]).addTo(map)
                .bindPopup('Estamos aquí.')
                .openPopup();
        }


        // campos datos usuarios
        var nombre = document.getElementById('nombre');
        var apelido = document.getElementById('apelldio');
        var email = document.getElementById('email');

        // Campos coloracion
        var coloracion_intensa = document.getElementById('coloracion_intensa');
        var coloracion_luminosidad = document.getElementById('coloracion_luminosidad');
        var color_bienestar = document.getElementById('color_bienestar');

        //Botones divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('errorDiv');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista-productos');
        var suma = document.getElementById('suma-total');


        // Extras

        var tratamientoPurificante = document.getElementById('tratamientoPurificante');
        var limpiezaCutis = document.getElementById('limpiezaCutis');
        var esteteticaCorporal = document.getElementById('esteteticaCorporal');

        botonRegistro.disabled = true;

        if (document.getElementById('calcular')) {

            calcular.addEventListener('click', calcularMontos);
            coloracion_intensa.addEventListener('blur', mostrarColores);
            coloracion_luminosidad.addEventListener('blur', mostrarColores);
            color_bienestar.addEventListener('blur', mostrarColores);
            nombre.addEventListener('blur', validarCampos);
            apelido.addEventListener('blur', validarCampos);
            email.addEventListener('blur', validarCampos);
            email.addEventListener('blur', validarMail);
        }


        function validarCampos() {
            if (this.value == '') {
                error.style.display = 'block';
                error.innerHTML = "Este campo es obligatorio";
                this.style.border = '1px solid red';
                error.style.border = '1px solid blue';
                error.style.color = "white";
                error.style.background = "red";
            } else {
                error.style.display = "none";
                this.style.border = "1px solid #cccccc";
            }
        }

        function validarMail() {
            if (this.value.indexOf("@") > -1) {
                error.style.display = "none";
                this.style.border = "1px solid #cccccc";
            } else {
                error.style.display = 'block';
                error.innerHTML = "Este campo debe contener un @";
                this.style.border = '1px solid red';
                error.style.border = '1px solid blue';
                error.style.color = "white";
                error.style.background = "red";
            }
        }


        function calcularMontos(event) {
            event.preventDefault();
            if (regalo.value == '') {
                alert("Debes elegir un regalo");
                regalo.focus();
            } else {
                var boletosIntensa = parseInt(coloracion_intensa.value, 10) || 0,
                    boletosLuminosidad = parseInt(coloracion_luminosidad.value, 10) || 0,
                    boletosBienestar = parseInt(color_bienestar.value, 10) || 0,
                    mechasBalaye = parseInt(mechas_balaye.value, 10) || 0,
                    alisadoKertina = parseInt(alisado_kertina.value, 10) || 0;

                var totalPagar = (boletosIntensa * 30, 80) + (boletosLuminosidad * 35, 80) + (boletosBienestar * 75) + ((mechasBalaye * 10) * 0.93) + (alisadoKertina * 2);


                var listadoProductos = [];

                if (boletosIntensa >= 1) {
                    listadoProductos.push(boletosIntensa + ' Coloración intensa');
                }

                if (boletosLuminosidad >= 1) {
                    listadoProductos.push(boletosLuminosidad + ' Coloración luminosidad');
                }

                if (boletosBienestar >= 1) {
                    listadoProductos.push(boletosBienestar + ' Color Bienestar');
                }

                if (mechasBalaye >= 1) {
                    listadoProductos.push(mechasBalaye + ' Mechas Balaye');
                }

                if (alisadoKertina >= 1) {
                    listadoProductos.push(alisadoKertina + ' Alisado de Kertina');
                }


                lista_productos.style.display = 'block';



                listadoProductos.innerHTML = '';
                for (var i = 0; i < listadoProductos.length; i++) {
                    lista_productos.innerHTML += listadoProductos[i] + ' <br/>';
                }

                suma.innerHTML = totalPagar.toFixed(2) + " €";

                botonRegistro.disabled = false;
                document.getElementById('total_pedido').value = totalPagar;
            }
        }

        function mostrarColores() {
            var boletosIntensa = parseInt(coloracion_intensa.value, 10) || 0,
                boletosLuminosidad = parseInt(coloracion_luminosidad.value, 10) || 0,
                boletosBienestar = parseInt(color_bienestar.value, 10) || 0;

            var boletosElegidos = [];

            if (boletosIntensa > 0) {
                boletosElegidos.push('estetica');
            }
            if (boletosLuminosidad > 0) {
                boletosElegidos.push('opi', 'peluqueria')
            }
            if (boletosBienestar > 0) {
                boletosElegidos.push('peluqueria', 'promociones');
            }


            for (var i = 0; i < boletosElegidos.length; i++) {
                document.getElementById(boletosElegidos[i]).style.display = 'block';
            }
        }

    }); // DOM CONTENTY LOADED
}());


$(function() {

    //Lettering
    $('.nombre-sitio').lettering();

    // Agregar clase a Menú

    $('body.instalaciones .navegacion-principal a:contains("Instalaciones")').addClass('activo');
    $('body.registro .navegacion-principal a:contains("Registro")').addClass('activo');
    $('body.servicios .navegacion-principal a:contains("Servicios")').addClass('activo');
    $('body.estetica .navegacion-principal a:contains("Estética")').addClass('activo');

    //Menu fijo
    var windowsHeight = $(window).height();
    var barraAltura = $('.barra').innerHeight();


    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > windowsHeight) {
            $('.barra').addClass('fixed');
            $('body').css({ 'margin-top': barraAltura + 'px' });
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({ 'margin-top': '0px' });
        }
    });

    //Menu Responsive

    $('.menu-movil').on('click', function() {
        $('.navegacion-principal').slideToggle();
    });

    //Programa de servicios
    $('.programa-servicio .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');
    $('.menu-programa a').on('click', function() {

        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);

        return false;
    });

    //Animaciones para los numeros
    $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6 }, 3000);
    $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 10 }, 3000);
    $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 20 }, 3000);
    $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 2 }, 3000);

    //Cuenta regresiva
    $('.cuenta-regresiva').countdown('2021/01/07 09:00:00', function(event) {
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });

    //Colorbox

    $('.estetica-info').colorbox({ inline: true, width: "50 % " });
    /*$('.peluqueria-info').colorbox({ inline: true, width: "50 % " });*/




});