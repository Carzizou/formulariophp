	<?php include('includes/header.php')?>
		<div class='container'>
		<form method='post' action='prosal.php' class='form-horizontal'>
		<label for='nombre'>Nombre</label>
		<input name='nombre'type='text' placeholder='Escribe tu nombre' required='required'class='form-control'>
		<label for='email'>Email</label>
		<input name='email' type='email' placeholder='Email' required class='form-control'>
		<label for='poblacion'>Población</label>
		<input name='poblacion' type='text' placeholder='Población' required class='form-control'><br>
		<button class='btn btn-warning' type="submit" >Enviar</button>
		</form>
		</div>
	<?php include('includes/footer.php')?>
