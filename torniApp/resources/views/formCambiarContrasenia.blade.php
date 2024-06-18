<!DOCTYPE html>
<html lang="en">
   <head>
      @notifyCss
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Tornimotos | Recuperación</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="/css/css-recuperacion/menu.css" />
      <link rel="stylesheet" href="/css/css-recuperacion/bootstrap.min.css">
      <link rel="stylesheet" href="/css/css-recuperacion/style.css">
      <link rel="icon" href="/css/css-index/images/fevicon.png" type="image/gif" />
      <link rel="shortcut icon" href="/css/assets/images/tornico.ico">
      <link rel="stylesheet" href="/css/css-recuperacion/jquery.mCustomScrollbar.min.css">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>-->
      <link rel="stylesheet" href="/css/fonts/fuentes.css"><!--esta es la de la fuente-->
        <link rel="stylesheet" href="/css/boostrap/bootstrap-4.5.3-dist/css/bootstrap.min.css"><!--esta es el estilo de input-->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!--<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>-->

      <style>
         #nombreu:-webkit-autofill,
         #password:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 1000px #fff inset;
            -webkit-text-fill-color: #333;
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
               <h1 class="text-center">Asignar nueva contraseña</h1>
            </center>
            <center>
               <p>Para restablecer su contraseña, por favor ingresa tu nombre de usuario y la nueva contraseña</p>
            </center>
            <div class="container-fluid centrado">
               <form action="{{route('usuario.actualizarPassword')}}" method="post">
                  @csrf
                  @method('PATCH')
                  <div class="container">
                     <input type="text" id="nombreu" placeholder="Ingresa tu nombre de usuario" name="nombreUsuario" value="{{old('nombreUsuario')}}" maxlength="16" required>
                     <input type="password" id="password" placeholder="Ingresa la nueva contraseña" name="password" value="{{old('password')}}" maxlength="16" required >
                     <div>
                        <button class="boton-recuperar" type="submit">Asignar</button>
                     </div>
                  </div>
               </form>
               <div class="logo-dentro-centrado">
                  <img class="img-dentro" src="/css/css-recuperacion/imagenes/wof.png" />
               </div>
            </div>
         </div>
      </div>
      @if (session('mensajeError'))
      <script script>
         $(document).ready(function() {
            $('#myModal').modal('show'); // Muestra el modal
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
                  <center><span id="modalErrorMessage" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%;padding-right: 2%;">{{session('mensajeError')}}</span></center>
               </div>
               <div class="modal-footer">
                  <button type="button" id="btncerrar" aria-label="close" class="btn btn-secondary" data-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px; width: 25%;">Cerrar</button>
               </div>
            </div>
         </div>
      </div>
      <!--FINAL MODAL ERROR-->
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
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>-->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      @include('sweetalert::alert');
      @include('notify::components.notify')
      @notifyJs
   </body>
</html>