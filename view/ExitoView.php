<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>

<body>

    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center row">
            <div class="card text-bg-success mb-3">
                <h1>Reservación creada</h1>
                <p class="text-start">FOLIO: <?php echo $nuevareservacion['idreservacion']; ?></p>
                <p class="text-start">ANFITRIÓN: <?php echo $nuevareservacion['f_nombre']; ?></p>
                <p class="text-start">DIRECCIÓN DE LA CASA: <?php echo $nuevareservacion['c_direccion']; ?></p>
                <p class="text-start">HUESPED: <?php echo $nuevareservacion['p_nombre']; ?></p>
                <p class="text-start">FECHA DE ENTRADA: <?php echo $nuevareservacion['ingreso']; ?></p>
                <p class="text-start">FECHA DE SALIDA: <?php echo $nuevareservacion['salida']; ?></p>
                <p class="text-start">COSTO: <?php echo $nuevareservacion['costo']; ?></p>
            </div>
            <a href="../index.php">Regresar al inicio</a>
        </div>
    </div>


    <script src="../js/jquery-3.4.1.min.js"></script>

    <script src="../js/bootstrap.min.js"></script>


</body>

</html>