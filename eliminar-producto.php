<?php
    include ('bd.php');
    $idpro= $_GET['id'];


    $sSQL="DELETE FROM samsung WHERE idpro='$idpro'";
    $borrar= mysqli_query($conn,$sSQL);


    if($borrar){

        echo "<script>alert('eliminado con exito');  window.location='datos.php'</script>";
    }else{
        
        echo "<script>alert('eliminado con exito');  window.location='datos.php'</script>";
    }

?>

