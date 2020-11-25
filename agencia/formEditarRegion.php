<?php
  
    
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $Region = new Region();
    $Region-> verRegionPorId();
    include 'includes/header.php';
?>
    
    <main class="container">
        <h1>Formulario de modificacion de una región</h1>

        <div class="alert bg-light border p-3 col-8 mx-auto">
        	
            <form action="modificarRegion.php" method="post">

                <div class="form-group">  
                    <input type="text" name="regNombre" value="<?= $Region->getRegNombre()?>" id="regNombre" class="form-control" required>
                </div>      
                <input type="hidden" name="regID" value="<?= $Region->getRegID()?>">
        		<button class="btn btn-dark">Modificar Región</button>
        		<a href="adminRegiones.php" class="btn btn-outline-secondary">
        		Volver al listado de regiones
        		</a>
        	
            </form>
        	
        </div>
        
        
    </main>
<?php
    include 'includes/footer.php';
?>