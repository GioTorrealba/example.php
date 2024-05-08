<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF]); ?>" method="post">
		<input type="text" name="nombre" placeholder="="Nombre">
		<input type="email" name="correo" placeholder="="Correo">

		<input type="submit" name="submit">

	</form>
</body>
</html>