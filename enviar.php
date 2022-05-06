<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>wedfsfsd</title>
</head>
<body>
	<center>
<?php 
$myemail = 'p11antonio03@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>

		<form method="post" action="enviar.php">
			<div class="fields">
				<div class="field half">
					<label for="name">Nombre</label>
					<input type="text" name="nombre" placeholder="NOMBRE"/>
				</div>
				<div class="field half">
					<label for="email">Correo electrónico</label>
					<input type="email" name="email" placeholder="CORREO"/>
				</div>
				<div class="field">
					<label for="message">Mensaje</label>
					<textarea type="text" name="mensage" placeholder="MENSAJE" rows="5"></textarea>
				</div>
			</div>
			<ul class="actions">
				<li><a href="thepathofenthus@gmail.com" class="button submit">Enviar mensaje</a></li>
			</ul>
		</form>

	</center>
</body>
</html>