**Referencias:**

https://www.php.net/manual/es/features.file-upload.post-method.php
https://www.php.net/manual/es/language.exceptions.php
https://www.php.net/manual/en/function.unlink.php
https://www.php.net/manual/es/function.move-uploaded-file.php

## Subir un fichero local a un servidor

**Formulario para la subida de ficheros**

Se puede construir una página de subida de ficheros creando un formulario especial parecido a este:


1. LA __URL__ del siguiente ejemplo se debe sustituir y debe apuntar a un fichero de PHP.

    ```html

    <!-- El tipo de codificación de datos, enctype, DEBE especificarse como sigue -->
    <form enctype="multipart/form-data" action="__URL__" method="POST">
        <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
        Enviar este fichero: <input name="fichero_usuario" type="file" />
        <input type="submit" value="Enviar fichero" />
    </form>
    ```

    **IMPORTANTE** Asegurarse de que el formulario de subida de ficheros tiene el atributo enctype="multipart/form-data" o de lo contrario la subida de ficheros no funcionará!!

2. subir el fichero `move_uploaded_file(filename, destination)`

    - filename: archivo temporal

    - destination: sitio del servidor donde se almacenará el archivo

3. `$_FILES`

    El array global `$_FILES` contendrá toda la información de los los ficheros subidos. Su contenido en el formulario del ejemplo es el siguiente. Observe que se asume el empleo del nombre fichero_usuario para el fichero subido, tal como se utiliza en el script de ejemplo anterior. Este puede ser cualquier nombre.

    `$_FILES['fichero_usuario']['name']`: El nombre original del fichero en la máquina del cliente.

    `$_FILES['fichero_usuario']['type']`: El tipo MIME del fichero, si el navegador proporcionó esta información. Un ejemplo sería "image/gif". Este tipo MIME, sin embargo, no se comprueba en el lado de PHP y por lo tanto no se garantiza su valor.

    `$_FILES['fichero_usuario']['size']`: El tamaño, en bytes, del fichero subido.

    `$_FILES['fichero_usuario']['tmp_name']`: El nombre temporal del fichero en el cual se almacena el fichero subido en el servidor.

    `$_FILES['fichero_usuario']['error']`: El código de error asociado a esta subida.

4. insertar registro en la base de datos

5. controlar errores y excepciones
    - `unlink(filename)`: Borra un fichero
