<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <H1>FORMULARIO UPDATE(cambiar nombre estudiantes) </H1>
     <form action="#" method="post">
     <input type="number" name="id" placeholder="Ingrese id del estudiante" require>
     <input type="text" name="nombre" placeholder="Ingrese nombre del estudiante" require>
     <input type="submit" value="enviar" name="enviar">
     </form>
</body>
<?php
if(isset($_POST['enviar'])){
   $id=$_POST['id'];
   $nombre=$_POST['nombre'];
   echo "dato recibidos: <br>";

 $dsn="mysql:host=localhost;dbname=udh";
 $user="root";
 $pass="";
try{
     $conn=new PDO($dsn,$user,$pass);
     $data=[
      
     ];
      

      $sql1="update estudiantes set nombre='$nombre' where id=$id ";
      $sql2="select nombre from estudiantes where id=$id";
      
      $resultado=$conn->prepare($sql2);
      $resultado->execute();
      $arreglo=$resultado->fetchAll();
      $nom_antiguo=$arreglo[0]['nombre'];
      echo "<br>";
      $resultado=$conn->prepare($sql1);
      $resultado->execute();
     if($resultado->rowCount()!==0){
       echo $resultado->rowCount()." fila actualizada<br>";
       echo "el nuevo nombre de ".$nom_antiguo." es :".$nombre;
     }else{
       echo "<p>ninguna fila afectada<p>";
     }
 }catch(PDOException $e){
   echo $e->getMessage("fallaste");
}

}

?>
</html>