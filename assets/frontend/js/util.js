(function($) {
    "use strict";

    // on ready function
    jQuery(document).ready(function($) {
        var $this = $(window);
        //show hide login form js
        $('#login_button').on("click", function(e) {
            $('#login_one').slideToggle(1000);
            e.stopPropagation();
        });

        $(document).click(function(e) {
            if (!(e.target.closest('#login_one'))) {
                $("#login_one").slideUp("slow");
            }
        });
    });
})();

function secondmodal() {
	var codigo = document.getElementById("codigoOrden").value.trim();
	var cedula = document.getElementById("txtcedula").value.trim();
	var res = parseInt(codigo);
	$.ajax({
		url: 'http://localhost/ssoporte/reparacion/Creparacion/presentar/' + res,
		type: "post",
		dataType: "html",
		data: { id: cedula },
		async: false,
		success: function (data) {
			if (data == 1) {
				$("#modal-zero").modal("show");
				/* $("#modal-zero .modal-body").html(); */
			} else {
				$("#modal-default").modal("show");
				$("#modal-default .modal-body").html(data);
			}

		},
	});
}

function Solo_Numerico(variable) {
	Numer = parseInt(variable);
	if (isNaN(Numer)) {
		return "";
	}
	return Numer;
}

function ValNumero(Control) {
	Control.value = Solo_Numerico(Control.value);
	myFunction();
}

document.getElementById("txtcedula").addEventListener("keyup", myFunction);
document.getElementById("txtcedula").addEventListener("focusout", myFunction);

function myFunction() {
	var cad = document.getElementById("txtcedula").value.trim();
	/* $("input[name=txtusuario]").val(cad); */
	var total = 0;
	var longitud = cad.length;
	var longcheck = longitud - 1;
	if (cad !== " " && longitud == 10) {
		for (i = 0; i < longcheck; i++) {
			if (i % 2 === 0) {
				var aux = cad.charAt(i) * 2;
				if (aux > 9) aux -= 9;
				total += aux;
			} else {
				total += parseInt(cad.charAt(i)); // parseInt o concatenará en lugar de sumar
			}
		}
		total = total % 10 ? 10 - total % 10 : 0;
		if (cad.charAt(longitud - 1) == total) {
			document.getElementById("txtcedula").style.borderColor = "#2ECC71";
			document.getElementById("msmced2").style.color = "#2ECC71";
			$('#msmced2').html("Cedula Correcta");
		} else {
			document.getElementById("cedula").focus();
			document.getElementById("cedula").style.borderColor = "#F44336";

			return false;
		}
	} else {
		document.getElementById("txtcedula").focus();
		document.getElementById("txtcedula").style.borderColor = "#F44336";
		document.getElementById("msmced2").style.color = "#CE5454";
		$('#msmced2').html("Cedula incorrecta");

		return false;
	}
}
