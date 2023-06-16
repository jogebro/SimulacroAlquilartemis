<?php
    ini_set("display_errors", 1);

    ini_set("display_startup_errors", 1);
        
    error_reporting(E_ALL);
    
        $empleados = '[
            {
            "idEmpleados": 1,
            "nombres_Empleados": "Carlos Alberto",
            "celular_Empleados": "3028957168",
            "direccion": "Calle 30#40-12 "
            },
            {
            "idEmpleados": 2,
            "nombres_Empleados": "Silvia Alvarado",
            "celular_Empleados": "3196845752",
            "direccion": "Calle 51#30-36 "
            },
        ]';
    
        $datosEmpleados = json_decode($empleados, true);
            
        $server = "localhost";
        $user = "campus";
        $pass = "campus2023";
        $bd = "Alquilartemis";

        $conexion = mysqli_connect($server, $user, $pass, $bd) 
        or die("Ha sucedido un error inesperado en la conexion de la base de datos");

        foreach ($datosEmpleados as $empleados) {
            mysqli_query($conexion, "INSERT INTO empleados (idEmpleados, nombres_Empleados, celular_Empleados, direccion) VALUES ('".$empleados['idEmpleados']."','".$empleados['nombres_Empleados']."','".$empleados['celular_Empleados']."','".$empleados['direccion']."')");
        }

        mysqli_close($conexion);

?>