<!doctype html>
<html>
    <head>
        @php
        if(isset($_SESSION['detallesCompra'])){
            $detalles = $_SESSION['detallesCompra'];
        }
        @endphp
        @notifyCss
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Tornimotos | Compras</title>
        <link rel="stylesheet" href="/css/css-compras/style.css">
        <link rel="stylesheet" href="/css/css-facturacion/menu.css" />
        <link rel="stylesheet" href="/css/css-facturacion/bootstrap.min.css">
        <link rel="stylesheet" href="/css/css-facturacion/style.css">
        <link rel="stylesheet" href="/css/fonts/fuentes.css"><!--esta es la de la fuente-->
        <link rel="stylesheet" href="/css/css-facturacion/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="/css/boostrap/bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <link rel="shortcut icon" href="/css/assets/images/tornico.ico">
        <link rel="stylesheet" href="/css/assets/css/core/libs.min.css">
        <link rel="stylesheet" href="/css/assets/css/hope-ui.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/pro.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/custom.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/rtl.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/customizer.min.css?v=4.0.0">

        <style type="text/css"> 
        
            body {
                zoom: 110%;
            }

            input[type=number]::-webkit-inner-spin-button, 
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
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
                background-color: red;
                color: white;
                border-color: red;
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
                    <h1 id="h1clientes">Compras</h1>
                    <button class="openbtn" onclick="openNav()"><img src="/css/css-acercainfo/imagenes/menu_icon.png" alt="#" /> </button>
                    <button class="openbtn" id="openbtn" data-bs-toggle="modal" data-bs-target="#campoVacioModalcs"  style="float: right; right: 0;"><img style="width: 2.5em; margin-bottom: -18%;" src="../css/fonts/cerrar.png"></button>
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
                                            <form method="POST" action="{{ route('compra.agregarDetalleCompra') }}" id="formAgregar" class="row g-3">
                                                @csrf
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <label for="validationCustom01" class="form-label me-2">Producto:</label>
                                                        <input name="nombreProducto" type="text" list="productos" class="form-control" id="inputproducto" required placeholder="      Buscar" oninput="buscarProductos()" ><br>
                                                        <datalist id="productos"></datalist>
                                                        <button class="btn btn-primary ml-2" type="button" class="btn btn-primary me-2" id="btnregistrar" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable" style="background-color: #F63A3D; padding-left: -20%; border-color: #F63A3D; border-radius: 10px; background: linear-gradient(to bottom, #F63A3D 80%, #000);">
                                                            <span style="margin-left: -10%;">Registrar</span>
                                                            <img style="width: 1em;" src="../css/fonts/zondicons--window-new.png" >
                                                            <!--<span class="iconify" data-icon="zondicons:window-new" id="sell-card"></span>-->
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <label for="validationCustom01" class="form-label me-2">Cantidad:</label>
                                                        <input name="cantidad" type="number" class="form-control" id="inputproducto" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <label for="inputCantidad" id="lblcostouni" class="form-label me-2"></label>
                                                        <input name="costo" type="number" class="form-control" id="inputcostouni" pattern="[0-9]*" required>
                                                        <button class="btn btn-primary ml-2" type="submit" id="btnañadir" style="border-radius: 10px; background: linear-gradient(to bottom, #F63A3D 80%, #000); display: flex;">
                                                            <span style="margin-left: -3%; margin-right: 2%;">Añadir</span>
                                                            <img style="width: 1em; margin-left: 2%; margin-top: 5%; margin-right: -2%;" src="../css/fonts/mingcute--plus-fill.png" >
                                                            <!--<span class="iconify" data-icon="mingcute:plus-fill" id="sell-card" style="margin-left: 2%; margin-top: 5%; margin-right: -2%;"></span>-->
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-12">
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
                                            <table class="table" id="tablaDetalles">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" id="EncabezadosTablaFac0" scope="col"></th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac2">Codigo</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac3">Nombre</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac4">Costo Unit</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac4">Cantidad</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac4">Subtotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @for($indice = 0; $indice < count($detalles); $indice++) 
                                                    <tr>
                                                        <td class="text-center">
                                                            <form action="{{route('compra.eliminarDetalle', $indice)}}" method="post" id="formEliminar">
                                                                @csrf
                                                                <button type="submit" id="btnEliminar">
                                                                    <img style="width: 1.5em; height: 1.5em; margin-top: 15%;" src="../css/fonts/material-symbols--delete-rounded.png" >
                                                                </button>
                                                            </form>
                                                        </td>
                                                        <td class="text-center">{{$detalles[$indice]->producto->codigo}}</td>
                                                        <td class="text-center">{{$detalles[$indice]->producto->nombre}}</td>
                                                        <td class="text-center">{{number_format($detalles[$indice]->producto->precioCompra)}}</td>
                                                        <td class="text-center">{{number_format($detalles[$indice]->cantidad)}}</td>
                                                        <td class="text-center">{{number_format($detalles[$indice]->costoDetalle)}}</td>
                                                    </tr>
                                                    @endfor
                                                </tbody>
                                            </table>
                                            <label style="float: right; margin-bottom: 0; font-size: 24px; font-weight: 700; color: #000;">Total a pagar: $ {{number_format(session('costoTotalCompra'))}}</label>
                                            <form method="POST" action="{{route('compra.store')}}">
                                                @csrf
                                                <button class="btn btn-primary ml-2" type="submit" id="btnSave" style="border-radius: 10px; float: right; margin-top: 10%; margin-right: -16%; background: linear-gradient(to bottom, #F63A3D 80%, #000); display: flex; " >
                                                    <span style="margin-left: -3%; margin-right: 2%;">Registrar compra</span>
                                                    <img style="width: 1.3em; margin-left: 2%; margin-top: 1%; margin-right: -2%;" src="../css/fonts/carro.png" >
                                                </button>
                                            </form>
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
                                    <div class="header-title text-right">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 offset-lg-6">
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
        <!-- MODAL ERROR-->
        <div class="modal fade" id="campoVacioModal" tabindex="-1" aria-labelledby="campoVacioModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="height: 40%;">
                <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover; position: relative; background-repeat: no-repeat; background-position: center; height: 40dvh; border-radius: 20px; left:0%;top: 60%; box-shadow: 0px 0px 20px 0px #F63A3D;">
                    <div class="modal-header" style="height: 30%;">
                        <center><img src="/css/css-facturacion/imagenes/wof.png" style="width: 40%; height: 10%;" /></center>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 5%;"></button>
                    </div>
                    <div class="modal-body">
                        <center><span id="titulo" style="font-weight: 650; font-size: large; color: #F63A3D ;"></span></center>
                        <center><span id="texto" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%;padding-right: 2%;"></span></center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px;">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!--FINAL MODAL ERROR-->
        <!-- MODAL DE NUEVO producto FORM-->
        <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content" style="border-radius: 15px;">
                    <div class="modal-header" style="display: flex; align-items: center;">
                        <span class="vertical-line" style="width: 4.5px; height: 26px; background-color: #F63A3D; vertical-align: middle; margin-left: 25%; margin-right: 2%;"></span>
                        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle" style="top: 25%;"><b>Registrar Producto</b></h5>
                        <button type="button" class="btn-close" id="btncerrar" style="margin-right: 5%;" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('producto.store')}}" class="row g-3" id="RegistrarCliente">
                            @csrf
                            <div class="col-12">
                                <label for="cedulas" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Código:</label>
                                <input name="codigo" type="text" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingrese el nombre del producto" required id="inputnombre">
                            </div>
                            <div class="col-12">
                                <label for="cedulas" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Nombre:</label>
                                <input name="nombre" type="text" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingrese el nombre del producto" required id="inputnombre">
                            </div>
                            <div class="col-12">
                                <label for="nombres" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Tipo producto:</label>
                                <select name="tipoProducto" class="form-select" id="comboboxservicio" style="width: 100%; background-color: #fff; border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; border: 2px solid #e5e5e5; margin-bottom: 8px;" required>
                                    <option value="">Selecciona un tipo de producto</option>
                                    <option value="REPUESTO">REPUESTO</option>
                                    <option value="ACCESORIO">ACCESORIO</option>
                                    <option value="INSUMO">INSUMO</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Proveedor:</label>
                                <input name="telefono" type="text" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa el proveedor" required id="inputproveedor">
                            </div>
                            <div class="col-12">
                                <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Costo:</label>
                                <input name="precioCompra" type="number" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa el costo del producto" required id="inputcosto" oninput="formatCurrencyColombian(this)">
                            </div>
                            <div class="col-12">
                                <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Precio:</label><br>
                                <input name="precioVenta" type="number" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; width: 100%; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa el precio del producto" required id="inputprecio" oninput="formatCurrencyColombian(this)">
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
                        <button type="button" class="btn btn-secondary"  style="background-color: #fff; border: 2px solid #F63A3D; color: #F63A3D; border-radius: 10px; width: 20%;" onclick=location.href="{{ route('logOut') }}"><b>Si</b></button>
                        <button type="button" class="btn btn-secondary" id="btnclosemodal" data-bs-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px; width: 20%;">No</button>
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
        <script>
            function buscarProductos(){
                var query = document.getElementById('inputproducto').value;
                $.ajax({
                    url: '{{ route("compra.buscarProducto") }}',
                    type: 'GET',
                    data: {query: query},
                    success: function(data) {
                        $('#productos').html(data);
                    }
                });
            }
        </script>        
        <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>-->
        @if(session('error'))
        <script script>
            $(document).ready(function() {
                $('#error').modal('show');
            });
        </script>
        <!-- MODAL ERROR-->
        <div class="modal" id="error" tabindex="-1" aria-labelledby="campoVacioModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="height: 40%;">
                <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover;position: relative; background-repeat: no-repeat; background-position: center; height: 40dvh; border-radius: 20px; left:0%;top: 60%; box-shadow: 0px 0px 20px 0px #F63A3D;">
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
        @if(session('message'))
        <script script>
            $(document).ready(function() {
                $('#exito').modal('show'); 
            });
        </script>
        <!-- Modal -->
        <div class="modal" id="exito" tabindex="-1" aria-labelledby="campoVacioModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="height: 40%;">
                <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover;position: relative; background-repeat: no-repeat; background-position: center; height: 40dvh; border-radius: 20px; left:0%;top: 60%; box-shadow: 0px 0px 20px 0px #F63A3D;">
                    <div class="modal-header" style="height: 30%;">
                        <center><img src="/css/css-facturacion/imagenes/wof.png" style="width: 40%; height: 10%;" /></center>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 5%;"></button>
                    </div>
                    <div class="modal-body">
                        <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">Exito!</span></center>
                        <center><span id="modaltexto" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%; padding-right: 2%;">{{session('message')}}</span></center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px;">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->        
        @endif
        @include('sweetalert::alert')
        @include('notify::components.notify')
        @notifyJs
    </body>
</html>