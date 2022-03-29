<div class="right_col" role="main">
	<div class="page-title">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="x_panel">

					<form>
						<span class="section">Usuarios </span>
						<div class="item form-group">
							<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Nombre <span class="required">*</span>
							</label>
							<div class="col-md-5 col-sm-6">
								<input id="txtnombre" class="form-control" name="txtnombre" type="text" onkeypress="return Letras(event);" onkeyup="mayusculas(this);" value="<?php echo set_value('txtnombre'); ?>">
								<span id="msmnom" name="mensaje"></span>
							</div>

							<label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Apellidos <span class="required">*</span>
							</label>
							<div class="col-md-5 col-sm-6">
								<input type="txtapellidos" id="txtapellidos" class="form-control" name="txtapellidos" value="<?php echo set_value('txtapellidos'); ?>" onkeypress="return Letras(event);" onkeyup="mayusculas(this);">
								<span id="msmape" name="mensaje"></span>
							</div>
						</div>
						<div class="item form-group">
							<!-- <label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Cédula <span class="required">*</span>
							</label>
							 -->
							<!-- <div class="col-md-5 col-sm-6">
								<input type="txtcedula" class="form-control" id="txtcedula" name="txtcedula" value="<?php echo set_value('txtcedula'); ?>" onkeyup=" ValNumero(this);" maxlength="10">
								<span id="msmced" name="mensaje"></span>
							</div> -->
							<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Cédula <span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input type="txtcedula" class="form-control" id="txtcedula" name="txtcedula" value="<?php echo set_value('txtcedula'); ?>" onkeyup=" ValNumero(this);" maxlength="10">
									<?php echo form_error('txtcedula', "<span class='help-block'>", "</span>"); ?>
								</div>

							<label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Correo <span class="required">*</span>
							</label>
							<div class="col-md-5 col-sm-6">
								<input type="email" id="email" name="email" class="form-control email" onkeyup="autofilltitle()" value="<?php echo set_value('email'); ?>">
								<span id="msmema" name="mensaje"></span>
							</div>

						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Celular <span class="required">*</span>
							</label>
							<div class="col-md-5 col-sm-6">
								<input type="txtcelular" id="txtcelular" class="form-control" name="txtcelular" value="<?php echo set_value('txtcelular'); ?>" onkeyup=" ValNumero(this);" maxlength="10">
								<span id="msmcel" name="mensaje"></span>
							</div>

							<label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Dirección <span class="required">*</span>
							</label>
							<div class="col-md-5 col-sm-6">
								<input type="txtdireccion" name="txtdireccion" id="txtdireccion" class="form-control" value="<?php echo set_value('txtdireccion'); ?>" onkeyup="mayusculas(this);">
								<span id="msmdir" name="mensaje"></span>
							</div>

						</div>
						<span>
							<h2 class="color-black">Cuenta</h2>
						</span>
						<div class="item form-group">
							<label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Usuario <span class="required">*</span>
							</label>
							<div class="col-md-5 col-sm-6">

								<input id="title_id" type="text" name="txtusuario" id="txtusuario" required="required" class="form-control" value="<?php echo set_value('txtusuario'); ?>" disabled>
							</div>

							<label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Contraseña <span class="required">*</span>
							</label>
							<div class="col-md-5 col-sm-6">
								<input id="contraseñaA" type="txtcontraseña" name="txtcontraseña" class="form-control" value="<?php echo set_value('txtcontraseña'); ?>">
								<?php echo form_error('txtcontraseña', "<span class='help-block'>", "</span>"); ?>
								<span id="mensaje" name="mensaje">Ingrese al menos; 1 letra Mayúscula, 1 minúscula, 1 número y 1 símbolo raro</span>
							</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Usuario <span class="required">*</span>
							</label>
							<div class="col-md-5 col-sm-6">
								<select name="rol[]" id="rol" class="form-control" style="width:100%;">
									<option value="0">---SELECCIONE---</option>
									<?php foreach ($allrols as $allrol) : ?>
										<option value="<?php echo $allrol->ID_ROL; ?>"><?php echo $allrol->TIPO_ROL; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<span id="msmusuario" name="mensaje"></span>
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-12 offset-md-12">
								<p onclick="valpsw()" id="send" class="btn btn-success">Guardar Usuario</p>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>