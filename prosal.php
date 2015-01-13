<?php include('includes/header.php')?>
<div class='container'>
<?php
//recojo variables
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$poblacion=$_POST['poblacion'];
include('includes/function.php');
//parametros en función
echo'<p>'.sobreMi($nombre,$email,$poblacion).'</p>';
?>
</div>
<?php include('includes/footer.php')?>