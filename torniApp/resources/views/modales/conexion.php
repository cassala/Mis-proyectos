<?php
   // Datos de conexión a la base de datos
   $host = 'localhost'; // Cambiar si es necesario
   $port = '3306'; // Puerto de MySQL (predeterminado: 3306)
   $dbname = 'torniAppDb'; // Cambiar al nombre de tu base de datos
   $username = 'root'; // Cambiar al nombre de usuario de la base de datos
   $password = ''; // Cambiar a la contraseña de la base de datos

   // Establecer conexión a la base de datos
   $conexion = new mysqli($host, $username, $password, $dbname, $port);

   // Verificar la conexión
   if ($conexion->connect_error) {
      die("Error de conexión: " . $conexion->connect_error);
   }

   // Mensaje de éxito si la conexión se establece correctamente
   //echo "Conexión exitosa";
?>
