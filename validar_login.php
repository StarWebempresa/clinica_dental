<?php
session_start();


    function mostrarMensajeYRedireccionar($mensaje, $url) {
        echo "<script>alert('$mensaje'); window.location.href = '$url';</script>";
        exit;
    }
    
    if (empty($_POST['usuario']) || empty($_POST['password'])) {
        mostrarMensajeYRedireccionar("Por favor, complete todos los campos.", 'index.php');
    }
    
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    
    $conexion = mysqli_connect("localhost", "root", "", "dentista");
    
    if (!$conexion) {
        die("Error en la conexión a la base de datos: " . mysqli_connect_error());
    }
    
    $consulta = "SELECT id_rol FROM users WHERE usuario = ? AND password = ?";
    $stmt = mysqli_prepare($conexion, $consulta);
    
    if (!$stmt) {
        die("Error en la preparación de la consulta: " . mysqli_error($conexion));
    }
    
    mysqli_stmt_bind_param($stmt, "ss", $usuario, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    
    if (mysqli_stmt_num_rows($stmt) > 0) {
        mysqli_stmt_bind_result($stmt, $id_cargo);
        mysqli_stmt_fetch($stmt);
        
        // Mapeo de roles a rutas de redirección
        $rutas = [
            1 => 'Administrador/index.php',
            2 => 'Doctor/index.php',
            3 => 'views/index.php'
        ];
        
        // Verifica si el cargo está en el mapeo
        if (isset($rutas[$id_cargo])) {
            $_SESSION['id'] = $id_cargo;
            header("Location: ". $rutas[$id_cargo]);
        } else {
            mostrarMensajeYRedireccionar("Rol desconocido.", 'index.php');
        }
    } else {
        mostrarMensajeYRedireccionar("Credenciales incorrectas, por favor verifícalas.", 'index.php');
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
    

?>



