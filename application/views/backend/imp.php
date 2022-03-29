<div class="row">
	<div class="col-md-6">
		<div style="margin-right: 60px; margin-left: 15px;">
			<img src="<?php echo base_url(); ?>uploads/FADA.jpeg" style="height: 120px; width: 170px" alt="">
		</div>

	</div>

	<div class="col-md-6">
		<div>
			<b>Nº AUTORIZACIÓN </b>
			<b><?php $total = 0; ?></b>
			
			<?php foreach ($imprimir as $imp) : ?>
				<?php if ($total == 0) : ?>
					<?php echo $imp->ID_OREPARACION; ?> <br>
				<?php endif; ?>
				<?php $total++; ?>
			<?php endforeach; ?>
		</div>
		<div style="margin-right: 75px; margin-left: 15px;">
			DIRECCIÓN: Tierras Coloradas<br>
			TEL. (07) 254-2020 <br>
			EMAIL: soporte@gmail.com <br>
			CENTRO DE SERVICIO TÉCNICO
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">

	</div>
</div>

<br>
<?php $total = 0; ?>
<?php foreach ($imprimir as $imp) : ?>
	<?php if ($total == 0) : ?>
		<div class="row">
			<div class="col-md-6">
				<h5><b>Detalles: </b></h5>
				<div style="margin-right: 75px; margin-left: 15px;">
					<b>Cédula/RUC:</b> <?php echo $imp->CEDULA_PER; ?> <br>
					<b>Nombres:</b> <?php echo $imp->NOMBRES_PER; ?><br>
					<b>Dirección:</b> <?php echo $imp->DIRECCION_PER; ?><br>
					<b>Correo:</b> <?php echo $imp->CORREO_PER; ?><br>
				</div>
			</div>

			<div class="col-md-6">

				<div>
					<b>Celular:</b> <?php echo $imp->CELULAR_PER; ?> <br>
					<b>F. Ingreso:</b> <?php echo $imp->FECHA_INGRESO; ?><br>
					<b>F. Salida:</b> <?php echo $imp->FECHA_SALIDA; ?><br>
					<b>Total (Ref):</b> <?php echo $imp->VALOR; ?><br>
				</div>
			</div>
		</div>
		
	<?php endif; ?>
	<?php $total++; ?>
<?php endforeach; ?>
<hr>
<div class="row">
	<div class="col-xl-12 mb-20">
		<div class="table-wrap">
			<div class="table-responsive">
				<table class="table table-sm mb-0">
					<thead>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Daño Reportado</th>
						<th>Observaciones</th>
						<th>Des. Reparación</th>
						<th>Servicio</th>
						<th>Valor</th>
						<th>Estado</th>
					</thead>
					<tbody>
						<?php $total = 0; ?>
						<?php foreach ($imprimir as $imp) : ?>
							<?php if ($imp->VALOR == null) : ?>
								<?php $total += $imp->COSTO; ?>
							<?php else : ?>
								<?php $total += $imp->VALOR; ?>
							<?php endif; ?>
							<tr>
								<th><?php echo $imp->MARCA; ?></th>
								<th><?php echo $imp->MODELO; ?></th>
								<th><?php echo $imp->OBSERVACIONES; ?></th>
								<th><?php echo $imp->DAÑO_REPORTADO; ?></th>
								<th><?php echo $imp->DESCRIPCION_REPARACION; ?></th>
								<th><?php echo $imp->DESCRIPCION; ?></th>
								<?php if ($imp->VALOR == null) : ?>
									<th><?php echo $imp->COSTO; ?></th>
								<?php else : ?>
									<th><?php echo $imp->VALOR; ?></th>
								<?php endif; ?>

								<?php if ($imp->ESTADO == "0") : ?>
									<th style="color: green;">Reparado</th>
								<?php else : ?>
									<?php if ($imp->ESTADO == null) : ?>
										<th style="color: yellow;">En reparacion</th>
									<?php else : ?>
										<th style="color: red;">En revision</th>
									<?php endif; ?>
								<?php endif; ?>
							</tr>
						<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th colspan="5"></th>
							<td class="text-right" colspan="2"><small class="pr-5 text-muted font-weight-500 col-neg">Total: </small><span class="text-dark" id="subtotal" name="subtotal">$<?php print($total); ?><span></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>