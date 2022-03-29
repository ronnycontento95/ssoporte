<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			
			
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="x_panel">
						<form class="form-horizontal form-label-left" novalidate action="<?php echo base_url(); ?>Servicio/Cservicio/update" method="post">
							
							<span class="section">Editar Servicios</span>
							<input id="txtid" name="txtid" type="hidden" value="<?php echo $allservicio->ID_SERVICIO; ?>">
							<div class="item form-group">
								<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Tipo Servicio<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input id="tipoS" id="txttipo" class="form-control" name="txttipo" placeholder="" required="required" type="text" value="<?php echo $allservicio->TIPO_SERVICIO; ?>">
								</div>

								<label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Descripción<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input id="descripcionS" type="txtdescripcion" class="form-control" name="txtdescripcion" required="required" value="<?php echo $allservicio->DESCRIPCION; ?>">
								</div>
							</div>


							<div class="item form-group">
								<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Costo<span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input id="costoS" type="txtcosto" class="form-control" name="txtcosto" value="<?php echo $allservicio->COSTO; ?>">
								</div>
							</div>

					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-12 offset-md-12">
							<button type="submit" class="btn btn-primary">Cancelar</button>
							<button id="send" type="submit" class="btn btn-success">Guardar</button>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
