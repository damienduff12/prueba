<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/Style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <title>Fast Deli - RS v1</title>
</head>

<body>

    <center>
        <div style="width:40%; margin-top: 15%;">
            <img class="imagen" src="logo/logo.png">
            <form action="validar.php" method="post">
                <div class="form-group"></br>
                    <label for="user">Usuario</label>
                    <input type="text" class="form-control" id="nombre" name="user" placeholder="Ingresar Usuario">
                </div></br>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="PW" name="pass" placeholder="Ingrese Contraseña">
                </div>
                <button class="boton" type="submit" class="btn btn-primary" id="accesar">Accesar</button>
            </form>
        </div>
        <center>


            <script src="js/bootstrap.min.js"></script>
</body>

</html>