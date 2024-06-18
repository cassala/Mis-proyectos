<!DOCTYPE html>

<head>
	<title>Log-in </title>
	<meta name="viewport" content="width=device-width,inicial-scale=1.0" />
	<link rel="stylesheet" href="/css/css-login/menu.css">
	<!--<link rel="stylesheet" href="slider.css" />-->
	<link rel="stylesheet" href="/css/css-login/responsive-login.css" />
	<link rel="shortcut icon" href="/css/assets/images/tornico.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>


	<style>
		.cancelbtn:active,
		.cancelbtn:focus {
			outline: none;
		}

		#btningresar:active,
		#btningresar:focus {
			outline: none;
		}

		a:hover {
			background: none;
			color: #F63A3D;
		}
	</style>
</head>

<body>

	<!-- MODAL ERROR-->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true" style="display: none;">
		<div class="modal-dialog" role="document" style="height: 40%;">
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
					<img src="/css/css-facturacion/imagenes/wof.png"
							style="width: 100%; height: 250%; top: 0; margin-top: -5%; margin-left: 30%;" />
					<!--<h5 class="modal-title" id="campoVacioModalLabel">Error al añadir</h5>-->
					<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style="margin-right: 0%;
		  border: none; background: none;"></button>
				</div>
				<div class="modal-body">
					<center><span id="modaltitulo"
							style="font-weight: 650; font-size: large; color: #F63A3D ;">ERROR.</span></center>

					<center><span id="modaltexto" style="font-weight: 650; font-size: large; color: #000; padding-top: 20%; padding-left: 2%;
		  padding-right: 2%;"> favor, completa todos los campos antes de agregar.</span></center>
				</div>
				<div class="modal-footer">
					<button type="button" id="btncerrar" aria-label="close" class="btn btn-secondary"
						data-dismiss="modal"
						style="background-color: #F63A3D; border: none; border-radius: 10px; width: 25%;">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<!--FINAL MODAL ERROR-->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<script>
		function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className == "topnav") {
				x.className += " RESPONSIVE";
			} else {
				x.className = "topnav";
			}
		}
	</script>

	<script>
		const loginForm = document.getElementById("loginForm");
		const myModal = new bootstrap.Modal(document.getElementById('myModal'));

		loginForm.addEventListener("submit", function (event) {
			event.preventDefault();

			const password = document.getElementById("password").value;

			if (password.length < 8) {
				document.getElementById('modaltitulo').innerText = "Error.";
				document.getElementById('modaltexto').innerText = "La contraseña debe tener minimo 8 caracteres.";
				const campoVacioModal = new bootstrap.Modal(document.getElementById('myModal'));
				campoVacioModal.show();
				return;
			} else {
				loginForm.submit();
			}
		});
	</script>

	<!--<script>
  document.getElementById('btncerrar').addEventListener('click', function() {
    const modal = new bootstrap.Modal(document.getElementById('myModal'));
    modal.hide();
  });
  </script>-->

</body>

</html>