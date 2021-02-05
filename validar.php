<?php
include('bd.php');

require_once ('bd.php');
 $user=$_POST['user'];
 $pass=$_POST ['pass'];
 
$consulta="SELECT *FROM  usuario  where user='$user' and pass='$pass' ";
$resultado=mysqli_query($conn,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas>0){
   
    header("location: datos.php");
}else{
    ?>
     <?php
     
       echo "<script>alert('Cedula o NoEmpleado incorrecta');  window.location='index.php'</script>";

    ?>
<h1 class ="bad ">error al autentificar</h1>
    <?php
}

 mysqli_free_result($resultado);
 mysqli_close($conn);
 