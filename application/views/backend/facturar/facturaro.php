<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">

                    <div class="x_content">
                        <form class="form-horizontal form-label-left" method="POST" action="<?php echo base_url(); ?>Orden_reparacion/Corden/insert" novalidate>
                            </p>
                            <input type='hidden' name='idcod' value="<?php echo $venta; ?>">
                            <span class="section"> Orden de Reparación</span>
                            <div class="item form-group">
                                <div class="col-md-12">
                                    <h5>Código Orden <input id="codigo" name="codigo" type="text" value="<?php echo $venta; ?>" disabled> </h5>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>