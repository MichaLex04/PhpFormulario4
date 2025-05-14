<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar</title>
</head>
<body>
    <div>
        <?php
            require "conexion.php";
            $sql="select * from cliente";
            $ps=$cn->prepare($sql)
            $ps->execute();
            $clientes=$ps->fetchall();
        ?>
        <h1>Mis Clientes</h1>
        <hr>
        <table border=2>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre Completo</th>
                    <th>DNI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($clientes as $c){
                ?>
                <tr>
                    <td><?=$c[0]?></td>
                    <td><?=$c[1]?></td>
                    <td><?=$c[2]?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>