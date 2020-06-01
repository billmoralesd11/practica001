<?php
$dsn="mysql:host=localhost;dbname=udh";
$user="root";
$pass="";
try{
     $conn=new PDO($dsn,$user,$pass);
     $query="select * from estudiantes";
     $resultado=$conn->prepare($query);
     $resultado->execute();
     foreach($resultado as $alumno){
      echo $alumno[3];
     }
     var_dump($resultado);
}catch(PDOException $e){
  echo $e->getMessage("fallaste");
}



?>