<?php
include("../src/conexion.php");

if(isset($_POST['Enviar'])){

    if( 
        strlen($_POST['cedula']) >= 1 && 
        strlen($_POST['PrimerNombre']) >= 1 && 
        strlen($_POST['SegundoNombre']) >= 1 &&
        strlen($_POST['PrimerApellido']) >= 1 &&
        strlen($_POST['SegundoApellido']) >= 1 && 
        strlen($_POST['genero']) >= 1 && 
        strlen($_POST['fecha_nacimiento']) >= 1 && 
        strlen($_POST['edad']) >= 1 && 
        strlen($_POST['telefono1']) >= 1 &&
        strlen($_POST['telefono2']) >= 1 &&
        strlen($_POST['email']) >= 1 && 
        strlen($_POST['carrera']) >= 1 && 
        strlen($_POST['semestre']) >= 1 && 
        strlen($_POST['hijos']) >= 1 &&
        strlen($_POST['discapacidad']) >= 1 &&
        strlen($_POST['enfermedad']) >= 1 &&
        strlen($_POST['trabajo_detalle']) >= 1 &&
        strlen($_POST['medio_transporte']) >= 1 &&
        strlen($_POST['carnet_codigo']) >= 1 &&
        strlen($_POST['carnet_serial']) >= 1 &&
        strlen($_POST['movimiento_estudiantil']) >= 1 &&
        strlen($_POST['movimiento_social']) >= 1 &&
        strlen($_POST['organismo_politico']) >= 1 &&
        strlen($_POST['centro_electoral']) >= 1 &&
        strlen($_POST['municipio']) >= 1 &&
        strlen($_POST['parroquia']) >= 1
    ){
        $cedula = trim($_POST['cedula']);
        $PrimerNombre = trim($_POST['PrimerNombre']);
        $SegundoNombre = trim($_POST['SegundoNombre']);
        $Primerapellido = trim($_POST['PrimerApellido']);
        $Segundoapellido = trim($_POST['SegundoApellido']);
        $genero = trim($_POST['genero']);
        $fecha_nacimiento = trim($_POST['fecha_nacimiento']);
        $edad = trim($_POST['edad']);
        $telefono = trim($_POST['telefono1']);
        $telefono2 = trim($_POST['telefono2']);
        $email = trim($_POST['email']);
        $carrera = trim($_POST['carrera']);
        $semestre = trim($_POST['semestre']);
        $hijos = trim($_POST['hijos']);
        $discapacidad = trim($_POST['discapacidad']);
        $enfermedad = trim($_POST['enfermedad']);
        $trabajo_detalle = trim($_POST['trabajo_detalle']);
        $medio_transporte = trim($_POST['medio_transporte']);
        $carnet_codigo = trim($_POST['carnet_codigo']);
        $carnet_serial = trim($_POST['carnet_serial']);
        $movimiento_estudiantil = trim($_POST['movimiento_estudiantil']);
        $movimiento_social = trim($_POST['movimiento_social']);
        $organismo_politico = trim($_POST['organismo_politico']);
        $centro_electoral = trim($_POST['centro_electoral']);
        $municipio = trim($_POST['municipio']);
        $parroquia = trim($_POST['parroquia']);
        $consulta = "INSERT INTO `estudiantes`(`cedula`, `PrimerNombre` `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `genero`, `fecha_nacimiento`, `edad`, `telefono1`, `telefono2`, `email`, `carrera`, `semestre`, `hijos`, `discapacidad`, `enfermedad`, `trabajo_detalle`, `medio_transporte`, `carnet_codigo`, `carnet_serial`, `movimiento_estudiantil`, `movimiento_social`, `organismo_politico`, `centro_electoral`, `municipio`, `parroquia`) VALUES ('$cedula', '$PrimerNombre', '$SegundoNombre', '$Primerapellido', '$Segundoapellido', '$genero', '$fecha_nacimiento', '$edad', '$telefono', '$telefono2', '$email', '$carrera', '$semestre', '$hijos', '$discapacidad', '$enfermedad', '$trabajo_detalle', '$medio_transporte', '$carnet_codigo', '$carnet_serial', '$movimiento_estudiantil', '$movimiento_social', '$organismo_politico', '$centro_electoral', '$municipio', '$parroquia')";
        $resultado = mysqli_query($conex, $consulta);
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            ?>
            <h3 class="ok">¡Registro exitoso!</h3>
            <?php
        }else{
            ?>
            <h3 class="bad">¡Error al registrar!</h3>
            <p><?php echo mysqli_error($conex); ?></p>
            <?php
        }
}

}


?>