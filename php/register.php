<?php
// Conectar a la base de datos MySQL
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "carcarcing"; 

$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$email = $_POST['email'];
$password = $_POST['password']; // ⚠️ Aquí ya no se encripta la contraseña

// Insertar en la base de datos
$sql = "INSERT INTO usuarios (email, password) VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
