<?php
include("conexion.php");

$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Lista de Productos</h2>

<a href="crear.php" class="btn btn-primary mb-3">
    Nuevo Producto
</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>

<?php while($fila = mysqli_fetch_assoc($resultado)) { ?>

<tr>
    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['nombre']; ?></td>
    <td><?php echo $fila['precio']; ?></td>
    <td><?php echo $fila['stock']; ?></td>

    <td>
        <a href="editar.php?id=<?php echo $fila['id']; ?>" class="btn btn-warning">
            Editar
        </a>

        <a href="eliminar.php?id=<?php echo $fila['id']; ?>" class="btn btn-danger">
            Eliminar
        </a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>