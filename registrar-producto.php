<?php

include ('bd.php');

require_once ('bd.php');

if(strlen($_POST['sku'])>=1 && strlen($_POST['nombre'])>=1 ){
$sku=$_POST['sku'];
$nombre=$_POST['nombre'];
//$imagen=$_POST['imgpath'];
$imagen="nada";
$categoria=$_POST['categoria'];
$estado=$_POST['estado'];
$userlast=$_POST['userlast'];
$fisico=$_POST['fisico'];
$precio=$_POST['precio'];


$consulta= "INSERT INTO samsung (sku,nombre,imgpath,categoria,estado,userlast,fisico,precio) 
VALUES ( '$sku', '$nombre', '$imagen', '$categoria','$estado ','$userlast','$fisico','$precio ')";

$resultado =mysqli_query($conn,$consulta);

if($consulta){
    echo "<script>alert('Registro actualizado');  window.location='datos.php'</script>";

}else{
    echo"error";
}


}

?>