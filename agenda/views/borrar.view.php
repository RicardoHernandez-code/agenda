<?php include 'headerOpcion.php' ?>

<body>
    <div class='container'>
        <div class='row'>
            <div class='col text-center mt-5'>
                <h1>Está seguro que desea borrar este contacto de su agenda?</h1>
            </div>
        </div>

        <!-- Datos del  contacto -->
        <div class='row mt-3'>
            <div class='col text-center'>
                <h3><?php echo ($contacto[0][1].' '.$contacto[0][2])?></h3>
            </div>
        </div>
        
        <!-- Opciones -->
        <div class='row mt-3'>
            <div class='col text-center'>
                <form action="" method='POST'>
                    <input type="submit" name='volver' class="btn btn-primary" value = 'Volver'>
                    <input type="submit" name='borrar' class="btn btn-danger" value = 'Borrar'>
                </form>
            </div>
        </div>

    </div>
</body>