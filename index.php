<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="recibe.php" method="post" name="">
		<input type="text" placeholder= "Nombre:" name="nombre">
		<br>

		<label for="hombre">Hombre</label>
		<input type="radio" name="sexo" value="hombre" id="hombre">
		<br>

		<label for="mujer">Mujer</label>
		<input type="radio" name="sexo" value="mujer" id="mujer">
		<br>

		<select name= "year">
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>

		</select>


		<label for= "terminos">Aceptas los terminos?</label>
		<input type="checkbox" name="terminos" id= "terminos">
		<br>


		<input type="submit" value="Enviar">
	</form>
</body>
</html>