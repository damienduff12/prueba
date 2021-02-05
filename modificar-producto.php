<?php

include ('bd.php');
$sku=$_POST['sku'];
$nombre=$_POST['nombre'];
$categoria=$_POST['categoria'];
$estado=$_POST['estado'];
$fisico=$_POST['fisico'];
$precio=$_POST['precio'];

$consulta="UPDATE samsung SET  categoria='$categoria', estado='$estado', fisico='$fisico, precio='$precio where sku='$sku'  ";
$resultado=mysqli_query($conn,$consulta);


if($resultado){
    $msg = "Los datos se editaron correctamente";
        
    }else{
        $msg = "Los datos no se editaron";
    }

echo $msg;
?>
