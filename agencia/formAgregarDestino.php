<?php
  
    
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $Region = new Region();
    $regiones = $Region-> listarRegiones();
    include 'includes/header.php';
?>
    
    <main class="container">

        <h1>Formulario de alta de un nuevo destino</h1>

        <div class="alert bg-light border p-8 col-8 mx-auto">
            <form action="" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <input type="text" value="Nombre del destino" name="destNombre" class="form-control" id="destNombre" required>
                </div>

                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">$</div>
                    </div>
                    <input type="number" value="Ingrese el precio" name="destPrecio" class="form-control" id="destPrecio" min="0" step="0.01" required>
                </div>

                <div class="form-group">
                    <select class="form-control" name="regId" id="regId" required>
                        <option value="">Seleccione una región</option>
<?php
                foreach ($regiones as $region) {
?>
                        <option value="<?= $region['regID'] ?>"><?= $region['regNombre'] ?></option>
<?php
                }
?>
                    </select>
                </div>

                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">#</div>
                    </div>
                    <input type="number" name="destAsientos" class="form-control" id="destAsientos" placeholder="Ingrese cantidad de asientos totales"required>
                </div>

                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">#</div>
                    </div>
                    <input type="number" name="destDisponibles" class="form-control" id="destDisponibles" placeholder="Ingrese cantidad de asientos disponibles" required>
                </div>


                <button class="btn btn-dark mr-3 px-4">Agregar destino</button>
                <a href="adminDestinos.php" class="btn btn-outline-secondary">
                    Volver al listado de destinos
                </a>

            </form>
        </div>
    </main>
<?php
    include 'includes/footer.php';
?>