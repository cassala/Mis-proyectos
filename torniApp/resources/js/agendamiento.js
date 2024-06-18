
      const appointmentForm = document.getElementById("appointmentForm");

      appointmentForm.addEventListener("submit", function (event) {
         event.preventDefault();

         const appointmentDate = new Date(document.getElementById("fecha-datepicker-2").value);
         const today = new Date();

         if (appointmentDate < today) {
            document.getElementById('modaltitulo').innerText = "Error.";
				document.getElementById('modaltexto').innerText = "La fecha escogida no puede ser anterior a la actual.";
				const campoVacioModal = new bootstrap.Modal(document.getElementById('myModal'));
				campoVacioModal.show();
				return;
         } else {
            document.getElementById('modaltitulo').innerText = "";
				document.getElementById('modaltexto').innerText = "Solicitud enviada.";
				const campoVacioModal = new bootstrap.Modal(document.getElementById('myModal'));
				campoVacioModal.show();
				return;
            // If appointment date is valid, submit the form
            appointmentForm.submit();
         }
      });
