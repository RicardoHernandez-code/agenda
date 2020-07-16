<html>
<?php include 'headerOpcion.php' ?>

    
    <div class='row'>
        <div class='col text-center'>
            <h3>Editar contacto</h3>
        </div>
    </div>

    <div class='row'>
        <div class='col text-center d-flex justify-content-center mt-5'>
            <div class='formulario'>
                <form action="" method='POST'>
                <h4>Nombres</h4>
                <input required class='campoDato' maxlength = "40" type="text" name='nombre' value='<?php echo $contacto[0][1]?>'>
                <h4>Apellidos</h4>
                <input required class='campoDato' maxlength = "40" type="text" name='apellido' value='<?php echo $contacto[0][2]?>'>
                <h5>Número de Teléfono </h5>
                <input  class='campoDato' maxlength="12" type="text"   name='telefono' value='<?php echo $contacto[0][3]?>'>
                <h5>Número de movil </h5>
                <input class='campoDato'  maxlength="12" type="text"  name='movil' value='<?php echo $contacto[0][4]?>'>
                <h5>Dirección de correo </h5>
                <input required class='campoDato' maxlength = "60" type="email"  name='email' value='<?php echo $contacto[0][5]?>'><br><br>
                <input type="submit" class="btn btn-success" name='grabar' value='Guardar Cambios'><br><br>
                <input type="submit" class="btn btn-danger" name='volver' value='Volver'>
                </form>
            </div>
        </div>
    </div>

</body>

</html>