<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			
			<div class="x_content">
			<span class="section"> Lista De Clientes </span>
				<div class="table-responsive">
					<table id="myTable" class="table table-striped jambo_table bulk_action">
						<thead>
							<tr>
								<th>Cédula</th>
								<th>Apellidos y Nombres</th>
								<th>Celular</th>
								<th>Correo</th>
								<th>Dirección</th>
								<th>Estado</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody id="showinfo">

							<?php foreach ($alladmins as $alladmin) : ?>
								<tr>
									<th><?php echo  $alladmin->CEDULA_PER; ?></th>
									<th><?php echo $alladmin->APELLIDOS_PER; ?> <?php echo $alladmin->NOMBRES_PER; ?></th>
									<th><?php echo $alladmin->CELULAR_PER; ?></th>
									<th><?php echo $alladmin->CORREO_PER; ?></th>
									<th><?php echo $alladmin->DIRECCION_PER; ?></th>
									<?php if ($alladmin->ESTADO_PER == 1) : ?>
										<th>Activada</th>
									<?php else : ?>
										<th>Desactivada</th>
									<?php endif; ?>
									<th>
										<a class="btn btn-info" href="<?php echo base_url(); ?>Manteiner/Cadmin/editCli/<?php echo $alladmin->ID_PERSONA; ?>"><i class="fa  fa-pencil"></i></a>
										<?php if ($alladmin->ESTADO_PER == 1) : ?>
											<a class="btn btn-danger" onclick="DeleteCliente(<?php echo  $alladmin->ID_PERSONA; ?>);"><i class="fa  fa-trash"></i></a>
										<?php else : ?>
											<a class="btn btn-success" onclick="ActiveCliente(<?php echo  $alladmin->ID_PERSONA; ?>);"><i class="fa fa-check-square-o"></i></a>
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
