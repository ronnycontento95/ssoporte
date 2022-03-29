<div class="right_col" role="main">
	<div class="">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="x_panel">

					<div class="x_content">
						<form class="form-horizontal form-label-left" method="POST" action="<?php echo base_url(); ?>orden_reparacion/Corden/insert" novalidate>
							<input type='hidden' name='idcod' value="<?php echo $venta; ?>">
							<div class="item form-group">
								<div class="col-md-6">
									<span class="section"> Orden de Reparación</span>
								</div>
								<div class="col-md-6">
									<h4>Código Orden <input id="codigo" name="codigo" type="text" value="<?php echo $venta; ?>" disabled> </h4>
								</div>
							</div>
							</p>
							<div class="item form-group">
								<label class="col-form-label col-md-1 col-sm-4 label-align" for="email">Técnico Asignado<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<select id="idtecnico" name="idtecnico" class="form-control" style="width:100%;">
										<option value="">SELECCIONE</option>
										<?php $correo = ""; ?>
										<?php foreach ($alltecnicos as $alltecnico) : ?>
											<option value="<?php echo $alltecnico->ID_PERSONA; ?>"> <?php echo $alltecnico->APELLIDOS_PER . "  " . $alltecnico->NOMBRES_PER; ?></option>
											<?php $correo = $alltecnico->CORREO_PER; ?>
											<?php endforeach; ?>
									</select>
								</div>
								<!-- ENVIAR EMAIL -->

								<div class="form-group">
									<label for="fingreso" class="col-sm-3 control-label">Ingreso</label>
									<div class="date col-sm-9">
										<input type="text" class="form-control pull-right" disabled value="<?php echo date("Y-m-d H:i:s") ?>" name="fingreso" id="fingreso" placeholder="00/00/0000">

									</div>
									<!-- /.input group -->
								</div>
							</div>
							<input type="hidden" id="idPer" name="idPer" value=''></input>
							<span>
								<h2 class="color-black">Datos del Cliente</h2>
							</span>
							<input type="hidden" id="cont" value='0'></input>
							<div class="item form-group">
								<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Cédula<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input type="txtcedula" id="autoc1" class="form-control" name="txtcedula" value="<?php echo set_value('txtcedula'); ?>" onkeyup=" ValNumero(this);" maxlength="10">
									<?php echo form_error('txtcedula', "<span class='help-block'>", "</span>"); ?>
									<a href="<?php echo base_url(); ?>Cliente/Ccliente/add"><span class="fa fa-plus-square form-control-feedback right" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Agregar nuevo cliente"></span></a>
								</div>


							</div>
							<div class="item form-group">

								<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Nombres<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input id="txtnombre" disabled class="form-control" name="txtnombre" placeholder="" type="text">
								</div>

								<label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Apellidos<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input disabled id="txtapellidos" type="text" class="form-control" placeholder="" name="txtapellidos">
								</div>

							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Correo<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input disabled id="txtcorreo" class="form-control" name="txtcorreo" placeholder="" type="text">
								</div>

								<label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Dirección<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input disabled id="txtdireccion" type="text" class="form-control" placeholder="" name="txtdireccion">
								</div>
							</div>

							<div class="item form-group">

								<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Celular<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input disabled id="txtcelular" class="form-control" name="txtcelular" placeholder="" type="text">
								</div>

							</div>
							<h2 class="color-black">Datos del Equipo</h2>
							</span>
							<input type="hidden" id="cont" value='0'></input>
							<div class="item form-group">
								<label class="col-form-label col-md-1 col-sm-4 label-align" for="email">Fecha de salida:<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input type="date" class="form-control pull-right" value="<?php echo date("Y-m-d")?>" name="fsalida" id="fsalida" placeholder="00/00/0000" min="<?php echo $hoy; ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-1 col-sm-4 label-align" for="email">Tipo Servicio<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<select id="idservicio" name="idservicio" class="form-control" style="width:100%;">
										<option value="">SELECCIONE</option>
										<?php foreach ($allservicios as $allservicio) : ?>
											<option value="<?php echo $allservicio->ID_SERVICIO; ?>,<?php echo $allservicio->COSTO; ?>"> <?php echo $allservicio->TIPO_SERVICIO; ?> </option>
										
											
											<?php endforeach; ?>
									</select>
								</div>
								<label class="col-form-label col-md-1 col-sm-4 label-align" for="email">Marcas<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<select id="txtmarca" name="txtmarca" class="form-control" style="width:100%;">
										<option value="">SELECCIONE</option>
										<?php foreach ($allmarcas as $allmarca) : ?>
											<option value="<?php echo $allmarca->id_mar; ?>"><?php echo $allmarca->nom_mar; ?></option>

										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="item form-group">


								<label class="col-form-label col-md-1 col-sm-4 label-align" for="email">Modelo<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-4">
									<input id="txtmodelo" class="form-control" name="txtmodelo" nkeypress="return Letras(event);" onkeyup="mayusculas(this);" value="<?php echo set_value('txtmodelo'); ?>">
									<?php echo form_error('txtmodelo', "<span class='help-block'>", "</span>"); ?>
								</div>

								<label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Serie<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-4">
									<input id="txtserie" class="form-control" name="txtserie" onkeyup="mayusculas(this);" value="<?php echo set_value('txtserie'); ?>">
									<?php echo form_error('txtserie', "<span class='help-block'>", "</span>"); ?>
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Daño Reportado<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<textarea class="resizable_textarea form-control" id="txtdaño" value="<?php echo set_value('txtdaño'); ?>"></textarea>
									<?php echo form_error('txtdaño', "<span class='help-block'>", "</span>"); ?>
								</div>
								<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Observaciones<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<textarea class="resizable_textarea form-control" id="txtobservaciones"></textarea>
								</div>

							</div>


							<div>
								<p class="btn btn-primary btn-rounded" onclick="agregarEquipo()">Agregar Equipo</p>
							</div>
							<div class="ln_solid"></div>
							<div class="col-xl-12 mb-20" id="tabla">
								<div class="table-wrap">
									<div class="table-responsive">
										<table class="table table-sm mb-0" id="idtable">
											<thead>

												<!-- <th>N° Equipo</th> -->
												<th>Marca</th>
												<th>Modelo</th>
												<th>Daño Reportado</th>
												<th>Observaciones</th>
												<th>Tipo S</th>
												<th> $ </th>
											</thead>
											<tbody id="showequipo">

											</tbody>
											<tfoot>
												<tr>
													<th colspan="5"></th>
													<td class="text-right" colspan="2"><small class="pr-5 text-muted font-weight-500 col-neg">Total:

														</small><span class="text-dark" id="subtotal" name="subtotal">$0</span></td>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
							</div>


								<!-- <textarea  id="txtnombreCC" name="message" class="form-control" placeholder="Enter message here" required> </textarea><br>

							</label>
							<div class="col-md-5 col-sm-6">
								<input  id="txtemail" class="form-control" name="clienteemail" placeholder="" type="text">
								<textarea  id="txtnombreCCC" name="clientemessage" class="form-control" placeholder="Enter message here" required></textarea><br>

							</div> -->

							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-12 offset-md-12">
									<button type="" class="btn btn-primary">Cancelar</button>
									<button type="submit" class="btn btn-primary">Registrar</button>
									<p onclick="Registro()" class="btn btn-success">Imprimir</p>
									<p></p>
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