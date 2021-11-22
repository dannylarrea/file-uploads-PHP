**Referencias:**

https://www.php.net/manual/es/features.file-upload.post-method.php
https://www.php.net/manual/es/language.exceptions.php
https://www.php.net/manual/en/function.unlink.php
https://www.php.net/manual/es/function.move-uploaded-file.php

## Subir un fichero local a un servidor
1. atributo `enctype` asociado a la etiqueta `form`
    ```html
    <form action="filename" method="post" enctype="multipart/form-data">
        <!--code-->
    </form>
    ```

1. subir el fichero `move_uploaded_file(filename, destination)`

    - filename: archivo temporal

    - destination: sitio del servidor donde se almacenará el archivo

1. `$_FILES`
    El array global `$_FILES` contendrá toda la información de los los ficheros subidos. Su contenido en el formulario del ejemplo es el siguiente. Observe que se asume el empleo del nombre fichero_usuario para el fichero subido, tal como se utiliza en el script de ejemplo anterior. Este puede ser cualquier nombre.

    `$_FILES['fichero_usuario']['name']`: El nombre original del fichero en la máquina del cliente.

    `$_FILES['fichero_usuario']['type']`: El tipo MIME del fichero, si el navegador proporcionó esta información. Un ejemplo sería "image/gif". Este tipo MIME, sin embargo, no se comprueba en el lado de PHP y por lo tanto no se garantiza su valor.

    `$_FILES['fichero_usuario']['size']`: El tamaño, en bytes, del fichero subido.

    `$_FILES['fichero_usuario']['tmp_name']`: El nombre temporal del fichero en el cual se almacena el fichero subido en el servidor.

    `$_FILES['fichero_usuario']['error']`: El código de error asociado a esta subida.

1. insertar registro en la base de datos

1. controlar errores y excepciones
    - `unlink(filename)`

