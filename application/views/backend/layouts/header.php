<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />
	<title>Administración FADASystems | </title>

	<link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!--Jquery-ui-->

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/jquery-ui/jquery-ui.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/msg/dist/sweetalert2.css">

	<link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">


	<link href="<?php echo base_url(); ?>assets/dataTables/dataTables.min.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/vendors/styles.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/calendar/css/bootstrap-datepicker.css">
	<link href="<?php echo base_url(); ?>assets/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">






	<!-- NProgress -->
	<link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	<!-- bootstrap-datetimepicker -->
	<link href="<?php echo base_url(); ?>assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
	<!-- Ion.RangeSlider -->
	<link href="<?php echo base_url(); ?>assets/vendors/normalize-css/normalize.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
	<!-- Bootstrap Colorpicker -->
	<link href="<?php echo base_url(); ?>assets/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

	<!-- <link href="<?php echo base_url(); ?>assets/vendors/jquery.datetimepicker.min.css" rel="stylesheet"> -->

	<link href="<?php echo base_url(); ?>assets/vendors/cropper/dist/cropper.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/css/buttons.dataTables.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/css/jquery.dataTables.min.css">

</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="#" class="site_title"><i class="fa fa-paw"></i> <span>FADASystems</span></a>
					</div>
					<div class="clearfix"></div>

					<div class="profile clearfix">

						<div class="profile_info">
							<!-- <span>Welcome,</span> -->
							<h2><?php echo $this->session->userdata("apellidos") . " " . $this->session->userdata("nombres"); ?></h2>
						</div>
					</div>