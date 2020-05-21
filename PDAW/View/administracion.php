<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../View/css/principal.css">
    <link rel="stylesheet" href="../View/css/administracion.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>  
<body class="body">

    <?php
        include '../Controller/header.php';
    ?>

    <div class="contenedor">
        
        <div class="productos">
            <div class="titulo">
                <h2 class="h2">Gestión de Productos</h2>
            </div>
            
            <form action="../Controller/gestion_productos.php">
                <input class="gestion" type="submit" value="Gestionar">
            </form>
        </div>

        <div class="usuarios">
            <div class="titulo">
                <h2 class="h2">Gestión de Usuarios</h2>
            </div>
            
            <form action="../Controller/gestion_usuarios.php">
                <input class="gestion" type="submit" value="Gestionar">
            </form>
        </div>

    </div>

<script type="text/javascript" src="../View/JS/principal.js"></script>
</body>
</html>