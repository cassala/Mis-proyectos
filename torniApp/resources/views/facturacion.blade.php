<!doctype html>
<html>
    <head>
        @php
        $detalles = $_SESSION['detallesFactura'];
        @endphp
        @notifyCss
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <title>Tornimotos | Facturación</title>
        <link rel="shortcut icon" href="/css/assets/images/tornico.ico">
        <link rel="stylesheet" href="/css/css-facturacion/menu.css" />
        <link rel="stylesheet" href="/css/css-facturacion/bootstrap.min.css">
        <link rel="stylesheet" href="/css/css-facturacion/style.css">
        <link rel="icon" href="/css/css-index/images/fevicon.png" type="image/gif" />
        <link rel="stylesheet" href="/css/css-facturacion/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="/css/fonts/fuentes.css"><!--esta es la de la fuente-->
        <link rel="stylesheet" href="/css/boostrap/bootstrap-4.5.3-dist/css/bootstrap.min.css"><!--esta es el estilo de input-->
        <link rel="shortcut icon" href="/css/assets/images/tornico.ico">
        <link rel="stylesheet" href="/css/assets/css/core/libs.min.css">
        <link rel="stylesheet" href="/css/assets/css/hope-ui.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/pro.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/custom.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/rtl.min.css?v=4.0.0">        
        <link rel="stylesheet" href="/css/assets/css/customizer.min.css?v=4.0.0">

        <style> 
        
            #identificacionmodal:-webkit-autofill,
            #nombremodal:-webkit-autofill,
            #telefonomodal:-webkit-autofill {
                -webkit-box-shadow: 0 0 0 1000px #fff inset;
                /* Establecer un fondo blanco para evitar cambios de color */
                -webkit-text-fill-color: #333;
                /* Color del texto */
            }
        
            body {
                font-family: 'Inter', sans-serif;
            }
            
            input[type=number]::-webkit-inner-spin-button, 
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            datalist {
                position: absolute;
                z-index: 1;
                background-color: white;
                border: 1px solid #ccc;
                border-radius: 4px;
                padding: 5px 0;
                max-height: 200px;
                overflow-y: auto;
            }

            datalist option {
                padding: 5px 10px;
                cursor: pointer;
            }

            datalist option:hover {
                background-color: #f1f1f1;
            }

            .form-select {
                background-color: #E7E0DF;
                border-width: 0.1em;
                border-color: #E7E0DF;
                color: black;
                width: 60.4%;
                margin-top: 0.3em;
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

            .table tbody tr td {
                vertical-align: middle;
                padding: 1px;

            }

            .g-3,
            .gy-3 {
                --bs-gutter-y: 0.rem;
                margin-bottom: -0.5em;
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

            .botonagregar {
                margin-top: 1%;
            }

            .subes {
                text-align: left;
                font-weight: bolder;
                font-size: 1.3em;
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
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const openModalBtn = document.querySelector('[data-bs-target="#exampleModalCenteredScrollable"]');
                const popupSound = new Audio('/sound.wav');
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
                    <h1 id="h1clientes">Facturación</h1>
                    <button class="openbtn" onclick="openNav()"><img src="/css/css-acercainfo/imagenes/menu_icon.png" alt="#" /> </button>
                    <button class="openbtn" id="openbtn" data-bs-toggle="modal" data-bs-target="#campoVacioModalcs"  style="float: right; right: 0;"><img style="width: 2.5em; margin-bottom: -18%;" src="../css/fonts/cerrar.png"></button>
                </nav>
            </header>
        </div>
        <div class="content-inner container-fluid pb-0" id="page_layout">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id="mela">
                        <div class="card-body" id="general">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card" style="border: none;">
                                        <div class="card-body" style="border: none;">
                                            <form method="POST" action="{{route('factura.agregarDetalleFactura')}}" id="formAgregar" class="row g-3">
                                                @csrf
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center" style="display: flex;">
                                                        <label for="validationCustom01" class="form-label me-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cliente:</label>
                                                        <input name="cedula" type="number"  min="1" class="form-control" id="inputcliente" placeholder="      Buscar">
                                                        <button class="btn btn-primary ml-2" type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable" id="openModalBtn" onclick="playPopupSound()" style="background-color: #F63A3D; padding-left: -20%; border-color: #F63A3D; border-radius: 10px; background: linear-gradient(to bottom, #F63A3D 80%, #000);">
                                                            <span style="margin-left: -10%; margin-right: 6%;">Registrar</span>
                                                            <img style="width: 1.3em;" src="../css/fonts/clientes.png" >
                                                            <!--<span class="iconify" data-icon="carbon:customer" id="sell-card"></span>-->
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="d-flex align-items-center">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <label for="validationCustom02" class="form-label me-2">&nbsp;Producto:</label>
                                                        <input name="nombreProducto" type="text" list="productos" class="form-control" id="inputproducto" oninput="buscarProductos()" >
                                                    </div>
                                                </div>
                                                <datalist id="productos" style="background-color: #F63A3D;"></datalist>
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <label for="inputCantidad" class="form-label me-2">Cantidad:</label>
                                                        <input name="cantidad" type="number" min="1" step="1" class="form-control" id="inputcantidad">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <label for="validationCustom02" class="form-label me-2">&nbsp;&nbsp;&nbsp;Servicio:</label>
                                                        <select name="servicio" class="form-select" id="comboboxservicio">
                                                            <option value="">Selecciona un servicio</option>
                                                            <option value="CAMBIO DE ACEITE">CAMBIO DE ACEITE</option>
                                                            <option value="RADIADA Y ACOBOLADA DE RINES">RADIADA Y ACOBOLADA DE RINES</option>
                                                            <option value="CARGA DE BATERIAS">CARGA DE BATERIAS</option>
                                                            <option value="MONTALLANTAS">MONTALLANTAS</option>
                                                            <option value="MANTENIMIENTO PREVENTIVO">MANTENIMIENTO PREVENTIVO</option>
                                                            <option value="MANTENIMIENTO GENERAL">MANTENIMIENTO GENERAL
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <label for="validationCustom02" class="form-label me-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Precio:</label>
                                                        <input name="costoServicio" type="number" min="1" class="form-control" id="inputprecio" pattern="[0-9]*">
                                                        <button class="btn btn-primary ml-2" type="submit" id="btnañadir" style="border-radius: 10px; background: linear-gradient(to bottom, #F63A3D 80%, #000);">
                                                            <span style="margin-left: 0%;">Añadir</span>
                                                            <img style="width: 1em; margin-left: 2%; margin-top: 1.8%; margin-right: -2%;" src="../css/fonts/mingcute--plus-fill.png" >
                                                            <!--<span class="iconify" data-icon="mingcute:plus-fill" id="sell-card"></span>-->
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card tablaDedatos" id="tablaDedatos" style="border: none;">
                                <div class="row">
                                    <div class="col-sm-12 mt-4">
                                        <div class="table-responsive-lg">
                                            <table id="tablaapp" class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac0"></th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac1">Producto</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac2">Cantidad</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac3">Precio unitario</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac4">SubTotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @for($indice = 0; $indice < count($detalles); $indice++) 
                                                    <tr>
                                                        <td class="text-center">
                                                            <form action="{{route('factura.eliminarDetalle', $indice)}}" method="post" id="formEliminar">
                                                                @csrf
                                                                <button type="submit" id="btnEliminar">
                                                                    <img style="width: 1.5em; height: 1.5em; margin-top: 15%;" src="../css/fonts/material-symbols--delete-rounded.png" >
                                                                </button>
                                                            </form>
                                                        </td>
                                                        <td class="text-center">{{$detalles[$indice]->producto->nombre ?? $detalles[$indice]->servicio}}</td>
                                                        <td class="text-center">{{number_format($detalles[$indice]->cantidad) ?? 1}}</td>
                                                        <td class="text-center">$ {{$detalles[$indice]->producto ? number_format($detalles[$indice]->producto->precioVenta) : number_format($detalles[$indice]->costoDetalle)}}</td>
                                                        <td class="text-center">$ {{number_format($detalles[$indice]->costoDetalle)}}</td>
                                                    </tr>
                                                    @endfor
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-sm-12">
                                <p class="mb-0 mt-4">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title text-right"> 
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 offset-lg-6">
                                            <div class="card" id="tarjetaFormularioTotales">
                                                <form method="POST" action="{{route('factura.cargarDatosFactura')}}">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <label class="form-label col-md-4 col-form-label-sm" id="lbltotalapagar" for="email1101" style="width: 50%; display: flex; margin-bottom: -4%;">Neto a pagar:</label>
                                                        <div class="col-md-6" id="iptp">
                                                            <input name="sinIva" value="{{number_format(session('totalSinIva'))}}" type="text" class="form-control" id="inputtotalapagar" disabled readonly value="" style="float: right; width: 100%; background: #E7E0DF; margin-bottom: -4%;">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="form-label col-md-4 col-form-label-sm" id="lbltotalapagar" for="email1101" style="width: 50%; display: flex; margin-bottom: -4%; left: 24%;">Iva:</label>
                                                        <div class="col-md-6" id="iptp">
                                                            <input name="iva" value="{{number_format(session('ivaFactura'))}}" type="text" class="form-control" id="inputtotalapagar" disabled readonly value="" style="float: right; width: 100%; background: #E7E0DF; margin-bottom: -4%">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="form-label col-md-4 col-form-label-sm" id="lbltotalapagar" for="email1101" style="width: 50%; display: flex; margin-bottom: -4%;">Total a pagar:</label>
                                                        <div class="col-md-6" id="iptp">
                                                            <input name="costoTotalFactura" value="{{number_format(session('totalFactura'))}}" type="text" class="form-control" id="inputtotalapagar" disabled readonly value="" style="float: right; width: 100%; background: #E7E0DF; margin-bottom: -4%;">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="form-label col-md-4 col-form-label-sm" for="pwdefectivo" id="lblefectivo" style="width: 50%; display: flex; margin-bottom: -4%; left: 10%;">Efectivo:</label>
                                                        <div class="col-md-6" id="ipef">
                                                            <input name="efectivo" type="number" min="1" class="form-control efectivo" id="inputefectivo" min="0" step="1" style="float: right; width: 100%; margin-bottom: -4%;" placeholder="0" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="form-label col-md-4 col-form-label-sm" id="lblcambio" for="pwd" style="width: 50%; display: flex; margin-bottom: -4%; left: 12%;">Cambio:</label>
                                                        <div class="col-md-6" id="ipca">
                                                            <input name="cambio" type="text" class="form-control" id="inputcambio" readonly style="float: right; background:#E7E0DF; width: 100%; margin-bottom: -4%;">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="form-label col-md-6 col-form-label-sm"></label>
                                                        <div class="col-md-6" id="btnfact">
                                                            <input name="nuip" type="number" class="form-control" id="nuip" hidden style="float: right; width: 100%; background: #E7E0DF; margin-bottom: -4%;">
                                                            <button type="submit" class="btn btn-primary" id="btnfacturar" style="border-radius: 10px; background: linear-gradient(to bottom, #F63A3D 80%, #000); float: right; width: 100%; display: flex;">
                                                                <img style="width: 1.6em; margin-left: 2%; margin-top: 0%; margin-right: 5%;" src="../css/fonts/game-icons--sell-card.png" >
                                                                <!--<span class="iconify" data-icon="game-icons:sell-card" id="sell-cardf"></span>-->
                                                                <span id="spanfacturar" style="margin-left: 0%;">Facturar</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
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
        </div>
        <!-- MODAL DE NUEVO CLIENTE FORM-->
        <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content" id="modaldiv">
                    <div class="modal-header" style="display: flex; align-items: center;">
                        <span class="vertical-line" style="width: 4.5px; height: 26px; background-color: #F63A3D; vertical-align: middle; margin-left: 25%; margin-right: 2%;"></span>
                        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle" style="top: 25%;"><b>Registrar nuevo cliente</b></h5>
                        <button type="button" class="btn-close" id="btncerrar" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('cliente.store')}}" class="row g-3 " id="RegistrarCliente">
                            @csrf
                            <div class="col-12">
                                <label for="cedulas" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Nombre:</label>
                                <input type="text" name="nombre" id="nombremodal" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="ingresa el nombre" required>
                            </div>
                            <div class="col-12">
                                <label for="nombres" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Identificación:</label>
                                <input type="text" name="cedula" id="identificacionmodal" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="ingresa la identificación" required>
                            </div>
                            <div class="col-12">
                                <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Teléfono:</label>
                                <input type="text" name="telefono" id="telefonomodal" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="ingresa el teléfono" required>
                            </div>
                            <div class="col-12">
                                <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Correo electrónico</label>
                                <input type="text" name="correo" id="inputformcorreo" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="ingresa el correo electrónico" required>
                            </div>
                            <div class="modal-footer" style="display: flex; align-items: center; justify-content: center;">
                                <button type="submit" id="btnguardar" style="width: 85%; left: 0%; margin-bottom: 10%;" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL DE NUEVO CLIENTE FORM-->
        <!-- MODAL cerrar sesion-->
        <div class="modal fade" id="campoVacioModalcs" tabindex="-1" aria-labelledby="campoVacioModalLabel" aria-hidden="true">
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #fff; border: 2px solid #F63A3D; color: #F63A3D; border-radius: 10px; width: 20%;" onclick=location.href="{{ route('logOut') }}"><b>Si</b></button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px; width: 20%;">No</button>
                    </div>
                </div>
            </div>
        </div>
        <!--FINAL MODAL cerrar sesion-->
        <!-- MODAL ERROR-->
        <div class="modal" id="myModalMAL" tabindex="-1" role="dialog" aria-labelledby="abel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document" style="height: 40%;">
                <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover;position: relative; background-repeat: no-repeat; background-position: center;height: 40dvh;border-radius: 20px;left:0%;top: 60%;box-shadow: 0px 0px 20px 0px #F63A3D;">
                <div class="modal-header" style="height: 30%;">
                        <img src="/css/css-facturacion/imagenes/wof.png" style="width: 40%; height: 230%; top: 0; margin-top: 0%; margin-left: 30%;" />
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style="margin-right: 0%;border: none; background: none;"></button>
                </div>
                <div class="modal-body">
                        <center><span id="modaltitulomy" style="font-weight: 650; font-size: large; color: #F63A3D ;">ERROR.</span></center>
                        <center><span id="modaltextomy" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%;padding-right: 2%;"></span></center>
                </div>
                <div class="modal-footer">
                        <button type="button" id="btncerrar" aria-label="close" class="btn btn-secondary" data-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px; width: 25%;">Cerrar</button>
                </div>
                </div>
            </div>
        </div>
        <!--FINAL MODAL ERROR-->
        <!-- MODAL factura-->
        <div class="modal fade" id="facturamodal" tabindex="-1" aria-labelledby="campoVacioModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="height: 40%;">
                <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover; position: relative; background-repeat: no-repeat; background-position: center; height: 40dvh; border-radius: 20px; left:0%; top: 60%; box-shadow: 0px 0px 20px 0px #F63A3D;">
                    <div class="modal-header" style="height: 30%;">
                        <center><img src="/css/css-facturacion/imagenes/wof.png" style="width: 40%; height: 10%;" /></center>
                        <button type="button" class="btn-close" id="btncerrarfactura" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 5%;"></button>
                    </div>
                    <div class="modal-body">
                        <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;"></span></center>
                        <br>
                        <center><span id="modaltexto" style="font-weight: 650; font-size: large; color: #000;"> Factura emitida</span></center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="btnver" style="background-color: #F63A3D; border: none; border-radius: 10px;">Ver</button>
                    </div>
                </div>
            </div>
        </div>
        <!--FINAL MODAL factura-->
        @include ('modales.modalFactura')
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
        <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
        <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                fetchData();
                function fetchData(efectivo = '') {
                    $.ajax({
                        url: "{{route('factura.calcularCambio')}}",
                        method: "GET",
                        data: {
                            efectivo: efectivo
                        },
                        dataType: 'json',
                        success: function(data) {
                            console.log('Se ha ejecutado el metodo calcularCambio');
                            $("#inputcambio").val(data.cambio);
                        }
                    });
                }
                $(document).on('keyup', '.efectivo', function() {
                    var efectivo = $(this).val();
                    fetchData(efectivo);
                });
            });
        </script>
        <script>
            const identificacionmodal = document.getElementById("identificacionmodal");
            identificacionmodal.addEventListener("input", function() {
                if (isNaN(identificacionmodal.value)) {
                    document.getElementById('modaltitulomy').innerText = "Error.";
                    document.getElementById('modaltextomy').innerText = "Por favor, ingresa un numero de identificación valido.";
                    identificacionmodal.value = "";
                    const campoVacioModal = new bootstrap.Modal(document.getElementById('myModalMAL'));
                    campoVacioModal.show();
                    return;
                    appointmentForm.submit();
                }
            });
        </script>
        <script>
            const input = document.getElementById('inputcliente');
            const maxChars = 10;

            input.addEventListener('input', function() {
                if (this.value.length > maxChars) {
                this.value = this.value.slice(0, maxChars);
                }
            });
        </script>
        <script>
            const inputcantidad = document.getElementById('inputcantidad');
            const maxCharscantidad = 6;

            inputcantidad.addEventListener('input', function() {
                if (this.value.length > maxCharscantidad) {
                this.value = this.value.slice(0, maxCharscantidad);
                }
            });
        </script>
        <script>
            const inputprecio = document.getElementById('inputprecio');
            const maxCharsprecio = 6;

            inputprecio.addEventListener('input', function() {
                if (this.value.length > maxCharsprecio) {
                this.value = this.value.slice(0, maxCharsprecio);
                }
            });
        </script>
        <script>
         const telefonomodal = document.getElementById("telefonomodal");

         telefonomodal.addEventListener("input", function() {
            if (isNaN(telefonomodal.value)) {
               document.getElementById('modaltitulomy').innerText = "Error.";
               document.getElementById('modaltextomy').innerText = "Por favor, ingresa un numero valido.";
               telefonomodal.value = "";
               const campoVacioModal = new bootstrap.Modal(document.getElementById('myModalMAL'));
               campoVacioModal.show();
               return;
               appointmentForm.submit();
            }
         });
      </script>
      <script>
            const nombremodal = document.getElementById("nombremodal");
            nombremodal.addEventListener("input", function() {
                if (/[0-9]/.test(nombremodal.value)) {
                    document.getElementById('modaltitulomy').innerText = "Error.";
                    document.getElementById('modaltextomy').innerText = "Por favor, ingresa un nombre valido.";
                    nombremodal.value = "";
                    const campoVacioModal = new bootstrap.Modal(document.getElementById('myModalMAL'));
                    campoVacioModal.show();
                    return;
                }
            });
        </script>
        <script>
            function buscarProductos(){ 
            var query = document.getElementById('inputproducto').value;
            $.ajax({
                url: '{{ route("factura.buscarProducto") }}',
                type: 'GET',
                data: {query: query},
                success: function(data) {
                    console.log(data);
                $('#productos').html(data);
                }
            });
            }
        </script>
        <script>
            var numberInput = document.getElementById('inputcantidad');

            numberInput.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        </script>
        <script>
            var inputpreciopuntos = document.getElementById('inputprecio');
            inputpreciopuntos.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        </script>
        <script>
            const puntos = document.getElementById('inputcantidad');
            let hasDecimalPoint = false;
            puntos.addEventListener('keydown', function(event) {                
                const key = event.key;
                if (key === '.' || key === ',' || key === '+' || key === '-') {
                if (hasDecimalPoint) {
                    event.preventDefault();
                } else {
                    hasDecimalPoint = true;
                }
                }
            });
        </script>
        
        <script>
            const puntosprecio = document.getElementById('inputprecio');
            let hasDecimalPointprecio = false;
            puntosprecio.addEventListener('keydown', function(event) {                
                const key = event.key;
                if (key === '.' || key === ',' || key === '+' || key === '-') {
                if (hasDecimalPointprecio) {
                    event.preventDefault();
                } else {
                    hasDecimalPointprecio = true;
                }
                }
            });
        </script>
        
        <script>
            var inputefectivo = document.getElementById('inputefectivo');
            inputefectivo.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        </script>
        <script>
            const puntosefectivo = document.getElementById('inputefectivo');
            let hasDecimalPointefectivo = false;
            puntosefectivo.addEventListener('keydown', function(event) {                
                const key = event.key;
                if (key === '.' || key === ',' || key === '+' || key === '-') {
                if (hasDecimalPointefectivo) {
                    event.preventDefault();
                } else {
                    hasDecimalPointefectivo = true;
                }
                }
            });
        </script>
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
        @if (session('previsualizar'))
        <script script>
            $(document).ready(function() {
                $('#modal-factura').modal('show');
            });
        </script>
        @endif
        @if (session('facturaEmitida'))
        <script script>
            $(document).ready(function() {
                $('#modalMensaje').modal('show');
                document.getElementById('titulo').innerText = 'ÉXITO!';
                document.getElementById('texto').innerText = "{{session('facturaEmitida')}}";
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
        @if (session('alerta'))
        <script script>
            $(document).ready(function() {
                $('#modalMensaje').modal('show');
                document.getElementById('titulo').innerText = 'ALERTA!';
                document.getElementById('texto').innerText = "{{session('alerta')}}";
            });
        </script>
        @endif
        <script>
            const inputOrigen = document.getElementById('inputcliente');
            const inputDestino = document.getElementById('nuip');
            inputOrigen.addEventListener('input', function() {
                const valor = this.value;
                inputDestino.value = valor;
            });
        </script>
        @if(session('facturaEmitida'))
        <script>
            window.open("{{ asset('storage/pdf/'. session('pdf')) }}", "_blank");
        </script>
        @endif
    </body>
</html>