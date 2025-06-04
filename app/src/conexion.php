

<?php

    $server = 'localhost:3306'; //Deben ingresar su puerto de Mysql de ustedes
    $username = 'root';
    $password = '';
    $database ='formulario_estudiantil'; //Ingresen su base de datos, que crearon en el phpMyAdmin

    try{
        $con = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
        //echo"conexion exitosa";
        echo "<script>
        alert('Conexión exitosa a la base de datos');
        </script>";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cedula = $_POST["cedula"];
            $nomb = $_POST["PrimerNombre"];

        
        
        $SegundoNombre = $_POST["SegundoNombre"];
        $Primerapellido = $_POST["PrimerApellido"];
        $Segundoapellido = $_POST["SegundoApellido"];
        $genero = $_POST["genero"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $edad = $_POST["edad"];
        $telefono = $_POST["telefono1"];
        $telefono2 = $_POST["telefono2"];
        $email = $_POST["email"];
        $carrera = $_POST["carrera"];
        $semestre = $_POST["semestre"];
        $hijos = $_POST["hijos"];
        $discapacidad = $_POST["discapacidad"];
        $enfermedad = $_POST["enfermedad"];
        $trabajo_detalle = $_POST["trabajo_detalle"];
        $medio_transporte = $_POST["medio_transporte"];
        $carnet_codigo = $_POST["carnet_codigo"];
        $carnet_serial = $_POST["carnet_serial"];
        $movimiento_estudiantil = $_POST["movimiento_estudiantil"];
        $movimiento_social = $_POST["movimiento_social"];
        $organismo_politico = $_POST["organismo_politico"];
        $centro_electoral = $_POST["centro_electoral"];
        $municipio = $_POST["municipio"];
        $parroquia = $_POST["parroquia"];

            $sql = "INSERT INTO estudiantes (cedula, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, genero, fecha_nacimiento, edad, telefono1, telefono2, email, carrera, semestre, hijos, discapacidad, enfermedad, trabajo_detalle, medio_transporte, carnet_codigo, carnet_serial, movimiento_estudiantil, movimiento_social, organismo_politico, centro_electoral, municipio, parroquia) VALUES (:cedula, :PrimerNombre, :SegundoNombre, :PrimerApellido, :SegundoApellido, :genero, :fecha_nacimiento, :edad, :telefono1, :telefono2, :email, :carrera, :semestre, :hijos, :discapacidad, :enfermedad, :trabajo_detalle, :medio_transporte, :carnet_codigo, :carnet_serial, :movimiento_estudiantil, :movimiento_social, :organismo_politico, :centro_electoral, :municipio, :parroquia)";
            
            
            // Preparar la sentencia
            $stmt = $con->prepare($sql);
            
            // Asignar valores a los parámetros
            $stmt->bindParam(':cedula', $cedula);
            $stmt->bindParam(':PrimerNombre', $nomb);
            $stmt->bindParam(':SegundoNombre', $SegundoNombre);
            $stmt->bindParam(':PrimerApellido', $Primerapellido);
            $stmt->bindParam(':SegundoApellido', $Segundoapellido);
            $stmt->bindParam(':genero', $genero);
            $stmt->bindParam(':fecha_nacimiento', $fecha_nacimiento);
            $stmt->bindParam(':edad', $edad);
            $stmt->bindParam(':telefono1', $telefono);
            $stmt->bindParam(':telefono2', $telefono2);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':carrera', $carrera);
            $stmt->bindParam(':semestre', $semestre);
            $stmt->bindParam(':hijos', $hijos);
            $stmt->bindParam(':discapacidad', $discapacidad);
            $stmt->bindParam(':enfermedad', $enfermedad);
            $stmt->bindParam(':trabajo_detalle', $trabajo_detalle);
            $stmt->bindParam(':medio_transporte', $medio_transporte);
            $stmt->bindParam(':carnet_codigo', $carnet_codigo);
            $stmt->bindParam(':carnet_serial', $carnet_serial);
            $stmt->bindParam(':movimiento_estudiantil', $movimiento_estudiantil);
            $stmt->bindParam(':movimiento_social', $movimiento_social);
            $stmt->bindParam(':organismo_politico', $organismo_politico);
            $stmt->bindParam(':centro_electoral', $centro_electoral);
            $stmt->bindParam(':municipio', $municipio);
            $stmt->bindParam(':parroquia', $parroquia);


            
            // Ejecutar la consulta
            if ($stmt->execute()) {
                echo "Datos almacenados correctamente en la base de datos.";
            } else {
                echo "Error al almacenar los datos en la base de datos.";
            }
        }


    }catch(PDOException $e){
        die('conexion de error:' . $e->getMessage());
        echo "Error: {$e->getMessage()}";
    }

?>