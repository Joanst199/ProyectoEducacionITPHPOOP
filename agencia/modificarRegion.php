<?php
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $Region = new Region;
    $chequeo = $Region-> modificarRegion();
    $css = 'danger';
    $mensaje = 'No se ha modificado los datos de la región';
    if ($chequeo) {
        $css='success';
        $mensaje = 'Región '.$Region->getRegNombre().' modificada correctamente';
    }
    include 'includes/header.php';
?>
    
    <main class="container">
        <h1>Modificacion de una region</h1>

       <div class="alert alert-<?= $css ?> p-4">
            <?= $mensaje ?>
            <br>
            <a href="adminRegiones.php" class="btn btn-outline-secondary">
                Volver a panel de regiones
            </a>
       </div>

        
        
    </main>
<?php
    include 'includes/footer.php';
?>