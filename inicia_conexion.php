<?php
     $conexion = mysqli_init(); 
     mysqli_real_connect($conexion, "databasecloud.mysql.database.azure.com", "Sandra", "Cloud2022", "clinicadental", 3306, MYSQLI_CLIENT_SSL);
?>