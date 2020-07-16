<html>
<?php include 'headerOpcion.php' ?>

    
    <div class='row'>
        <div class='col text-center'>
            <h3>Crear contacto</h3>
        </div>
    </div>

    <div class='row'>
        <div class='col text-center d-flex justify-content-center mt-5'>
            <div class='formulario'>
                <form action="" method='POST'>
                <h4>Nombres</h4>
                <input required class='campoDato' maxlength = "40" type="text" name='nombre' value=''>
                <h4>Apellidos</h4>
                <input required class='campoDato' maxlength = "40" type="text" name='apellido' value=''>
                <h5>Número de Teléfono </h5>
                <input  class='campoDato' maxlength="12" type="text"   name='telefono' value=''>
                <h5>Número de movil </h5>
                <input class='campoDato'  maxlength="12" type="text"  name='movil' value=''>
                <h5>Dirección de correo </h5>
                <input required class='campoMail' maxlength = "60" type="email"  name='email' value=''><br><br>
                <input type="submit" class="btn btn-success" name='crear' value='Crear Contacto'><br>
                </form>
                <form action="" method = 'POST'>
                    <input type="submit" class="btn btn-danger" name='volver' value='Volver'>
                </form>
            </div>
        </div>
    </div>

</body>

</html>