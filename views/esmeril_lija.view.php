<?php require 'header.php'; ?>

	<div class="contenedor">
		<h3>Esmeril-Lija</h3>

		<table class="table table-bordered table-hover">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">N° Serie</th>
		      <th scope="col">Ubicacion</th>
		      <th scope="col">Estado</th>
		      <th scope="col">Marca</th>
		      <th scope="col">Adquisicion</th>
		      <th scope="col">Responsable</th>
		      <th scope="col">Ubicacion Reparacion</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php if (is_array($herramientas) || is_object($herramienta)) : ?>
			
			   <?php foreach ($herramientas as $herramienta) : ?>
			    <tr><th scope="row"><?php echo $herramienta['id'] ?></th><td><?php echo $herramienta['numeroSerie'] ?></td><td><?php echo $herramienta['ubicacion'] ?></td><td><?php echo $herramienta['estado'] ?></td><td><?php echo $herramienta['marca'] ?></td><td><?php echo $herramienta['adquisicion'] ?></td></td><td><?php echo $herramienta['responsable'] ?></td><td><?php echo $herramienta['ubicacion_reparacion'] ?></td></tr>     
				<?php endforeach ?>
			    
			<?php endif ?>
		  </tbody>
		</table>

<?php require 'footer.php'; ?>