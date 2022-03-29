<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">

			<div class="x_content">
				<span class="section"> Administracion - Permisos de rutas </span>
				<div class="table-responsive">
					<table id="myTable" class="table table-striped jambo_table bulk_action">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>ruta</th>
								
								<!-- <th>Opciones</th> -->

							</tr>
						</thead>
						<tbody id="showinfo">
							<?php foreach ($allmenus as $per) : ?>
								<tr>
									<th><?php echo  $per->id_menu; ?></th>
									<th><?php echo  $per->nombre_menu; ?></th>
									<th><?php echo $per->link; ?></th>
									
									<!-- <?php if ($per->ESTADO_PER == 1) : ?>
										<th>Activada</th>
									<?php else : ?>
										<th>Desactivada</th>
									<?php endif; ?>
									<th>
										<a class="btn btn-info" href="<?php echo base_url(); ?>Manteiner/Cadmin/editCli/<?php echo $per->ID_PERSONA; ?>"><i class="fa  fa-pencil"></i></a>
										<?php if ($per->ESTADO_PER == 1) : ?>
											<a class="btn btn-danger" onclick="DeleteCliente(<?php echo  $per->ID_PERSONA; ?>);"><i class="fa  fa-trash"></i></a>
										<?php else : ?>
											<a class="btn btn-success" onclick="ActiveCliente(<?php echo  $per->ID_PERSONA; ?>);"><i class="fa fa-check-square-o"></i></a>
										<?php endif; ?>
									</th> -->
								</tr>
							<?php endforeach; ?>


						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>