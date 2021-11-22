<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload files</title>
</head>
<body>
    <form action="../processes/insert.upload.proc.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="title" id="">
        <input type="file" name="file" id="" accept="image/*">
        <input type="submit" value="send">
    </form>
    <!--mostrar las imágenes a partir de los registros de la base de datos-->


</body>
</html>