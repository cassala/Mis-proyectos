<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Home</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="/css/css-home/style.css">
      <link rel="shortcut icon" href="/css/assets/images/tornico.ico">
      <link rel="stylesheet" href="/css/css-agendamiento/responsive-form.css" />
      <link rel="stylesheet" href="/css/css-agendamiento/menu.css" />
      <link rel="stylesheet" href="/css/css-home/bootstrap.min.css">
      <link rel="icon" href="/css/css-index/images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="/css/css-agendamiento/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>-->
      
      <style> 
         .hidden {
         display: none;
         }
      </style>
   </head>
   <body class="main-layout">
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="acercainfo.html" class="slidemenutorni">Acerca de tornimotos </a>
         <a href="agendamiento.html" class="slidemenutorni">Agendamiento de citas</a>
         <a href="login.html">Acceder </a>
      </div>
      <div class="container-fluid bg-image">
      <div class="right_bottun">
         <button class="openbtn" id="openbtn">
         <img style="width: 2.5em; margin-bottom: -18%;" src="../css/fonts/material-symbols--logout-sharp.png" >
            <!--<span class="iconify" data-icon="material-symbols:logout-sharp" style="font-size: 2.5em; color: #F63A3D; padding-top: 5%; margin-bottom: -18%;"></span>--></button>
      </div>
         <div class="semiovalo">
            <div class="logo-dentro-ovalo">
               <img class="odentro" src="/css/css-agendamiento/imagenes/wof.png" />
            </div>
         </div>
         <div class="container-botonera">
            <div class="row">
               <div class="col-2">
                  <a class="btn-boton1" href="{{route('facturacion')}}">
                  <img style="width: 4em; margin-bottom: -18%;" src="../css/fonts/GameIconsSellCard.png" >
                     <!--<span class="iconify" data-icon="game-icons:sell-card" id="sell-card"></span>--><br>
                     <span class="text-icon">Facturación</span>
                  </a>
               </div>
               <div class="col-2">
                  <a type="button" class="btn-boton2" href="{{ route('compras') }}">
                  <img style="width: 4em; margin-bottom: -18%;" src="../css/fonts/material-symbols--shopping-cart-outline.png" >
                     <!--<span class="iconify" data-icon="material-symbols:shopping-cart-outline" id="sell-card"></span>--><br>
                     <span class="text-icon">Compras</span>
                  </a>
               </div>
               <div class="col-2">
                  <a type="button" class="btn-boton3" href="{{route('clientes')}}">
                  <img style="width: 4em; margin-bottom: -18%;" src="../css/fonts/carbon--customer.png" >
                     <!--<span class="iconify" data-icon="carbon:customer" id="sell-card"></span>--><br>
                     <span class="text-icon">Clientes</span>
                  </a>
               </div>
               <div class="col-2">
                  <a type="button" class="btn-boton4" href="{{route('citas')}}">
                  <img style="width: 4em; margin-bottom: -18%;" src="../css/fonts/fluent-mdl2--calendar-agenda.png" >
                     <!--<span class="iconify" data-icon="fluent-mdl2:calendar-agenda" id="sell-card"></span>--><br>
                     <span class="text-icon">Citas</span>
                  </a>
               </div>
               <div class="col-2">
                  <a type="button" class="btn-boton5" href="{{route('inventario')}}">
                  <img style="width: 4em; margin-bottom: -18%;" src="../css/fonts/mingcute--inventory-line.png" >
                     <!--<span class="iconify" data-icon="mingcute:inventory-line" id="sell-card"></span>--><br>
                     <span class="text-icon">Inventario</span>
                  </a>
               </div>
            </div>
            <div class="row">
               <div class="col-2">
                  <a type="button" class="btn-boton6" href="{{route('facturas')}}">
                  <img style="width: 4em; margin-bottom: -18%;" src="../css/fonts/carbon--data-view-alt.png" >
                     <!--<span class="iconify" data-icon="carbon:data-view-alt" id="sell-card"></span>--><br>
                     <span class="text-icon">Facutras</span>
                  </a>
               </div>
               <div class="col-2">
                  <a type="button" class="btn-boton7" href="{{route('servicios')}}">
                  <img style="width: 4em; margin-bottom: -18%;" src="../css/fonts/carbon--task-tools.png" >
                     <!--<span class="iconify" data-icon="carbon:task-tools" id="sell-card"></span>--><br>
                     <span class="text-icon">Servicios</span>
                  </a>
               </div>
               <div class="col-2">
                  <a type="button" class="btn-boton8" href="{{route('usuarios')}}">
                  <img style="width: 4em; margin-bottom: -18%;" src="../css/fonts/solar--user-plus-broken.png" >
                     <!--<span class="iconify" data-icon="solar:user-plus-broken" id="sell-card"></span>--><br>
                     <span class="text-icon">Usuarios</span>
                  </a>
               </div>
               <div class="col-2">
                  <a type="button" class="btn-boton9" href="{{route('proveedores')}}">
                  <img style="width: 4em; margin-bottom: -18%;" src="../css/fonts/mdi--human-hand-truck.png" >
                     <!--<span class="iconify" data-icon="mdi:human-hand-truck" id="sell-card"></span>--><br>
                     <span class="text-icon">Proveedores</span>
                  </a>
               </div>
               <div class="col-2">
                  <a type="button" class="btn-boton10" href="{{route('reportes')}}">
                  <img style="width: 4em; margin-bottom: -18%;" src="../css/fonts/akar-icons--statistic-up.png" >
                     <!--<span class="iconify" data-icon="akar-icons:statistic-up" id="sell-card"></span>--><br>
                     <span class="text-icon">Reportes</span>
                  </a>
               </div>
            </div>
         </div>
         @if (session('exito'))
         <script script>
            $(document).ready(function() {
               $('#myModal').modal('show'); // Muestra el modal
            });
         </script>
         <!-- MODAL EXITO-->
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document" style="height: 40%;">
               <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png);background-size: cover;position: relative;background-repeat: no-repeat;background-position: center;height: 40dvh;border-radius: 20px;left:0%;top: 60%;box-shadow: 0px 0px 20px 0px #F63A3D;">
                  <div class="modal-header" style="height: 30%;">
                     <img src="/css/css-facturacion/imagenes/wof.png" style="width: 50%; height: 250%; top: 0; margin-top: -5%; margin-left: 25%;" />
                     <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style="margin-right: 0%;border: none; background: none;"></button>
                  </div>
                  <div class="modal-body">
                     <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">EXITO.</span></center>
                     <center><span id="modalErrorMessage" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%;padding-right: 2%;">{{session('exito')}}</span></center>
                  </div>
                  <div class="modal-footer">
                     <button type="button" id="btncerrar" aria-label="close" class="btn btn-secondary" data-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px; width: 25%;">Cerrar</button>
                  </div>
               </div>
            </div>
         </div>
         <!--FINAL MODAL EXITO-->
         @endif
         <!-- MODAL cerrar sesion-->
         <div class="modal fade" id="campoVacioModalcs" tabindex="-1" aria-labelledby="campoVacioModalLabel"aria-hidden="true">
            <div class="modal-dialog" style="height: 40%;">
                  <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png);background-size: cover;position: relative;background-repeat: no-repeat;background-position: center;height: 40dvh;border-radius: 20px;left:0%;top: 60%;box-shadow: 0px 0px 20px 0px #F63A3D;">
                     <div class="modal-header" style="height: 30%;">
                        <img src="/css/css-facturacion/imagenes/wof.png"
                           style="width: 40%; height: 220%; top: 0; margin-top: -4%; margin-left: 30%;" />
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"style="margin-right: 5%;"></button>
                     </div>
                     <div class="modal-body">
                        <center><span id="modaltitulo"style="font-weight: 650; font-size: large; color: #F63A3D ;">Atención.</span></center>
                        <center><span id="modaltexto" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%;padding-right: 2%;"> ¿Estas seguro que quieres cerrar sesión?.</span></center>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                              style="background-color: #fff; border: 2px solid #F63A3D; color: #F63A3D; border-radius: 10px; width: 20%;" onclick=location.href="{{route('logOut')}}"><b>Si</b></button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closemodal()"style="background-color: #F63A3D; border: none; border-radius: 10px; width: 20%;">No</button>
                     </div>
                  </div>
            </div>
         </div>
         <!--FINAL MODAL cerrar sesion-->
         </div>
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

         function closemodal(){
            
            const modal = document.getElementById('campoVacioModalcs');
            modal.style.display = "none";
            document.body.style.overflow = "auto"; // Restaurar el scroll del body
            const modalBackdrop = document.getElementsByClassName('modal-backdrop')[0];
            modalBackdrop.parentNode.removeChild(modalBackdrop);
         }
      </script>
      <script src="/js/jquery.min.js"></script>
      <script src="/js/popper.min.js"></script>
      <script src="/js/bootstrap.bundle.min.js"></script>
      <script src="/js/jquery-3.0.0.min.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
      <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="/js/custom.js"></script>
      <script>
         function openNav() {
            document.getElementById("mySidepanel").style.width = "250px";
         }
         function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
         }
         function uncheck(checkbox) {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(function(item) {
               if (item !== checkbox) {
                  item.checked = false;
               }
            });
         }
         src = "https://cdn.ulpgc.es/ulpgcds/1.0/js/jquery.ui/datepicker.js"
         $("#fecha-datepicker-1").datepicker({
            changeMonth: true,
            changeYear: true
         });
      </script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </body>
</html>