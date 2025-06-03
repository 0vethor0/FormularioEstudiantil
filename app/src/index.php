<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilos.css">
    <title>FormularioEstudiantil</title>
</head>
<body>
    <div class="container">
        <h1>Formulario Estudiantil</h1>
        <form action="process.php" method="post">

            <input type="text" id="dni" name="dni" placeholder="Cedula:" required><br><br>

            <input type="text" id="1ernombre" name="1ernombre" placeholder="Primer Nombre" required><br><br>

            <input type="text" id="2donombre" name="2donombre" placeholder="Segundo Nombre" required><br><br>

            <input type="text" id="1erapellido" name="1erapellido" placeholder="Primer Apellido:" required><br><br>

            <input type="text" id="2doapellido" name="2doapellido" placeholder="Segundo Apellido:" required><br><br>

            <select id="sexo" name="genero" required>
            <option value="" disabled selected>Sexo:</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            </select><br><br>

            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de Nacimiento:" required><br><br>

            <input type="number" id="edad" name="edad" min="0" max="80" placeholder="Edad:" required><br><br>

            <input type="tel" id="telefono" name="telefono" placeholder="Teléfono:" required><br><br>

            <input type="tel" id="telefono2" name="telefono2" placeholder="Segundo Teléfono:"><br><br>

            <input type="email" id="email" name="email" placeholder="Correo Electrónico:" required><br><br>

            <input type="text" id="Carrera" name="Carrera" placeholder="Carrera que cursa:" required><br><br>

            <input type="text" id="semestre" name="semestre" placeholder="Semestre:" required><br><br>
            
            <input type="number" id="Hijos" name="Hijos" min="0" placeholder="Si tiene Hijos, indique cuantos:"><br><br>

            <input type="text" id="discapacidad" name="discapacidad" placeholder="Si posee alguna discapacidad, indique cual:"><br><br>

            <input type="text" id="enfermedad" name="enfermedad" placeholder="Si padece alguna enfermedad, indique cual:"><br><br>

            <input type="text" id="trabajo_detalle" name="trabajo_detalle" placeholder="Si trabaja, indique el tipo de trabajo:"><br><br>

            <input type="text" id="Medio_de_Transporte" name="Medio_de_Transporte" placeholder="Medio de transporte Habitual:" required><br><br>

            <input type="number" id="CarnetCodigo" name="CarnetCodigo" min="0" placeholder="ingrese el codigo de su carnet de la patria:" required><br><br>

            <input type="number" id="CarnetSerial" name="CarnetSerial" min="0" placeholder="Ingrese el serial de su carnet de la patria:" required><br><br>

            <input type="text" id="MovimientoEstudiantil" name="MovimientoEstudiantil" placeholder="Si pertenece a algun movimiento Estudiantil, indique cual:"><br><br>
            
            <input type="text" id="MovimientoSocial" name="MovimientoSocial" placeholder="Si pertenece a algun movimiento social, indique cual:"><br><br>

            <input type="text" id="OrganismoPolitico" name="OrganismoPolitico" placeholder="Si pertenece a alguna organizacion politica, indique cual:"><br><br>

            <h2>Datos Electorales:</h2>
            <p>*si no esta inscrito en el CNE, no responda esta seccion del formulario</p>
            <input type="text" id="CentroElectoral" name="CentroElectoral" placeholder="Indique su Centro Electoral:"><br><br>

            <input type="text" id="municipio" name="municipio" placeholder="Municipo(CNE):"><br><br>

            <input type="text" id="parroquia" name="parroquia" placeholder="Parroquia(CNE):"><br><br>
            
            <input type="submit" class="btn" value="Enviar">
        </form>
    </div>
    <footer>
        <p>Autor: Vincent Fernandez</p>
    </footer>
</body>
</html>
