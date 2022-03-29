<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">

                    <form class="form-horizontal form-label-left" novalidate action="<?php echo base_url(); ?>Cliente/Ccliente/update" method="post">
                        <span class="section">Editar Cliente</span>
                        <div class="item form-group">
                            <input id="txtid" name="txtid" type="hidden" value="<?php echo $alladmin->ID_PERSONA; ?>">
                            <input id="rol" name="rol" type="hidden" value="<?php echo $alladmin->ID_ROL; ?>">
                            <label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Nombres <span class="required">*</span>
                            </label>
                            <div class="col-md-5 col-sm-6">
                                <input id="nombreA" id="txtnombre" class="form-control" name="txtnombre" placeholder="" required="required" type="text" value="<?php echo $alladmin->NOMBRES_PER; ?>">
                            </div>

                            <label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Apellidos <span class="required">*</span>
                            </label>
                            <div class="col-md-5 col-sm-6">
                                <input id="apellidoA" type="txtapellidos" class="form-control" name="txtapellidos" required="required" value="<?php echo $alladmin->APELLIDOS_PER; ?>">
                            </div>
                        </div>
                        <input type="hidden" name="txtcedula" value="<?php echo $alladmin->CEDULA_PER; ?>">
                        <div class="item form-group">
                            <label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Cédula</label>
                            <div class="col-md-5 col-sm-6">
                                <input id="cedulaA" type="txtcedula" class="form-control" name="txtcedula" value="<?php echo $alladmin->CEDULA_PER; ?>" disabled>
                            </div>

                            <label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Correo <span class="required">*</span>
                            </label>
                            <div class="col-md-5 col-sm-6">
                                <input id="correoA" type="email" id="email" name="email" required="required" class="form-control" value="<?php echo $alladmin->CORREO_PER; ?>">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Celular <span class="required">*</span>
                            </label>
                            <div class="col-md-5 col-sm-6">
                                <input id="celularA" type="txtcelular" class="form-control" name="txtcelular" required="required" value="<?php echo $alladmin->CELULAR_PER; ?>">
                            </div>

                            <label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Dirección <span class="required">*</span>
                            </label>
                            <div class="col-md-5 col-sm-6">
                                <input id="direccionA" type="txtdireccion" name="txtdireccion" required="required" class="form-control" value="<?php echo $alladmin->DIRECCION_PER; ?>">
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