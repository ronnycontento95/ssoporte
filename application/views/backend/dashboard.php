<div class="right_col" role="main">
	<div class="">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12  ">
				<div class="x_panel">
					<div class="x_title">
						<h2>Ordenes de Reparación</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="clearfix"></div>
						<div class="row">
							<div class="col-md-12">
								<div class="">
									<div class="x_content">
										<div class="row">
											<div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
												<div class="tile-stats">
													<div class="icon"><i class="fa fa-folder-open"></i>
													</div>
													<h3><?php echo $numeroPen; ?></h3>
													<div class="count">PENDIENTES</div>
													<br>
													<div class="col-md-12 offset-md-12">
														<button type="submit" class="btn btn-primary"><a>Información</a></button>
													</div>
												</div>
											</div>
											<div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
												<div class="tile-stats">
													<div class="icon"><i class="fa fa-check-square-o"></i>
													</div>
													<h3><?php echo $numeroAten; ?></h3>
													<div class="count">ATENDIDOS</div>
													<br>
													<div class="col-md-12 offset-md-12">
														<button type="submit" class="btn btn-primary"><a style="color:aliceblue;" href="<?php echo base_url(); ?>orden_reparacion/Corden/atendidos">Información</a></button>
													</div>
												</div>
											</div>

											<div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
												<div class="tile-stats">
													<div class="icon"><i class="fa fa-close"></i>
													</div>
													<h3><?php echo $numeroSR ?></h3>
													<div class="count">NO SE RESOLVIÓ</div>
													<br>
													<div class="col-md-12 offset-md-12">
														<button type="submit" class="btn btn-primary"><A>Información</A></button>

													</div>
												</div>
											</div>

											<div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
												<div class="tile-stats">
													<div class="icon"><i class="fa fa-check-square-o"></i>
													</div>
													<h3><?php echo $numeroHoy ?></h3>
													<div class="count">ENTREGAR HOY</div>
													<br>
													<div class="col-md-12 offset-md-12">
														<button type="submit" class="btn btn-primary"><a>Información</a></button>
													</div>
												</div>
											</div>
											<div class="clearfix"></div>
											<div class="col-md-12 col-sm-12">
												<div class="x_panel">
													<div class="x_title">
														<h2>PENDIENTES <small></small></h2>
														<div class="clearfix"></div>
													</div>
													<div class="x_content">
														<table class="table">
															<thead>
																<tr>
																	<th>Dueño</th>
																	<th>Fecha y Hora </th>
																	<th>Fecha de Entrega</th>
																	<th>Estado</th>
																	<th>Opciones</th>
																</tr>
															</thead>
															<tbody>
																<?php foreach ($pendientes as $pendiente) : ?>
																	<?php if ($pendiente->FECHA_SALIDA <= $fecha ) : ?>
																		<tr style="background-color: red;">
																		<input id="codigo" name="codigo" type="hidden" value="<?php echo $pendiente->ID_OREPARACION; ?>">
																			<th><?php echo $pendiente->APELLIDOS_PER; ?> <?php echo $pendiente->NOMBRES_PER; ?></th>
																			<th><?php echo  $pendiente->FECHA_INGRESO; ?></th>
																			<th><?php echo $pendiente->FECHA_SALIDA; ?> </th>
																			<?php if ($pendiente->ESTADO_ORDEN == 1) : ?>
																				<th>Activada</th>
																			<?php else : ?>
																				<th>Desactivada</th>
																			<?php endif; ?>
																			<th>
																				<a class="btn btn-info" href="<?php echo base_url(); ?>reparacion/Creparacion/editar/<?php echo $pendiente->ID_OREPARACION; ?>"><i class="fa  fa-pencil"></i></a>
																				<?php if ($pendiente->ESTADO_ORDEN == 1) : ?>
																					<a class="btn btn-danger" onclick="DeleteAdmin(<?php echo  $pendiente->ID_OREPARACION; ?>);"><i class="fa  fa-trash"></i></a>
																					<a onclick="modal(<?php echo $pendiente->ID_OREPARACION; ?>)" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Imprimir" data-toggle="modal" data-target="#modal-default"><i class="fa fa-print"></i></a>
																				<?php else : ?>
																					<a class="btn btn-success" onclick="ActiveAdmin(<?php echo  $pendiente->ID_OREPARACION; ?>);"><i class="fa fa-check-square-o"></i></a>
																					<a onclick="modal(<?php echo $pendiente->ID_OREPARACION; ?>)" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Imprimir" data-toggle="modal" data-target="#modal-default"><i class="fa fa-print"></i></a>
																				<?php endif; ?>
																			</th>
																		</tr>
																	<?php else : ?>
																		<tr style="background-color: yellow;">
																			<th><?php echo $pendiente->APELLIDOS_PER; ?> <?php echo $pendiente->NOMBRES_PER; ?></th>
																			<th><?php echo  $pendiente->FECHA_INGRESO; ?></th>
																			<th><?php echo $pendiente->FECHA_SALIDA; ?> </th>
																			<?php if ($pendiente->ESTADO_ORDEN == 1) : ?>
																				<th>Activada</th>
																			<?php else : ?>
																				<th>Desactivada</th>
																			<?php endif; ?>
																			<th>
																				<a class="btn btn-info" href="<?php echo base_url(); ?>reparacion/Creparacion/editar/<?php echo $pendiente->ID_OREPARACION; ?>"><i class="fa  fa-pencil"></i></a>
																				<?php if ($pendiente->ESTADO_ORDEN == 1) : ?>
																					
																				<?php else : ?>
																					<a class="btn btn-success" onclick="ActiveAdmin(<?php echo  $pendiente->ID_OREPARACION; ?>);"><i class="fa fa-check-square-o"></i></a>
																					<a onclick="modal(<?php echo $pendiente->ID_OREPARACION; ?>)" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Imprimir" data-toggle="modal" data-target="#modal-default"><i class="fa fa-print"></i></a>
																				<?php endif; ?>
																			</th>
																		</tr>
																	<?php endif; ?>



																<?php endforeach; ?>
															</tbody>
														</table>
													</div>
												</div>
											</div>

											
										</div>
									</div>
								</div>
							</div>
						</div>
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
