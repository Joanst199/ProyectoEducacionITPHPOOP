<?php
  
    
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $Region = new Region();
    $regiones = $Region-> listarRegiones();
    include 'includes/header.php';
?>
    
    <main class="container">
        <h1>Panel de administración de regiones</h1>

        <table class="table table-border table-hover table-striped">
        	<thead class="thead-dark">
        		<tr>
        			<th>Id</th>
        			<th>Región</th>
        			<th colspan="2">
        				<a href="" class="btn btn-dark">
        					Agregar
        				</a>
        			</th>
        		</tr>
        		
        	</thead>
        	<tbody>
        		<?php foreach ($regiones as $region) {
        			# code...
        		 ?>
        		<tr>
        			<td><?= $region['regID']?></td>
        			<td><?= $region['regNombre']?></td>
        			<td>
        				<a href="" class="btn btn-outline-secondary">
        					Modificar
        				</a>
        			</td>
        			<td>
        				<a href="" class="btn btn-outline-secondary">
        					Eliminar
        				</a>
        			</td>
        		</tr>
        		<?php } ?>

        	</tbody>
        </table>
        
        
    </main>
<?php
    include 'includes/footer.php';
?>