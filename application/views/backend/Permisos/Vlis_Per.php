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
								<th>Rol</th>
								<th>Menu</th>
								<th>Leer</th>
								<th>Agregar</th>
								<th>Editar</th>
								<th>Emiminar</th>
								<!-- <th>Opciones</th> -->

							</tr>
						</thead>
						<tbody id="showinfo">
							<?php foreach ($allpermisos as $per) : ?>
								<tr>
									<th><?php echo  $per->id_permiso; ?></th>
									<th><?php echo  $per->TIPO_ROL; ?></th>
									<th><?php echo $per->nombre_menu; ?></th>
									<th>
										<?php if ($per->read == 1) : ?>
											<span class="fa fa-check"></span>
										<?php else : ?>
											<span class="fa fa-times"></span>
										<?php endif; ?>
									</th>
									<th>
										<?php if ($per->insert == 1) : ?>
											<span class="fa fa-check"></span>
										<?php else : ?>
											<span class="fa fa-times"></span>
										<?php endif; ?>
									</th>
									<th>
										<?php if ($per->update == 1) : ?>
											<span class="fa fa-check"></span>
										<?php else : ?>
											<span class="fa fa-times"></span>
										<?php endif; ?>
									</th>
									<th>
										<?php if ($per->delete == 1) : ?>
											<span class="fa fa-check"></span>
										<?php else : ?>
											<span class="fa fa-times"></span>
										<?php endif; ?>
									</th>
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