<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_content">
				<span class="section"> Lista De Servicios </span>
				<div class="table-responsive">
					<table id="myTable" class="table table-striped jambo_table bulk_action">
						<thead>
							<tr>
								<th>ID</th>
								<th>TIPO SERVICIO</th>
								<th>DESCRIPCIÓN</th>
								<th>ESTADO</th>
								<th>OPCIONES</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($allservicios as $allservicio) : ?>
								<tr>
									<th><?php echo $allservicio->ID_SERVICIO; ?></th>
									<th><?php echo  $allservicio->TIPO_SERVICIO; ?></th>
									<th><?php echo $allservicio->DESCRIPCION; ?> </th>
									<?php if ($allservicio->ESTADO_SER == 1) : ?>
										<th>Activada</th>
									<?php else : ?>
										<th>Desactivada</th>
									<?php endif; ?>
									<th>
										<a class="btn btn-info" href="<?php echo base_url(); ?>Servicio/Cservicio/edit/<?php echo $allservicio->ID_SERVICIO; ?>"><i class="fa  fa-pencil"></i></a>
										<?php if ($allservicio->ESTADO_SER == 1) : ?>
											<a class="btn btn-danger" onclick="DeleteService(<?php echo  $allservicio->ID_SERVICIO; ?>);"><i class="fa  fa-trash"></i></a>
										<?php else : ?>
											<a class="btn btn-success" onclick="ActiveService(<?php echo  $allservicio->ID_SERVICIO; ?>);"><i class="fa fa-check-square-o"></i></a>
										<?php endif; ?>
									</th>
								</tr>
							<?php endforeach; ?>
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
