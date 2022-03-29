<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>FADASystem |</title>
	<link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/frontend/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/frontend/css/style.css" rel="stylesheet">
</head>

<body>
	<section id="cart_items">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<b>Nº AUTORIZACIÓN </b>
					<b><?php $total = 0; ?></b>

					<?php foreach ($imprimir as $imp) : ?>
						<?php if ($total == 0) : ?>
							<?php echo $imp->ID_OREPARACION; ?> <br>
						<?php endif; ?>
						<?php $total++; ?>
					<?php endforeach; ?>
					<br>DIRECCIÓN: Tierras Coloradas
					<br>TEL. (07) 254-2020
					<br>EMAIL: soporte@gmail.com
					<br>CENTRO DE SERVICIO TÉCNICO
				</div>
			</div><br>
			<?php $total = 0; ?>
			<?php foreach ($imprimir as $imp) : ?>
				<?php if ($total == 0) : ?>
					<div class="row">
						<div class="col-xs-6">
							<h5><b>Detalles: </b></h5>
							<b>Cédula/RUC:</b> <?php echo $imp->CEDULA_PER; ?> <br>
							<b>Nombres:</b> <?php echo $imp->NOMBRES_PER; ?><br>
							<b>Dirección:</b> <?php echo $imp->DIRECCION_PER; ?><br>
							<b>Correo:</b> <?php echo $imp->CORREO_PER; ?><br>
						</div>
						<div class="col-xs-6">
							<br>
							<h5></h5>
							<b>Celular:</b> <?php echo $imp->CELULAR_PER; ?> <br>
							<b>F. Ingreso:</b> <?php echo $imp->FECHA_INGRESO; ?><br>
							<b>F. Salida:</b> <?php echo $imp->FECHA_SALIDA; ?><br>
							<b>Total (Ref):</b> <?php echo $imp->VALOR; ?><br>
						</div>
					</div>

				<?php endif; ?>
				<?php $total++; ?>
			<?php endforeach; ?>
			<div class="row">
				<div class="table-responsive">
					<table class="table table-sm ">
						<thead>
							<tr>
								<td>Marca</td>
								<td>Modelo</td>
								<td>Daño Reportado</td>
								<td>Observaciones</td>
								<td>Servicio</td>
								<td>Valor</td>
							</tr>
						</thead>
						<?php $total = 0; ?>
						<tbody>
							<?php foreach ($imprimir as $imp) : ?>
								<?php if ($imp->VALOR == null) : ?>
									<?php $total += $imp->COSTO; ?>
								<?php else : ?>
									<?php $total += $imp->VALOR; ?>
								<?php endif; ?>
								<tr>
									<td><?php echo $imp->MARCA; ?></td>
									<td><?php echo $imp->MODELO; ?></td>
									<td><?php echo $imp->OBSERVACIONES; ?></td>
									<td><?php echo $imp->DAÑO_REPORTADO; ?></td>
									<td><?php echo $imp->DESCRIPCION; ?></td>
									<?php if ($imp->VALOR == null) : ?>
										<td><?php echo $imp->COSTO; ?></td>
									<?php else : ?>
										<td><?php echo $imp->VALOR; ?></td>
									<?php endif; ?>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th colspan="4"></th>
								<td class="text-right" colspan="2"><small class="pr-5 text-muted font-weight-500 col-neg">Total: </small><span class="text-dark" id="subtotal" name="subtotal">$<?php print($total); ?><span></td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</section>
</body>

</html>