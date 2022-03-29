
<div class="top_nav">
	<div class="nav_menu">
		<nav class="nav navbar-nav">
			<ul class=" navbar-right">
				<li class="nav-item dropdown open" style="padding-left: 15px;">
					<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
						<?php echo $this->session->userdata("apellidos"); ?>
					</a>
					<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo base_url(); ?>Auth/logout"><i class=" fa fa-sign-out pull-right"></i> Salir </a>
					</div>
				</li>
			</ul>
		</nav>
	</div>
</div>
