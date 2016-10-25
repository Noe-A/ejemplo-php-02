<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Ingreso de Datos</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div id="formulario">
<form method="post" action="datos2.php">
    <label> Nombre:</label>
    <input size="25" maxlength="20" autocomplete="on" placeholder="Nombre y Apellido"  required="required" type="text" name="nombre" value="" />
    <br>
    <label>Correo:</label>
    <input size="25" maxlength="20" autocomplete="on" placeholder="Tu Correo@Electrónico" autofocus="autofocus" required="required" type="email" name="correo" value="" />
    <br>
    <label>Curso:</label>
    <select name="curso" required="required" >
        <option value="" >Elige un Curso: </option>
        <option value="Diseño Gráfico">Diseño Gráfico</option>
        <option value="Diseño Web">Diseño Web</option>
        <option value="Aplicaciones Móviles">Aplicaciones Móviles</option>
    </select>
    <br>
    <label>Password: </label>
    <input maxlength="15" size="20" type="password" name="contrasena"  required="required" />
    <br>
    <center><input type="submit" value="Registrarse"/></center>
    <br>
</form>
</div>
</body>
</html>