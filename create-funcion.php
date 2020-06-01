
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <H1>FORMULARIO CREATE 3</H1>
     <form action="#" method="post">
     <input type="text" name="codigo" placeholder="Ingrese codigo" require><br>
     <input type="text" name="nombres"placeholder="Ingrese nombres"><br>
     <input type="text" name="apellidos"placeholder="Ingrese apellidos"><br>
     <input type="text" name="telefono" placeholder="Ingrese telefono"><br>
     <input type="email" name="correo" placeholder="Ingrese correo">
     <input type="submit" value="enviar" name="enviar">
     </form>
     <?php
require_once "clases/estudiante.php";
?>
</body>


<?php
if(isset($_POST['enviar'])){
   $codigo=$_POST['codigo'];
   $nombres=$_POST['nombres'];
   $apellidos=$_POST['apellidos'];
   $telefono=$_POST['telefono'];
   $email=$_POST['correo'];
   echo "datos recibidos ";
   $estudiante =new  Estudiante($codigo,$nombres,$apellidos,$telefono,$email);
   echo $estudiante->crearEstudiante();
}

?>
</html>

//morales davila bill

//campos