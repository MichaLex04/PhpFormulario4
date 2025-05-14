<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Inserción de Clientes</h1>
        <hr>
        <form action="" method="post">
            <input type="text" name="txtNomCom" placeholder="Nombre Completo">
            <input type="text" name="txtDNI" placeholder="DNI">
            <input type="submit" value="Guardar">
        </form>
    </div> 
</body>
</html>

<?php
    if($_POST){
        require 'conexion.php';
        $sql='insert into cliente (nombrecompleto, dni) values (:nom,:dni)';
        $ps=$cn->prepare($sql);
        $ps->bindParam(':nom', $_POST['txtNomCom']);
        $ps->bindParam(':dni', $_POST['txtDNI']);
        $ps->execute();
        header('Location: cargarcliente.php');
    }
?> 