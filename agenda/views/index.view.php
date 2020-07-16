<html>
<?php include 'header.php' ?>

    <div class='container-fluid'>
        <div class='row text-center'>

        <?php if($todo == true): ?>

        <?php foreach($letras as $letra):?>
        
        <?php $contenidos = contactosPorLetra($conexion, $letra)?>
        <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col"><?php echo $letra; ?></th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Móvil</th>
                <th scope="col">E-mail</th>
                </tr>
            </thead>
            <tbody>
            <?php if(!empty($contenidos)): ?>
            <?php foreach($contenidos as $contenido): ?>
                <a href="modificar.php?id=<?php echo $contenido[0]?>"><tr>
                <th scope="row"><a href="editar.php?id=<?php echo $contenido[0]?>"><button class='btn btn-primary'>Editar</button></a><a href="borrar.php?id=<?php echo $contenido[0]?>"><button class="btn btn-danger">Borrar</button></a></th>
                <td><?php echo $contenido[1] ?></td>
                <td><?php echo $contenido[2] ?></td>
                <td><?php echo $contenido[3] ?></td>
                <td><?php echo $contenido[4] ?></td>
                <td><?php echo $contenido[5] ?></td>
                </tr></a>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
        <?php endforeach; ?>
        <?php endif; ?>

        <?php if($todo == false): ?>
            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col"></th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Móvil</th>
                <th scope="col">E-mail</th>
                </tr>
            </thead>
            <tbody>
            <?php if(!empty($busqueda)): ?>
            <?php foreach($busqueda as $contenido): ?>
                <a href="modificar.php?id=<?php echo $contenido[0]?>"><tr>
                <th scope="row"><a href="editar.php?id=<?php echo $contenido[0]?>"><button class="btn btn-primary">Editar</button></a><a href="borrar.php?id=<?php echo $contenido[0]?>"><button class="btn btn-danger">Borrar</button></a></th>
                <td><?php echo $contenido[1] ?></td>
                <td><?php echo $contenido[2] ?></td>
                <td><?php echo $contenido[3] ?></td>
                <td><?php echo $contenido[4] ?></td>
                <td><?php echo $contenido[5] ?></td>
                </tr></a>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
        <?php endif;?>
        
        </div>
    </div>
</body>
</html>