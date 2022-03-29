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
						<form class="form-horizontal form-label-left" action="<?php echo base_url(); ?>Menu/Cmenu/insert" method="post">

							<span class="section">Rutas </span>
							<div class="item form-group">
								<label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Nombres menu:  <span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input id="txtmenu" class="form-control" name="txtmenu" type="text" onkeypress="return Letras(event);" onkeyup="mayusculas(this);" value="<?php echo set_value('txtmenu'); ?>">
									<?php echo form_error('txtmenu', "<span class='help-block'>", "</span>"); ?>
								</div>

								<label class="col-form-label col-md-1 col-sm-3 label-align" for="email">link: <span class="required">*</span>
								</label>
								<div class="col-md-5 col-sm-6">
									<input type="txtlink" class="form-control" name="txtlink" value="<?php echo set_value('txtlink'); ?>" onkeypress="return Letras(event);">
									<?php echo form_error('txtlink', "<span class='help-block'>", "</span>"); ?>
								</div>
							</div>
							

							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-12 offset-md-12">
									<button id="send" type="submit" class="btn btn-success">Guardar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>