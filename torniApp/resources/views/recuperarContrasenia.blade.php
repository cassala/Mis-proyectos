<!DOCTYPE html>
<html>
   <head>
      @notifyCss
      <meta charset="utf-8">
      <title>Tornimotos | Recuperación</title>
      <link rel="stylesheet" href="/css/css-recuperacion/menu.css" />
      <link rel="stylesheet" href="/css/css-recuperacion/bootstrap.min.css">
      <link rel="stylesheet" href="/css/css-recuperacion/style.css">   
      <link rel="icon" href="/css/css-index/images/fevicon.png" type="image/gif" />
      <link rel="shortcut icon" href="/css/assets/images/tornico.ico">
      <link rel="stylesheet" href="/css/css-recuperacion/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="/css/boostrap/bootstrap-4.5.3-dist/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><!--esta es la modal-->

      <style>
         #nombreU:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 1000px #fff inset;
            -webkit-text-fill-color: #333;
            -webkit-background-clip: text;
         }
      </style>
   </head>
   <body class="main-layout">
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="{{route('acercainfo')}}">Acerca de tornimotos </a>
         <a href="{{route('agendamiento')}}">Agendamiento de citas</a>
         <a href="{{route('interfaz.login')}}">Acceder </a>
      </div>
      <header>
         <nav class="topnav" id="myTopnav">
            <div class="tlogo">
               <a href="/"><img src="/css/css-recuperacion/imagenes/wof.png" /></a>
            </div>
            <h1>Recuperación</h1>
            <button class="openbtn" onclick="openNav()"><img src="/css/css-recuperacion/imagenes/menu_icon.png" alt="#" /> </button>
         </nav>
      </header>
      <div class="container-fluid bg-image">
         <div class="container-fluid recuperar">
            <center>
               <h1 class="text-center">Recuperar contraseña</h1>
            </center>
            <center>
               <p>Para restablecer tu contraseña, por favor, ingresa tu nombre de usuario.</p>
            </center>
            <div class="container-fluid centrado">
               <form id="loginForm" action="{{route('recuperarContraseña.enviarCorreo')}}" method="post">
                  @csrf
                  <div class="container">
                     <input type="text" id="nombreU" placeholder="Ingresa tu nombre de usuario"  maxlength="15" name="nombreUsuario" required>
                     <button class="boton-recuperar" type="submit">Restablecer</button>
                  </div>
               </form>
               <div class="logo-dentro-centrado">
                  <img class="img-dentro" src="/css/css-recuperacion/imagenes/wof.png" />
               </div>
            </div>
         </div>
      </div>
      @if (session('error'))
      <script script>
         $(document).ready(function() {
            $('#myModal').modal('show'); 
         });
      </script>
      <!-- MODAL ERROR-->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
         <div class="modal-dialog" role="document" style="height: 40%;">
            <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png);background-size: cover;position: relative;background-repeat: no-repeat;background-position: center;height: 40dvh;border-radius: 20px;left:0%;top: 60%;box-shadow: 0px 0px 20px 0px #F63A3D;">
               <div class="modal-header" style="height: 30%;">
                  <img src="/css/css-facturacion/imagenes/wof.png" style="width: 50%; height: 250%; top: 0; margin-top: -5%; margin-left: 25%;" />
                  <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style="margin-right: 0%;border: none; background: none;"></button>
               </div>
               <div class="modal-body">
                  <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">ERROR.</span></center>
                  <center><span id="modalErrorMessage" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%;padding-right: 2%;">{{session('error')}}</span></center>
               </div>
               <div class="modal-footer">
                  <button type="button" id="btncerrar" aria-label="close" class="btn btn-secondary" data-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px; width: 25%;">Cerrar</button>
               </div>
            </div>
         </div>
      </div>
      <!--FINAL MODAL ERROR-->
      @endif
      @if (session('mensaje'))
      <script script>
         $(document).ready(function() {
            $('#myModal').modal('show'); // Muestra el modal
         });
      </script>
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
         <div class="modal-dialog" role="document" style="height: 40%;">
            <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png);background-size: cover;position: relative;background-repeat: no-repeat;background-position: center;height: 40dvh;border-radius: 20px;left:0%;top: 60%;box-shadow: 0px 0px 20px 0px #F63A3D;">
               <div class="modal-header" style="height: 30%;">
                  <img src="/css/css-facturacion/imagenes/wof.png" style="width: 50%; height: 250%; top: 0; margin-top: -5%; margin-left: 25%;" />
                  <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style="margin-right: 0%;border: none; background: none;"></button>
               </div>
               <div class="modal-body">
                  <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">EXITO.</span></center>
                  <center><span id="modalErrorMessage" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%;padding-right: 2%;">{{session('mensaje')}}</span></center>
               </div>
               <div class="modal-footer">
                  <button type="button" id="btncerrar" aria-label="close" class="btn btn-secondary" data-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px; width: 25%;">Cerrar</button>
               </div>
            </div>
         </div>
      </div>
      <!--FINAL MODAL-->
      @endif
      <script src="/js/jquery.min.js"></script>
      <script src="/js/popper.min.js"></script>
      <script src="/js/bootstrap.bundle.min.js"></script>
      <script src="/js/jquery-3.0.0.min.js"></script>
      <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="/js/custom.js"></script>
      <script>
         function openNav() {
            document.getElementById("mySidepanel").style.width = "250px";
         }

         function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
         }
      </script>
      <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
      @include('sweetalert::alert');
      @include('notify::components.notify')
      @notifyJs
   </body>
</html>