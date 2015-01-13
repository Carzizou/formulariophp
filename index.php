	<?php include('includes/header.php')?>
		<div class='container'>
		<form method='post' action='Procesar.php' class='form-horizontal'>
		<label for='nombre'>Nombre</label>
		<input name='nombre'type='text' placeholder='Escribe tu nombre' required='required'class='form-control'>
		<label for='password'>Contraseña</label>
		<input name='password' type='password' placeholder='Contraseña' required class='form-control'>
		 <button type="submit" class="btn btn-default">Enviar</button>
		</form>
		</div>
	<?php include('includes/footer.php')?>
