<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Tornimotos | Citas</title>
    <link rel="stylesheet" href="/css/css-facturacion/menu.css" />
    <link rel="stylesheet" href="/css/css-facturacion/bootstrap.min.css">
    <link rel="stylesheet" href="/css/css-facturacion/style.css">
    <link rel="icon" href="/css/css-index/images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css-facturacion/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="/css/fonts/fuentes.css"><!--esta es la de la fuente-->
    <link rel="stylesheet" href="/css/boostrap/bootstrap-4.5.3-dist/css/bootstrap.min.css"><!--esta es el estilo de los input-->
    <link rel="shortcut icon" href="/css/assets/images/tornico.ico"> <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="/css/assets/css/core/libs.min.css">
    <link rel="stylesheet" href="/css/assets/css/hope-ui.min.css?v=4.0.0">
    <link rel="stylesheet" href="/assets/css/pro.min.css?v=4.0.0">
    <link rel="stylesheet" href="/css/assets/css/custom.min.css?v=4.0.0">
    <link rel="stylesheet" href="/css/assets/css/rtl.min.css?v=4.0.0">
    <link rel="stylesheet" href="/css/assets/css/customizer.min.css?v=4.0.0">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnGuardar = document.getElementById('btnguardar');
            const modalDiv = document.getElementById('exampleModalCenteredScrollable');
            btnGuardar.addEventListener('click', function() {
                html2canvas(modalDiv).then(function(canvas) {
                    const imgData = canvas.toDataURL('image/png');
                    const docDefinition = {
                        content: [{
                            image: imgData,
                            width: 1000,
                            alignment: 'center',
                        }],
                    };
                    pdfMake.createPdf(docDefinition).open();
                }).catch(function(error) {
                    console.error('Error al capturar el pantallazo:', error);
                    alert('Error al generar el PDF. Por favor, inténtalo de nuevo.');
                });
            });
        });
    </script>
    <style>
        #motivo:-webkit-autofill,
        #motivotext:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 1000px #fff inset;
            /* Establecer un fondo blanco para evitar cambios de color */
            -webkit-text-fill-color: #333;
            /* Color del texto */
        }

        input {
            background-color: #E7E0DF;
            border-color: black;
        }

        h3 {
            color: #000;
            font-weight: bolder;
        }

        .LabelPrimerColumna {
            margin-left: 1em;
            color: black;
            font-weight: bolder;
            font-size: 1em;
        }

        .label-container {
            display: flex;
            align-items: center;
            width: 100%;
            margin-left: 1em;
            color: black;
            font-weight: bold;
            font-size: 1.2em;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        .random-data {
            margin-left: 5px;
        }

        label {
            margin-right: 5px;
        }

        #BtnAceptar {
            background-color: white;
            color: red;
            border: 2px solid red;
            border-radius: 15px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
            padding: 5px 25px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
            margin-bottom: 1em;
        }

        #BtnAceptar:hover {
            opacity: 0.8;
        }

        #BtnRechazar {
            background-color: red;
            color: white;
            border: none;
            border-radius: 25px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
            padding: 5px 25px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
            margin-bottom: 1em;
        }

        #BtnRechazar:hover {
            opacity: 0.8;
        }

        @media screen and (max-width: 768px) {
            #openbtn {
                display: none;
            }
        }

        .titulosPrimerColumna {
            text-align: center;
            font-weight: bold;
            color: gray;
        }

        table tr td {
            color: black;
        }

        .table-responsive .dataTables_wrapper .row .dataTables_info {
            padding-left: 1.5rem;
            padding-top: unset;
            visibility: hidden;
        }

        .tabla label {
            visibility: hidden;
            color: white;
        }

        .content-inner {
            padding: calc(var(--bs-gutter-x, 1rem)* 2);
            margin-left: 1em;
            margin-right: 2em;
        }

        #tarjetaComprasyVentasrealizadas {
            padding-bottom: 6.5em;

        }

        #TarjetaProductosMasvendidos {
            padding: 1em;
        }

        .form-select {
            background-color: #E7E0DF;
            border-width: 0.1em;
            border-color: #E7E0DF;
            color: black;
            width: 60.4%;
            margin-top: 0.3em;
        }

        #modaldiv {
            border-radius: 15px;
        }

        #btncerrar {
            margin-right: 5%;
        }

        #RegistrarCliente {
            margin: 5%;
        }

        .table tbody tr td {
            vertical-align: middle;
            padding: 1px;

        }

        .g-3,
        .gy-3 {
            --bs-gutter-y: 0.rem;
            margin-bottom: -0.5em;
        }

        #tablaDedatos {
            margin-top: -1.7em;
        }

        #validationCustom01Precio {
            width: 100%;
            margin-right: 0.4em;
            text-align: right;
        }

        #inputcliente,
        #inputproducto,
        #comboboxservicio,
        #inputcantidad,
        #inputprecio,
        #inputefectivo,
        #inputcambio,
        #inputtotalapagar {
            border-radius: 8px;
            border-color: #000;
        }

        #inputcliente:focus {
            border-color: #000;
        }

        #sell-card {

            color: #fff;
            padding-top: 0%;
            font-size: 1.3em;
        }

        #inputcantidad {
            width: 20%;
        }

        #inputprecio {
            width: 20%;
        }

        .iq-banner:not(.hide)+.content-inner {
            margin-top: 0.5rem !important;
            padding-top: 0;
            padding-bottom: 0;
        }

        .card {
            border-color: grey;
            border-width: 0.2em;
            border-radius: 1.3em;
            padding: 1em;
        }

        #tarjetaFormularioTotales {
            margin-top: -7em;
            padding: 2%;
            margin-left: 43%;
            width: 60%;
            border-radius: 15px;
        }

        #general {
            border-radius: 15px;
        }

        #mela {
            border-radius: 15px;
            margin-top: 2%;
        }

        #pwdefectivo {
            font-weight: bold;
            color: green;
            border: 1px solid green;
        }

        #openModalBtn,
        #btnañadir,
        #btnguardar {
            width: 20%;
            display: flex;
            height: 35px;
            justify-content: center;
            align-items: center;
            padding: 10px 20px;
            background-color: #F63A3D;
            color: white;
            border: none;
            cursor: pointer;
        }

        #openModalBtn:active {
            background-color: initial;
            color: initial;
            border: none;
        }

        #openModalBtn:focus,
        #btnañadir,
        #btnfacturar,
        #btnguardar {
            outline: none;
            border: none;
        }

        .botonagregar {
            margin-top: 1%;
        }

        .subes {
            text-align: left;
            font-weight: bolder;
            font-size: 1.3em;
        }

        #EncabezadosTablaFac1 {
            border-color: black;
            color: black;
            font-weight: bolder;
            font-size: 1.2em;
            padding: 2px;
        }

        #EncabezadosTablaFac2 {
            border-color: black;
            color: black;
            font-weight: bolder;
            font-size: 1.2em;
            padding: 2px;
        }

        #EncabezadosTablaFac3 {

            border-color: black;
            color: black;
            font-weight: bolder;
            font-size: 1.2em;
            padding: 2px;
        }

        #EncabezadosTablaFac4 {

            border-color: black;
            color: black;
            font-weight: bolder;
            font-size: 1.2em;
            padding: 2px;
        }

        .form-label {
            color: black;
            font-size: 1.3em;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #F63A3D;
            color: white;
            border-color: #F63A3D;
            justify-items: left;
        }

        #facturacion {
            margin-left: 240%;
            font-weight: bolder;
        }

        #tituloFactura {
            text-align: center;
        }

        #registrarCliente {
            margin-top: 6.2%;
        }

        .form-control {
            width: 60%;
            padding: 2px;
            background-color: #E7E0DF;
            border-width: 0.1em;
            border-color: #E7E0DF;
            margin: 0.1em;
        }

        .form-control2 {

            width: 100%;
            background-color: #E7E0DF;
            border-width: 0.0em;
            border-color: #E7E0DF;
            border-radius: 0.2em;
        }

        .topnav {
            overflow: hidden;
            background: linear-gradient(to right, #F63A3D 45%, #000);
            font-family: Comic Sans MS;
            border-radius: 0px;
            height: 70px;
            display: block;
            text-align: center;
            justify-items: center;
        }

        #openbtn {
            background-color: transparent;
            border: none;
            cursor: pointer;
            display: flex;
            width: 47px;
            height: 47px;
            padding: 0;
            margin-left: -5%;
            top: 0;
            margin-top: 0.8%;
            background-position-y: top;
            background-repeat: no-repeat;
            background-size: 100%;
            background-position-x: center;
        }


        .tlogo {
            float: left;
            margin-right: 210px;
        }

        .tlogo img {
            padding-top: -40x;
            width: 200px;
            display: inline-block;
            margin-top: -20px;
            height: 120px;
            padding-bottom: 0px;
        }

        .topnav h1 {
            padding: 0px;
            margin-left: -340px;
            margin-top: 15px;
            color: #fff;
            text-align: center;
            display: inline-flex;
        }

        .topnav button {
            float: right;
            display: flex;
            margin-top: 18px;
            padding-right: 10px;
        }

        .topnav .icon {
            display: none;
        }


        @media screen and (max-width: 750px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .tlogo img {
                padding-top: 20px;
                margin-right: 20px;
                width: 150px;
                height: 100px;
            }

            .topnav h1 {
                font-size: 34px;
                padding-left: 10%;
            }

            #openbtn {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav h1 {
                font-size: 34px;
                padding-left: 10%;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>
</head>

<body class="  " style="background-image: url(/css/css-facturacion/imagenes/fondo-recu2.png); background-size: cover; position: relative; background-repeat: no-repeat;background-position: center; overflow-x: hidden; height: 100vh;">
    <div class="position-relative  iq-banner ">
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="{{route('logOut')}}">Cerrar sesión</a>
        </div>
        <header>
            <nav class="topnav" id="myTopnav">
                <div class="tlogo">
                    <a href="home"><img src="/css/css-acercainfo/imagenes/wof.png" /></a>
                </div>
                <h1 id="h1clientes">Citas</h1>
                <button class="openbtn" onclick="openNav()"><img src="/css/css-acercainfo/imagenes/menu_icon.png" alt="#" /> </button>
                <button class="openbtn" id="openbtn" data-bs-toggle="modal" data-bs-target="#campoVacioModalcs" style="float: right; right: 0;"><img style="width: 2.5em; margin-bottom: -18%;" src="../css/fonts/cerrar.png">
            </nav>
        </header>
    </div>
    <div class="content-inner container-fluid pb-0" id="page_layout">
        <div class="card" style="left: -1.2%;">
            <div class="row">
                <div class="col-md-4" id="PrimerColumnaTarjeta">
                    <div class="card" style="height: 100%;">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center; font-weight: 800;">Solicitudes</h5>
                                @foreach ($citas as $cita)
                                @if($cita->estado == 'PENDIENTE')

                                <div class="card">
                                    <div class="label-container">
                                        <label for="fecha" style="margin-top: 1em; width: 76.72px; text-align: right;">Fecha:</label>
                                        <label style="margin-top: 1.09em; font-weight: 500; font-size: medium;">{{$cita->fecha->format('d/m/Y')}}</label>
                                    </div>
                                    <div class="label-container">
                                        <label for="nombre" style="width: 76.72px; text-align: right;">Nombre:</label>
                                        <label style="font-weight: 500; font-size: medium;">{{$cita->nombre}}</span>
                                    </div>
                                    <div class="label-container">
                                        <label for="telefono" style="width: 76.72px; text-align: right;">Tel:</label>
                                        <label style="font-weight: 500; font-size: medium;">{{$cita->telefono}}</span>
                                    </div>
                                    <div class="label-container">
                                        <label for="servicio" style="width: 76.72px; text-align: right;">Servicio:</label>
                                        <label style="font-weight: 500; font-size: medium;">{{$cita->servicioRequerido}}</span>
                                    </div>
                                    <hr style="border-top: 2px solid black;">
                                    <h4 class="card-text titulosPrimerColumna">En caso de aceptar</h4>
                                    <form action="{{route('cita.gestionarCita', $cita->id)}}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="label-container">
                                            <label for="servicio" style="width: 66px; text-align: right; margin-left: -5%;">Hora:</label>
                                            <input type="time" name="hora" id="hora" style="width: 70%; right: 0; border-radius: 8px; color:#000; border: 1px solid #000;">
                                        </div>
                                        <hr style="border-top: 2px solid black;">
                                        <h4 class="card-text titulosPrimerColumna">En caso de rechazar</h4>
                                        <div class="label-container">
                                            <label for="servicio" style="width: 66px; text-align: left; margin-left: -5%;">Motivo:</label>
                                            <input type="text" name="motivo" id="motivo" style="width: 70%; margin-right: 10px; border-radius: 8px; color:#000; border: 1px solid #000;">
                                        </div>
                                        <hr style="border-top: 2px solid black;">
                                        <div style="display: flex; justify-content: center; align-items: center;">
                                            <button name="submit" type="submit" style="margin-right: 10px;" id="BtnAceptar">Aceptar</button>
                                            <button id="BtnRechazar" name="submit2" class="btn btn-primary ml-2" type="submit" class="btn btn-primary me-2" id="openModalBtn" style="background-color: #F63A3D; padding-left: -20%; border: none; border-radius: 15px; height: 35px; background: linear-gradient(to bottom, #F63A3D 80%, #000);">Rechazar</button>
                                            <!--<button id="BtnRechazar" name="submit2" class="btn btn-primary ml-2" type="submit" class="btn btn-primary me-2" id="openModalBtn"  style="background-color: #F63A3D; padding-left: -20%; border-color: #F63A3D; border-radius: 15px; background: linear-gradient(to bottom, #F63A3D 80%, #000);">Rechazar</button>-->
                                        </div>
                                    </form>
                                </div>
                                @endif
                                @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="height: 100%;">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center; font-weight: 800;">Aceptadas</h5>
                                @foreach ($citas as $cita)
                                @if($cita->estado == 'ACEPTADA')

                                <div class="card">
                                    <div class="label-container">
                                        <label for="fecha" style="margin-top: 1em; width: 76.72px; text-align: right;">Fecha:</label>
                                        <label style="margin-top: 1.09em; font-weight: 500; font-size: medium;">{{$cita->fecha->format('d/m/Y')}}</label>
                                    </div>
                                    <div class="label-container">
                                        <label for="nombre" style="width: 76.72px; text-align: right;">Hora:</label>
                                        <label style="font-weight: 500; font-size: medium;">{{$cita->hora}}</label>
                                    </div>
                                    <div class="label-container">
                                        <label for="telefono" style="width: 76.72px; text-align: right;">Nombre:</label>
                                        <label style="font-weight: 500; font-size: medium;">{{$cita->nombre}}</label>
                                    </div>
                                    <div class="label-container">
                                        <label for="servicio" style="width: 76.72px; text-align: right;">Motivo:</label>
                                        <form action="{{route('cita.gestionarCita', $cita->id)}}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input type="text" name="motivo" id="motivotext" style="width: 50%; margin-right: 10px; border-radius: 8px; color:#000; border: 1px solid #000;" required>
                                    </div>
                                    <div style="display: flex; justify-content: right; align-items: right;">
                                        <button id="BtnRechazarAC" name="submit3" class="btn btn-primary ml-2" type="submit" class="btn btn-primary me-2" id="openModalBtn" style="background-color: #F63A3D; padding-left: -20%; border: none; border-radius: 15px; background: linear-gradient(to bottom, #F63A3D 80%, #000);">Rechazar</button>
                                        </form>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="height: 100%;">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center; font-weight: 800;">Rechazadas</h5>
                                @foreach ($citas as $cita)
                                @if($cita->estado == 'RECHAZADA')
                                <div class="card">
                                    <div class="label-container">
                                        <label for="fecha" style="margin-top: 1em; width: 76.72px; text-align: right;">Fecha:</label>
                                        <label style="margin-top: 1.09em; font-weight: 500; font-size: medium;">{{$cita->fecha->format('d/m/Y')}}</label>
                                    </div>
                                    <div class="label-container">
                                        <label for="nombre" style=" width: 76.72px; text-align: right;">Nombre:</label>
                                        <label style="font-weight: 500; font-size: medium;">{{$cita->nombre}}</label>
                                    </div>
                                    <div class="label-container">
                                        <label for="telefono" style=" width: 76.72px; text-align: right;">Servicio:</label>
                                        <label style="font-weight: 500; font-size: medium;">{{$cita->servicioRequerido}}</label>
                                    </div>
                                    <div class="label-container">
                                        <label for="servicio" style=" width: 76.72px; text-align: right;">Motivo:</label>
                                        <label style="font-weight: 500; font-size: medium;">{{$cita->motivo}}</label>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="myModal" tabindex="-1" aria-labelledby="campoVacioModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="height: 40%;">
            <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover; position: relative; background-repeat: no-repeat; background-position: center; height: 40dvh; border-radius: 20px; left:0%; top: 60%; box-shadow: 0px 0px 20px 0px #F63A3D;">
                <div class="modal-header" style="height: 30%;">
                    <img src="/css/css-facturacion/imagenes/wof.png" style="width: 40%; height: 220%; top: 0; margin-top: 4%; margin-left: 30%;" />
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 5%;"></button>
                </div>
                <div class="modal-body">
                    <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">ERROR.</span></center>
                    <center><span id="modaltexto" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%;padding-right: 2%;"> DATOS VACIOS.</span></center>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL cerrar sesion-->
    <div class="modal" id="campoVacioModalcs" tabindex="-1" aria-labelledby="campoVacioModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="height: 40%;">
            <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover; position: relative; background-repeat: no-repeat; background-position: center; height: 40dvh; border-radius: 20px; left:0%; top: 60%; box-shadow: 0px 0px 20px 0px #F63A3D;">
                <div class="modal-header" style="height: 30%;">
                    <img src="/css/css-facturacion/imagenes/wof.png" style="width: 40%; height: 220%; top: 0; margin-top: 4%; margin-left: 30%;" />
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 5%;"></button>
                </div>
                <div class="modal-body">
                    <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">Atención.</span></center>
                    <center><span id="modaltexto" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%; padding-right: 2%;"> ¿Estas seguro que quieres cerrar sesión?.</span></center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #fff; border: 2px solid #F63A3D; color: #F63A3D; border-radius: 10px; width: 20%;" onclick=location.href="logOut"><b>Si</b></button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px; width: 20%;">No</button>
                </div>
            </div>
        </div>
    </div>
    <script src="/css/assets/js/core/libs.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnAceptar = document.getElementById('BtnAceptar');
            const btnRechazar = document.getElementById('BtnRechazar');
            const inputMotivo = document.getElementById('motivo');
            const btnRechazarAC = document.getElementById('BtnRechazarAC');
            const inputMotivotext = document.getElementById('motivotext');
            const inputHora = document.getElementById('hora');
            btnAceptar.addEventListener('click', function() {
                if (inputHora.value === '') {
                    mostrarModal();
                }
            });

            btnRechazarAC.addEventListener('click', function() {
                if (inputMotivotext.value === '') {
                    mostrarModal();
                }
            });
            btnRechazar.addEventListener('click', function() {
                if (inputMotivo.value === '') {
                    mostrarModal();
                }
            });

            function mostrarModal() {
                const campoVacioModal = new bootstrap.Modal(document.getElementById('myModal'));
                campoVacioModal.show();
                /*var modal = document.getElementById('myModal');
                modal.style.display = 'block';*/
            }
        });
    </script>
    <script src="/css/assets/js/plugins/slider-tabs.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }
    </script>
    <script>
        function changeColor() {
            document.getElementById("validationCustomcliente").style.borderColor = "black"; // Cambiar el color del borde al hacer clic
        }
    </script>
    <script src="/css/assets/vendor/lodash/lodash.min.js"></script>
    <script src="/css/assets/js/iqonic-script/utility.min.js"></script>
    <script src="/css/assets/js/iqonic-script/setting.min.js"></script>
    <script src="/css/assets/js/setting-init.js"></script>
    <script src="/css/assets/js/core/external.min.js"></script>
    <script src="/css/assets/js/charts/widgetcharts.js?v=4.0.0" defer></script>
    <script src="/css/assets/js/charts/dashboard.js?v=4.0.0" defer></script>
    <script src="/css/assets/js/charts/alternate-dashboard.js?v=4.0.0" defer></script>
    <script src="/css/assets/js/hope-ui.js?v=4.0.0" defer></script>
    <script src="/css/assets/js/hope-uipro.js?v=4.0.0" defer></script>
    <script src="/css/assets/js/sidebar.js?v=4.0.0" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @include ('modales.modalMensaje')


    @if (session('error'))
    <script script>
        $(document).ready(function() {
            $('#modalMensaje').modal('show');
            document.getElementById('titulo').innerText = 'ERROR!';
            document.getElementById('texto').innerText = "{{session('error')}}";
        });
    </script>
    @endif

    @if (session('exito'))
    <script script>
        $(document).ready(function() {
            $('#modalMensaje').modal('show');
            document.getElementById('titulo').innerText = 'ÉXITO!';
            document.getElementById('texto').innerText = "{{session('exito')}}";
        });
    </script>
    @endif

</body>

</html>