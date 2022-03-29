<div class="right_col" role="main">
	<div class="">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12  ">
				<div class="x_panel">
					<div class="x_title">
						<h2>Órdenes de Reparacion</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="clearfix"></div>
						<div class="row">
							<div class="col-md-12">
								<div class="">
									<div class="x_content">
										<div class="row">
											<div class="clearfix"></div>
											<div class="col-md-12 col-sm-12">
												<div class="x_panel">
													<div class="x_title">
														<h2>ATENDIDOS <small></small></h2>
														<ul class="nav navbar-right panel_toolbox">
															<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
															</li>
															<li class="dropdown">
																<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
																<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
																	<a class="dropdown-item" href="#">Settings 1</a>
																	<a class="dropdown-item" href="#">Settings 2</a>
																</div>
															</li>
															<li><a class="close-link"><i class="fa fa-close"></i></a>
															</li>
														</ul>
														<div class="clearfix"></div>
													</div>
													<div class="x_content">
														<table class="table">
															<thead>
																<tr>
																	<th>Dueño</th>
																	<th>F Recibido</th>
																	<th>F Entrega</th>
																	<th>Estado</th>
																	<th>Opciones</th>
																</tr>
															</thead>
															<tbody>
																<?php foreach ($atendidos as $atendido) : ?>
																	<tr>
																		<input id="codigo" name="codigo" type="hidden" value="<?php echo $atendido->ID_OREPARACION; ?>">
																		<th><?php echo $atendido->APELLIDOS_PER; ?> <?php echo $atendido->NOMBRES_PER; ?></th>
																		<th><?php echo  $atendido->FECHA_INGRESO; ?></th>
																		<th><?php echo $atendido->FECHA_SALIDA; ?> </th>
																		<?php if ($atendido->ESTADO_ORDEN == 1) : ?>
																			<th>Activada</th>
																		<?php else : ?>
																			<th>Desactivada</th>
																		<?php endif; ?>
																		<th>
																			<a onclick="modal(<?php echo $atendido->ID_OREPARACION; ?>)" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Imprimir" data-toggle="modal" data-target="#modal-default"><i class="fa fa-print"></i></a>
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
