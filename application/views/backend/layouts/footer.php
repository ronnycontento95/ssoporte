<footer>
	<div class="pull-right">
	</div>
	<div class="clearfix"></div>
</footer>

</div>
</div>

<!-- <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/dataTables/jquery-3.5.1.js"></script>
<script src="<?php echo base_url(); ?>assets/jquery-ui/jquery-ui.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!--Mensajes-->
<script src="<?php echo base_url(); ?>assets/msg/dist/sweetalert2.js"></script>

<script src="<?php echo base_url(); ?>assets/dataTables/dataTables.min.js"></script>

<script src="<?php echo base_url(); ?>assets/util.js"></script>

<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/pnotify/dist/pnotify.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/pnotify/dist/pnotify.buttons.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/pnotify/dist/pnotify.nonblock.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo base_url(); ?>assets/vendors/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-datetimepicker -->
<script src="<?php echo base_url(); ?>assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- Ion.RangeSlider -->
<script src="<?php echo base_url(); ?>assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<!-- Bootstrap Colorpicker -->
<script src="<?php echo base_url(); ?>assets/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- jquery.inputmask -->
<script src="<?php echo base_url(); ?>assets/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

<script src="<?php echo base_url(); ?>assets/dist/js/jquerry-print.js"></script>
<!-- jQuery Knob -->
<script src="<?php echo base_url(); ?>assets/vendors/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- Cropper -->
<script src="<?php echo base_url(); ?>assets/vendors/cropper/dist/cropper.min.js"></script>

<!-- <script src="<?php echo base_url(); ?>assets/vendors/jquery.datetimepicker.min.js"></script> -->

<script src="<?php echo base_url(); ?>assets/build/js/custom.js"></script>

<script src="<?php echo base_url(); ?>assets/frontend/js/util.js"></script>


<script src="<?php echo base_url(); ?>assets/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables/js/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables/js/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables/js/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables/js/buttons.print.min.js"></script>

<!-- <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="630f84bc903844afb043e3ba-|49" defer=""></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="d084fca6cd0b8d4904c336e3-|49" defer=""></script> -->

<script>
	$(document).ready(function() {
		$('#myTable').DataTable({
			"search": {},
			"language": {
				"sProcessing": "Procesando...",
				"sLengthMenu": "Mostrar _MENU_ registros",
				"sZeroRecords": "No se encontraron resultados",
				"sEmptyTable": "Ningún dato disponible en esta tabla",
				"sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
				"sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
				"sInfoPostFix": "",
				"sSearch": "Buscar:",
				"sUrl": "",
				"sInfoThousands": ",",
				"sLoadingRecords": "Cargando...",
				"oPaginate": {
					"sFirst": "Primero",
					"sLast": "Último",
					"sNext": "Siguiente",
					"sPrevious": "Anterior"
				},
				"oAria": {
					"sSortAscending": ": Activar para ordenar la columna de manera ascendente",
					"sSortDescending": ": Activar para ordenar la columna de manera descendente"
				}
			},
		});

		/* $('#fingreso').datepicker({
			language: "es",
			dateFormat: 'yyy-dd-mm HH:MM:ss',
			autoClose: true
		});

		$('#fsalida').datepicker({
			language: "es",
			dateFormat: "yyy-dd-mm HH:MM:ss",
			autoClose: true
		});
		//Timepicker
		$('.timepicker').timepicker({
			showInputs: false
		}); */
	});


	$('#example').DataTable({
      dom: 'Bfrtip',
      buttons: [
        {
          extend: 'excelHtml5',
          title: 'Listado de citas medicas',
          download: 'open',
          exportOptions:{
            columns:[0,1,2,3,4,5]
          },
        },
        {
          extend: 'pdfHtml5',
          title: 'Listado de Citas medicas',
        },
      ],
      "language": {
        "sProcessing": "Procesando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible en esta tabla",
        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix": "",
        "sSearch": "Buscar:",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
          "sFirst": "Primero",
          "sLast": "Último",
          "sNext": "Siguiente",
          "sPrevious": "Anterior"
        },
        "oAria": {
          "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
      },
    });
	
	$(document).on("click", ".imprmir", function() {
		var reporte = $(this).val();
		alert(reporte);
		$.ajax({
			url: base_url + "administracion/ccitas/viewcita",
			type: "post",
			dataType: "html",
			data: {
				id: reporte
			},
			success: function(data) {
				$("#modal-default .modal-body").html(data);
			}
		});
	});

	//Impresion
	$(document).on("click", ".btn-imprimir", function() {
		$("#modal-default .modal-body").print({
			title: "Comprobante",
		});
	});

	/* $("#datepicker").datepicker({
		inline: true
	}); */

	//Llenado de select dependiendo de otro select
	$('#rol').on('change', function() {
		var ID_ROL = $(this).val();
		$.ajax({
			url: "http://localhost/ssoporte/Manteiner/Cadmin/getroles/" + ID_ROL,
			type: "post",
			data: {
				'idrol': ID_ROL
			},
			dataType: 'json',
			success: function(data) {
				var html = "";
				var i;
				for (i = 0; i < data.length; i++) {
					if (data[i].ESTADO_PER == 1) {
						html += "<tr>" + "<th>" + data[i].CEDULA_PER + "</th>" +
							"<th>" + data[i].APELLIDOS_PER + " " + data[i].NOMBRES_PER + "</th>" +
							"<th>" + data[i].CELULAR_PER + "</th>" +
							"<th>" + data[i].CORREO_PER + "</th>" +
							"<th>" + data[i].DIRECCION_PER + "</th>" +
							"<th>" + data[i].TIPO_ROL + "</th>" +
							"<th> Activada </th>" +
							"<th>" +
							"<a class='btn btn-info' href=' http://localhost/ssoporte/Manteiner/Cadmin/edit/" + data[i].ID_PERSONA + "'><i class='fa  fa-pencil'></i>" + "</a>" +
							"<a class='btn btn-danger' onclick='DeleteAdmin(" + data[i].ID_PERSONA + ");'><i class='fa  fa-trash'></i>" + "</a>" +
							"</th>" +
							"</tr>";
					} else {
						html += "<tr>" + "<th>" + data[i].CEDULA_PER + "</th>" +
							"<th>" + data[i].APELLIDOS_PER + " " + data[i].NOMBRES_PER + "</th>" +
							"<th>" + data[i].CELULAR_PER + "</th>" +
							"<th>" + data[i].CORREO_PER + "</th>" +
							"<th>" + data[i].DIRECCION_PER + "</th>" +
							"<th>" + data[i].TIPO_ROL + "</th>" +
							"<th> Desactivada </th>" +
							"<th>" +
							"<a class='btn btn-info' href=' http://localhost/ssoporte/Manteiner/Cadmin/edit/" + data[i].ID_PERSONA + "'><i class='fa  fa-pencil'></i>" + "</a>" +
							"<a class='btn btn-success' onclick='ActiveAdmin(" + data[i].ID_PERSONA + ");'><i class='fa  fa-check-square-o'></i></a>" +
							"</th>" +
							"</tr>";
					}
				}
				$("#showinfo").html(html);
			},
			error: function() {
				alert("error");
			}
		});
	});
	//Autocompletado
	$('#autoc1').autocomplete({
		source: function(request, response) {
			$.ajax({
				url: "http://localhost/ssoporte/orden_reparacion/Corden/getClientes",
				type: "post",
				dataType: "json",
				data: {
					valor: request.term
				},
				success: function(data) {
					response(data);
				}
			});
		},
		minLength: 2,
		select: function(event, ui) {
			data = ui.item.id_persona + "*" + ui.item.cedula + "*" + ui.item.nombres + "*" + ui.item.apellidos + "*" + ui.item.correo + "*"
			 + ui.item.direccion + "*" + ui.item.celular + "*" + ui.item.correo + "*" + ui.item.nombres + "*" + ui.item.apellidos + "*"  + ui.item.label ;
			infoPaciente = data.split("*");
			$("#idPer").val(infoPaciente[0]);
			$("#txtcedula").val(infoPaciente[1]);
			$("#txtnombre").val(infoPaciente[2]);
			$("#txtapellidos").val(infoPaciente[3]);
			$("#txtcorreo").val(infoPaciente[4]);
			$("#txtdireccion").val(infoPaciente[5]);
			$("#txtcelular").val(infoPaciente[6]);
			$("#txtemail").val(infoPaciente[7]);
			$("#txtnombreC").val(infoPaciente[8]);
			$("#txtnombreC").val(infoPaciente[9]);
		},
	});

	
</script>
<script>
	/* $.datepicker.regional['es'] = {
		closeText: 'Cerrar',
		prevText: '< Ant',
		nextText: 'Sig >',
		currentText: 'Hoy',
		monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
		monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
		dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
		dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
		dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
		weekHeader: 'Sm',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''
	};
	$.datepicker.setDefaults($.datepicker.regional['es']); */
	/* $('#fingreso').datepicker({
		language: "es",
		dateFormat: "yy-mm-d",
		autoClose: true
	});
	$('#fsalida').datepicker({
		language: "es",
		dateFormat: "yy-mm-d",
		autoClose: true
	}); */
	$(function() {
		$('[data-toggle="tooltip"]').tooltip()
	})
</script>
</body>

</html>