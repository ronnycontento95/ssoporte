<div class="not-found-area">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="not-found-content text-center">
                    <h3 class="footer-title"> Recuperacion de contraseña.</h3>
                    <p class="text-center">
                        Ingrese su nueva contraseña.
                    </p>
                    <form name="recuperar" id="idrecuperar" action="<?php echo base_url(); ?>/Clostpassword/recuperar_pswd" method="post">
                        <input name="email" hidden value="<?php echo $email; ?>">
                        <div class="pading_none">
                            <input type="password" class="form-control" name="pswd" placeholder="Contraseña" value="<?php echo set_value('pswd'); ?>">
                            <?php echo form_error('pswd', "<span class='help-block'>", "</span>"); ?>
                        </div>
                        <div class="pading_none">
                            <input type="password" class="form-control" name="newpswd" placeholder="Confirmar contraseña" value="<?php echo set_value('newpswd'); ?>">
                            <?php echo form_error('newpswd', "<span class='help-block'>", "</span>"); ?>
                        </div>

                        <div class="col-sm-6 col-md-6 pading_none">
                            <button type="submit" class="btn btn-success btn-block">
                                        Enviar
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>