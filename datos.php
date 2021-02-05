<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   
</head>
<body>
<?php
   session_start();
   
   include('bd.php');
   $sql="SELECT * FROM samsung ";
   $consulta = mysqli_query($conn,$sql);

   
   ?>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="icon" src="icon/rb.ico" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">SAMSUNG</a>
                    </li>
                  



            </div>
        </div>
    </nav>/<br>

    <!-- Agregar Productos -->
<div class=boton>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Agregar Productos </button></br>  
</br>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <strong><h3>Productos</h3></strong></h5> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="registrar-producto.php" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Sku</label>
            <input type="text" class="form-control" name="sku" id="recipient-name" placeholder="Codigo Del Producto">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">nombre</label>
            <input type="text" class="form-control" name ="nombre" id="message-text" placeholder="Nombre Del Producto">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Categoria</label>
            <input type="text" class="form-control" name="categoria" id="message-text" placeholder="Categoria ">
          </div>
          
          <div class="mb-3">
            <span class="col-form-span"><strong> Estado</strong></span></br>
              <input type="radio" id="male" name="estado" value="1">
                <label for="male">Disponible</label></ln>  
                <input type="radio" id="female" name="estado" value="0">
                  <label for="female">No Disponible</label>
               
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">userlast</label>
            <input type="text" class="form-control" value="" name="userlast" id="message-text" placeholder="Usuario ">
          </div>
          



          <div class="mb-3">
             <span class="col-form-span"><strong> Fisico </strong></span></br>
             <input type="radio" id="male" name="fisico" value="1">
                <label for="male">En Tienda</label></ln>
                <input type="radio" id="female" name="fisico" value="0">
                  <label for="female">No Disponible</label><br>   
              
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label"> Precio</label>
              <input type="text" class="form-control" name="precio" id="message-text" placeholder="Codigo Del Producto">
          </div>

          <div class="mb-3">
    <label for="exampleFormControlFile1"></label>
    <input type="file" class="form-control-file" name ="imgpath" id="exampleFormControlFile1">
  </div>

  <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>







<!-- Tabla de productos disponibles -->
<div id="contenido">
<legend> Listado de Producto </legend>

</br>
<table style="margin: auto; width: 1000px; border-collapse: separate; border-spacing: 10px 5px;">

<thead>
<th >id</th>  
    <th >sku</th>  
    <th >Nombre</th>
    <th >Categoria</th>
    <th >Estado</th>
    <th >userlast</th>
    <th >Fisico</th>
    <th >Precio</th>
 </thead>
<?php
 include('bd.php');
 $sql="SELECT * FROM samsung  ";
 $consulta = mysqli_query($conn,$sql);

while( $info = mysqli_fetch_assoc($consulta) ) { 
  ?>
           <tr>
           <td><?php echo  $info['idpro'] ?>  </td>
           <td> <?php echo  $info['sku'] ?> </td>
           <td> <?php echo  $info['nombre'] ?> </td>
           <td> <?php echo  $info['categoria'] ?> </td>
           <td> <?php echo  $info['estado'] ?></td>
           <td><?php echo  $info['userlast'] ?></td>
           <td><?php echo  $info['fisico'] ?></td>
           <td> <?php echo  $info['precio'] ?></td>
         
          <td><a href=modificae-producto.php?id=<?php echo $info['idpro']?><button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#examp1'> Modificar</button></a></td>
          <td> <a href=eliminar-producto.php?id=<?php echo $info['idpro']?><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>
          </tr>
    

        <?php      }?>

</table>


</div>


<!-- modificar registro-->
<?php
 include('bd.php');

 $sql="SELECT *  FROM samsung  ";
 
 $consulta = mysqli_query($conn,$sql);

    while( $info = mysqli_fetch_assoc($consulta) ) { 
        ?>


<div class="modal fade" id="examp1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <strong><h3> informacion de Productos</h3></strong></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="modificar-producto.php" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Sku</label>
            <input type="text" value="<?php echo  $info['sku'] ?>" class="form-control" id="message-text" name="sku" style="color: red"  disabled/> 
           <input type="hidden" value="<?php echo  $info['sku'] ?>" class="form-control" id="message-text" name="sku"  >
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">nombre</label>
           <input type="text" value="<?php echo  $info['nombre'] ?>" class="form-control" id="message-text" name="nnombre" style="color: red"  disabled/> 
           <input type="hidden" value="<?php echo  $info['nombre'] ?>" class="form-control" id="message-text" name="nombre"  > 
       
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Categoria</label>
           <input type="number" value="<?php echo  $info['categoria'] ?>" class="form-control" id="productoh" name="categoria"  >
          </div>
          
          <div class="mb-3">
            <span class="col-form-span"><strong> Estado</strong></span></br>
              <input type="radio" id="male" name="estado" value="<?php echo  $info['estado'] ?>">
                <label for="male">Disponible</label></ln>  
                <input type="radio" id="female" name="estado" value="<?php echo  $info['estado'] ?>">
                  <label for="female">No Disponible</label>
               
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">userlast</label>
            <input type="text" value="" class="form-control" id="productoh" name="userlast"  >

          </div>
          
          <div class="mb-3">
             <span class="col-form-span"><strong> Fisico </strong></span></br>
             <input type="radio" id="male" name="fisico" value="<?php echo  $info['estado'] ?>">
                <label for="male">En Tienda</label></ln>
                <input type="radio" id="female" name="fisico" value="<?php echo  $info['estado'] ?>">
                  <label for="female">No Disponible</label><br>   
              
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Precio</label>
            <input type="number" value="<?php echo  $info['precio'] ?>" class="form-control" id="productoh" name="precio"  >
          </div>
          <div class="mb-3">
    <label for="exampleFormControlFile1">Upload</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>


         <div class="mb-3">
        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Guardar</button></a>
      </div>
        </form>
      </div>
    
    </div>
  </div>

  </div>
  
  <?php } ?>
</body>

</html>