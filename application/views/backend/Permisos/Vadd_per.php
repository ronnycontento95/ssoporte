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
                        <form class="form-horizontal form-label-left" action="<?php echo base_url(); ?>Permisos/Cpermisos/guardar" method="post">

                            <span class="section">Clientes </span>
                            <div class="item form-group">
                                <label class="col-form-label col-md-1 col-sm-3 label-align" for="name">Rol <span class="required">*</span>
                                </label>
                                <select class="form-control select2" style="width: 100%;" name="rol" id="rol">
                                    <?php foreach ($roles as $rol) : ?>
                                        <option value="<?php echo $rol->ID_ROL ?>" selected><?php echo $rol->TIPO_ROL ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <label class="col-form-label col-md-1 col-sm-3 label-align" for="email">Menus <span class="required">*</span>
                                </label>
                                <select class="form-control select2" style="width: 100%;" name="menu" id="menu">
                                    <?php foreach ($menus as $menu) : ?>
                                        <option value="<?php echo $menu->id_menu ?>" selected><?php echo $menu->nombre_menu ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div>
                                <hr />
                                <div class="item form-group">
                                    <h5>Leer</h5>
                                    <div class="adomx-checkbox-radio-group inline" style="margin-left: 30px;">
                                        <label class="adomx-radio success"><input type="radio" id="nombresPaciente" name="read" value="1" checked="checked">SI <i class="icon"></i> </label>
                                        <br />
                                        <label class="adomx-radio secondary"> <input type="radio" id="nombresPaciente" name="read" value="0">No <i class="icon"></i> </label>
                                    </div>
                                </div>
                                <hr />
                                <div class="item form-group">
                                    <h5>Insert</h5>
                                    <div class="adomx-checkbox-radio-group inline" style="margin-left: 30px;">
                                        <label class="adomx-radio success"><input type="radio" id="nombresPaciente" name="insert" value="1" checked="checked">SI <i class="icon"></i> </label>
                                        <br />
                                        <label class="adomx-radio secondary"> <input type="radio" id="nombresPaciente" name="insert" value="0">No <i class="icon"></i> </label>
                                    </div>
                                </div>
                                <hr />
                                <div class="item form-group">
                                    <h5>Update</h5>
                                    <div class="adomx-checkbox-radio-group inline" style="margin-left: 30px;">
                                        <label class="adomx-radio success"><input type="radio" id="nombresPaciente" name="update" value="1" checked="checked">SI <i class="icon"></i> </label>
                                        <br />
                                        <label class="adomx-radio secondary"> <input type="radio" id="nombresPaciente" name="update" value="0">No <i class="icon"></i> </label>
                                    </div>
                                </div>
                                <hr />

                                <div class="item form-group">
                                    <h5>Delete</h5>
                                    <div class="adomx-checkbox-radio-group inline" style="margin-left: 30px;">
                                        <label class="adomx-radio success"><input type="radio" id="nombresPaciente" name="delete" value="1" checked="checked">SI <i class="icon"></i> </label>
                                        <br />
                                        <label class="adomx-radio secondary"> <input type="radio" id="nombresPaciente" name="delete" value="0">No <i class="icon"></i> </label>
                                    </div>
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