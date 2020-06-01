<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <H1>FORMULARIO DELETE (estudiantes) </H1>
     <form action="#" method="post">
     <input type="text" name="id" placeholder="Ingrese id del estudiante" require>
     <input type="submit" value="enviar" name="enviar">
     </form>
</body>
<?php
if(isset($_POST['enviar'])){
   $id=$_POST['id'];
   echo "dato recibidos: <br>";

 $dsn="mysql:host=localhost;dbname=udh";
 $user="root";
 $pass="";
try{
     $conn=new PDO($dsn,$user,$pass);
     $data=[
      
     ];
      //$query="select * from estudiantes";

      $sql1="delete from estudiantes where id=$id ";
      $sql2="select nombre from estudiantes where id=$id";
      //$sql="insert into estudiantes(codigo,nombres,apellidos,telefono,correo,id_pa) values(?,?,?,?,?,1)";
      $resultado=$conn->prepare($sql2);
      $resultado->execute();
      
     foreach($resultado->fetchAll() as $arreglo){
        echo$arreglo['nombre']."<br>";
     } 
      echo "<br>";
      $resultado=$conn->prepare($sql1);
      $resultado->execute();
     if($resultado->rowCount()!==0){
       echo $resultado->rowCount()." fila eliminada";
     }else{
       echo "<p>ninguna fila afectada<p>";
     }
 }catch(PDOException $e){
   echo $e->getMessage("fallaste");
}

}

?>
</html>