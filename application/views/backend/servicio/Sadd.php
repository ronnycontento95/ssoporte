<div class="right_col" role="main">
	<div class="">
		<div class="col-md-12 col-sm-12">
			<div class="x_panel">
				<div class="x_content">
					<span class="section"> Servicios </span>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12">

							<form class="form-horizontal form-label-left" novalidate action="<?php echo base_url(); ?>Servicio/Cservicio/insert" method="post">
								</p>

								<div class="item form-group">

									<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Tipo Servicio<span class="required">*</span>
									</label>
									<div class="col-md-5 col-sm-6">
										<input id="txttipo" class="form-control" name="txttipo" placeholder="" required="required" type="text"  onkeyup="mayusculas(this);" value="<?php echo set_value('txttipo'); ?>">
										<?php echo form_error('txttipo', "<span class='help-block'>", "</span>"); ?>
									</div>

									<label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Descripción<span class="required">*</span>
									</label>
									<div class="col-md-5 col-sm-6">
										<input id="txtdescripcion" class="form-control" name="txtdescripcion" required="required" onkeypress="return Letras(event);" onkeyup="mayusculas(this);" value="<?php echo set_value('txtdescripcion'); ?>">
										<?php echo form_error('txtdescripcion', "<span class='help-block'>", "</span>"); ?>
									</div>

								</div>
								<div class="item form-group">
									<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Costo<span class="required">*</span>
									</label>
									<div class="col-md-5 col-sm-6">
										<input id="txtcosto" class="form-control" name="txtcosto" placeholder="" required="required" type="text">
										<?php echo form_error('txtcosto', "<span class='help-block'>", "</span>"); ?>
									</div>
								</div>

								<div class="ln_solid"></div>
								<div class="form-group">
									<div class="col-md-12 offset-md-12">
										
										<button id="send" type="submit" class="btn btn-success">Guardar Servicio</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>