<?php
// Incluye el archivo de conexión a la base de datos (conexion.php)
include 'conexion.php';

// Verifica si se ha enviado el formulario
if (isset($_POST['guardar'])) {
    // Obtiene los valores del formulario
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $documento = $_POST['documento'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Consulta SQL para insertar un nuevo usuario en la tabla "usuarios"
    $sql = "INSERT INTO usuarios (nombre, apellido, documento, email, telefono, f_nacimiento, usuario, contrasena) VALUES ('$nombre', '$apellido', '$documento', '$email', '$telefono', '$f_nacimiento', '$usuario', '$contrasena')";

    // Ejecuta la consulta
    if (mysqli_query($conexion, $sql)) {
        // Registro exitoso
        echo "Usuario registrado exitosamente.";
    } else {
        // Error en el registro
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }
}
?>

<!DOCTYPE html>
<html lang="es-CO">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de usuarios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="estilo_form.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<style>
  a{
    color: white;
    text-decoration: none;
  }
</style>
<body>
	<main class="form-reg w-100 m-auto">
	<main class="form-reg w-100 m-auto">
		
    <div class="box">
      <form action="registrar.php" method="POST">
        <h1 class="text-center">Registrate</h1>
        <hr class="hr">
        <div>
          <label for="nombres" class="form-label">Nombres</label><br>
          <input type="text" class="form-control" id="nombres" name="nombres" autofocus required autocomplete="on">
        </div>
        <div>
          <label for="apellidos" class="form-label">Apellidos</label>
          <input type="text" class="form-control" id="apellidos" name="apellidos" required autocomplete="on">
        </div>
        <div>
          <label for="documento" class="form-label">N° De Documento</label>
          <input type="number" class="form-control" id="documento" name="documento" required>
        </div>
        <div>
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div>
          <label for="telefono" class="form-label">Telefono</label>
          <input type="number" class="form-control" id="telefono" name="telefono">
        </div>
        <div>
          <label for="fecha_nacimiento" class="form-label">Fecha De Nacimiento</label>
          <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
        </div>
        <div>
          <label for="usuario" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="usuario" name="usuario">
        </div>
        <div>
          <label for="contrasena" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="contrasena" name="contrasena">
        </div>
        <hr>
        <div>
          <input type="submit" name="guardar" value="guardar" class="btn btn-lg btn-primary btn-1 boton"><br>
          <button class="btn btn-lg btn-primary"><a href="../../">Regresar</a></button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>