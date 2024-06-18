<?php

// Datos de conexión a la base de datos
$host = 'localhost'; // Cambiar si es necesario
$port = '3306'; // Puerto de MySQL (predeterminado: 3306)
$dbname = 'torniAppDb'; // Cambiar al nombre de tu base de datos
$username = 'root'; // Cambiar al nombre de usuario de la base de datos
$password = '1234'; // Cambiar a la contraseña de la base de datos

// Establecer conexión a la base de datos
$conexion = new mysqli($host, $username, $password, $dbname, $port);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Mensaje de éxito si la conexión se establece correctamente
//echo "Conexión exitosa";
use Carbon\Carbon;


$consulta = "select * from citast where estado = 'PENDIENTE'";
$consultaAC = "select * from citast where estado = 'ACEPTADA'";
$consultaRE = "select * from citast where estado = 'RECHAZADA'";

$consultaActualizacion = "update citast set estado ='ACEPTADA'";
$consultaActualizacionR = "update citast set estado = 'RECHAZADA'";

$resultadoConsulta = mysqli_query($conexion, $consulta);
$resultadoConsultaAceptadas = mysqli_query($conexion, $consultaAC);
$resultadoConsultaRechazadas = mysqli_query($conexion, $consultaRE);



?>

<!doctype html>
<html lang="en" data-bs-theme="light" data-bs-theme-color="default" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tornimotos | Citas</title>
    <meta name="description" content="Hope UI Pro is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
    <meta name="keywords" content="premium, admin, dashboard, template, bootstrap 5, clean ui, hope ui, admin dashboard,responsive dashboard, optimized dashboard,">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title" content="Hope UI Pro | Responsive Bootstrap 5 Admin Dashboard Template">

    <!--Daniel codigo-->
    <link rel="stylesheet" href="/css/css-facturacion/menu.css" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/css/css-facturacion/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/css/css-facturacion/style.css">
    <!-- Responsive-->
    <!-- fevicon -->
    <link rel="icon" href="/css/css-index/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css-facturacion/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!--fin Daniel codigo-->
    <!-- Google Font Api KEY-->
    <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
    <!-- Config Options -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="/css/assets/images/tornico.ico"> <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="/css/assets/css/core/libs.min.css">
    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="/css/assets/css/hope-ui.min.css?v=4.0.0">
    <link rel="stylesheet" href="/assets/css/pro.min.css?v=4.0.0">
    <!-- Custom Css -->
    <link rel="stylesheet" href="/css/assets/css/custom.min.css?v=4.0.0">
    <!-- RTL Css -->
    <link rel="stylesheet" href="/css/assets/css/rtl.min.css?v=4.0.0">
    <!-- Customizer Css -->
    <link rel="stylesheet" href="/css/assets/css/customizer.min.css?v=4.0.0">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <style>
        #motivo:-webkit-autofill,
        #motivotext:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 1000px #fff inset;
            /* Establecer un fondo blanco para evitar cambios de color */
            -webkit-text-fill-color: #333;
            /* Color del texto */
        }
    </style>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnGuardar = document.getElementById('btnguardar');
            const modalDiv = document.getElementById('exampleModalCenteredScrollable');

            btnGuardar.addEventListener('click', function() {
                // Captura el pantallazo de la ventana modal
                html2canvas(modalDiv).then(function(canvas) {
                    const imgData = canvas.toDataURL('image/png');

                    // Define el contenido del PDF
                    const docDefinition = {
                        content: [{
                            image: imgData,
                            width: 1000,
                            alignment: 'center',
                        }],
                    };

                    // Genera y abre el PDF
                    pdfMake.createPdf(docDefinition).open();
                    //window.print();
                }).catch(function(error) {
                    console.error('Error al capturar el pantallazo:', error);
                    alert('Error al generar el PDF. Por favor, inténtalo de nuevo.');
                });
            });
        });
    </script>


    <style>
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
            /*background-image: url('data:image/svg+xml;uft8, <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><g fill="none" stroke="rgb(246, 58, 61)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m16.475 5.408l2.117 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621"/><path d="M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3"/></g></svg>');*/
            background-repeat: no-repeat;
            background-size: 100%;
            background-position-x: center;
            background-image: url('data:image/svg+xml;uft8, <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24"><path fill="white" d="M3 21V3h9v2H5v14h7v2zm13-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5z"/></svg>');

        }


        .tlogo {
            float: left;
            margin-right: 210px;
            /*display: inline-block;*/

        }

        .tlogo img {
            padding-top: -40x;
            width: 200px;
            display: inline-block;
            margin-top: -20px;
            height: 120px;
            padding-bottom: 0px;
        }

        /*.topnav a {
	float: right;
	display: block;
	color: #f2f2f2; /*color letra
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	font-size: 17px;
    }*/

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

        /*
        a{
            text-shadow: 0px 4px 4px rgba(255, 0, 0, 0.5);
        }

        .topnav a:hover {
            background-color: #000000/*#ddd;
            color: white;
        }

        .topnav a.active {
            background-color: #3FCBEB;
            color: white;
        }*/

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
            <a href="logOut">Cerrar sesión</a>
        </div>
        <header>
            <nav class="topnav" id="myTopnav">
                <div class="tlogo">
                    <a href="home"><img src="/css/css-acercainfo/imagenes/wof.png" /></a>
                </div>
                <h1>Citas</h1>
                <button class="openbtn" onclick="openNav()"><img src="/css/css-acercainfo/imagenes/menu_icon.png" alt="#" /> </button>
                <button class="openbtnombren" id="openbtn" style="float: right; right: 0;"><span></span></button>
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
                                <?php
                                if ($resultadoConsulta) {
                                    while ($fila = mysqli_fetch_array($resultadoConsulta)) {

                                        //$fecha = Carbon::now();
                                        //$fecha = $fecha->format('d-m-Y');        
                                        $fecha = $fila['fecha'];
                                        $fecha_formateada = date('d/m/Y', strtotime($fecha));
                                        $horaf = date("h:i A", strtotime($fecha));
                                        $servicioRequerido = $fila['servicioRequerido'];
                                        $id = $fila['id'];
                                        $estado = $fila['estado'];
                                        $nombre = $fila['nombre'];
                                        $telefono = $fila['telefono'];
                                        $motivo = $fila['motivo'];

                                        if ($estado  = 'PENDIENTE') {
                                        }
                                        //$consultaActualizacion = "update citas set estado ='ACEPTADA' where id ='$id' ";
                                ?>
                                        <div class="card">
                                            <div class="label-container">
                                                <label for="fecha" style="margin-top: 1em; width: 76.72px; text-align: right;">Fecha:</label>
                                                <label style="margin-top: 1.09em; font-weight: 500; font-size: medium;"><?php echo $fecha_formateada; ?></label>
                                            </div>
                                            <div class="label-container">
                                                <label for="nombre" style="width: 76.72px; text-align: right;">Nombre:</label>
                                                <label style="font-weight: 500; font-size: medium;"><?php echo $nombre; ?></span>
                                            </div>
                                            <div class="label-container">
                                                <label for="telefono" style="width: 76.72px; text-align: right;">Telefono:</label>
                                                <label style="font-weight: 500; font-size: medium;"><?php echo $telefono ?></span>
                                            </div>
                                            <div class="label-container">
                                                <label for="servicio" style="width: 76.72px; text-align: right;">Servicio:</label>
                                                <label style="font-weight: 500; font-size: medium;"><?php echo $servicioRequerido; ?></span>
                                            </div>
                                            <hr style="border-top: 2px solid black;">
                                            <h4 class="card-text titulosPrimerColumna">En caso de aceptar</h4>
                                            <form action="<?php ['PHP_SELF'] ?>" method="POST">
                                                @csrf
                                                <div class="label-container">
                                                    <label for="servicio" style="width: 66px; text-align: right; margin-left: -5%;">Hora:</label>
                                                    <input type="time" name="hora" id="hora" style="width: 70%; right: 0; border-radius: 8px; color:#000; border: 1px solid #000;">
                                                </div>
                                                <!--<div style="display: flex; align-items: center;">
                                                <label for="hora" style="flex-shrink: 0; width: 50px;" class="LabelPrimerColumna">Hora:</label>
                                                <input type="text" name="hora" id="hora" style="flex-grow: 1; width: 50%; margin-right: 10px;">
                                            </div>-->
                                                <hr style="border-top: 2px solid black;">
                                                <h4 class="card-text titulosPrimerColumna">En caso de rechazar</h4>
                                                <div class="label-container">
                                                    <label for="servicio" style="width: 66px; text-align: left; margin-left: -5%;">Motivo:</label>
                                                    <input type="text" name="motivo" id="motivo" style="width: 70%; margin-right: 10px; border-radius: 8px; color:#000; border: 1px solid #000;">
                                                </div>

                                                <!--<form method="POST" action="actualizar.php">-->
                                                <hr style="border-top: 2px solid black;">
                                                <div style="display: flex; justify-content: center; align-items: center;">
                                                    <button name="submit" type="submit" style="margin-right: 10px;" id="BtnAceptar">Aceptar</button>
                                                    <button id="BtnRechazar" name="submit2" class="btn btn-primary ml-2" type="submit" class="btn btn-primary me-2" id="openModalBtn" style="background-color: #F63A3D; padding-left: -20%; border-color: #F63A3D; border-radius: 15px; background: linear-gradient(to bottom, #F63A3D 80%, #000);">Rechazar</button>
                                                </div>
                                            </form>

                                            <?php

                                            // Lógica de validación
                                            $modalMostrada = false;
                                            $hora = isset($_POST['hora']);
                                            $motivo = isset($_POST['motivo']);

                                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {




                                                if (isset($_POST['submit2'])) {
                                                    // Lógica para rechazar la cita
                                                    $motivo = isset($_POST['motivo']) ? $_POST['motivo'] : '';

                                                    if (empty($motivo)) {
                                                        $modalMostrada = true;
                                                    } else {

                                                        $consultaActualizacionRechazadas = "UPDATE citast SET estado = 'RECHAZADA', motivo = '$motivo' WHERE telefono = $telefono";
                                                        $resultadoActualizacionRechazadas = mysqli_query($conexion, $consultaActualizacionRechazadas);

                                                        if ($resultadoActualizacionRechazadas) {
                                                            header("Location: " . $_SERVER['PHP_SELF']);
                                                            exit();
                                                        }
                                                    }
                                                }
                                                if (isset($_POST['submit'])) {
                                                    $hora = isset($_POST['hora']) ? $_POST['hora'] : '';

                                                    if (empty($hora)) {
                                                        $modalMostrada = true;
                                                    } else {
                                                        // Lógica para aceptar la cita si el campo "hora" no está vacío
                                                        $consultaActualizacion = "UPDATE citast SET estado = 'ACEPTADA', hora = '$hora' WHERE telefono = $telefono";
                                                        $resultado = mysqli_query($conexion, $consultaActualizacion);

                                                        if ($resultado) {
                                                            header("Location: " . $_SERVER['PHP_SELF']);
                                                            exit();
                                                        }
                                                    }
                                                }




                                                if ($modalMostrada) {
                                                    echo '<script>
    // Función para mostrar la modal
    function mostrarModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
    }

    // Llamar a la función para mostrar la modal
    mostrarModal();
  </script>

  ';
                                                }
                                            }

                                            ?>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="height: 100%;">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center; font-weight: 800;">Aceptadas</h5>
                                <?php

                                if ($resultadoConsultaAceptadas) {


                                    while ($mifila = mysqli_fetch_array($resultadoConsultaAceptadas)) {

                                        //$fecha = Carbon::now();

                                        //$fecha = $fecha->format('d-m-Y');        
                                        $fechaAC = $mifila['fecha'];
                                        $fecha_formateadaAC = date('d/m/Y', strtotime($fechaAC));
                                        $hora = $mifila['hora'];
                                        $horaf = date('h:i A', strtotime($hora));
                                        $servicioRequeridoAC = $mifila['servicioRequerido'];
                                        $idAC = $mifila['id'];
                                        $estadoAC = $mifila['estado'];
                                        $nombreAC = $mifila['nombre'];
                                        $telefonoAC = $mifila['telefono'];
                                        $motivoAC = $mifila['motivo'];
                                ?>
                                        <div class="card">
                                            <div class="label-container">
                                                <label for="fecha" style="margin-top: 1em; width: 76.72px; text-align: right;">Fecha:</label>
                                                <label style="margin-top: 1.09em; font-weight: 500; font-size: medium;"><?php echo $fecha_formateadaAC; ?></label>
                                            </div>
                                            <div class="label-container">
                                                <label for="nombre" style="width: 76.72px; text-align: right;">Hora:</label>
                                                <label style="font-weight: 500; font-size: medium;"><?php echo $horaf; ?></label>
                                            </div>
                                            <div class="label-container">
                                                <label for="telefono" style="width: 76.72px; text-align: right;">Nombre:</label>
                                                <label style="font-weight: 500; font-size: medium;"><?php echo $nombreAC; ?></label>
                                            </div>
                                            <div class="label-container">
                                                <label for="servicio" style="width: 76.72px; text-align: right;">Motivo:</label>
                                                <form action="<?php ['PHP_SELF'] ?>" method="POST">
                                                    @csrf
                                                    <input type="text" name="motivotext" id="motivotext" style="width: 50%; margin-right: 10px; border-radius: 8px; color:#000; border: 1px solid #000;">
                                                    <!--<label style="font-weight: 500; font-size: medium;">?php echo $motivoAC; ?></span>-->
                                            </div>
                                            <div style="display: flex; justify-content: right; align-items: right;">

                                                <button id="BtnRechazarAC" name="submit3" class="btn btn-primary ml-2" type="submit" class="btn btn-primary me-2" id="openModalBtn" style="background-color: #F63A3D; padding-left: -20%; border-color: #F63A3D; border-radius: 15px; background: linear-gradient(to bottom, #F63A3D 80%, #000);">Rechazar</button>
                                                </form>
                                                <!--<button id="BtnRechazar" class="btn btn-primary ml-2" type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable" id="openModalBtn" onclick="playPopupSound()" style="background-color: #F63A3D; padding-left: -20%; border-color: #F63A3D; right: 0; margin-top: 2%; border-radius: 15px; background: linear-gradient(to bottom, #F63A3D 80%, #000);">Rechazar</button>-->

                                            </div>
                                        </div>
                                <?php

                                        $motivoAC = isset($_POST['motivotext']);
                                        $modalMostradaREAC = false;

                                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


                                            if (isset($_POST['submit3'])) {
                                                $motivoAC = isset($_POST['motivotext']) ? $_POST['motivotext'] : '';
                                                if (empty($motivoAC)) {
                                                    $modalMostradaREAC = true;
                                                } else {
                                                    $consultaRechaAcep = "UPDATE citast SET estado = 'RECHAZADA', motivo = '$motivoAC' WHERE nombre = '$nombreAC'";
                                                    $resultadoRechaAcep = mysqli_query($conexion, $consultaRechaAcep);
                                                    if ($resultadoRechaAcep) {
                                                        header("Location: " . $_SERVER['PHP_SELF']);
                                                        exit();
                                                    } else {

                                                        echo "Error al rechazar la cita: " . mysqli_error($conexion);
                                                    }
                                                }
                                            }
                                        }

                                        if ($modalMostradaREAC) {
                                            echo '<script>
    // Función para mostrar la modal
    function mostrarModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
    }

    // Llamar a la función para mostrar la modal
    mostrarModal();
  </script>

  ';
                                        }
                                    }
                                }
                                ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="height: 100%;">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center; font-weight: 800;">Rechazadas</h5>
                                <?php
                                if ($resultadoConsultaRechazadas) {

                                    while ($filar = mysqli_fetch_array($resultadoConsultaRechazadas)) {
                                        //$fecha = Carbon::now();
                                        //$fecha = $fecha->format('d-m-Y');        
                                        $fechar = $filar['fecha'];
                                        $fecha_formateadar = date('d/m/Y', strtotime($fechar));
                                        $servicioRequeridor = $filar['servicioRequerido'];
                                        $idr = $filar['id'];
                                        $estador = $filar['estado'];
                                        $nombrer = $filar['nombre'];
                                        $telefonor = $filar['telefono'];
                                        $motivor = $filar['motivo'];
                                        //$consultaActualizacion = "update citas set estado ='ACEPTADA' where id ='$id' ";
                                ?>
                                        <div class="card">
                                            <div class="label-container">
                                                <label for="fecha" style="margin-top: 1em; width: 76.72px; text-align: right;">Fecha:</label>
                                                <label style="margin-top: 1.09em; font-weight: 500; font-size: medium;"><?php echo $fecha_formateadar; ?></label>
                                            </div>
                                            <div class="label-container">
                                                <label for="nombre" style=" width: 76.72px; text-align: right;">Nombre:</label>
                                                <label style="font-weight: 500; font-size: medium;"><?php echo $nombrer; ?></label>
                                            </div>
                                            <div class="label-container">
                                                <label for="telefono" style=" width: 76.72px; text-align: right;">Servicio:</label>
                                                <label style="font-weight: 500; font-size: medium;"><?php echo $servicioRequeridor; ?></label>
                                            </div>
                                            <div class="label-container">
                                                <label for="servicio" style=" width: 76.72px; text-align: right;">Motivo:</label>
                                                <label style="font-weight: 500; font-size: medium;"><?php echo $motivor; ?> </label>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
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
                    <h5 class="modal-title" id="exampleModalCenteredScrollableTitle" style="top: 25%; left: 50%;"><b>Rechazar Cita</b></h5>
                    <button type="button" class="btn-close" id="btncerrar" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation" id="RegistrarCliente" novalidate>
                        <div class="col-12">
                            <label for="cedulas" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Motivo:</label>

                            <textarea class="form-control2" name="motivotext" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingrese motivo" required></textarea>

                            <!--   <input type="text" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="ingrese motivo" required>-->
                        </div>

                </div>
                <div class="modal-footer" style="    display: flex;
                        align-items: center;
                        justify-content: center;">

                    <button type="submit" id="btnguardar" name="" style="width: 85%; left: 0%;" class="btn btn-primary">Rechazar</button>

                </div>
            </div>
        </div>
    </div>



    <div class="modal" id="myModal" tabindex="-1" aria-labelledby="campoVacioModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="height: 40%;">
            <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png);
background-size: cover;
position: relative;
background-repeat: no-repeat;
background-position: center;
height: 40dvh;
border-radius: 20px;
left:0%;
top: 60%;
box-shadow: 0px 0px 20px 0px #F63A3D;">
                <div class="modal-header" style="height: 30%;">
                    <img src="/css/css-facturacion/imagenes/wof.png" style="width: 40%; height: 220%; top: 0; margin-top: 4%; margin-left: 30%;" />
                    <!--<h5 class="modal-title" id="campoVacioModalLabel">Error al añadir</h5>-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 5%;"></button>
                </div>
                <div class="modal-body">
                    <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">ERROR.</span></center>

                    <center><span id="modaltexto" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%;
                padding-right: 2%;"> DATOS VACIOS.</span></center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #fff; border: 2px solid #F63A3D; color: #F63A3D; border-radius: 10px; width: 20%;" onclick=location.href="logOut"><b>Si</b></button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px; width: 20%;">No</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL DE NUEVO CLIENTE FORM-->

    <!-- MODAL cerrar sesion-->
    <!-- Modal -->
    <div class="modal fade" id="campoVacioModalcs" tabindex="-1" aria-labelledby="campoVacioModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="height: 40%;">
            <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png);
        background-size: cover;
        position: relative;
        background-repeat: no-repeat;
        background-position: center;
        height: 40dvh;
        border-radius: 20px;
        left:0%;
        top: 60%;
        box-shadow: 0px 0px 20px 0px #F63A3D;">
                <div class="modal-header" style="height: 30%;">
                    <img src="/css/css-facturacion/imagenes/wof.png" style="width: 40%; height: 220%; top: 0; margin-top: 4%; margin-left: 30%;" />
                    <!--<h5 class="modal-title" id="campoVacioModalLabel">Error al añadir</h5>-->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 5%;"></button>
                </div>
                <div class="modal-body">
                    <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">Atención.</span></center>

                    <center><span id="modaltexto" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%;
                        padding-right: 2%;"> ¿Estas seguro que quieres cerrar sesión?.</span></center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #fff; border: 2px solid #F63A3D; color: #F63A3D; border-radius: 10px; width: 20%;" onclick=location.href="logOut"><b>Si</b></button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px; width: 20%;">No</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <!--FINAL MODAL cerrar sesion-->




    <!-- Modal -->


    <!-- Library Bundle Script -->
    <script src="/css/assets/js/core/libs.min.js"></script>
    <!-- Plugin Scripts -->

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
                    // Mostrar la modal si el campo "hora" está vacío
                    mostrarModal();
                }
            });

            btnRechazarAC.addEventListener('click', function() {
                if (inputMotivotext.value === '') {
                    // Mostrar la modal si el campo "hora" está vacío
                    mostrarModal();
                }
            });


            btnRechazar.addEventListener('click', function() {
                    if (inputMotivo.value === '') {
                        // Mostrar la modal si el campo "hora" está vacío
                        mostrarModal();
                    }
                }

            );

            // Función para mostrar la modal
            function mostrarModal() {
                var modal = document.getElementById('myModal');
                modal.style.display = 'block';
            }
        });
    </script>




    <!-- Slider-tab Script -->
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
    </script>




    <!-- Lodash Utility -->
    <script src="/css/assets/vendor/lodash/lodash.min.js"></script>
    <!-- Utilities Functions -->
    <script src="/css/assets/js/iqonic-script/utility.min.js"></script>
    <!-- Settings Script -->
    <script src="/css/assets/js/iqonic-script/setting.min.js"></script>
    <!-- Settings Init Script -->
    <script src="/css/assets/js/setting-init.js"></script>
    <!-- External Library Bundle Script -->
    <script src="/css/assets/js/core/external.min.js"></script>
    <!-- Widgetchart Script -->
    <script src="/css/assets/js/charts/widgetcharts.js?v=4.0.0" defer></script>
    <!-- Dashboard Script -->
    <script src="/css/assets/js/charts/dashboard.js?v=4.0.0" defer></script>
    <script src="/css/assets/js/charts/alternate-dashboard.js?v=4.0.0" defer></script>
    <!-- Hopeui Script -->
    <script src="/css/assets/js/hope-ui.js?v=4.0.0" defer></script>
    <script src="/css/assets/js/hope-uipro.js?v=4.0.0" defer></script>
    <script src="/css/assets/js/sidebar.js?v=4.0.0" defer></script>
</body>

</html>