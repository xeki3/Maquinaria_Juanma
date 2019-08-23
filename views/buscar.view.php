<?php require 'header.php'; ?>

	<div class="contenedor">
		<h3>Buscar</h3>
		<?php echo $titulo ?>
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
		      <th scope="col">Maquina</th>
		      <th scope="col">Panel De Control</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php if (is_array($resultados) || is_object($resultado)) : ?>
			
			   <?php foreach ($resultados as $resultado) : ?>
			    <tr><th scope="row"><?php echo $resultado['id'] ?></th><td><?php echo $resultado['numeroSerie'] ?></td><td><?php echo $resultado['ubicacion'] ?></td><td><?php echo $resultado['estado'] ?></td><td><?php echo $resultado['marca'] ?></td><td><?php echo $resultado['adquisicion'] ?></td></td><td><?php echo $resultado['responsable'] ?></td><td><?php echo $resultado['ubicacion_reparacion'] ?><td><?php echo $resultado['maquina'] ?></td><td class="" colspan="" rowspan="" headers=""><a href="borrar.php?id=<?php echo $resultado['id'] ?>& maquina=<?php echo $resultado['maquina'] ?>& borrar=<?php echo $resultado['borrar'] ?>" title=""><i class="fa fa-trash" aria-hidden="true"></i></a></td></tr>     
				<?php endforeach ?>
			    
			<?php endif ?>
		  </tbody>
		</table>

<?php require 'footer.php'; ?>