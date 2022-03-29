function DeleteAdmin(id) {
	SwalDeleteAdmin(id);
}

function ActiveAdmin(id) {
	SwalActiveAdmin(id);
}

function SwalDeleteAdmin(id) {
	Swal.fire({
		title: "Seguro desea desactivar?",
		text: "El usuario se desactivara!",
		type: "question",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Si, desactivar!",
		showLoaderOnConfirm: true,
		preConfirm: function () {
			return new Promise(function (resolve) {
				$.ajax({
					url: "http://localhost/ssoporte/Manteiner/Cadmin/desactiveadmin",
					type: "post",
					data: "delete=" + id,
					dataType: "json",
				})
					.done(function (response) {
						Swal.fire("Desactivada", response.message, response.status);
						window.location.href = "http://localhost/ssoporte/Manteiner/Cadmin";
					})
					.fail(function () {
						Swal("Oops...", "No se realizo la desactivacion", "error");
					});
			});
		},
		allowOutsideClick: false,
	});
}

function SwalActiveAdmin(id) {
	Swal.fire({
		title: "Seguro desea Activar?",
		text: "El usuario se Activara!",
		type: "question",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Si, activar!",
		showLoaderOnConfirm: true,
		preConfirm: function () {
			return new Promise(function (resolve) {
				$.ajax({
					url: " http://localhost/ssoporte/Manteiner/Cadmin/activeadmin",
					type: "post",
					data: "active=" + id,
					dataType: "json",
				})
					.done(function (response) {
						Swal.fire("Activado", response.message, response.status);
						window.location.href = "http://localhost/ssoporte/Manteiner/Cadmin";
					})
					.fail(function () {
						Swal("Oops...", "No se realizo la activacion", "error");
					});
			});
		},
		allowOutsideClick: false,
	});
}

//Cliente
function DeleteCliente(id) {
	/* alert(id); */
	SwalDeleteCliente(id);
}

function ActiveCliente(id) {
	/* alert(id); */
	SwalActiveCliente(id);
}

function SwalDeleteCliente(id) {
	Swal.fire({
		title: "Seguro desea desactivar?",
		text: "El cliente se desactivara!",
		type: "question",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Si, desactivar!",
		showLoaderOnConfirm: true,
		preConfirm: function () {
			return new Promise(function (resolve) {
				$.ajax({
					url:
						"http://localhost/ssoporte/Cliente/Ccliente/desactivecli",
					type: "post",
					data: "delete=" + id,
					dataType: "json",
				})
					.done(function (response) {
						Swal.fire("Desactivada", response.message, response.status);
							window.location.href = "http://localhost/ssoporte/Cliente/Ccliente";
					})
					.fail(function () {
						Swal("Oops...", "No se realizo la desactivacion", "error");
					});
			});
		},
		allowOutsideClick: false,
	});
}

function SwalActiveCliente(id) {
	Swal.fire({
		title: "Seguro desea Activar?",
		text: "El cliente se Activara!",
		type: "question",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Si, activar!",
		showLoaderOnConfirm: true,
		preConfirm: function () {
			return new Promise(function (resolve) {
				$.ajax({
					url:
						"http://localhost/ssoporte/Cliente/Ccliente/activecli",
					type: "post",
					data: "active=" + id,
					dataType: "json",
				})
					.done(function (response) {
						Swal.fire("Activado", response.message, response.status);
							window.location.href = "http://localhost/ssoporte/Cliente/Ccliente";
					})
					.fail(function () {
						Swal("Oops...", "No se realizo la activacion", "error");
					});
			});
		},
		allowOutsideClick: false,
	});
	//TECNICO
	function DeleteTecnico(id) {
		/* alert(id); */
		SwalDeleteTecnico(id);
	}

	function ActiveTecnico(id) {
		/* alert(id); */
		SwalActiveTecnico(id);
	}

	function SwalDeleteTecnico(id) {
		Swal.fire({
			title: "Seguro desea desactivar?",
			text: "El tecnico se desactivara!",
			type: "question",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			confirmButtonText: "Si, desactivar!",
			showLoaderOnConfirm: true,
			preConfirm: function () {
				return new Promise(function (resolve) {
					$.ajax({
						url:
							" http://localhost/ssoporte/manteiner/Ctecnico/desactivetecnico",
						type: "post",
						data: "delete=" + id,
						dataType: "json",
					})
						.done(function (response) {
							Swal.fire("Desactivada", response.message, response.status);
							for (let index = 0; index < 200; index++) {
								window.location.href =
									" http://localhost/ssoporte/Manteiner/Ctecnico";
							}
						})
						.fail(function () {
							Swal("Oops...", "No se realizo la desactivacion", "error");
						});
				});
			},
			allowOutsideClick: false,
		});
	}

	function SwalActiveTecnico(id) {
		Swal.fire({
			title: "Seguro desea Activar?",
			text: "El tecnico se Activara!",
			type: "question",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			confirmButtonText: "Si, activar!",
			showLoaderOnConfirm: true,
			preConfirm: function () {
				return new Promise(function (resolve) {
					$.ajax({
						url: " http://localhost/ssoporte/Manteiner/Ctecnico/activestecnico",
						type: "post",
						data: "active=" + id,
						dataType: "json",
					})
						.done(function (response) {
							Swal.fire("Activado", response.message, response.status);
							for (let index = 0; index < 200; index++) {
								window.location.href =
									" http://localhost/ssoporte/Manteiner/Ctecnico";
							}
						})
						.fail(function () {
							Swal("Oops...", "No se realizo la activacion", "error");
						});
				});
			},
			allowOutsideClick: false,
		});
	}
}

function DeleteService(id) {
	SwalDeleteService(id);
}

function ActiveService(id) {
	SwalActiveService(id);
}

function SwalDeleteService(id) {
	Swal.fire({
		title: "Seguro desea desactivar?",
		text: "El servicio se desactivara!",
		type: "question",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Si, desactivar!",
		showLoaderOnConfirm: true,
		preConfirm: function () {
			return new Promise(function (resolve) {
				$.ajax({
					url: "http://localhost/ssoporte/Servicio/Cservicio/desactiveservicio",
					type: "post",
					data: "delete=" + id,
					dataType: "json",
				})
					.done(function (response) {
						Swal.fire("Desactivada", response.message, response.status);
							window.location.href = "http://localhost/ssoporte/Servicio/Cservicio";
					})
					.fail(function () {
						Swal("Oops...", "No se realizo la desactivacion", "error");
					});
			});
		},
		allowOutsideClick: false,
	});
}

function SwalActiveService(id) {
	Swal.fire({
		title: "Seguro desea Activar?",
		text: "La servicio se Activara!",
		type: "question",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Si, activar!",
		showLoaderOnConfirm: true,
		preConfirm: function () {
			return new Promise(function (resolve) {
				$.ajax({
					url: "http://localhost/ssoporte/Servicio/Cservicio/activeservicio",
					type: "post",
					data: "active=" + id,
					dataType: "json",
				})
					.done(function (response) {
						Swal.fire("Activado", response.message, response.status);
						window.location.href = "http://localhost/ssoporte/Servicio/Cservicio";
					})
					.fail(function () {
						Swal("Oops...", "No se realizo la activacion", "error");
					});
			});
		},
		allowOutsideClick: false,
		});
	}
	//TECNICO
function DeleteTecnico(id) {
		/* alert(id); */
		SwalDeleteTecnico(id);
	}

function ActiveTecnico(id) {
		/* alert(id); */
		SwalActiveTecnico(id);
	}

function SwalDeleteTecnico(id) {
		Swal.fire({
			title: "Seguro desea desactivar?",
			text: "El tecnico se desactivara!",
			type: "question",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			confirmButtonText: "Si, desactivar!",
			showLoaderOnConfirm: true,
			preConfirm: function () {
				return new Promise(function (resolve) {
					$.ajax({
						url:
							" http://localhost/ssoporte/manteiner/Ctecnico/desactivetecnico",
						type: "post",
						data: "delete=" + id,
						dataType: "json",
					})
						.done(function (response) {
							Swal.fire("Desactivada", response.message, response.status);
							for (let index = 0; index < 200; index++) {
								window.location.href =
									" http://localhost/ssoporte/manteiner/Ctecnico";
							}
						})
						.fail(function () {
							Swal("Oops...", "No se realizo la desactivacion", "error");
						});
				});
			},
			allowOutsideClick: false,
		});
	}

function SwalActiveTecnico(id) {
		Swal.fire({
			title: "Seguro desea Activar?",
			text: "El tecnico se Activara!",
			type: "question",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			confirmButtonText: "Si, activar!",
			showLoaderOnConfirm: true,
			preConfirm: function () {
				return new Promise(function (resolve) {
					$.ajax({
						url: " http://localhost/ssoporte/manteiner/Ctecnico/activestecnico",
						type: "post",
						data: "active=" + id,
						dataType: "json",
					})
						.done(function (response) {
							Swal.fire("Activado", response.message, response.status);
							for (let index = 0; index < 200; index++) {
								window.location.href =
									" http://localhost/ssoporte/manteiner/Ctecnico";
							}
						})
						.fail(function () {
							Swal("Oops...", "No se realizo la activacion", "error");
						});
				});
			},
			allowOutsideClick: false,
		});
	}

function agregarEquipo() {
	var marca = document.getElementById("txtmarca").value.trim();
	var modelo = document.getElementById("txtmodelo").value.trim();
	var serie = document.getElementById("txtserie").value.trim();
	var daño = document.getElementById("txtdaño").value.trim();
	var obs = document.getElementById("txtobservaciones").value.trim();
	var contador = document.getElementById("cont").value.trim();

	/* var x = document.getElementById("").options[0].text; */

	var sel = document.getElementById("idservicio").value.trim(); //obtiene el id--> ahora costo

	var x = document.getElementById("idservicio");
	var i = x.selectedIndex;
	var name = x.options[i].text;

	var xx = document.getElementById("txtmarca");
	var ii = xx.selectedIndex;
	var marca = xx.options[ii].text;

	//var mensaje = document.getElementById("txtnombreCC").value.trim();
	// var prueba = mensaje +" " + marca;
	//document.getElementById("txtnombreCC").value = mensaje + '  ' + marca +'  '+ modelo +'  '+ serie + '  '+ daño + '  ' + contador;

	// alert(marca);


	var str = sel;
	var res = str.split(",");

	var fila =
		"<tr id='fila" +
		contador +"'>" +
		"<input type='hidden' name='marca[]' id='marca[]' value='" +
		modelo +
		"'>" +
		"<input type='hidden' name='modelo[]' id='modelo[]' value='" +
		marca +
		"'>" +
		"<input type='hidden' name='serie[]' id='serie[]' value='" +
		serie +
		"'>" +
		"<input type='hidden' name='daño[]' id='daño[]' value='" +
		daño +
		"'>" +
		"<input type='hidden' name='obs[]' value='" +
		obs +
		"'>" +
		"<input type='hidden' name='sel[]' value='" +
		res[0] +
		"'>" +
		"<td for='prod'>" +
		marca +
		"</td>" +
		"<td for='prod'>" +
		modelo +
		"</td>" +
		"<td for='prod'>" +
		serie +
		"</td>" +
		"<td for='prod'>" +
		daño +
		"</td>" +
		"<td for='prod'>" +
		obs +
		"</td>" +
		"<td for='prod'>" +
		name +
		"</td>" +
		"<td for='prod'>" +
		res[1] +
		"</td>" +
		"<td>" +
		"<button type='button' class='close' aria-label='Close'>" +
		"<span onclick='deleteEquipo(" +
		contador +
		")' aria-hidden='true'>&times;</span>" +
		"</button>" +
		"</td>" +
		"</tr>";
	var increase = parseInt(contador) + 1;
	document.getElementById("cont").value = increase;
	$("#showequipo").append(fila); //Obtiene cantidad de elementos en la tabla
	/* var yea = document.getElementById("showbuy").rows.length; */
	
	document.getElementById("txtmarca").value = "";
	document.getElementById("txtmodelo").value = "";
	document.getElementById("txtdaño").value = "";
	document.getElementById("txtobservaciones").value = "";
	document.getElementById("txtserie").value = "";
	document.getElementById("idservicio").value = "";
	calcular();
}

function calcular() {
	var suma = 0.0;
	$('#showequipo tr').each(function (idx, fila) {
		suma += parseFloat($(this).find('td:eq(6)').text());
	});
	// mostramos la suma total
	$('#subtotal').html("$ " + suma);
};

function deleteEquipo(increase) {
	$("#fila" + increase).remove();
	calcular();
}

function agregar(id, rep) {
	var reparacion = document.getElementById("reparacion" + id + "").value.trim();
	var totprice = document.getElementById("valor" + id + "").value.trim();
	var contador = document.getElementById("contador").value.trim();
	var idrep = document.getElementById("idDetREp").value.trim();
	var baseini = document.getElementById("totalinit").value.trim();
	var valor = parseFloat(totprice) + parseFloat(baseini);
	$.ajax({
		type: "ajax",
		method: "post",
		url: "http://localhost/ssoporte/orden_reparacion/Corden/insertRep",
		data: { id: id, reparacion: reparacion, valor: valor },
		async: false,
		dataType: "json",
		success: function (data) {
			const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: "btn btn-success",
					cancelButton: "btn btn-danger",
				},
				buttonsStyling: false,
			});
			if (contador == 1) {
				Swal.fire({
					position: "top-end",
					icon: "success",
					title: "Your work has been saved",
					showConfirmButton: false,
					timer: 1500,
				});
				window.location.href =
					"http://localhost/ssoporte/orden_reparacion/Corden/actOrden/" + idrep;
			} else {
				swalWithBootstrapButtons
					.fire({
						title: "Informaion guardada con exito",
						text: "Desea mantenerse en esta pagina? ",
						icon: "warning",
						showCancelButton: true,
						confirmButtonText: "Si, mantener en esta pagina",
						cancelButtonText: "Volver al inicio",
						reverseButtons: true,
					})
					.then((result) => {
						if (result.value) {
							swalWithBootstrapButtons.fire(
								"Deleted!",
								"Your file has been deleted.",
								"success"
							);
							window.location.href =
								"http://localhost/ssoporte/reparacion/Creparacion/editar/" +
								rep;
						} else if (
							/* Read more about handling dismissals below */
							result.dismiss === Swal.DismissReason.cancel
						) {
							swalWithBootstrapButtons.fire(
								"Cancelled",
								"Your imaginary file is safe :)",
								"error"
							);
							window.location.href =
								"http://localhost/ssoporte/orden_reparacion/Corden/mostrar";
						}
					});
			}
		},
		error: function () {
			/* alert("No existe datos para mostrar"); */
		},
	});
}

function Registro() {
	var codigo = document.getElementById("codigo").value.trim();

	var cedula = document.getElementById("autoc1").value.trim();
	var nombre = document.getElementById("txtnombre").value.trim();
	var direccion = document.getElementById("txtdireccion").value.trim();
	var correo = document.getElementById("txtcorreo").value.trim();
	var celular = document.getElementById("txtcelular").value.trim();
	var fecha_ing = document.getElementById("fingreso").value.trim();
	var fecha_sal = document.getElementById("fsalida").value.trim();
	var subtotal = document.getElementById("subtotal").innerText;

	var x = document.getElementById("showequipo").rows.length;

	$("#modal-default").modal("show");
	var html = "";
	html += "<div class='row'>" +
		"<div style='margin-right: 60px; margin-left: 15px;'>" +
		"<img src=' http://localhost/ssoporte/uploads/FADA.jpeg' style='height: 120px; width: 170px' alt=''>" +
		"</div>" +
		"<div style='margin-right: 75px; margin-left: 15px;'>" +
		"DIRECCION: Tierras Coloradas<br>" +
		"Tel. (07) 254-2020 <br>" +
		"Email: soporte@gmail.com <br>" +
		"CENTRO DE SERVICIO TECNICO" +
		"</div>" +
		"<div >" +
		"<b>ORDEN DE TRABAJO</b><br>" +
		codigo +
		"</div>" +
		"</div> <br>" +
		"<div class='row'>" +
		"<div style='margin-right: 75px; margin-left: 15px;'>" +
		"<b>Cedula/RUC:</b> " + cedula + " <br>" +
		"<b>Nombres:</b> " + nombre + "<br>" +
		"<b>Direccion:</b>  " + direccion + "<br>" +
		"<b>Correo:</b>  " + correo + "<br>" +
		"</div>" +
		"<div>" +
		"<b>Celular:</b>  " + celular + "<br>" +
		"<b>F. Ingreso:</b>  " + fecha_ing + "<br>" +
		"<b>F. Salida:</b>  " + fecha_sal + "<br>" +
		"<b>Total (Ref):</b>  " + 0 + "<br>" +
		"</div>" +
		"</div>" +
		"<hr>" +
		"<div class='row'>" +
		"<div class='col-xl-12 mb-20'>" +
		"<div class='table-wrap'>" +
		"<div class='table-responsive'>" +
		"<table class='table table-sm mb-0'>" +
		"<thead>" +
		"<th>Marca</th>" +
		"<th>Modelo</th>" +
		"<th>Daño Reportado</th>" +
		"<th>Observaciones</th>" +
		"<th>Des. Reparacion</th>" +
		"<th>Servicio</th>" +
		"</thead>" +
		"<tbody>";

	for (i = 0; i < x; i++) {
		for (j = 0; j < 6; j++) {
			var xy = document.getElementById("showequipo").rows[i].cells[j].innerText;

			html += "<td>" +
				xy +
				"</td>";
		}
		html += "<tr>";
	}

	html += "</tbody>" +
		"<tfoot>" +
		"<tr>" +
		"<th colspan='4'>" +
		"</th>" +
		"<td class='text-right' colspan='2'><small class='pr-5 text-muted font-weight-500 col-neg'>Sub Total: </small><span class='text-dark' id='subtotal' name='subtotal'>" + subtotal + "</span></td>" +
		"</tr>" +
		"</tfoot>" +
		"</table>" +
		"</div>" +
		"</div>" +
		"</div>" +
		"</div>" +
		"<div class='row'>" +
		"<div class='col-xs-6'>" +

		"</div>" +
		"<div class='col-xs-6'>" +

		"</div>" +
		"</div>";
	$("#modal-default .modal-body").html(html);
}

function modal(codigo) {
	var res = parseInt(codigo);
	$.ajax({
		url: " http://localhost/ssoporte/reparacion/Creparacion/imprimir/" + res,
		type: "post",
		dataType: "html",
		data: { id: res },
		async: false,
		success: function (data) {
			$("#modal-default").modal("show");
			/* $("#modal-default")
				.find(".modal-title")
				.text("Comprobante"); */
			$("#modal-default .modal-body").html(data);
		},
	});
}

function modal2(codigo) {
	var res = parseInt(codigo);
	$.ajax({
		url: " http://localhost/ssoporte/reparacion/Creparacion/imprimir2/" + res,
		type: "post",
		dataType: "html",
		data: { id: res },
		async: false,
		success: function (data) {			
		},
	});
}

function mayusculas(e) {
	e.value = e.value.toUpperCase();
}

function Letras(e) {
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
	especiales = "8-37-39-46";

	tecla_especial = false
	for (var i in especiales) {
		if (key == especiales[i]) {
			tecla_especial = true;
			break;
		}
	}

	if (letras.indexOf(tecla) == -1 && !tecla_especial) {
		return false;
	}
}

function Solo_Numerico(variable) {
	Numer = parseInt(variable);
	if (isNaN(Numer)) {
		return "";
	}
	return Numer;
}

function autofilltitle(){
    var title_en=document.getElementById('email');
    var title_id=document.getElementById('title_id');
    var title_pt_br=document.getElementById('title_pt-br');
    var data =title_en.value;
    title_id.value=title_en.value;
}

function ValNumero(Control) {
	Control.value = Solo_Numerico(Control.value);
	myFunction();
}

document.getElementById("txtcedula").addEventListener("focusout", verificar());
document.getElementById("codigoOrden").addEventListener("focusout", verificar);
document.getElementById("txtcedula").addEventListener("keyup", verificar);
document.getElementById("codigoOrden").addEventListener("keyup", verificar);

document.getElementById("txtcedula").addEventListener("keyup", myFunction);
document.getElementById("txtcedula").addEventListener("focusout", myFunction);


function myFunction() {
	var cad = document.getElementById("txtcedula").value.trim();
	$("input[name=txtusuario]").val(cad);
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
		} else {
			document.getElementById("txtcedula").focus();
			document.getElementById("txtcedula").style.borderColor = "#F44336";
			return false;
		}
	} else {
		document.getElementById("txtcedula").focus();
		document.getElementById("txtcedula").style.borderColor = "#F44336";
		return false;
	}
}

function verificar() {
	var cad = document.getElementById("txtcedula").value.trim();
	var cod = document.getElementById("codigoOrden").value.trim();
	if (cad == "" || cod == "") {
		document.getElementById("id_activ").disabled = true;
	} else {
		document.getElementById("id_activ").disabled = false;
	}
}

function valpsw() {
	var apellido = document.getElementById("txtapellidos").value.trim();
	var nombre = document.getElementById("txtnombre").value.trim();
	var direccion = document.getElementById("txtdireccion").value.trim();
	var cedula = document.getElementById("txtcedula").value.trim();
	var email = document.getElementById("email").value.trim();
	var celular = document.getElementById("txtcelular").value.trim();
	var rol = document.getElementById("rol").value.trim();

	var psw = document.getElementById("contraseñaA").value.trim();

	var Respuesta = validacampo(apellido, nombre, direccion, cedula, email, celular, rol, psw);

	if (Respuesta == 0) {
		$.ajax({
			type: "ajax",
			method: "post",
			url: "http://localhost/ssoporte/Manteiner/Cadmin/insert/",
			data: { 
				'apellidos': apellido,
				'nombres': nombre,
				'direccion': direccion,
				'cedula': cedula,
				'email': email,
				'celular': celular,
				'rol': rol,
				'psw': psw,
					 },
			async: false,
			dataType: "json",
			success: function (data) {
				if (data == 0) {
					window.location.href = "http://localhost/ssoporte/Manteiner/Cadmin";
				} else {
					window.location.href = "http://localhost/ssoporte/Manteiner/Cadmin/add";
				}
			},
		});
	} else {
		document.getElementById("mensaje").style.color = "#CE5454";
		$('#mensaje').html("Nota: Verifique que la contraseña contenga al menos: 1 letra Mayuscula, 1 Minuscula, 1 numero y al menos un simbolo raro");
	}
}

function validacampo(apellido, nombre, direccion, cedula, email, celular, rol, psw) {
	const securePasswordRegEx = /^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/;
	const emailVer = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
	var activar = 0;

	if (apellido == "") {
		document.getElementById("txtapellidos").style.color = "#CE5454";
		document.getElementById("txtapellidos").style.borderColor = "#CE5454";
		document.getElementById("msmape").style.color = "#CE5454";
		$('#msmape').html("Ingrese el Apellido");
		activar += 1;
	} else {
		document.getElementById("txtapellidos").style.color = "#73879C";
		document.getElementById("txtapellidos").style.borderColor = "#73879C";
		$('#msmape').html("");
	}
	if (nombre == "") {
		document.getElementById("txtnombre").style.color = "#CE5454";
		document.getElementById("txtnombre").style.borderColor = "#CE5454";
		document.getElementById("msmnom").style.color = "#CE5454";
		$('#msmnom').html("Ingrese el Nombre");
		activar += 1;
	} else {
		document.getElementById("txtnombre").style.color = "#73879C";
		document.getElementById("txtnombre").style.borderColor = "#73879C";
		$('#msmnom').html("");
	}
	if (direccion == "") {
		document.getElementById("txtdireccion").style.color = "#CE5454";
		document.getElementById("txtdireccion").style.borderColor = "#CE5454";
		document.getElementById("msmdir").style.color = "#CE5454";
		$('#msmdir').html("Ingrese el Direccion");
		activar += 1;
	} else {
		document.getElementById("txtdireccion").style.color = "#73879C";
		document.getElementById("txtdireccion").style.borderColor = "#73879C";
		$('#msmdir').html("");
	}

	if (email == "") {
		document.getElementById("email").style.color = "#CE5454";
		document.getElementById("email").style.borderColor = "#CE5454";
		document.getElementById("msmema").style.color = "#CE5454";
		$('#msmema').html("Ingrese el Correo");
		activar += 1;
	} else {
		if (emailVer.test(email) == false) {
			document.getElementById("email").style.color = "#CE5454";
			document.getElementById("email").style.borderColor = "#CE5454";
			document.getElementById("msmema").style.color = "#CE5454";
			$('#msmema').html("Ingrese un correo correcto");
			activar += 1;
		} else {
			document.getElementById("email").style.color = "#73879C";
			document.getElementById("email").style.borderColor = "#73879C";
			$('#msmema').html("");
		}
	}
	if (celular == "") {
		document.getElementById("txtcelular").style.color = "#CE5454";
		document.getElementById("txtcelular").style.borderColor = "#CE5454";
		document.getElementById("msmcel").style.color = "#CE5454";
		$('#msmcel').html("Ingrese el Celular");
		activar += 1;
	} else {
		document.getElementById("txtcelular").style.color = "#73879C";
		document.getElementById("txtcelular").style.borderColor = "#73879C";
		$('#msmcel').html("");
	}
	if (psw == "") {
		document.getElementById("contraseñaA").style.color = "#CE5454";
		document.getElementById("contraseñaA").style.borderColor = "#CE5454";
		document.getElementById("mensaje").style.color = "#CE5454";
		$('#mensaje').html("Ingrese el Contraseña");
		activar += 1;
	} else {
		if (securePasswordRegEx.test(psw) == false) {
			document.getElementById("contraseñaA").style.color = "#CE5454";
			document.getElementById("contraseñaA").style.borderColor = "#CE5454";
			document.getElementById("mensaje").style.color = "#CE5454";
			$('#mensaje').html("Nota: Verifique que la contraseña contenga al menos: 1 letra Mayuscula, 1 Minuscula, 1 numero y al menos un simbolo raro");
			activar += 1;
		} else {
			document.getElementById("contraseñaA").style.color = "#73879C";
			document.getElementById("contraseñaA").style.borderColor = "#73879C";
			$('#mensaje').html("");
		}
	}
	if (rol == 0) {
		document.getElementById("rol").style.color = "#CE5454";
		document.getElementById("rol").style.borderColor = "#CE5454";
		document.getElementById("msmusuario").style.color = "#CE5454";
		$('#msmusuario').html("Elija que sera el usuario");
		activar += 1;
	} else {
		document.getElementById("rol").style.color = "#73879C";
		document.getElementById("rol").style.borderColor = "#73879C";
		$('#msmusuario').html("");
	}

	if (activar == 0) {
		return 0;
	} else {
		return 1;
	}
}