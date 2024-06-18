<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Tornimotos</title>
      <link rel="shortcut icon" href="/css/assets/images/tornico.ico">
      <link rel="stylesheet" href="/css/css-index/bootstrap.min.css">
      <link rel="stylesheet" href="/css/css-index/style.css">
      <link rel="stylesheet" href="/css/fonts/fontawesome-free-6.5.2-web/css/all.css">
      <link rel="stylesheet" href="/css/fonts/fontawesome-free-6.5.2-web/css/fontawesome.css">
      <link rel="stylesheet" href="/css/css-index/responsive.css">
      <link rel="icon" href="/css/css-index/images/fevicon.png" type="image/gif" />      
      <link rel="stylesheet" href="/css/css-index/jquery.mCustomScrollbar.min.css">
   </head>
   <body class="main-layout">
      <div class="loader_bg">
         <div class="loader"><img src="/css/css-index/images/loading.gif" alt="#" /></div>
      </div>
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="{{route('acercainfo')}}">Acerca de tornimotos </a>
         <a href="{{route('agendamiento')}}">Agendamiento de citas</a>
         <a href="{{route('interfaz.login')}}">Acceder </a>
      </div>
      <header>
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-4">
                     <div class="logo">
                        <img src= "/css/css-index/images/wof.png" id="logo_" />
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-8">
                     <div class="right_bottun">
                        <ul class="conat_info d_none ">
                           <li><a href="{{route('interfaz.login')}}"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        </ul>
                        <button class="openbtn" onclick="openNav()"><img src="/css/css-index/images/menu_icon.png" alt="#"/> </button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <section class="banner_main">
         <div id="banner1" class="carousel slide banner_slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                        </div>
                     </div>
                  </div>
               </div>
            </div>        
         </div>
      </section>
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