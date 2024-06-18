<!doctype html>
<html>
    <head>
        @notifyCss
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/css-usuarios/style.css">
        <title>Tornimotos | Usuarios</title>
        <link rel="stylesheet" href="/css/css-facturacion/menu.css" />
        <link rel="stylesheet" href="/css/css-facturacion/bootstrap.min.css">
        <link rel="stylesheet" href="/css/css-facturacion/style.css">
        <link rel="icon" href="/css/css-index/images/fevicon.png" type="image/gif" />
        <link rel="stylesheet" href="/css/css-facturacion/jquery.mCustomScrollbar.min.css">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">        
        <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">-->
        <link rel="shortcut icon" href="/css/assets/images/tornico.ico">
        <link rel="stylesheet" href="/css/assets/css/core/libs.min.css">
        <link rel="stylesheet" href="/css/assets/css/hope-ui.min.css?v=4.0.0">
        <link rel="stylesheet" href="/css/fonts/fuentes.css"><!--esta es la de la fuente-->
        <link rel="stylesheet" href="/css/boostrap/bootstrap-4.5.3-dist/css/bootstrap.min.css"><!--esta es el estilo de los input-->
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

            #nombreUsuario:-webkit-autofill {
                -webkit-box-shadow: 0 0 0 1000px #fff inset;
                /* Establecer un fondo blanco para evitar cambios de color */
                -webkit-text-fill-color: #333;
                /* Color del texto */
            }

            input[type=number]::-webkit-inner-spin-button, 
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            body {
                zoom: 110%;
                font-family: 'Inter', sans-serif;
            }

            .form-control:focus {
                box-shadow: none;
            }

            .form-select {
                background-color: #E7E0DF;
                border-width: 0.1em;
                border-color: #E7E0DF;
                color: black;
                width: 60.4%;
                margin-top: 0.3em;
            }

            .table tbody tr td {
                vertical-align: middle;
                padding: 1px;
            }

            #btnregistrar{
                border: none;
                outline: none;
            }

            #btnregistrar:focus{
                border: none;
                outline: none;
                box-shadow: none;
            }

            #btnregistrar:active{
                border: none;
                outline: none;
                box-shadow: none;
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
            
            .capitalize-n::first-letter {
                text-transform: uppercase;
            }

            .lowercase {
                text-transform: lowercase;
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

            .password-container .addon {
                position: absolute;
                top: 70%;
                right: 15px;
                transform: translateY(-50%);
                font-size: 16px;
                cursor: pointer;
                color: white;
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
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const passwordInput = document.getElementById("password");
                const showHideButton = document.querySelector(".addon.fa");

                passwordInput.type = "password";

                showHideButton.addEventListener("click", () => {
                    if (passwordInput.type === "password") {
                        passwordInput.type = "text";
                        showHideButton.classList.remove("fa-eye");
                        showHideButton.classList.add("fa-eye-slash");
                    } else {
                        passwordInput.type = "password";
                        showHideButton.classList.remove("fa-eye-slash");
                        showHideButton.classList.add("fa-eye");
                    }
                });
            });
        </script>
    </head>

    <body class="  " style="background-image: url(/css/css-facturacion/imagenes/fondo-recu2.png); background-size: cover; position: relative;background-repeat: no-repeat; background-position: center; height: 100vh;">
        <div class="position-relative  iq-banner ">
            <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="f{{route('facturacion')}}">Facturación</a>
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
                    <h1 id="h1clientes">Usuarios</h1>
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
                                            <form class="row g-3 needs-validation">
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <input type="text" class="form-control" id="inputcliente" required placeholder="      Buscar">
                                                        <button class="btn btn-primary ml-2" type="button" class="btn btn-primary me-2" id="btnregistrar" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable" style="background-color: #F63A3D; padding-left: -20%; border-color: #F63A3D; border-radius: 10px; background: linear-gradient(to bottom, #F63A3D 80%, #000);">
                                                            <span style="margin-left: -10%;">Registrar</span>
                                                            <img style="width: 1.3em;" src="../css/fonts/usuarios.png" >
                                                            <!--<span class="iconify" data-icon="solar:user-plus-broken" id="sell-card"></span>-->
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
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac3">Identificación</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac1">Nombre</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac4">Teléfono</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac4">Correo</th>
                                                        <th class="text-center" scope="col" id="EncabezadosTablaFac4">Rol</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="alldata">
                                                    @foreach ($usuarios as $usuario)
                                                    <tr>
                                                        <td class="text-center">
                                                            <button type="button" data-toggle="modal" data-target="#modalmodificar{{$usuario->id}}">                                                            
                                                                <img style="width: 1.2em; height: 1.2em; margin-bottom: -15%;" src="../css/fonts/akar-icons--edit.png" >
                                                            </button>
                                                        </td>
                                                        <td class="text-center">{{$usuario->cedula}}</td>
                                                        <td class="text-center">{{$usuario->nombre}}</td>
                                                        <td class="text-center">{{$usuario->telefono}}</td>
                                                        <td class="text-center">{{$usuario->correo}}</td>
                                                        <td class="text-center">{{$usuario->rol}}</td>
                                                    </tr>
                                                    @include ('modales.editarUsuario')
                                                    @endforeach
                                                </tbody>
                                                <tbody id="content">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
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
        <!-- MODAL DE NUEVO CLIENTE FORM-->
        <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content" style="border-radius: 15px;">
                    <div class="modal-header" style="display: flex; align-items: center;">
                        <span class="vertical-line" style="width: 4.5px; height: 26px; background-color: #F63A3D; vertical-align: middle; margin-left: 25%; margin-right: 2%;"></span>
                        <h5 class="modal-title" id="exampleModalCenteredScrollableTitle" style="top: 25%;"><b>Registrar usuarios</b></h5>
                        <button type="button" id="btncerrar" class="btn-close" style="margin-right: 5%;" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('usuario.store')}}" class="row g-3" id="RegistrarUsuario">
                            @csrf
                            <div class="col-12">
                                <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Identificación:</label>
                                <input type="number" min="1" name="cedula" id="inputidentificacion" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa el número de identificación" required>
                            </div>
                            <div class="col-12">
                                <label for="cedulas" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Nombre:</label>
                                <input name="nombre" type="text" id="inputnombre" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingrese el nombre completo" required>
                            </div>
                            <div class="col-12">
                                <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Teléfono:</label>
                                <input name="telefono" type="number" min="1" id="inputtelefono" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa el número de teléfono" required>
                            </div>
                            <div class="col-12">
                                <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Correo electrónico:</label>
                                <input name="correo" type="email" id="inputcorreo" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa el correo electrónico" required>
                            </div>
                            <div class="col-12">
                                <label for="nombres" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Rol:</label>
                                <select name="rol" class="form-select" id="comboboxrol" style="width: 100%; background-color: #fff; border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; border: 2px solid #e5e5e5; margin-bottom: 8px;" required>
                                    <option value="">Selecciona un rol de usuario</option>
                                    <option value="GERENTE">GERENTE</option>
                                    <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                    <option value="TECNICO">TECNICO</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="cedulas" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Nombre de usuario:</label>
                                <input name="nombreUsuario" type="text" id="nombreUsuario" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingrese el nombre de usuario" required>
                            </div>
                            <div class="col-12">
                                <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Contraseña:</label>
                                <div class="password-container">
                                    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                                    <span class="addon fa fa-eye" style="color: #F63A3D;"></span>
                                </div>
                            </div>
                            <div class="modal-footer" style="display: flex; align-items: center; justify-content: center;">
                                <button type="submit" id="btnguardar" style="width: 85%; left: 0%; margin-bottom: 10%;" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL ERROR-->
        <!-- Modal -->
        <div class="modal fade" id="campoVacioModal" tabindex="-1" aria-labelledby="campoVacioModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="height: 40%;">
                <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover;position: relative; background-repeat: no-repeat; background-position: center; height: 40dvh;border-radius: 20px;left:0%;top: 60%;box-shadow: 0px 0px 20px 0px #F63A3D;">
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #fff; border: 2px solid #F63A3D; color: #F63A3D; border-radius: 10px; width: 20%;" onclick=location.href="{{route('logOut')}}"><b>Si</b></button>
                        <button type="button" class="btn btn-secondary" onclick="closemodal()"  style="background-color: #F63A3D; border: none; border-radius: 10px; width: 20%;">No</button>
                    </div>
                </div>
            </div>
        </div>
        <!--FINAL MODAL cerrar sesion-->
        <!--
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Selecciona el botón "Añadir" por su ID
                const btnguardar = document.getElementById('btnguardar');


                // Agrega un evento de click al botón
                btnguardar.addEventListener('click', function() {
                    // Obtén los valores de los inputs del formulario
                    const nombre = document.getElementById('inputnombre').value;
                    const identificacion = document.getElementById('inputidentificacion').value;
                    const telefono = parseInt(document.getElementById('inputtelefono').value, 10); // Convertir a número
                    const correo = document.getElementById('inputcorreo').value;
                    const rol = document.getElementById("comboboxrol").value;
                    const password = document.getElementById("password").value;

                    if (password.length < 8) {
                        document.getElementById('modaltitulo').innerText = "Error.";
                        document.getElementById('modaltexto').innerText = "La contraseña debe tener minimo 8 caracteres.";
                        const campoVacioModal = new bootstrap.Modal(document.getElementById('campoVacioModal'));
                        campoVacioModal.show();
                        return false;
                        btnguardar.click(false);
                    }

                    // Selecciona la tabla por su ID
                    const tabla = document.getElementById('tablaDedatos').getElementsByTagName('tbody')[0];

                    // Crea una nueva fila de tabla
                    const fila = document.createElement('tr');

                    // Agrega las celdas a la fila con los valores del formulario
                    const celdaBotoneliminar = document.createElement('button');
                    celdaBotoneliminar.classList.add('btneliminar');
                    //celdaBotoneliminar.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="red" d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zm2-4h2V8H9zm4 0h2V8h-2z"/></svg>';
                    celdaBotoneliminar.addEventListener('click', () => eliminarRegistro(fila));
                    //celdaBotoneliminar.innerHTML = '<button onclick="eliminarRegistro(this)">Eliminar</button>';
                    fila.appendChild(celdaBotoneliminar);

                    const celdaNombre = document.createElement('td');
                    celdaNombre.innerHTML = nombre;
                    fila.appendChild(celdaNombre);

                    const celdaIdentificacion = document.createElement('td');
                    celdaIdentificacion.innerHTML = identificacion;
                    fila.appendChild(celdaIdentificacion);

                    const celdaTelefono = document.createElement('td');

                    celdaTelefono.innerHTML = telefono;
                    fila.appendChild(celdaTelefono);


                    if (document.getElementById('inputnombre').value == "" ||
                        document.getElementById('inputidentificacion').value == "" ||
                        document.getElementById('inputtelefono').value == "" ||
                        document.getElementById('inputcorreo').value == "" ||
                        rol.trim() == "" ||
                        document.getElementById('password').value == "") {
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

                        return false;
                    }

                    const celdaCorreo = document.createElement('td');
                    celdaCorreo.innerHTML = correo;
                    fila.appendChild(celdaCorreo);


                    const celdarol = document.createElement('td');
                    celdarol.innerHTML = rol;
                    fila.appendChild(celdarol);

                    // Agrega la fila a la tabla
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
                    //document.getElementById("inputcliente").value = "";
                    document.getElementById("inputnombre").value = "";
                    document.getElementById("inputidentificacion").value = "";
                    document.getElementById("inputtelefono").value = "";
                    document.getElementById("inputcorreo").value = "";
                    document.getElementById("password").value = "";
                    var select = document.getElementById("comboboxrol");
                    select.selectedIndex = 0;
                });

                function eliminarRegistro(fila) {
                    fila.remove();
                }

                function modalmodificar() {
                    const modalmodificar = new bootstrap.Modal(document.getElementById('modalmodificar'));
                    modalmodificar.show();
                }
                //function eliminarRegistro(boton) {
                //const fila = boton.parentNode.parentNode;
                //fila.remove();
                //}
            });
        </script>

        Library Bundle Script -->
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
        <!--
        <script>
            const numericFieldide = document.getElementById("inputidentificacion");
            numericFieldide.addEventListener("input", function() {
                if (isNaN(numericFieldide.value)) {
                    document.getElementById('modaltitulo').innerText = "Error.";
                    document.getElementById('modaltexto').innerText = "Por favor, ingresa un numero de identificación valido.";
                    numericFieldide.value = "";
                    const campoVacioModal = new bootstrap.Modal(document.getElementById('campoVacioModal'));
                    campoVacioModal.show();


                }
                return;
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

                }
                return;
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

        <script>
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
            document.getElementById("inputcliente").addEventListener("keyup", function() {
                let input = this.value.toLowerCase();
                let table = document.getElementById("input-datatable");
                let rows = table.getElementsByTagName("tr");

                for (let i = 1; i < rows.length; i++) {
                    let name = rows[i].getElementsByTagName("td")[2].innerText.toLowerCase();
                    let numero = rows[i].getElementsByTagName("td")[1].innerText.toLowerCase();

                    if (name.includes(input) || numero.includes(input)) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            });
        </script>

        <!--<script>
            const encabezadoUsuario = document.getElementById("EncabezadosTablaFac1");
            const texto = encabezadoUsuario.textContent;
            const nuevoTexto = texto.replace("nombre", "n<span style='text-transform: uppercase;'></span><span style='text-transform: lowercase'>ombre ");
            encabezadoUsuario.innerHTML = nuevoTexto;
        </script>-->
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
                function fetchData(query = '') {
                    if (query) {
                        $('#alldata').hide();
                        $('#content').show();
                    } else {
                        $('#alldata').show();
                        $('#content').hide();
                    }
                    $.ajax({
                        url: "{{route('usuario.buscarUsuario')}}",
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
        @if (session('error'))
        <script script>
            $(document).ready(function() {
                $('#myModal').modal('show'); // Muestra el modal
            });
        </script>
        <!-- MODAL ERROR-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document" style="height: 40%;">
                <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover;position: relative; background-repeat: no-repeat; background-position: center; height: 40dvh; border-radius: 20px;left:0%;top: 60%; box-shadow: 0px 0px 20px 0px #F63A3D;">
                    <div class="modal-header" style="height: 30%;">
                        <img src="/css/css-facturacion/imagenes/wof.png" style="width: 50%; height: 180%; top: 0; margin-top: -2%; margin-left: 25%;" />
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
        <!-- MODAL ERROR-->
        <div class="modal fade" id="myModalexito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document" style="height: 40%;">
                <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png);background-size: cover;position: relative;background-repeat: no-repeat;background-position: center;height: 40dvh;border-radius: 20px;left:0%;top: 60%;box-shadow: 0px 0px 20px 0px #F63A3D;">
                    <div class="modal-header" style="height: 30%;">
                        <img src="/css/css-facturacion/imagenes/wof.png" style="width: 50%; height: 180%; top: 0; margin-top: -2%; margin-left: 25%;" />
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 0%; border: none; background: none;"></button>
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
        @include('sweetalert::alert');
        @include('notify::components.notify')
        @notifyJs
        @include ('modales.modalExito')
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
        <script>
        /*function closemodal(){
                
            const modal = document.getElementById('campoVacioModalcs');
            modal.style.display = "none";
        //document.body.style.overflow = "none"; // Restaurar el scroll del body
        const modalBackdrop = document.getElementsByClassName('modal-backdrop')[0];
        modalBackdrop.parentNode.removeChild(modalBackdrop);
            
            //modal.classList.add('hidden');
            //modal.parentNode.removeChild(modal);
            //modal.style.display = "none";

            }*/
            function closemodal() {
            const modal = document.getElementById('campoVacioModalcs');
            modal.classList.remove('show'); // Remover la clase 'show' para ocultar el modal
            //document.body.classList.remove('modal-open');
            const modalBackdrop = document.querySelector('.modal-backdrop');
            if (modalBackdrop) {
                modalBackdrop.parentNode.removeChild(modalBackdrop); // Eliminar el fondo oscuro del modal si existe
            }
            document.body.style.overflowX.remove('modal-open'); // Restaurar el scroll del 
        }
        </script>

    </body>

</html>