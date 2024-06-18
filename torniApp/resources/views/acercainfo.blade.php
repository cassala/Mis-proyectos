<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--adaptable-->
      <title>Tornimotos | Información</title>
      <link rel="stylesheet" href="/css/css-acercainfo/menu.css" />
      <link rel="stylesheet" href="/css/css-acercainfo/bootstrap.min.css">
      <link rel="shortcut icon" href="/css/assets/images/tornico.ico">
      <link rel="stylesheet" href="/css/css-acercainfo/style.css">
      <link rel="icon" href="/css/css-index/images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="/css/css-acercainfo/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="/css/fonts/fontawesome-free-6.5.2-web/css/all.css">
      <link rel="stylesheet" href="/css/fonts/fontawesome-free-6.5.2-web/css/fontawesome.css">
      <link rel="stylesheet" href="/css/css-acercainfo/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="/css/boostrap/bootstrap-4.5.3-dist/css/bootstrap.min.css">
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
               <a href="/"><img src="/css/css-acercainfo/imagenes/wof.png" /></a>
            </div>
            <h1>Información</h1>
            <button class="openbtn" id="menu" onclick="openNav()"><img src="/css/css-acercainfo/imagenes/menu_icon.png" alt="#" /> </button>
         </nav>
      </header>
      <div class="container-fluid bg-image">
         <div class="container-fluid recuperar">
            <div class="logo-dentro-centrado">
               <center><img src="/css/css-acercainfo/imagenes/wof.png" /></center>
            </div>
            <p><span class="icon-text">
                  <i class="fas fa-map-marker-alt icon"></i>
               </span><b>Dirección:</b> Cra. 24 #23-91, Palmira, Valle del Cauca
            </p>
            <p><span class="icon-text-phone">
                  <i class="fas fa-solid fa-phone-volume"></i>
               </span><b>Teléfono:</b> 317 3470955
            </p>
            <center>
               <p>
                  <span class="icon-text-redes">
                     <a style="color: #F63A3D;" href="https://www.instagram.com/tornimotos_palmira/?fbclid=IwZXh0bgNhZW0CMTAAAR2kskz6HjbCGrCbyRG5bXgx2sxq_6EJsIblfGFQmeAFLvPtW6UC_8zSWhs_aem_AYedZY_F6fFtnI3ewVka9rw51whIxJ5UFdj31F4K-S2rMOZtFZ6tAyyILloreJywiKs0vZ8RiA3LjI3ToAm8GM0F" target="_blank"><i class="fab fa-instagram"></i></a>
                     <a style="color: #F63A3D;" href="https://web.facebook.com/people/Tornimotos-Palmira/100080098964452/?paipv=0&eav=AfZJMH1WOw9AS9E6LUmJYxoBg8uuxo-Ivl7DdiJfv2qylEtWsHnDDlYjelYuCaec7d8&_rdc=1&_rdr" target="_blank"> <i class="fab fa-facebook"></i></a>
                     <a style="color: #F63A3D;" href="https://wa.me/3173470955?text=Hola%20me%20gustaria%20recibir%20mas%20informacion%20sobre%20sus%20productos" target="_blank"> <i class="fab fa-whatsapp"></i></a>
                  </span>
               </p>
            </center>
         </div>
      </div>
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
   </body>
</html>