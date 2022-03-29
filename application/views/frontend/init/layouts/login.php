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
                                <li class="active"><a href="<?php echo base_url(); ?>">Inicio</a></li>
                                <li><a href="<?php echo base_url(); ?>Auth/initOrdenes">Ordenes</a> </li>
                                <li><a href="<?php echo base_url(); ?>Auth/initlogin">Login</a> </li>


                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
            <div class="right-column">
                <div class="right-area">
                    <div class="nav_side_content">
                        <div class="search_option">
                            <button class="search tran3s dropdown-toggle color1_bg" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                            <form action="#" class="dropdown-menu" aria-labelledby="searchDropdown">
                                <input type="text" placeholder="Search...">
                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--End mainmenu area-->

<!--Start breadcrumb area-->
<div class="breadcrumb-area" style="background-image: url(<?php echo base_url(); ?>assets/frontend/images/background/2.jpg);">
    <div class="container text-center">
        <h1>Inicio de seccion</h1>
        <div class="breadcrumbs_path">
            <a href="#">Inicio</a>&nbsp;&nbsp;-&nbsp;&nbsp;Login
        </div>
    </div>
</div>
<!--End breadcrumb area-->


<div class="contact-form-area sec-padd-top">
    <div class="container">


        <div class="row">

            <div class="col-md-8">

                <div class="contact-form">

                    <form method="post" action="<?php echo base_url(); ?>Auth/login">
                        <?php if ($this->session->flashdata("error")) : ?>
                            <div class="alert alert-danger">
                                <div class="ed_login_form">
                                    <?php echo $this->session->flashdata("error"); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($this->session->flashdata("erroremail")) : ?>
                            <div class="alert alert-success">
                                <div class="ed_login_form">
                                    <?php echo $this->session->flashdata("erroremail"); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($this->session->flashdata("exitochangepassword")) : ?>
                            <div class="alert alert-success">
                                <div class="ed_login_form">
                                    <?php echo $this->session->flashdata("exitochangepassword"); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">Email:</label>
                                <input type="text" placeholder="Ingrese su email" class="form-control" name="username">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <label class="control-label">Contraseña :</label>
                                <input type="password" placeholder="Ingrese su contraseña" class="form-control" name="password">
                            </div>

                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="thm-btn bg-clr1" type="submit" data-loading-text="Please wait...">Enviar</button>
                            </div>
                        </div>
                        <a href="<?php echo base_url(); ?>Clostpassword">Olvide mi contraseña</a>
                        <hr />

                    </form>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-contact-info">
                    <div class="title">
                        <h4>Quick Contact</h4>
                        <p>If you are passionate about helping people: through education, or preventing then you </p>
                    </div>
                    <ul class="clearfix">
                        <li>
                            <div class="iocn-holder">
                                <span class="fa fa-home"></span>
                            </div>
                            <div class="text-holder">

                                <h6>321, Breaking Street</h6>
                                <p>Newyork ,USA 10002</p>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder">
                                <span class="icon-technology-1"></span>
                            </div>
                            <div class="text-holder">
                                <h6>Call Us On</h6>
                                <p>1-8000-978-6543</p>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder">
                                <span class="icon-letter-1"></span>
                            </div>
                            <div class="text-holder">
                                <h6>Mail Us @</h6>
                                <a href="#">
                                    <p>Supportuss@gmail.com</p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</div>
<br />