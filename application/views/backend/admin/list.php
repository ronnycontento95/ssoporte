<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
		
			<div class="x_content">
			<span class="section">Lista de Usuarios </span>
				<div class="item form-group">
					<label class="col-form-label col-md-1 col-sm-4 label-align" for="email">
						<h4>USUARIO</h4>
					</label>
					<div class="col-md-5 col-sm-6">
						<select name="rol" id="rol" class="form-control">
							<option value="0">---SELECCIONE---</option>
							<?php foreach ($allrols as $allrol) : ?>
								<option value="<?php echo $allrol->ID_ROL; ?>"><?php echo $allrol->TIPO_ROL; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="table-responsive">
					<table id="myTable" class="table table-striped jambo_table bulk_action">
						<thead>
							<tr>
								<th>Cédula</th>
								<th>Apellidos y Nombres</th>
								<th>Celular</th>
								<th>Correo</th>
								<th>Dirección</th>
								<th>Usuario</th>
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
									<th><?php echo $alladmin->TIPO_ROL; ?></th>
									<?php if ($alladmin->ESTADO_PER == 1) : ?>
										<th>Activada</th>
									<?php else : ?>
										<th>Desactivada</th>
									<?php endif; ?>
									<th>
										<a class="btn btn-info" href="<?php echo base_url(); ?>Manteiner/Cadmin/edit/<?php echo $alladmin->ID_PERSONA; ?>"><i class="fa  fa-pencil"></i></a>
										<?php if ($alladmin->ESTADO_PER == 1) : ?>
											<a class="btn btn-danger" onclick="DeleteAdmin(<?php echo  $alladmin->ID_PERSONA; ?>);"><i class="fa  fa-trash"></i></a>
										<?php else : ?>
											<a class="btn btn-success" onclick="ActiveAdmin(<?php echo  $alladmin->ID_PERSONA; ?>);"><i class="fa fa-check-square-o"></i></a>
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
