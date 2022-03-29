<div class="right_col" role="main">
	<div class="">
		<div class="page-title">

		</div>
		<div class="clearfix"></div>

		<div class="clearfix"></div>
		<div class="col-md-12 col-sm-12">
			<div class="x_panel">
				<div class="x_title">


					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<table id="example" class="display" style="width:100%">
						<thead>
							<tr>
								<th>ID</th>
								<th>Cliente</th>
								<th>Cédula</th>
								<th>F Recibido</th>
								<th>F Entrega</th>
								<!-- <th>Estado</th> -->
								<!-- <th>Opciones</th> -->
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
									<!-- <?php if ($pendiente->ESTADO_ORDEN == 1) : ?>
										<th>Activada</th>
									<?php else : ?>
										<th>Desactivada</th>
									<?php endif; ?>
									<th>
										<a onclick="modal(<?php echo $pendiente->ID_OREPARACION; ?>)" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Imprimir" data-toggle="modal" data-target="#modal-default"><i class="fa fa-print"></i></a>
									</th> -->
								</tr><?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</div>

</div>
