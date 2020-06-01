<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>izi</title>
</head>
<body>
    <form action="" method="get">
    <input type="text" name="numero" placeholder="ingrese un numero" id="">
    <input type="submit" name="send" value="enviar">
    </form>
<?php
if(isset($_GET['send'])){
$dato=$_GET['numero'];
echo "la tabla del: ".$dato."<br>";    
for ($i=1; $i <=12 ; $i++) { 
   $mul=$dato*$i;  
   echo $dato." * ".$i." == ".$mul."<br>";
}
}
?>

</body>

</html>