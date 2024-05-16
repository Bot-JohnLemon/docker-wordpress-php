<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se enviaron datos de usuario y contraseña
    if (isset($_POST["usuario"]) && isset($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        
        // Aquí podrías realizar la autenticación con los datos proporcionados
        
        // Mostrar mensaje de bienvenida
        echo "¡Bienvenido, $usuario! Has iniciado sesión correctamente.";
    } else {
        // Si faltan datos del formulario, mostrar un mensaje de error
        echo "Por favor, complete todos los campos del formulario.";
    }
} else {
    echo "<h2>Error: No se han enviado los datos al PHP.</h2>"; 
      exit();
}
?>

