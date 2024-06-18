@php
    $anioActual = date('Y');
    $detalles = session('productos');
@endphp
<!doctype html>
<html lang="en" data-bs-theme="light" data-bs-theme-color="default" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tornimotos | Reportes</title>
    <meta name="description"
        content="Hope UI Pro is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
    <meta name="keywords"
        content="premium, admin, dashboard, template, bootstrap 5, clean ui, hope ui, admin dashboard,responsive dashboard, optimized dashboard,">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title" content="Hope UI Pro | Responsive Bootstrap 5 Admin Dashboard Template">
    <link rel="stylesheet" href="/css/css-facturacion/menu.css" />
    <link rel="stylesheet" href="/css/css-facturacion/bootstrap.min.css">
    <link rel="stylesheet" href="/css/css-facturacion/style.css">
    <link rel="icon" href="/css/css-index/images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css-facturacion/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
    <link rel="shortcut icon" href="/css/assets/images/tornico.ico">
    <link rel="stylesheet" href="/css/assets/css/core/libs.min.css">
    <link rel="stylesheet" href="/css/assets/css/hope-ui.min.css?v=4.0.0">
    <link rel="stylesheet" href="../../assets/css/pro.min.css?v=4.0.0">
    <link rel="stylesheet" href="/css/assets/css/custom.min.css?v=4.0.0">
    <link rel="stylesheet" href="/css/assets/css/rtl.min.css?v=4.0.0">
    <link rel="stylesheet" href="/css/assets/css/customizer.min.css?v=4.0.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btnGuardar = document.getElementById('btnguardar');
            const modalDiv = document.getElementById('exampleModalCenteredScrollable');

            btnGuardar.addEventListener('click', function () {
                html2canvas(modalDiv).then(function (canvas) {
                    const imgData = canvas.toDataURL('image/png');
                    const docDefinition = {
                        content: [{
                            image: imgData,
                            width: 1000,
                            alignment: 'center',
                        }],
                    };
                    pdfMake.createPdf(docDefinition).open();
                }).catch(function (error) {
                    console.error('Error al capturar el pantallazo:', error);
                    alert('Error al generar el PDF. Por favor, inténtalo de nuevo.');
                });
            });
        });
    </script>

    <style>
        #submit {
            border: none;
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

        #validationCustom01 {
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

        #comboboxservicio {
            width: 20%;
            display: flex;
            margin-top: -0.2%;
            height: 37px;
            margin-right: 1.5%;
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
            /* Opcional: para resaltar el borde en verde */
        }

        #openModalBtn,
        #btnañadir,
        #btnguardar {
            width: 20%;
            display: flex;
            height: 35px;
            justify-content: center;
            /* Centra horizontalmente */
            align-items: center;
            /* Centra verticalmente */
            padding: 10px 20px;
            /* Ajusta el padding según sea necesario */
            background-color: #F63A3D;
            /* Color de fondo del botón */
            color: white;
            /* Color del texto */
            border: none;
            /* Quita el borde del botón si es necesario */
            cursor: pointer;
            /* Cambia el cursor al pasar sobre el botón */
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
            /*box-shadow: 0 0.5em 0.5em -0.1em var(--hover);
                    -webkit-transform: translateY(-0.25em);
                            transform: translateY(-0.25em);*/
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
            font-family: Comic Sans MS
                /*Viner Hand ITC*/
            ;
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
            background-image: url('data:image/svg+xml;uft8, <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24"><path fill="white" d="M3 21V3h9v2H5v14h7v2zm13-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5z"/></svg>');
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

<body class="  "
    style="background-image: url(/css/css-facturacion/imagenes/fondo-recu2.png); background-size: cover; position: relative;background-repeat: no-repeat; background-position: center; overflow-x: hidden; height: 100vh;">
    <div class="position-relative  iq-banner ">
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href='facturacion'>Facturación</a>
            <a href='compras'>Compras</a>
            <a href='clientes'>Clientes</a>
            <a href='citas'>Citas</a>
            <a href='inventario'>Inventario</a>
            <a href='facturas'>Facturas</a>
            <a href='servicios'>Servicio</a>
            <a href='usuarios'>Usuarios</a>
            <a href='proveedores'>Proveedores</a>
            <a href='reportes'>Reportes</a>
            <a href='logOut'>Cerrar sesión</a>
        </div>
        <header>
            <nav class="topnav" id="myTopnav">
                <div class="tlogo">
                    <a href='home'><img src="/css/css-acercainfo/imagenes/wof.png" /></a>
                </div>
                <h1 id="h1clientes">Reportes</h1>
                <button class="openbtn" onclick="openNav()"><img src="/css/css-acercainfo/imagenes/menu_icon.png"
                        alt="#" /> </button>
                <button class="openbtn" id="openbtn" style="float: right; right: 0;"></button>
            </nav>
        </header>
    </div>
    <div class="content-inner container-fluid pb-0" id="page_layout" style="height: 85%;">
        <div class="card" style="left: -1.2%; height: 100%;">
            <div class="row" style="height: 98%;">
                <div style="margin-top: 1.5%; margin-left: 1.5%; display: flex; height: 37px;">
                    <label for="validationCustom01" class="form-label me-2">Mes: </label>
                    <form style="width: 100%; display: flex;" class="" id="formulariomes" method="POST"
                        action="{{route('reportes.show')}}">
                        @csrf
                        <select name="mes" class="form-select" id="comboboxservicio" required>
                            <option value="">Selecciona un mes</option>
                            <option value=1>Enero</option>
                            <option value=2>Febrero</option>
                            <option value=3>Marzo</option>
                            <option value=4>Abril</option>
                            <option value=5>Mayo</option>
                            <option value=6>Junio</option>
                            <option value=7>Julio</option>
                            <option value=8>Agosto</option>
                            <option value=9>Septiembre</option>
                            <option value=10>Octubre</option>
                            <option value=11>Noviembre</option>
                            <option value=12>Diciembre</option>
                        </select>
                        <label for="validationCustom01" class="form-label me-2">Año: </label>
                        <select name="year" class="form-select" id="comboboxservicio" required>
                            @php
                                $anioInicial = 2024;
                            @endphp
                            @while($anioInicial <= $anioActual)
                                                        <option value="{{$anioInicial}}">{{$anioInicial}}</option>
                                                        @php
                                                            $anioInicial++;
                                                        @endphp
                            @endwhile
                        </select>
                        <button class="btn btn-primary ml-2" type="submit" name="submit" id="submit"
                            style="border-radius: 10px; width: 10%; background: linear-gradient(to bottom, #F63A3D 80%, #000);">
                            <span style="margin-left: 0%;"><b>Filtrar</b></span>
                            <img style="width: 1.2em;" src="../css/fonts/mdi--filter-multiple.png">
                        </button>
                    </form>
                </div>
                <div class="col-md-4" id="PrimerColumnaTarjeta">
                    <div class="card" style="height: 100%;">
                        <div class="card-body">
                            <div style="display: flex; align-items: center;">
                                <img src="/css/css-facturacion/imagenes/utilididad.png" alt="Vestido Negro"
                                    style="width: 75px; height: 75px; display: flex;"><br>
                                <h3 class="card-title"
                                    style="text-align: center; left: 15%; font-weight: 800; color: #F63A3D;">
                                    <b>Utilidad</b>
                                </h3>
                            </div><br>
                            <div class="card" style="height: 50%; justify-content: center; align-items: center;">
                                <center>
                                    <h2 class="counter" id="utilidadcounter"
                                        style="visibility: visible; font-size: 24px; color: #2ecc71; /* Color verde */ font-weight: bold; text-align: center; font-family: Arial, sans-serif; ">
                                        $ {{session('utilidad')}}
                                    </h2>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="height: 100%;">
                        <div class="card-body">
                            <div style="display: flex; align-items: center;">
                                <img src="/css/css-facturacion/imagenes/iva.png" alt="Vestido Negro"
                                    style="width: 75px; height: 75px; display: flex; margin-right: 0%;"><br>
                                <h3 class="card-title"
                                    style="text-align: center; left: 13%; font-weight: 800; color: #F63A3D;"><b>IVA
                                        pagado</b></h3>
                            </div><br>
                            <div class="card" style="height: 50%; justify-content: center; align-items: center;">
                                <center>
                                    <h2 class="counter"
                                        style="visibility: visible; font-size: 24px; color: #F63A3D;  font-weight: bold;text-align: center; font-family: Arial, sans-serif;">
                                        $ {{session('ivaCompras')}}
                                    </h2>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="height: 100%;">
                        <div class="card-body">
                            <div style="display: flex; align-items: center;">
                                <img src="/css/css-facturacion/imagenes/productos.png" alt="Vestido Negro"
                                    style="width: 75px; height: 75px; display: flex;"><br>
                                <h3 class="card-title"
                                    style="text-align: center; font-weight: 800; color: #F63A3D; display: flex;">
                                    Productos más vendidos</h3>
                            </div> <br>
                            <div class="card" style="height: 50%; justify-content: center; ">
                                <table>
                                    <thead>
                                        <tr>
                                            <th style="color: #F63A3D;">Código</th>
                                            <th style="color: #2ecc71;">Nombre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($detalles))
                                            @foreach ($detalles as $detalle)
                                                <tr>
                                                    <td>{{$detalle->producto->codigo?? ''}}</td>
                                                    <td>{{$detalle->producto->nombre?? ''}}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- MODAL DE NUEVO CLIENTE FORM-->
    <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1"
        aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content" id="modaldiv">
                <div class="modal-header" style="display: flex; align-items: center;">
                    <span class="vertical-line"
                        style="width: 4.5px; height: 26px; background-color: #F63A3D; vertical-align: middle; margin-left: 25%; margin-right: 2%;"></span>
                    <h5 class="modal-title" id="exampleModalCenteredScrollableTitle" style="top: 25%; left: 50%;">
                        <b>Rechazar Cita</b>
                    </h5>
                    <button type="button" class="btn-close" id="btncerrar" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation" id="RegistrarCliente" novalidate>
                        <div class="col-12">
                            <label for="cedulas" class="form-label"
                                style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Motivo:</label>
                            <textarea class="form-control2"
                                style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;"
                                placeholder="Ingrese motivo" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="display: flex; align-items: center;justify-content: center;">
                    <button type="button" id="btnguardar" style="width: 85%; left: 0%;"
                        class="btn btn-primary">Rechazar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL DE NUEVO CLIENTE FORM-->
    <!-- MODAL cerrar sesion-->
    <div class="modal fade" id="campoVacioModalcs" tabindex="-1" aria-labelledby="campoVacioModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" style="height: 40%;">
            <div class="modal-content"
                style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png);background-size: cover;position: relative;background-repeat: no-repeat;background-position: center;height: 40dvh;border-radius: 20px;left:0%;top: 60%;box-shadow: 0px 0px 20px 0px #F63A3D;">
                <div class="modal-header" style="height: 30%;">
                    <img src="/css/css-facturacion/imagenes/wof.png"
                        style="width: 40%; height: 220%; top: 0; margin-top: 4%; margin-left: 30%;" />
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        style="margin-right: 5%;"></button>
                </div>
                <div class="modal-body">
                    <center><span id="modaltitulo"
                            style="font-weight: 650; font-size: large; color: #F63A3D ;">Atención.</span></center>
                    <center><span id="modaltexto"
                            style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%;padding-right: 2%;">
                            ¿Estas seguro que quieres cerrar sesión?.</span></center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        style="background-color: #fff; border: 2px solid #F63A3D; color: #F63A3D; border-radius: 10px; width: 20%;"
                        onclick=location.href="{{ route('logOut') }}"><b>Si</b></button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        style="background-color: #F63A3D; border: none; border-radius: 10px; width: 20%;">No</button>
                </div>
            </div>
        </div>
    </div>
    <!--FINAL MODAL cerrar sesion-->
    <script src="/css/assets/js/core/libs.min.js"></script>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btncs = document.getElementById('openbtn');
            btncs.addEventListener('click', function (event) {
                document.getElementById('modaltitulo').innerText = "Atención.";
                document.getElementById('modaltexto').innerText = "¿Estas seguro que quieres cerrar sesión?.";
                const campoVacioModalcs = new bootstrap.Modal(document.getElementById('campoVacioModalcs'));
                campoVacioModalcs.show();
                return;
            });
        });
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

    @if (session('error'))
        <script script>
            $(document).ready(function() {
                $('#campoVacioModal').modal('show'); // Muestra el modal
            });
        </script>
        <!-- MODAL ERROR-->
        <div class="modal fade" id="campoVacioModal" tabindex="-1" aria-labelledby="campoVacioModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="height: 40%;">
                <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover; position: relative; background-repeat: no-repeat; background-position: center; height: 40dvh; border-radius: 20px; left:0%; top: 60%; box-shadow: 0px 0px 20px 0px #F63A3D;">
                    <div class="modal-header" style="height: 30%;">
                        <center><img src="/css/css-facturacion/imagenes/wof.png" style="width: 40%; height: 10%;" /></center>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 5%;"></button>
                    </div>
                    <div class="modal-body">
                        <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">ERROR!</span></center>
                        <center><span id="modaltexto" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%; padding-right: 2%;">{{session('error')}}</span></center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px;">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!--FINAL MODAL ERROR-->
        @endif

</body>

</html>