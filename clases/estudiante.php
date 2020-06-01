<?php
 

class Estudiante{

   public $codigo;
   public $nombres;
   public $apellidos;
   public $telefono;
   public $correo;
   
  public function __construct($cod,$nom,$ape,$tel,$corr)
  {
       $this->codigo=$cod;
       $this->nombres=$nom;
       $this->apellidos=$ape;
       $this->telefono=$tel;
       $this->correo=$corr;
  }

   public function  crearEstudiante(){
     try{
          $dsn="mysql:host=localhost;dbname=udh";
          $user="root";
          $pass="";
          $conn=new PDO($dsn,$user,$pass);
          
          
           $sql="insert into estudiantes(codigo,nombre,apellidos,telefono,correo,id_pa) values('$this->codigo','$this->nombres','$this->apellidos','$this->telefono','$this->correo',1)";
           
           $resultado=$conn->prepare($sql);
           $resultado->execute();
           echo "<br>";
          if($resultado->rowCount()!==0){
           $mensaje= "INSERTASTE : ".$resultado->rowCount()." ESTUDIANTE";
          }else{
           $mensaje= "<p>ni para insertar sirves<p>";
          }
      }catch(PDOException $e){
        echo $e->getMessage("fallaste");
        
     }
     return $mensaje;
   }

}























?>