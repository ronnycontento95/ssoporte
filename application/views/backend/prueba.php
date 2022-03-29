<div class="right_col" role="main">
	<div class="">
		<div class="page-title">

		</div>
		<?php if ($this->session->flashdata("ingresologin")) : ?>
			<div class="alert alert-info alert-dismissible " role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
				</button>
				<?php echo $this->session->flashdata("ingresologin"); ?></p>
			</div>
		<?php endif; ?>
		<?php if ($this->session->flashdata("guardadoorden")) : ?>
			<div class="alert alert-info alert-dismissible " role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
				</button>
				<?php echo $this->session->flashdata("guardadoorden"); ?></p>
			</div>
		<?php endif; ?>
		<div class="clearfix"></div>
		<section class="main-block">
			<div class="container" id="Servicio">
				<div class="row justify-content-center">
					<div class="col-md-5">


						<h3>Consulta Orden Reparación</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-5">
					<label>Cédula</label>
					<input type="text" class="form-control" id="txtcedula" placeholder="Ingrese la cédula">
					<span id="msmape" name="mensaje"></span>
				</div>
				<div class="form-group col-md-5">
					<label>Código de Orden</label>
					<input type="text" class="form-control" id="codigoOrden" id="codigoOrden" placeholder="Ingrese el codigo de orden">
				</div>
				<div class="form-group col-md-2" style="margin-top: 30px">
					<button class="btn btn-primary" id="id_activ" onclick="secondmodal()" data-toggle="tooltip" data-placement="top" data-toggle="modal" data-target="#modal-default" disabled="">Buscar</button>
				</div>

					<!-- <button><li><a href="<?php echo base_url(); ?>reparacion/Creparacion/imprimir2">Prueba</a></li></button> -->
					
			</div>
	</div>
	</section>
	<div class="clearfix"></div>
	<div class="col-md-12 col-sm-12">
		<div class="x_panel">
			<div class="x_title">


				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<table id="myTable" class="display" style="width:100%">
					<thead>
						<tr>
							<th>Código de Orden</th>
							<th>Cliente</th>
							<th>Cédula</th>
							<th>F Recibido</th>
							<th>F Entrega</th>
							<th>Estado</th>
							<th>Opciones</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($pendientes as $pendiente) : ?>
							<tr>
								<th><?php echo $pendiente->ID_OREPARACION; ?></th>
								<input id="codigo" name="codigo" type="hidden" value="<?php echo $pendiente->ID_OREPARACION; ?>">
								<th><?php echo $pendiente->APELLIDOS_PER; ?> <?php echo $pendiente->NOMBRES_PER; ?></th>
								<th> <?php echo $pendiente->CEDULA_PER; ?></th>
								<th><?php echo $pendiente->FECHA_INGRESO; ?></th>
								<th><?php echo $pendiente->FECHA_SALIDA; ?> </th>
								<?php if ($pendiente->ESTADO_ORDEN == 1) : ?>
									<th>Activada</th>
								<?php else : ?>
									<th>Desactivada</th>
								<?php endif; ?>
								<th>
									<a onclick="modal(<?php echo $pendiente->ID_OREPARACION; ?>)" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Imprimir" data-toggle="modal" data-target="#modal-default"><i class="fa fa-print"></i></a>
								</th>
							</tr><?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>

</div>

<div class="modal fade bs-example-modal-lg" id="modal-default">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Comprobante soporte</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<p>One fine body&hellip;</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary btn-imprimir"><span class="fa fa-print"></span> Imprimir</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->