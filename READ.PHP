<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <H1>FORMULARIO READ (LISTAR UNA TABLA)</H1>
     <form action="#" method="post">
     <input type="text" name="tabla" placeholder="Ingrese nombre de la tabla" require>
     <input type="submit" value="enviar" name="enviar">
     </form>
</body>
<?php
if(isset($_POST['enviar'])){
   $tabla=$_POST['tabla'];
   echo "dato recibidos: <br>";

 $dsn="mysql:host=localhost;dbname=udh";
 $user="root";
 $pass="";
try{
     $conn=new PDO($dsn,$user,$pass);
     $data=[
      
     ];
      //$query="select * from estudiantes";
      $sql="select * from $tabla";
      //$sql="insert into estudiantes(codigo,nombres,apellidos,telefono,correo,id_pa) values(?,?,?,?,?,1)";
      $resultado=$conn->prepare($sql);
      $resultado->execute();
      
     foreach($resultado->fetchAll() as $arreglo){
        echo$arreglo['nombre']."<br>";
     } 
      echo "<br>";
     if($resultado->rowCount()!==0){
       echo "listaste : ".$resultado->rowCount()." filas de la tabla ". $tabla;
     }else{
       echo "<p>ninguna fila afectada<p>";
     }
 }catch(PDOException $e){
   echo $e->getMessage("fallaste");
}

}

?>
</html>