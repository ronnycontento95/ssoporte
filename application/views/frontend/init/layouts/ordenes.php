<!--Start mainmenu area-->
<div class="mainmenu-area stricky">
    <div class="container">
        <div class="mainmenu-bg">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <!--Start mainmenu-->
                    <nav class="main-menu">
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="active"><a href="<?php echo base_url(); ?>assets/frontend/index.html">Inicio</a></li>
                                <li><a href="<?php echo base_url(); ?>Auth/initlogin">Ordenes</a> </li>
                                <li><a href="<?php echo base_url(); ?>Auth/initlogin">Login</a> </li>


                            </ul>
                        </div>
                    </nav>

                </div>
            </div>

        </div>
    </div>
</div>
<!--End mainmenu area-->

<!--Start breadcrumb area-->
<div class="breadcrumb-area" style="background-image: url(<?php echo base_url(); ?>assets/frontend/images/background/5.jpg);">
    <div class="container text-center">
        <h1>Ordenes de Reparacion</h1>
        <div class="breadcrumbs_path">
            <a href="#">Inicio</a>&nbsp;&nbsp;-&nbsp;&nbsp;Login
        </div>
    </div>
</div>
<!--End breadcrumb area-->


<div class="contact-form-area sec-padd-top">
    <div class="container">


        <div class="container" id="Servicio">
            <div class="section-title">
                <h2> Consulta tu Orden de Reparación</h2>
                <div class="text">
                    <p>Hay muchas razones válidas por las que debería elegirnos para cuidar su valioso dispositivo.</p>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-5">
                    <label>Cédula</label>
                    <input type="text" class="form-control" id="txtcedula" name="cedula" placeholder="Ingrese la cédula" maxlength="10" onkeyup="ValNumero(this);">
                    <span id="msmced2" name="mensaje"></span>
                </div>
                <div class="form-group col-md-5">
                    <label>Código de Orden</label>
                    <input type="text" class="form-control" id="codigoOrden" id="codigoOrden" placeholder="Ingrese el codigo de orden">
                </div>
                <div class="form-group col-md-2" style="margin-top: 30px">
                    <label class="btn btn-primary" onclick="secondmodal()" data-toggle="tooltip" data-placement="top" data-toggle="modal" data-target="#modal-default">Buscar</label>
                </div>
            </div>
            <img style="width: 28%;display: block;margin: auto;" src="<?php echo base_url(); ?>assets/frontend/images/background/6.png">

        </div>
        <div class="modal fade bs-example-modal-lg" id="modal-default">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h4 class="modal-title">Comprobante soporte</h4> -->
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
        <div class="modal fade bs-example-modal-lg" style="width: 100%; margin-top: 5rem;" id="modal-zero">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">UPSS!!!!</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div style="margin-right: 60px; margin-left: 15px;">
                            <img src="<?php echo base_url(); ?>uploads/no-resultados.png" style="width: 90%;" alt="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

    </div>
    <br />