La carpeta agenda posee los documentos tanto de vista como los modelos de las diferentes secciones de la aplicación,
el proyecto en este git incluye un archivo sql de facil acceso para poder ser utilizado en cualquier gestor.

Dentro de la carpeta agenda en el archivo config, se pueden modificar los datos con respecto a los respectivos usuarios
y contraseñas que tengan los equipos en donde se este hosteando el servidor local.


Para usar el programa se añade un nuevo contacto usando el boton de nuevo contacto, automaticamente la aplicación actualizará
la lista de contactos y añadirá el contacto en su respectiva letra dependiendo alphabeticamente de la primera letra
de su nombre. Cada usuario añadido tambien tiene dos opciones: Editar y borrar. Como el nombre indica, una nos permite
editar datos (pero nunca dejar sin nombre y/o apellido al contacto) y la otra nos envia a una pagina para confirmar
si en verdad el usuario desea borrar ese contacto, mostrando tanto el nombre con el apellido.

Cabe destacar que la funcion de editar en sus inputs muestra la información actual que esta escrita en la respectiva linea
de nuestra base de datos, y una vez lo editamos se actualiza.

los recursos utilizados en esta aplicación fueron: PHP, SQL y bootstrap.