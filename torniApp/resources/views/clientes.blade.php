<?php
@include('modales.modal')
?>
<!doctype html>
<html>
    <head>
        @notifyCss
        <meta charset="utf-8">
        <title>Tornimotos | Clientes</title>        
        <link rel="stylesheet" href="/css/css-facturacion/menu.css" />
        <link rel="stylesheet" href="/css/css-facturacion/bootstrap.min.css">
        <link rel="stylesheet" href="/css/css-facturacion/style.css">
        <link rel="stylesheet" href="/css/css-clientes/style.css">
        <link rel="icon" href="/css/css-index/images/fevicon.png" type="image/gif" />
        <link rel="stylesheet" href="/css/css-facturacion/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="/css/css-agendamiento/bootstrap.min.css">
        <link rel="shortcut icon" href="/css/assets/images/tornico.ico"> 
        <link rel="stylesheet" href="/css/assets/css/core/libs.min.css">
        <link rel="stylesheet" href="/css/assets/css/hope-ui.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/pro.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/custom.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/rtl.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/customizer.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/fonts/fuentes.css"><!--esta es la de la fuente-->
        <link rel="stylesheet" href="/css/boostrap/bootstrap-4.5.3-dist/css/bootstrap.min.css"><!--esta es el estilo de input-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style type="text/css">

            #identificacionmodal:-webkit-autofill,
            #nombremodal:-webkit-autofill,
            #telefonomodal:-webkit-autofill,
            #inputcorreo:-webkit-autofill,
            #inputtelefono:-webkit-autofill {
                -webkit-box-shadow: 0 0 0 1000px #fff inset;
                /* Establecer un fondo blanco para evitar cambios de color */
                -webkit-text-fill-color: #333;
                /* Color del texto */
            }

            .form-label,
            #exampleModalCenteredScrollableTitle {
                font-family: 'Inter', sans-serif;
            }

            .form-control:focus {
                box-shadow: none;
            }

            #exampleModalCenteredScrollableTitle{
                font-size: 20px;
            }

            body {
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

    <body class="  " style="background-image: url(/css/css-facturacion/imagenes/fondo-recu2.png); background-size: cover; position: relative; background-repeat: no-repeat; background-position: center; height: 100vh;">
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
                    <h1 style="font-family: Comic Sans MS;">Clientes</h1>
                    <button class="openbtn" onclick="openNav()"><img src="/css/css-acercainfo/imagenes/menu_icon.png" alt="#" /> </button>
                    <button class="openbtn" id="openbtn" data-bs-toggle="modal" data-bs-target="#campoVacioModalcs"  style="float: right; right: 0;"><img style="width: 2.5em; margin-bottom: -18%;" src="../css/fonts/cerrar.png" >
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
                                            <form class="row g-3 needs-validation">
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <input type="text" class="form-control" id="inputcliente" placeholder="      Buscar">
                                                        <button type="button" id="btnregistrar" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable" style="background-color: #F63A3D; padding-left: -20%; border-color: #F63A3D; margin-left: 1.5%; border-radius: 10px; background: linear-gradient(to bottom, #F63A3D 80%, #000);">
                                                            <span style="margin-left: -10%;">Registrar</span>
                                                            <img style="width: 1.1em;" src="../css/fonts/clientes.png" >
                                                            <!--<span class="iconify" data-icon="carbon:customer" id="sell-card"></span>-->
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
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac1">Identificación</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac3">Nombre</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac4">teléfono</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac4">Correo</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="alldata">
                                                    @foreach($clientes as $cliente)
                                                    <tr>
                                                        <td class="text-center">
                                                            <button type="button" data-toggle="modal" data-target="#modalmodificar{{$cliente->id}}">
                                                                <img style="width: 1.2em; height: 1.2em; margin-bottom: -15%;" src="../css/fonts/akar-icons--edit.png" >
                                                            </button>
                                                        </td>
                                                        <td class="text-center">{{$cliente->cedula}}</td>
                                                        <td class="text-center">{{$cliente->nombre}}</td>
                                                        <td class="text-center">{{$cliente->telefono}}</td>
                                                        <td class="text-center">{{$cliente->correo}}</td>
                                                    </tr>
                                                    @include ('modales.editarCliente')
                                                    @endforeach
                                                </tbody>
                                                <tbody id="content">
                                                    @foreach($clientes as $cliente)
                                                    @include("modales.editarCliente")
                                                    @endforeach
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
        <!-- MODAL DE NUEVO CLIENTE FORM-->
        <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content" style="border-radius: 15px;">
                    <div class="modal-header" style="display: flex; align-items: center;">
                        <span class="vertical-line" style="width: 4.5px; height: 26px; background-color: #F63A3D; vertical-align: middle; margin-left: 25%; margin-right: 2%;"></span>
                        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle" style="top: 25%;"><b>Registrar cliente</b></h5>
                        <button type="button" id="btncerrar" class="btn-close" style="margin-right: 5%;" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('cliente.store')}}" class="row g-3" id="RegistrarCliente">
                            @csrf
                            <div class="col-12">
                                <label for="cedula" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Identificación:</label>
                                <input name="cedula" type="text" id="identificacionmodal" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa la identificación del cliente" required>
                            </div>
                            <div class="col-12">
                                <label for="nombre" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Nombre:</label>
                                <input name="nombre" type="text" id="nombremodal" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingrese el nombre del cliente" required>
                            </div>
                            <div class="col-12">
                                <label for="telefono" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Teléfono:</label>
                                <input name="telefono" type="tel" id="telefonomodal" pattern="\([0-9]{3}\) [0-9]{3}[ -][0-9]{4}" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa el teléfono del cliente" required>
                            </div>
                            <div class="col-12">
                                <label for="correo" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Correo electrónico:</label>
                                <input name="correo" type="email" id="inputcorreo" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa el correo electrónico del cliente" required>
                            </div>
                            <div class="modal-footer" style="display: flex; align-items: center; justify-content: center;">
                                <button type="submit" id="btnguardar" style="width: 85%; left: 0%; margin-bottom: 10%;" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--FIN MODAL DE NUEVO CLIENTE FORM-->
        <!-- MODAL ERROR-->
        <div class="modal" id="campoVacioModal" tabindex="-1" aria-labelledby="campoVacioModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="height: 40%;">
                <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover; position: relative; background-repeat: no-repeat; background-position: center; height: 40dvh; border-radius: 20px; left:0%; top: 60%; box-shadow: 0px 0px 20px 0px #F63A3D;">
                    <div class="modal-header" style="height: 30%;">
                        <center><img src="/css/css-facturacion/imagenes/wof.png" style="width: 40%; margin-top: 20%; height: 50%;" /></center>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 5%;"></button>
                    </div>
                    <div class="modal-body">
                        <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">ERROR!</span></center>
                        <center><span id="modaltexto" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%; padding-right: 2%;"></span></center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px;">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!--FINAL MODAL ERROR-->
        <!-- MODAL cerrar sesion-->
        <div class="modal" id="campoVacioModalcs" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
            <div class="modal-dialog" style="height: 40%;">
                <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover; position: relative; background-repeat: no-repeat; background-position: center;height: 40dvh;border-radius: 20px;left:0%;top: 60%; box-shadow: 0px 0px 20px 0px #F63A3D;">
                    <div class="modal-header" style="height: 30%;">
                        <img src="/css/css-facturacion/imagenes/wof.png" style="width: 40%; height: 220%; top: 0; margin-top: -4%; margin-left: 30%;" />
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 5%; margin-top: 2%;"></button>
                    </div>
                    <div class="modal-body">
                        <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">Atención.</span></center>
                        <center><span id="modaltexto" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%; padding-right: 2%;"> ¿Estas seguro que quieres cerrar sesión?.</span></center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #fff; border: 2px solid #F63A3D; color: #F63A3D; border-radius: 10px; width: 20%;" onclick=location.href="{{route('logOut')}}"><b>Si</b></button>
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
                        <img src="/css/css-facturacion/imagenes/wof.png" style="width: 40%; height: 230%; top: 0; margin-top: -5%; margin-left: 30%;" />
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 0%;border: none; background: none;"></button>
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
            document.getElementById('inputidentificacion').addEventListener('input', function() {
                var identificacionValue = this.value;
                if (/[a-zA-Z]/.test(identificacionValue)) {
                    document.getElementById('modaltitulo').innerText = "Atención.";
                    document.getElementById('modaltexto').innerText = "¿Estas seguro que no?.";
                    document.getElementById('campoVacioModalcs').style.display = 'block';
                } else {
                    document.getElementById('errorModal').style.display = 'none';
                }
            });
        </script>

        <script>
            document.getElementById("inputcliente").addEventListener("keyup", function() {
                let input = this.value.toLowerCase();
                let table = document.getElementById("input-datatable");
                let rows = table.getElementsByTagName("tr");

                for (let i = 1; i < rows.length; i++) {
                    let name = rows[i].getElementsByTagName("td")[1].innerText.toLowerCase();
                    let numero = rows[i].getElementsByTagName("td")[0].innerText.toLowerCase();

                    if (name.includes(input) || numero.includes(input)) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            });
        </script>
        <script src="/css/assets/js/iqonic-script/setting.min.js"></script>
        <script src="/css/assets/js/setting-init.js"></script>
        <script src="/css/assets/vendor/lodash/lodash.min.js"></script>
        <script src="/css/assets/js/core/external.min.js"></script>
        <script src="/css/assets/js/iqonic-script/utility.min.js"></script>
        <script src="/css/assets/js/charts/widgetcharts.js?v=4.0.0" defer></script>
        <script src="/css/assets/js/charts/dashboard.js?v=4.0.0" defer></script>
        <script src="/css/assets/js/charts/alternate-dashboard.js?v=4.0.0" defer></script>
        <script src="/css/assets/js/hope-ui.js?v=4.0.0" defer></script>
        <script src="/css/assets/js/hope-uipro.js?v=4.0.0" defer></script>
        <script src="/css/assets/js/sidebar.js?v=4.0.0" defer></script>
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
                        url: "{{route('cliente.buscar')}}",
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
                $(document).on('keyup', '#inputcliente', function() {
                    var query = $(this).val();
                    fetchData(query);
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
        @if (session('error'))
        <script>
            $(document).ready(function() {
                $('#myModal').modal('show'); // Muestra el modal
            });
        </script>
        <!-- MODAL ERROR-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document" style="height: 40%;">
                <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover;position: relative; background-repeat: no-repeat; background-position: center; height: 40dvh; border-radius: 20px;left:0%;top: 60%; box-shadow: 0px 0px 20px 0px #F63A3D;">
                    <div class="modal-header" style="height: 30%;">
                        <img src="/css/css-facturacion/imagenes/wof.png" style="width: 50%; height: 220%; top: 0; margin-top: 3%; margin-left: 25%;" />
                        <!--<h5 class="modal-title" id="campoVacioModalLabel">Error al añadir</h5>-->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 0%; border: none; background: none;"></button>
                    </div>
                    <div class="modal-body">
                        <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">ERROR!</span></center>
                        <center><span id="modalErrorMessage" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%; padding-right: 2%;">{{session('error')}}</span></center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btncerrar" aria-label="close" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px; width: 25%;">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!--FINAL MODAL ERROR-->
        @endif
        @if (session('exito'))
        <script script>
            $(document).ready(function() {
                $('#myModalexito').modal('show'); // Muestra el modal
            });
        </script>
        <!-- Modal -->
        <div class="modal" id="myModalexito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document" style="height: 40%;">
                <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover; position: relative; background-repeat: no-repeat; background-position: center; height: 40dvh; border-radius: 20px; left:0%; top: 60%; box-shadow: 0px 0px 20px 0px #F63A3D;">
                    <div class="modal-header" style="height: 30%;">
                        <img src="/css/css-facturacion/imagenes/wof.png" style="width: 50%; height: 180%; top: 0; margin-top: -2%; margin-left: 25%;" />
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 0%; border: none; background: none;">
                        </button>
                    </div>
                    <div class="modal-body">
                        <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">Operacion Exitosa!</span></center>
                        <center><span id="modalErrorMessage" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%; padding-right: 2%;">{{session('exito')}}</span></center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btncerrar" aria-label="close" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px; width: 25%;">Cerrar</button>
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