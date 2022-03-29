<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">

			</div>
			<div class="title_right">
				<div class="col-md-5 col-sm-5 form-group pull-right top_search">
					<div class="input-group">


					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="x_panel">

					<div class="x_content">
						<form class="form-horizontal form-label-left" action="<?php echo base_url(); ?>Cliente/Ccliente/insert" method="post">

							<span class="section">Clientes </span>
							<div class="item form-group">
								<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Nombres <span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input id="txtnombre" class="form-control" name="txtnombre" type="text" onkeypress="return Letras(event);" onkeyup="mayusculas(this);" value="<?php echo set_value('txtnombre'); ?>">
									<?php echo form_error('txtnombre', "<span class='help-block'>", "</span>"); ?>
								</div>

								<label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Apellidos <span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input type="txtapellidos" class="form-control" name="txtapellidos" value="<?php echo set_value('txtapellidos'); ?>" onkeypress="return Letras(event);" onkeyup="mayusculas(this);">
									<?php echo form_error('txtapellidos', "<span class='help-block'>", "</span>"); ?>
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Cédula <span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input type="txtcedula" class="form-control" id="txtcedula" name="txtcedula" value="<?php echo set_value('txtcedula'); ?>" onkeyup=" ValNumero(this);" maxlength="10">
									<?php echo form_error('txtcedula', "<span class='help-block'>", "</span>"); ?>
								</div>

								<label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Correo <span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input type="email" id="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>">
									<?php echo form_error('email', "<span class='help-block'>", "</span>"); ?>
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Celular <span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input type="txtcelular" class="form-control" name="txtcelular" value="<?php echo set_value('txtcelular'); ?>" onkeyup=" ValNumero(this);" maxlength="10">
									<?php echo form_error('txtcelular', "<span class='help-block'>", "</span>"); ?>
								</div>

								<label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Dirección <span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input type="txtdireccion" name="txtdireccion" class="form-control" value="<?php echo set_value('txtdireccion'); ?>" onkeypress="return Letras(event);" onkeyup="mayusculas(this);">
									<?php echo form_error('txtdireccion', "<span class='help-block'>", "</span>"); ?>
								</div>

							</div>

							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-12 offset-md-12">
									<button id="send" type="submit" class="btn btn-success">Guardar Cliente</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>