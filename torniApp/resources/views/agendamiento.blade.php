<?php
@include('modales.modal')
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <title>Agendamiento</title>
      <link rel="stylesheet" href="/css/css-agendamiento/style.css">
      <link rel="shortcut icon" href="/css/assets/images/tornico.ico">
      <link rel="stylesheet" href="/css/css-agendamiento/menu.css"/>
      <link rel="stylesheet" href="/css/css-agendamiento/bootstrap.min.css">
      <link rel="icon" href="css-index/images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="/css/css-agendamiento/jquery.mCustomScrollbar.min.css">
      <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">-->
      <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
      <!--<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">-->
      <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">-->
   </head>
   <body class="main-layout">
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="{{route('acercainfo')}}" class="slidemenutorni">Acerca de tornimotos </a>
         <a href="{{route('agendamiento')}}" class="slidemenutorni">Agendamiento de citas</a>
         <a href="{{route('interfaz.login')}}">Acceder </a>
      </div>
      <header>
         <nav class="topnav" id="myTopnav">
            <div class="tlogo">
               <a href="/"><img src="/css/css-agendamiento/imagenes/wof.png" /></a>
            </div>
            <h1>Agendamiento</h1>
            <button class="openbtn" onclick="openNav()"><img src="/css/css-agendamiento/imagenes/menu_icon.png" alt="#" /> </button>
         </nav>
      </header>
      <div class="container-fluid bg-image">
         <div class="container-fluid recuperar">
            <div class="logo-dentro-centrado">
               <img class="tmdentro" src="/css/css-agendamiento/imagenes/wof.png" />
            </div>
            <div class="formulario">
               <form style="margin-top: -6%;" name="frm" id="myform" method="POST" action="{{route('agendamiento.storeagendamiento')}}">
                  @csrf
                  <div class="ulpgcds-form__item">
                  <label><b>Fecha</b></label>
                     <input autocomplete="off" class="ulpgcds-datepicker ulpgcds-form__item--icon" max="9999-12-31" id="fecha-datepicker-2" name="fecha" type="date" value="" placeholder="dd/mm/aaaa" required />
                     <span class="ulpgcds-icon-calendar"></span>
                  </div>
                  <label><b>Nombre</b></label>
                  <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre"  required/>
                  <label><b>Teléfono</b></label>
                  <input type="tel" id="telefono" placeholder="Ingresa tu teléfono" pattern="\([0-9]{3}\) [0-9]{3}[ -][0-9]{4}" name="telefono" required>
                  <label><b>Servicio</b></label>
                  <select name="servicio" class="form-select" id="comboboxservicio" required>
                     <option value="">Selecciona un servicio</option>
                     <option value="CAMBIO DE ACEITE">CAMBIO DE ACEITE</option>
                     <option value="ENRADIADA Y ACOBOLADA DE RINES">RADIADA Y ACOBOLADA DE RINES</option>
                     <option value="CARGA DE BATERIAS">CARGA DE BATERIAS</option>
                     <option value="MONTALLANTAS">MONTALLANTAS</option>
                     <option value="MANTENIMIENTO PREVENTIVO">MANTENIMIENTO PREVENTIVO</option>
                     <option value="MANTENIMIENTO GENERAL">MANTENIMIENTO GENERAL
                     </option>
                  </select>
                  <button class="ingresar" name="submit" id="btnsubmit" type="submit"><b>Solicitar</b></button>
               </form>
            </div>
         </div>
      </div>
      <!-- MODAL ERROR-->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
         <div class="modal-dialog" role="document" style="height: 40%;">
            <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover;position: relative; background-repeat: no-repeat; background-position: center;height: 40dvh;border-radius: 20px;left:0%;top: 60%;box-shadow: 0px 0px 20px 0px #F63A3D;">
               <div class="modal-header" style="height: 30%;">
                  <img src="/css/css-facturacion/imagenes/wof.png" style="width: 40%; height: 230%; top: 0; margin-top: -5%; margin-left: 30%;" />
                  <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style="margin-right: 0%;border: none; background: none;"></button>
               </div>
               <div class="modal-body">
                  <center><span id="modaltitulo" style="font-weight: 650; font-size: large; color: #F63A3D ;">ERROR.</span></center>
                  <center><span id="modaltexto" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%;padding-right: 2%;"></span></center>
               </div>
               <div class="modal-footer">
                  <button type="button" id="btncerrar" aria-label="close" class="btn btn-secondary" data-dismiss="modal" style="background-color: #F63A3D; border: none; border-radius: 10px; width: 25%;">Cerrar</button>
               </div>
            </div>
         </div>
      </div>
      <!--FINAL MODAL ERROR-->
      <script src="/js/jquery.min.js"></script>
      <script src="/js/popper.min.js"></script>
      <script src="/js/bootstrap.bundle.min.js"></script>
      <script src="/js/jquery-3.0.0.min.js"></script>
      <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
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
      <script>
         document.getElementById('myform').addEventListener('submit', function(event) {

         const formulario = document.querySelector('#myform');
         const appointmentDate = new Date(document.getElementById("fecha-datepicker-2").value);
         const nombre = document.getElementById("nombre").value.trim();
         const telefono = document.getElementById("telefono").value.trim();
         const servicio = document.getElementById("comboboxservicio").value.trim();
         const today = new Date();
         const yesterday = new Date(today);
         yesterday.setDate(today.getDate() - 1);

         if (appointmentDate >= yesterday && nombre !== "" && telefono !== "" && servicio !== "") {
            document.getElementById('modaltitulo').innerText = "";
            document.getElementById('modaltexto').innerText = "Solicitud enviada.";
            document.getElementById('btncerrar').style.display = "none";
            const campoVacioModal = new bootstrap.Modal(document.getElementById('myModal'));
            campoVacioModal.show();
            setTimeout(function() {
               campoVacioModal.hide();
               formulario.submit(); // Enviar el formulario después de cerrar la modal
            }, 2000); // Esperar 2 segundos antes de cerrar la modal
         }  else {
               event.preventDefault();
               document.getElementById('modaltitulo').innerText = "Error.";
               document.getElementById('modaltexto').innerText = "Datos vacios o la fecha no puede ser anterior a la actual.";
               const campoVacioModal = new bootstrap.Modal(document.getElementById('myModal'));
               campoVacioModal.show();
            }
         });         
      </script>
      <script>
         document.addEventListener('DOMContentLoaded', function() {
            const btncs = document.getElementById('btnsubmit');

            btncs.addEventListener('click', function(event) {

               if (!(telefono.trim() == "" || nombre.trim() == "" || servicio.trim() == "")) {
                  document.getElementById('modaltitulo').innerText = "Error.";
                  document.getElementById('modaltexto').innerText = "Por favor, completa los campos.";
                  const campoVacioModal = new bootstrap.Modal(document.getElementById('myModal'));
                  campoVacioModal.show();
                  return;
               }
            });
         });
      </script>
      <script>
         const numericField = document.getElementById("telefono");

         numericField.addEventListener("input", function() {
            if (isNaN(numericField.value)) {
               document.getElementById('modaltitulo').innerText = "Error.";
               document.getElementById('modaltexto').innerText = "Por favor, ingresa un numero valido.";
               numericField.value = "";
               const campoVacioModal = new bootstrap.Modal(document.getElementById('myModal'));
               campoVacioModal.show();
               return;
               appointmentForm.submit();
            }
         });
      </script>
      <script>
         const textField = document.getElementById("nombre");

         textField.addEventListener("input", function() {
            if (/[0-9]/.test(textField.value)) {
               document.getElementById('modaltitulo').innerText = "Error.";
               document.getElementById('modaltexto').innerText = "Por favor, ingresa un nombre valido.";
               textField.value = "";
               const campoVacioModal = new bootstrap.Modal(document.getElementById('myModal'));
               campoVacioModal.show();
               return;
               textField.value = "";
            }
         });
      </script>
      <script>
         const formulario = document.querySelector('appointmentForm');
         const radioButtons = document.querySelectorAll('input[type="radio"][name="option"]');

         form.addEventListener('submit', (event) => {
            let isValid = false;
            radioButtons.forEach((button) => {
               if (button.checked) {
                  isValid = true;
               }
            });
            if (!isValid) {
               event.preventDefault();
               alert('Por favor, selecciona una opcion.');
            }
         });
      </script>
   </body>
</html>