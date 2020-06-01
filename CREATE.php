<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <H1>FORMULARIO CREATE</H1>
     <form action="#" method="post">
     <input type="text" name="codigo" placeholder="Ingrese codigo" require><br>
     <input type="text" name="nombres"placeholder="Ingrese nombres"><br>
     <input type="text" name="apellidos"placeholder="Ingrese apellidos"><br>
     <input type="text" name="telefono" placeholder="Ingrese telefono"><br>
     <input type="email" name="correo" placeholder="Ingrese correo">
     <input type="submit" value="enviar" name="enviar">
     </form>
</body>
<?php
if(isset($_POST['enviar'])){
   $codigo=$_POST['codigo'];
   $nombres=$_POST['nombres'];
   $apellidos=$_POST['apellidos'];
   $telefono=$_POST['telefono'];
   $email=$_POST['correo'];
   echo "datos recibidos ";

 $dsn="mysql:host=localhost;dbname=udh";
 $user="root";
 $pass="";
try{
     $conn=new PDO($dsn,$user,$pass);
     $data=[
      
     ];
      //$query="select * from estudiantes";
      $sql="insert into estudiantes(codigo,nombre,apellidos,telefono,correo,id_pa) values('$codigo','$nombres','$apellidos','$telefono','$email',1)";
      //$sql="insert into estudiantes(codigo,nombres,apellidos,telefono,correo,id_pa) values(?,?,?,?,?,1)";
      $resultado=$conn->prepare($sql);
      $resultado->execute();
      echo "<br>";
     if($resultado->rowCount()!==0){
       echo "INSERTASTE : ".$resultado->rowCount()." ESTUDIANTE";
     }else{
       echo "<p>ni para insertar sirves<p>";
     }
 }catch(PDOException $e){
   echo $e->getMessage("fallaste");
}

}

?>
</html>