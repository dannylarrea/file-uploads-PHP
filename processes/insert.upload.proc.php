<?php
include("../services/connection.php");
$path="../public/".date('h-i-s-j-m-y')."-".$_FILES['file']['name'];
$title=$_REQUEST['title'];
$error=false;
if (move_uploaded_file($_FILES['file']['tmp_name'],$path)) {
    try {
        # insertaré el registro
        $query="INSERT INTO posts(title, path) VALUES(?,?)";
        $sentences=$pdo->prepare($query);
        $sentences->bindParam(1,$title);
        $sentences->bindParam(2,$path);
        $sentences->execute();
    } catch (\Throwable $th) {
        //throw $th;
        $error=true;
        unlink($path);
    }
    if ($error) {
        header("Location:../view/formulario.php?error=1");
    } else {
        header("Location:../view/formulario.php");
    }
} else {
    header("Location:../view/formulario.php?error=1");
}
