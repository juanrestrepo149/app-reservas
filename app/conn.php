<?php
$conn = null;
$servidor = 'localhost';
$bd = 'conmed';
$user = 'root';
$pass = '';

try {
    $conn = new PDO('mysql:host=' . $servidor . ';dbname=' . $bd, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit;
}

return $conn;
?>
