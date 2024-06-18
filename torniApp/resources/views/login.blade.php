<!DOCTYPE html>
    <head>
        @notifyCss
        <title>Tornimotos | Log-in </title>      
        <link rel="stylesheet" href="/css/css-login/menu.css">
        <link rel="stylesheet" href="/css/css-login/responsive-login.css" />
        <link rel="shortcut icon" href="/css/assets/images/tornico.ico">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />-->
        <!--<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>-->
        <link rel="stylesheet" href="/css/boostrap/bootstrap-4.5.3-dist/css/bootstrap.min.css"><!--esta es el estilo de input-->
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"><!--ojo-->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>-->
        <script>
            $(document).on('ready', function() {
                $('#show-hide-passwd').on('click', function(e) {
                    e.preventDefault();
                    var current = $(this).attr('action');

                    if (current == 'hide') {
                        $(this).prev().attr('type', 'text');
                        $(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action', 'show');
                    }

                    if (current == 'show') {
                        $(this).prev().attr('type', 'password');
                        $(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action', 'hide');
                    }
                })
            })
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

        <style>
            .cancelbtn:active,
            .cancelbtn:focus {
                outline: none;
            }

            .password-container .addon {
                position: absolute;
                top: 50%;
                right: 10px;
                transform: translateY(-50%);
                font-size: 16px;
                cursor: pointer;
                color: white;
            }

            #olv:hover{
                background:none;
                color:#F63A3D;
            }

            #btningresar:active,
            #btningresar:focus {
                outline: none;
            }

            a:hover {
                background: none;
                color: #F63A3D;
            }

            .password-container {
                position: relative;
            }

            .password-container input[type="text"] {
                padding: 12px 40px;
                width: 100%;
                background-repeat: no-repeat;
                background-position: 8px center;
                background-image: url('/css/css-login/imagenes-login/contraseña.png');
                background-size: 20px;
                height: 50px;
                margin: 8px 0;
                display: inline-block;
                border: 2px solid #ccc;
                color: #000;
                border-radius: 8px;
                box-sizing: border-box;
                font-size: small;
                background-color: #fff;
            }

            #email:-webkit-autofill,
            #password:-webkit-autofill {
                -webkit-box-shadow: 0 0 0 1000px #fff inset;
                -webkit-text-fill-color: #333;
                -webkit-background-clip: text;
                background-repeat: no-repeat;
                background-position: 8px center;
                background-image: url('/css/css-login/imagenes-login/contraseña.png');
                background-size: 20px;
                display: inline;
                background-image: url('/css/css-login/imagenes-login/contraseña.png');
            }

            #email::placeholder,
            #password::placeholder {
                font-size: small;
            }

            .show-hide-passwd {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                font-size: small;
                cursor: pointer;
                right: 1px;
            }
        </style>
    </head>
    <body>
        <div class="formulario">
            <div class="imgcontainer">
                <img src="/css/css-login/imagenes-login/user-up.png" alt="Avatar" class="avatar">
            </div>
            <form id="loginForm" name="frm" method="post" action="{{route('usuario.iniciarSesion')}}">
                @csrf
                @if (session('error'))
                <script script>
                    $(document).ready(function() {
                        $('#myModal').modal('show'); 
                    });
                </script>
                <!-- MODAL ERROR-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document" style="height: 40%;">
                        <div class="modal-content" style="background-image: url(/css/css-facturacion/imagenes/fondomodal.png); background-size: cover; position: relative; background-repeat: no-repeat; background-position: center; height: 40dvh; border-radius: 20px; left:0%; top: 60%; box-shadow: 0px 0px 20px 0px #F63A3D;">
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
                <center><label><b>Inicio de sesión</b></label></center>
                <div class="input-container">
                    <input type="text" id="email" name="nombreUsuario" value="{{old('nombreUsuario')}}" maxlength="16" placeholder="Escribe tu nombre de usuario" style="width: 100%; padding: 12px 40px;background-image: url('/css/css-login/imagenes-login/user.png');background-repeat: no-repeat;background-position: 8px center;background-size: 25px;height: 50px;margin: 8px 0;display: inline-block;border: 2px solid #ccc;color: #000;border-radius: 8px;box-sizing: border-box;font-size: small;background-color: #fff;" required/>
                </div>
                <div class="password-container">
                    <input type="password" id="password" name="password" maxlength="16" value="{{old('password')}}" placeholder="Ingresa tu contraseña" required>
                    <span class="addon fa fa-eye" style="color: #F63A3D;"></span>
                </div>
                <div class="container">
                    <span class="psw" id="olv"> <a class="link" href="{{route('recuperarContrasenia')}}" style="text-decoration: underline; font-size: small;"><b>¿Olvidaste tu contraseña?</b></a></span>
                </div>
                <button type="submit" id="btningresar" style="background-color: #ffffff;color: #F63A3D;padding: 11px 20px;margin: 8px 0;border: 2px solid #F63A3D;border-radius: 8px;cursor: pointer;width: 49%;font-size: small;"><b>Ingresar</b></button>
                <button type="button" class="cancelbtn" onclick="location.href='/'" style="width: 49%;padding: 11px 20px;background-color: #F63A3D;color: #fff;border: none;border-radius: 8px;font-size: small;">Cancelar</button>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        @include('sweetalert::alert')
        @include('notify::components.notify')
        @notifyJs
    </body>
</html>