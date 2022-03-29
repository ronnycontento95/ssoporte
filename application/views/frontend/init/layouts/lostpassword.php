<div class="not-found-area">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="not-found-content text-center">
                    <h3 class="footer-title">Introduzca su correo electrónico.</h3>
                    <form name="recuperar" id="idrecuperar" action="<?php echo base_url(); ?>Clostpassword/send_mail_recuperar" method="post">
                        <div class="pading_none">
                            <input type="email" style="padding: 2.6rem;" class="form-control" name="email" placeholder="Correo electrónico">
                        </div>
                        <hr />

                        <div class="pading_none">
                            <button class="" style="background: #3baed4; padding: 1rem 5rem 1rem 5rem; margin: 5px 0px 0px 0px;  border-radius: 17px;" type="submit" data-loading-text="Please wait...">Enviar</button>

                        </div>
                        <hr />
                        <p class="text-center">
                            <b>Nota: </b>Recuerde ingresar el correo electronico de su cuenta.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>