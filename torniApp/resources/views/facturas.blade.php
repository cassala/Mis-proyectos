<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tornimotos | Facturas</title>
        <link rel="stylesheet" href="/css/css-facturas/style.css">
        <link rel="stylesheet" href="/css/css-facturacion/menu.css" />
        <link rel="stylesheet" href="/css/fonts/fuentes.css"><!--esta es la de la fuente-->
        <link rel="stylesheet" href="/css/boostrap/bootstrap-4.5.3-dist/css/bootstrap.min.css"><!--esta es el estilo de input-->
        <link rel="stylesheet" href="/css/css-facturacion/bootstrap.min.css">
        <link rel="stylesheet" href="/css/css-facturacion/style.css">
        <link rel="icon" href="/css/css-index/images/fevicon.png" type="image/gif" />
        <link rel="stylesheet" href="/css/css-facturacion/jquery.mCustomScrollbar.min.css">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">-->
        <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
        <link rel="shortcut icon" href="/css/assets/images/tornico.ico">
        <link rel="stylesheet" href="/css/assets/css/core/libs.min.css">
        <link rel="stylesheet" href="/css/assets/css/hope-ui.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/pro.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/custom.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/rtl.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/assets/css/customizer.min.css?v=4.0.0">
        <!--<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>-->

        <style type="text/css">

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

            input#fecha-datepicker-2 {
                background-color: #E7E0DF;
        
            }

            input[type="date"]::-webkit-calendar-picker-indicator {
                filter: invert(20%) sepia(100%) saturate(800%) hue-rotate(10deg) brightness(100%) contrast(100%);
            }
            .ulpgcds-form__item input[type="date"]{
                font-family: "Open Sans", sans-serif;
                font-weight: 400;
                font-size: 0.875rem;
                color: #565a5c;
                height: 34px;
                outline: none;
                background: #e7e0df;
                border: none;
                border-bottom: solid #0066a1 2px;
                padding: 4px 12px;
                box-sizing: border-box;
            }

            input[type=date] {
                width: 60%;
                padding: 5px 8px;
                padding-right: -25%;
                margin: 0px 3%;
                display: block;
                border: 1px solid #000;
                box-sizing: border-box;
                border-radius: 8px;
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
            document.addEventListener('DOMContentLoaded', function () {
                const openModalBtn = document.querySelector('[data-bs-target="#exampleModalCenteredScrollable"]');
                const popupSound = new Audio('sound.wav');
                function playPopupSound() {
                    popupSound.play();
                }
                openModalBtn.addEventListener('click', playPopupSound);
            });
        </script>
    </head>

    <body class="  " style="background-image: url(/css/css-facturacion/imagenes/fondo-recu2.png); background-size: cover; position: relative;background-repeat: no-repeat; background-position: center; height: 100vh;">
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
                    <h1 id="h1clientes">Facturas</h1>
                    <button class="openbtn" onclick="openNav()">
                        <img src="/css/css-acercainfo/imagenes/menu_icon.png" alt="#" /> 
                    </button>
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
                                                        <input type="text" class="form-control" id="inputcliente" required
                                                            placeholder="      Buscar">
                                                        <input autocomplete="off" class="ulpgcds-datepicker ulpgcds-form__item--icon" id="fecha-datepicker-2" name="fecha" type="date" value="" placeholder="dd/mm/aaaa" required/>    
                                                    </div>          
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card tablaDedatos" id="tablaDedatos" style="border: none;">
                                <div class="row">
                                    <div class="col-sm-12 mt-4">
                                        <div class="table-responsive">
                                            <table id="input-datatable" class="table tabla">
                                            <thead>
                                                <tr>
                                                    <th id="EncabezadosTablaFac0" class="text-center" style="width: 1%;"></th>
                                                    <th id="EncabezadosTablaFac0" class="text-center">#Factura</th>
                                                    <th id="EncabezadosTablaFac0" class="text-center">Fecha</th>
                                                    <th id="EncabezadosTablaFac0" class="text-center">Cliente</th>
                                                    <th id="EncabezadosTablaFac0" class="text-center">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="alldata">
                                                @foreach ($facturas as $factura)
                                                <tr>
                                                    <td class="text-center">
                                                        <button type="button" style="background: none;"><a href="/storage/pdf/{{$factura->pdfFactura}}" target="_blank">
                                                            <img style="width: 1.5em; height: 1.5em; margin-top: 15%;" src="../css/fonts/carbon--data-view-alt.png" >
                                                        </button>
                                                        </td>
                                                        <td class="text-center">{{$factura->id}}</td>
                                                        <td class="text-center">{{$factura->fecha->format('d/m/y')}}</td>
                                                        <td class="text-center">{{$factura->cliente->nombre ?? '1212-Indefinido'}}</td>
                                                        <td class="text-center">{{number_format($factura->costoTotal)}}</td>
                                                    </tr>
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
                        <span class="vertical-line"
                            style="width: 4.5px; height: 26px; background-color: #F63A3D; vertical-align: middle; margin-left: 25%; margin-right: 2%;">
                        </span>
                        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle" style="top: 25%;"><b>Registrar cliente</b></h5>
                        <button type="button" id="btncerrar" class="btn-close" style="margin-right: 5%;" data-bs-dismiss="modal"
                            aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3 needs-validation" id="RegistrarCliente" novalidate>
                            <div class="col-12">
                                <label for="cedulas" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Nombre:</label>
                                <input type="text" id="inputnombre" class="form-control2"
                                    style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingrese el nombre del cliente" required>
                            </div>
                            <div class="col-12">
                                <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Identificación:</label>
                                <input type="text" id="inputidentificacion" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa la identificación del cliente" required>
                            </div>
                            <div class="col-12">
                                <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Teléfono:</label>
                                <input type="text" id="inputtelefono" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa el teléfono del cliente" required>
                            </div>
                            <div class="col-12">
                                <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Correo electrónico:</label>
                                <input type="text" id="inputcorreo" class="form-control2"
                                    style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa el correo electrónico del cliente" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer" style="display: flex; align-items: center; justify-content: center;">
                        <button type="button" id="btnguardar" style="width: 85%; left: 0%; margin-bottom: 10%;" class="btn btn-primary">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL DE NUEVO CLIENTE FORM-->
        <!-- MODAL ERROR-->
        <div class="modal fade" id="campoVacioModal" tabindex="-1" aria-labelledby="campoVacioModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="height: 40%;">
                <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover; position: relative; background-repeat: no-repeat; background-position: center; height: 40dvh; border-radius: 20px;left:0%;top: 60%; box-shadow: 0px 0px 20px 0px #F63A3D;">
                    <div class="modal-header" style="height: 30%;">
                        <center><img src="/css/css-facturacion/imagenes/wof.png" style="width: 40%; height: 10%;" /></center>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 5%;"></button>
                    </div>
                    <div class="modal-body">
                        <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">ERROR.</span></center>
                        <center><span id="modaltexto" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%; padding-right: 2%;"> favor, completa todos los campos antes de añadir.</span></center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px;">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!--FINAL MODAL ERROR-->
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #fff; border: 2px solid #F63A3D; color: #F63A3D; border-radius: 10px; width: 20%;" onclick="location.href='index.html'"><b>Si</b></button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px; width: 20%;">No</button>
                    </div>
                </div>
            </div>
        </div>
        <!--FINAL MODAL cerrar sesion-->
        <script>
            document.getElementById("inputcliente").addEventListener("keyup", function () {
                let input = this.value.toLowerCase();
                let table = document.getElementById("input-datatable");
                let rows = table.getElementsByTagName("tr");
                for (let i = 1; i < rows.length; i++) {
                    let name = rows[i].getElementsByTagName("td")[3].innerText.toLowerCase();
                    let numero = rows[i].getElementsByTagName("td")[1].innerText.toLowerCase();
                    if (name.includes(input) || numero.includes(input)) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            });
        </script>
        <script>
            document.getElementById("fecha-datepicker-2").addEventListener("change", function () {
                let inputDate = new Date(this.value);
                let table = document.getElementById("input-datatable");
                let rows = table.getElementsByTagName("tr");
                for (let i = 1; i < rows.length; i++) {
                    let dateCell = new Date(rows[i].getElementsByTagName("td")[2].innerText.replace(/(\d{2})\/(\d{2})\/(\d{4})/, "$3-$2-$1"));
                    if (dateCell.toDateString() === inputDate.toDateString()) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            });
        </script>
        <script>
            const tableBody = document.getElementById('input-datatable');
            function formatDateString(dateString) {
                return moment(dateString, 'YYYY-MM-DD').format('DD/MM/YYYY');
            }
            function addRecord() {
                const newDate = '2024-02-12'; 
                const formattedDate = formatDateString(newDate);
                const newRow = document.createElement('tr');
                const dateCell = document.createElement('td');
                dateCell.textContent = formattedDate;
                newRow.appendChild(dateCell);
                tableBody.appendChild(newRow);
            }
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
            numericFieldide.addEventListener("input", function () {
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
            numericFieldidet.addEventListener("input", function () {
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
            textField.addEventListener("input", function () {
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
                fetchData();
                function fetchData(idFactura = '') {
                    if (idFactura) {
                        $('#alldata').hide();
                        $('#content').show();
                    } else {
                        $('#alldata').show();
                        $('#content').hide();
                    }
                    $.ajax({
                        url: "{{route('factura.buscarFacturasPorId')}}",
                        method: "GET",
                        data: {
                            idFactura: idFactura
                        },
                        dataType: 'json',
                        success: function(data) {
                            $("#content").html(data.table_data);
                        }
                    });
                }
                $(document).on('keyup', '#inputcliente', function() {
                    var idFactura = $(this).val();
                    fetchData(idFactura);
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                fetchData();
                function fetchData(fecha = '') {
                    if (fecha) {
                        $('#alldata').hide();
                        $('#content').show();
                    } else {
                        $('#alldata').show();
                        $('#content').hide();
                    }
                    $.ajax({
                        url: "{{route('factura.buscarFacturasPorFecha')}}",
                        method: "GET",
                        data: {
                            fecha: fecha
                        },
                        dataType: 'json',
                        success: function(data) {
                            var date = document.getElementById('fecha-datepicker-2').value;
                            console.log(date);
                            $("#content").html(data.table_data);
                        }
                    });
                }
                $(document).on('input', '#fecha-datepicker-2', function() {
                    var fecha = $(this).val();
                    fetchData(fecha);
                });
            });
        </script>
    </body>
</html>