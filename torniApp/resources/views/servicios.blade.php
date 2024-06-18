<!doctype html>
<html lang="en" data-bs-theme="light" data-bs-theme-color="default" dir="ltr">

    <head>
        @notifyCss
        <meta charset="utf-8">
        <title>Tornimotos | Servicio</title>
        <link rel="stylesheet" href="/css/css-facturacion/menu.css" />
        <link rel="stylesheet" href="/css/css-facturacion/bootstrap.min.css">
        <link rel="stylesheet" href="/css/css-facturacion/style.css">
        <link rel="icon" href="/css/css-index/images/fevicon.png" type="image/gif" />
        <link rel="stylesheet" href="/css/css-facturacion/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="/css/fonts/fuentes.css"><!--esta es la de la fuente-->
        <link rel="stylesheet" href="/css/boostrap/bootstrap-4.5.3-dist/css/bootstrap.min.css"><!--esta es el estilo de input-->
        <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">-->
        <link rel="shortcut icon" href="/css/assets/images/tornico.ico">
        <link rel="stylesheet" href="/css/assets/css/core/libs.min.css">
        <link rel="stylesheet" href="/css/assets/css/hope-ui.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/pro.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/custom.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/rtl.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/customizer.min.css?v=4.0.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!--<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>-->

        <style type="text/css">

            input[type=number]::-webkit-inner-spin-button, 
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            body {
                zoom: 110%;
                font-family: 'Inter', sans-serif;
            }

            .form-select {
                background-color: #E7E0DF;
                border-width: 0.1em;
                border-color: #E7E0DF;
                color: black;
                width: 60.4%;
                margin-top: 0.3em;

            }

            #btnregistrar span {
                margin-right: 5%;
            }


            button.btneliminar {

                background-color: transparent;
                border: none;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 24px;
                height: 24px;
                padding: 0;
                margin-left: 22%;
                background-repeat: no-repeat;
                background-size: contain;
                background-position-x: center;
                width: 24px;
                height: 24px;
                justify-content: center;
                align-items: center;
            }

            #sell-card {
                color: #fff;
                padding-top: 0%;
                font-size: 1em;
            }

            #RegistrarCliente {
                margin: 5%;
            }

            .table tbody tr td {
                vertical-align: middle;
                padding: 1px;
            }

            #btnañadir {
                border: none;
            }

            #btnregistrar,
            #btnguardar {
                width: 20%;
                display: flex;
                height: 35px;
                justify-content: center;
                align-items: center;
                padding: 10px 0px 10px 10px;
                background-color: #F63A3D;
                color: white;
                border: none;
                cursor: pointer;            
            }

            #inputcliente::placeholder {
                background-image: url(/css/css-facturacion/imagenes/lupa.png);
                background-size: 15px 15px;
                background-repeat: no-repeat;
                background-position: left center;
                background-position-x: 1.3%;
            }

            #inputcliente,
            #inputcelular,
            #inputcorreo,
            #inputplaca,
            #inputmodelo,
            #inputmarca {
                border-radius: 8px;
                border-color: #000;
            }

            #inputcostouni {
                width: 20%;
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

            #inputCantidad {
                width: 50%;
            }

            .iq-banner:not(.hide)+.content-inner {
                margin-top: 0.5rem !important;
                padding-top: 0;
                padding-bottom: 0;
            }

            .card {
                border-color: grey;
                border-width: 2px;
            }

            #tarjetaFormularioTotales {
                margin-top: -7em;
                padding: 2%;
                margin-left: 43%;
                width: 60%
            }

            #pwdefectivo {
                font-weight: bold;
                color: green;
                border: 1px solid green;
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

            .capitalize-n::first-letter {
                text-transform: uppercase;
            }

            .lowercase {
                text-transform: lowercase;
            }

            #EncabezadosTablaFac2 {
                border-color: black;
                color: black;
                font-weight: bolder;
                font-size: 1.2em;
                padding: 2px;
            }

            #EncabezadosTablaFac0 {
                border-color: black;
                color: black;
                font-weight: bolder;
                width: 5%;
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
                background-color: red;
                color: white;
                border-color: red;
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
                display: flex;
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

            input[type=checkbox]:checked {
                accent-color: #F63A3D;
            }

            #inputcliente:-webkit-autofill,
            #inputcorreo:-webkit-autofill,
            #inputmodelo:-webkit-autofill,
            #inputcelular:-webkit-autofill,
            #inputplaca:-webkit-autofill,
            #inputmodelo:-webkit-autofill {
                -webkit-box-shadow: 0 0 0 1000px #E7E0DF inset;
                -webkit-text-fill-color: #333;
                -webkit-background-clip: text;
                background-repeat: no-repeat;
                background-position: 8px center;
                background-image: url('/css/css-login/imagenes-login/contraseña.png');
                background-size: 20px;
                display: inline;
                background-image: url('/css/css-login/imagenes-login/contraseña.png');
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

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const openModalBtn = document.querySelector('[data-bs-target="#exampleModalCenteredScrollable"]');
                const popupSound = new Audio('sound.wav');
                function playPopupSound() {
                    popupSound.play();
                }
                openModalBtn.addEventListener('click', playPopupSound);
            });
        </script>
    </head>

    <body id="cuerpo" class="  " style="background-image: url(/css/css-facturacion/imagenes/fondo-recu2.png); background-size: cover; position: relative; background-repeat: no-repeat; background-position: center; height: 100vh;">
        <div class="position-relative  iq-banner ">
            <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="{{route('facturacion')}}">Facturación</a>
                <a href="{{route('compras')}}">Compras</a>
                <a href="{{route('clientes')}}">Clientes</a>
                <a href="{{route('citas')}}">Citas</a>
                <a href="{{route('inventario')}}">Inventario</a>
                <a href="{{route('facturas')}}">Facturas</a>
                <a href="{{route('servicios')}}">Servicio</a>
                <a href="{{route('usuarios')}}">Usuarios</a>
                <a href="{{route('proveedores')}}">Proveedores</a>
                <a href="{{route('reportes')}}">Reportes</a>
                <a href="{{route('logOut')}}">Cerrar sesión</a>
            </div>
            <header>
                <nav class="topnav" id="myTopnav">
                    <div class="tlogo">
                        <a href="{{route('home')}}"><img src="/css/css-acercainfo/imagenes/wof.png" /></a>
                    </div>
                    <h1 id="h1clientes">Servicio</h1>
                    <button class="openbtn" onclick="openNav()"><img src="/css/css-acercainfo/imagenes/menu_icon.png" alt="#" /> </button>
                    <button class="openbtn" id="openbtn" data-bs-toggle="modal" data-bs-target="#campoVacioModalcs"  style="float: right; right: 0;">
                        <img style="width: 2.5em; margin-bottom: -18%;" src="../css/fonts/cerrar.png">
                    </button>
                </nav>
            </header>
        </div>
        <div class="content-inner container-fluid pb-0" id="page_layout">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="border-radius: 15px; margin-top: 2%;">
                        <div class="card-body" style="border-radius: 15px; position: relative;">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card" style="border: none;">
                                        <div class="card-body">
                                            <form class="row g-3 needs-validation" novalidate>
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <input type="text" class="form-control buscarServicio" id="inputcliente" required placeholder="      Buscar">
                                                        <button class="btn btn-primary ml-2" type="button" class="btn btn-primary me-2" id="btnregistrar" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable" style="background-color: #F63A3D; padding-left: -20%; border-color: #F63A3D; border-radius: 10px; background: linear-gradient(to bottom, #F63A3D 80%, #000);">
                                                            <span style="margin-left: -10%;">Registrar</span>
                                                            <img style="width: 1.2em;" src="../css/fonts/servicio.png" >
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <p> </p>
                                </div>
                            </div>
                            <div class="card tablaDedatos" id="tablaDedatos" style="border: none;">
                                <div class="row">
                                    <div class="col-sm-12 mt-4">
                                        <div class="table-responsive-lg">
                                            <table class="table" id="input-datatable">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac0"></th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac1">nro de servicio</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac3">Fecha</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac4">Servicio</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac4">Cliente</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac4">Placa</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="alldata">
                                                    @foreach ($servicios as $servicio)
                                                    <tr>
                                                        <td class="text-center">
                                                            <button type="button" data-toggle="modal" data-target="#exampleModalCenteredScrollable{{$servicio->id}}">
                                                                <img style="width: 1.2em; height: 1.2em; margin-bottom: -15%;" src="../css/fonts/akar-icons--edit.png" >
                                                            </button>
                                                        </td>
                                                        <td class="text-center">{{$servicio->id}}</td>
                                                        <td class="text-center">{{$servicio->fecha->format('d/m/Y')}}</td>
                                                        <td class="text-center">
                                                            <div style="white-space: nowrap; overflow-x: auto; width: 100%;">
                                                                {{$servicio->tipoServicio}}
                                                            </div>
                                                        </td>
                                                        @if ($servicio->cliente != null)
                                                        <td class="text-center">{{$servicio->cliente->nombre}}</td>
                                                        @else
                                                        <td class="text-center">{{'NULL'}}</td>
                                                        @endif
                                                        <td class="text-center">{{$servicio->placa}}</td>
                                                    </tr>
                                                    @include ('modales.editarServicio')
                                                    @endforeach
                                                </tbody>
                                                <tbody id="content">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div style="margin-bottom: 0;">
                            </div>
                            <div class="col-sm-12">
                                <p class="mb-0 mt-4">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title text-right"> <!-- Ajuste del título -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 offset-lg-6"> <!-- Ajuste de columnas -->
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mt-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL DE REGISTRO DE SERVICIO FORM-->
        <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="padding-bottom: -10%; height: 10%; border-bottom: none; align-items: right; ">
                        <img src="/css/css-facturacion/imagenes/wof.png" style=" left: 80%; right: 0; width:  25%; height: 3%; margin-bottom: -8%; height: 3%;" />
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 3%;"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <h4 style="text-align: center; border: 2px solid #8a92a6; text-justify: center; padding-top: 10px; margin-bottom: 4%;">Formato de recepción de motocicletas</h4>
                            <label for="validationCustom01" class="form-label" style="width: 87.06px; width: 100%; float: left; 
                                border-bottom: 2px solid #8a92a6; margin-bottom: 4%; text-align: left;">Datos:</label>
                            <form method="POST" action="{{ route("servicio.store") }}" id="formServicio" class="row g-3 ">
                                @csrf
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center" style="display: flex;">
                                        <label for="validationCustom01" class="form-label me-2" style="width: 87.06px; text-align: left;">Cedula:</label>
                                        <input name="cedula" type="number" min="1" class="form-control" id="inputcliente" required placeholder="      Buscar" style="float: right;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <label for="inputCantidad" class="form-label me-2" style="width: 87.06px;">Placa:</label>
                                        <input name="placa" type="text" class="form-control" id="inputplaca" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <label for="validationCustom02" class="form-label me-2" style="width: 87.06px; text-align: left;">Modelo:</label>
                                        <input name="modelo" type="number" class="form-control" id="inputmodelo" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <label for="validationCustom02" class="form-label me-2" style="width: 87.06px;">Marca:</label>
                                        <input name="marca" type="text" class="form-control" required id="inputmarca">
                                    </div>
                                </div>
                                <div class="col-12">
                                </div><br>
                                <div class="linea-horizontal" style="height: 1.8px; background-color: #8a92a6; width: 100%;"></div>
                                <br>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <label for="validationCustom02" class="form-label me-2" style="margin-right: 5%; width: 258.68px; text-align: left;">Cambiada de aceite</label>
                                        <input name="ca" type="checkbox" id="cambiadadeaceite" value="Cambiada de aceite" style="margin-left: 5%; margin-bottom: 1px;">
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <label for="validationCustom02" class="form-label me-2" style="margin-right: 5%; width: 258.68px; text-align: left;">Radiada y acobalada de rines</label>
                                        <input name="rar" type="checkbox" id="cambiadadeaceite" value="Radiada y acobalada de rines" style="margin-left: 5%; margin-bottom: 1px;">
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <label for="validationCustom02" class="form-label me-2" style="margin-right: 5%; width: 258.68px; text-align: left;">Carga de baterias</label>
                                        <input name="cb" type="checkbox" id="cambiadadeaceite" value="Carga de baterias" style="margin-left: 5%; margin-bottom: 1px;">
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <label for="validationCustom02" class="form-label me-2" style="margin-right: 5%; width: 258.68px; text-align: left;">Montallantas</label>
                                        <input name="mll" type="checkbox" id="cambiadadeaceite" value="Montallantas" style="margin-left: 5%; margin-bottom: 1px;">
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <label for="validationCustom02" class="form-label me-2" style="margin-right: 5%; width: 258.68px; text-align: left;">Mantenimiento preventivo</label>
                                        <input name="mp" type="checkbox" id="cambiadadeaceite" value="Mantenimiento preventivo" style="margin-left: 5%; margin-bottom: 1px;">
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center">
                                        <label for="validationCustom02" class="form-label me-2" style="margin-right: 5%; width: 258.68px; text-align: left;">Mantenimiento general</label>
                                        <input name="mg" type="checkbox" id="cambiadadeaceite" value="Mantenimiento general" style="margin-left: 5%; margin-bottom: 1px;">
                                    </div>
                                </div>
                                <div class="col-md-6"></div><br><br>
                                <div class="linea-horizontal" style="height: 1.8px; background-color: #8a92a6; width: 100%;"></div><br>
                                <label for="validationCustom02" class="form-label me-2" style="margin-right: 5%; width: 258.68px; text-align: left;">Observaciones</label><br>
                                <div class="col-md-12">
                                    <div class="d-flex align-items-center">
                                        <textarea name="observaciones" id="observaciones" style="border: 2px solid #8a92a6;" rows="5" cols="100%" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id="imprimir" style="width: 
                                    15%; background-color: #F63A3D; padding: 7px 10px; height: 35px; border-color: #F63A3D; border-radius: 10px; background: linear-gradient(to bottom, #F63A3D 80%, #000); display: flex; ">
                                        <span style="margin-left: 8%; color: #fff;">Registrar</span>
                                        <img style="width: 1.2em;" src="../css/fonts/servicio.png" >
                                    </button>
                                </div>
                            </form><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL cerrar sesion-->
        <div class="modal fade" id="campoVacioModalcs" tabindex="-1" aria-labelledby="campoVacioModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="height: 40%;">
                <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover; position: relative; background-repeat: no-repeat; background-position: center;height: 40dvh; border-radius: 20px; left:0%; top: 60%; box-shadow: 0px 0px 20px 0px #F63A3D;">
                    <div class="modal-header" style="height: 30%;">
                        <img src="/css/css-facturacion/imagenes/wof.png" style="width: 40%; height: 220%; top: 0; margin-top: 4%; margin-left: 30%;" />
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 5%;"></button>
                    </div>
                    <div class="modal-body">
                        <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">Atención.</span></center>
                        <center><span id="modaltexto" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%; padding-right: 2%;"> ¿Estas seguro que quieres cerrar sesión?.</span></center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #fff; border: 2px solid #F63A3D; color: #F63A3D; border-radius: 10px; width: 20%;" onclick="location.href='index.html'"><b>Si</b></button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px; width: 20%;">No</button>
                    </div>
                </div>
            </div>
        </div>
        <!--FINAL MODAL cerrar sesion-->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const btnguardar = document.getElementById('btnguardar');
                btnguardar.addEventListener('click', function() {
                    const nombre = document.getElementById('inputnombre').value;
                    const identificacion = document.getElementById('inputidentificacion').value;
                    const telefono = parseInt(document.getElementById('inputtelefono').value, 10); // Convertir a número
                    const correo = document.getElementById('inputcorreo').value;
                    const tabla = document.getElementById('tablaDedatos').getElementsByTagName('tbody')[0];
                    const fila = document.createElement('tr');
                    const celdaBotoneliminar = document.createElement('button');
                    celdaBotoneliminar.classList.add('btneliminar');
                    celdaBotoneliminar.addEventListener('click', () => modalmodificar());
                    fila.appendChild(celdaBotoneliminar);
                    const celdaIdentificacion = document.createElement('td');
                    celdaIdentificacion.innerHTML = identificacion;
                    fila.appendChild(celdaIdentificacion);
                    const celdaNombre = document.createElement('td');
                    celdaNombre.innerHTML = nombre;
                    fila.appendChild(celdaNombre);
                    const celdaTelefono = document.createElement('td');
                    celdaTelefono.className = 'text-center';
                    celdaTelefono.innerHTML = telefono;
                    fila.appendChild(celdaTelefono);
                    if (document.getElementById('inputnombre').value == "" ||
                        document.getElementById('inputidentificacion').value == "" ||
                        document.getElementById('inputtelefono').value == "" ||
                        document.getElementById('inputcorreo').value == "") {
                        document.getElementById('modaltitulo').innerText = "Error.";
                        document.getElementById('modaltexto').innerText = "favor, completa todos los campos antes de registrar.";
                        const campoVacioModal = new bootstrap.Modal(document.getElementById('campoVacioModal'));
                        campoVacioModal.show();
                        return; // Salir de la función si hay campos vacíos
                    }

                    var email = document.getElementById("inputcorreo").value;
                    var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                    if (!regex.test(email)) {
                        document.getElementById('modaltitulo').innerText = "Error.";
                        document.getElementById('modaltexto').innerText = "Por favor, ingresa un correo electrónico valido.";
                        const campoVacioModal = new bootstrap.Modal(document.getElementById('campoVacioModal'));
                        campoVacioModal.show();
                        return;
                        return false;
                    }
                    const celdaCorreo = document.createElement('td');
                    celdaCorreo.innerHTML = correo;
                    fila.appendChild(celdaCorreo);
                    tabla.appendChild(fila);
                    document.getElementById('modaltitulo').innerText = "Correcto.";
                    document.getElementById('modaltexto').innerText = "Cliente registrado.";
                    numericFieldide.value = "";
                    const campoVacioModal = new bootstrap.Modal(document.getElementById('campoVacioModal'));
                    campoVacioModal.show();
                    var boton2 = document.getElementById("btncerrar");
                    boton2.click();
                });

                btnguardar.addEventListener('click', function(event) {
                    document.getElementById("inputnombre").value = "";
                    document.getElementById("inputidentificacion").value = "";
                    document.getElementById("inputtelefono").value = "";
                    document.getElementById("inputcorreo").value = "";
                });

                function eliminarRegistro(fila) {
                    fila.remove();
                }

                function modalmodificar() {
                    const modalmodificar = new bootstrap.Modal(document.getElementById('modalmodificar'));
                    modalmodificar.show();
                }
            });
        </script>
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
            const numericFieldide = document.getElementById("inputidentificacion");
            numericFieldide.addEventListener("input", function() {
                if (isNaN(numericFieldide.value)) {
                    document.getElementById('modaltitulo').innerText = "Error.";
                    document.getElementById('modaltexto').innerText = "Por favor, ingresa un numero de identificación valido.";
                    numericFieldide.value = "";
                    const campoVacioModal = new bootstrap.Modal(document.getElementById('campoVacioModal'));
                    campoVacioModal.show();
                    return;
                    appointmentForm.submit();
                }
            });
        </script>
        <script>
            const numericFieldidet = document.getElementById("inputtelefono");
            numericFieldidet.addEventListener("input", function() {
                if (isNaN(numericFieldidet.value)) {
                    document.getElementById('modaltitulo').innerText = "Error.";
                    document.getElementById('modaltexto').innerText = "Por favor, ingresa un numero de telefono valido.";
                    numericFieldidet.value = "";
                    const campoVacioModal = new bootstrap.Modal(document.getElementById('campoVacioModal'));
                    campoVacioModal.show();
                    return;
                    appointmentForm.submit();
                }
            });
        </script>
        <script>
            const textField = document.getElementById("inputnombre");
            textField.addEventListener("input", function() {
                if (/[0-9]/.test(textField.value)) {
                    document.getElementById('modaltitulo').innerText = "Error.";
                    document.getElementById('modaltexto').innerText = "Por favor, ingresa un nombre valido.";
                    textField.value = "";
                    const campoVacioModal = new bootstrap.Modal(document.getElementById('campoVacioModal'));
                    campoVacioModal.show();
                    return;
                }
            });
        </script>
        <!--<script>
            document.addEventListener('DOMContentLoaded', function() {
                const btncs = document.getElementById('openbtn');
                btncs.addEventListener('click', function(event) {
                    document.getElementById('modaltitulo').innerText = "Atención.";
                    document.getElementById('modaltexto').innerText = "¿Estas seguro que quieres cerrar sesión?.";
                    const campoVacioModalcs = new bootstrap.Modal(document.getElementById('campoVacioModalcs'));
                    campoVacioModalcs.show();
                    return;
                });
            });
        </script>-->
        <script>
            const encabezadoUsuario = document.getElementById("EncabezadosTablaFac1");
            const texto = encabezadoUsuario.textContent;
            const nuevoTexto = texto.replace("nro", "n<span style='text-transform: uppercase;'></span><span style='text-transform: lowercase'>ro ");
            encabezadoUsuario.innerHTML = nuevoTexto;
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                fetchData();
                function fetchData(query = '') {
                    if (query) {
                        $('#alldata').hide();
                        $('#content').show();
                    } else {
                        $('#alldata').show();
                        $('#content').hide();
                    }
                    $.ajax({
                        url: "{{route('servicio.buscarServicio')}}",
                        method: "GET",
                        data: {
                            query: query
                        },
                        dataType: 'json',
                        success: function(data) {
                            $("#content").html(data.table_data);
                        }
                    });
                }
                $(document).on('keyup', '.buscarServicio', function() {
                    var query = $(this).val();
                    fetchData(query);
                });
            });
        </script>
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
        @if (session('exito'))
            <script script>
                $(document).ready(function() {
                    $('#campoVacioModal').modal('show'); // Muestra el modal
                    $('#formActualizar').reset();
                    $('#formServicio').reset();
                });
            </script>
        <!-- MODAL ERROR-->
        <div class="modal fade" id="campoVacioModal" tabindex="-1" aria-labelledby="campoVacioModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="height: 40%;">
                <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png);background-size: cover; position: relative; background-repeat: no-repeat; background-position: center; height: 40dvh; border-radius: 20px; left:0%; top: 60%; box-shadow: 0px 0px 20px 0px #F63A3D;">
                    <div class="modal-header" style="height: 30%;">
                        <center><img src="/css/css-facturacion/imagenes/wof.png" style="width: 40%; height: 10%;" /></center>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 5%;"></button>
                    </div>
                    <div class="modal-body">
                        <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">Operacion Exitosa!</span></center>
                        <center><span id="modaltexto" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%; padding-right: 2%;">{{session('exito')}}</span></center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px;">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!--FINAL MODAL ERROR-->
        @endif
        @include('sweetalert::alert')
        @include('notify::components.notify')
        @notifyJs
    </body>
</html>