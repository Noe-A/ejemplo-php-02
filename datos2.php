		<?php
			//conexión a la base de datos
			$con = mysqli_connect("localhost", "root", "", "bd1");
			if (mysqli_connect_errno()){
				echo "No se pudo conectar a la base de datos" . mysqli_connect_errno();
			}
			//obtiene valores del formulario
			echo "Nombre --".$_POST['nombre'];
			echo "Correo --".$_POST['correo'];
			echo "Curso --".$_POST['curso'];
			echo "Password --".$_POST['contrasena'];

			$nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
			$correo = mysqli_real_escape_string($con, $_POST["correo"]);
			$curso = mysqli_real_escape_string($con, $_POST["curso"]);
			$clave = mysqli_real_escape_string($con, $_POST["contrasena"]);

			//insertamos los valores del formulario en nuestra bd
			$sql = "INSERT INTO alumno (nombre, correo, curso, clave)
			VALUES ('$nombre', '$correo', '$curso', '$clave')";

			if (!mysqli_query($con,$sql)) {
			 		die('Error: ' . mysqli_error($con));
				} else{
						echo "Registro guardado exitosamente";
					}
		?>
