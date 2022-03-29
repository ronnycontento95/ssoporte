<div class="right_col" role="main">
	<div class="">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="x_panel">
					<div class="x_content">
						<form class="form-horizontal form-label-left" novalidate method="post">
							<input type='hidden' name='idcod'>
							<h4>Código Orden <input id="codigo" name="codigo" type="text" value="<?php echo $orden ?>" disabled> </h4>
							<h2 class="color-black">Datos del Equipo</h2>
							<input type="hidden" id="cont" value='0'></input>
							<div class="col-xl-12 mb-20">
								<div class="table-wrap">
									<div class="table-responsive">
										<table class="table table-sm mb-0">
											<thead>
												<td>Marca</td>
												<td>Modelo</td>
												<td>Daño Reportado</td>
												<td>Observaciones</td>
												<td>Reparar</td>
												<td>Valor</td>
												<td>Opción</td>
											</thead>
											<tbody id="showtotal">
												<?php $total = 0; ?>
												<?php foreach ($datoTablaOrden as $datoTabla) : ?>
													<?php $total += $datoTabla->COSTO; ?>
													<tr>
														<input type="hidden" id="totalinit" value="<?php echo $total; ?>">
														<input type="hidden" name="contador" id="contador" value="<?php echo $cont; ?>">
														<input type="hidden" name="idRep[]" id="" value="<?php echo  $datoTabla->ID_DETALLE; ?>">
														<input type="hidden" name="idDetREp" id="idDetREp" value="<?php echo  $datoTabla->ID_OREPARACION; ?>">
														<td><?php echo $datoTabla->MARCA; ?></td>
														<td><?php echo $datoTabla->MODELO; ?></td>
														<td><?php echo $datoTabla->OBSERVACIONES; ?></td>
														<td><?php echo $datoTabla->DAÑO_REPORTADO; ?></td>
														<td><textarea name="reparacion" id="reparacion<?php echo  $datoTabla->ID_DETALLE; ?>" cols="10" rows="1"></textarea></td>
														<td><input name="valor" id="valor<?php echo  $datoTabla->ID_DETALLE; ?>" type="text" size="4" value="0"></td>
														<td>
															<a onclick="agregar(<?php echo  $datoTabla->ID_DETALLE; ?>,<?php echo  $datoTabla->ID_OREPARACION; ?>)" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Guardar"><i class="fa  fa-check"></i></a>
															<a class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Actualizar avance"><i class="fa  fa-pencil"></i></a>
															<a onclick="modal()" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Imprimir" data-toggle="modal" data-target="#modal-default"><i class="fa fa-print"></i></a>
														</td>

													</tr>
												<?php endforeach; ?>
											</tbody>
											<tfoot>
												<td>Marca</td>
												<td>Modelo</td>
												<td>Daño Reportado</td>
												<td>Observaciones</td>
												<td>Reparar</td>
												<td>Valor</td>
												<td>Opción</td>
												<td></td>
											</tfoot>
										</table>
									</div>
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-12 offset-md-12">
									<button type="submit" class="btn btn-primary"><a style="color:aliceblue" href="<?php echo base_url(); ?>Orden_reparacion/Corden/mostrar">Regresar</a></button>

								</div>
							</div>
						</form>
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