
<?php 
		 $nombre=$_POST['nombre'];
		 $password=$_POST['password'];
		 if($nombre=='Pablito' && $password=='caca'){
		header('Location: usuario1.php');
		exit;}
		else{
		header('Location: usuario2.php');
		exit;
		}

	 include('includes/footer.php')?>
