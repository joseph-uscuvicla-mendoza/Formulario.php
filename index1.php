<?php
  if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Apellido: $apellido</p>";
    echo "<p>Edad: $edad</p>";
  }
?>