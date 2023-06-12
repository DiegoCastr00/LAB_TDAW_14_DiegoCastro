<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title></title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">

                    </div>
                </div>
            </div>
            <div class="col py-3">

                <div class="container-sm">

                    <div class="row mb-3">
                        <!-- Carousel -->
                        <div id="demo" class="carousel slide" data-bs-ride="carousel">

                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                            </div>

                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="resources/images/banner1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="resources/images/banner2.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="resources/images/banner3.png" class="d-block w-100" alt="...">
                                </div>
                            </div>

                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>

                    
                   
                    

                    <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
                        <?php foreach ($listaCasas as $casa) { ?>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($casa['c_foto']); ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-center text-uppercase"><?php echo $casa['c_direccion']; ?></h5>
                                        <p class="card-text text-lowercase"><?php echo $casa['descripcion']; ?></p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i class="fa-solid fa-bed"></i> <?php echo $casa['habitaciones']; ?> habitación(es)</li>
                                        <li class="list-group-item"><i class="fa-solid fa-hand-holding-dollar"></i> <?php echo $casa['costo']; ?> por día</li>
                                    </ul>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-color="dark" data-bs-toggle="modal" data-bs-target="#loginModal" data-casaid="<?php echo $casa['idcasa']; ?>">
                                            Reservar
                                        </button>
                                        <span aria-hidden="true"> </span>
                                        <button type="button" class="btn btn-outline-warning btn-rounded" data-bs-toggle="modal" data-bs-target="#modalCasa<?php echo $casa['idanfitrion']; ?>">
                                            Ver detalle
                                        </button>
                                    </div>
                                    <div class="card-footer text-body-secondary">
                                        RH inmuebles
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <?php
                            $idCasa = "modalCasa" . $casa['idanfitrion'];
                            $labelCasa = "modalCasaLabel" . $casa['idanfitrion'];
                            ?>
                            <div class="modal fade" id="<?php echo $idCasa; ?>" tabindex="-1" aria-labelledby="" <?php echo $labelCasa; ?>"" aria-hidden="true">';
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="<?php $idCasa; ?>"> Datos del anfitrión</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img class="img-fluid" src="<?php echo "data:image/jpeg;base64," . base64_encode($casa['a_foto']); ?>" />
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><i class="fa-solid fa-envelope"></i> Correo: <?php echo $casa['f_email']; ?></li>
                                                <li class="list-group-item"><i class="fa-solid fa-children"></i> Número de hijos: <?php echo $casa['numerohijos']; ?></li>
                                                <li class="list-group-item"><i class="fa-solid fa-person-arrow-up-from-line"></i> Edad del hijo mayor: <?php echo $casa['hijomayor']; ?></li>
                                                <li class="list-group-item"><i class="fa-solid fa-person-arrow-down-to-line"></i> Edad del hijo menor: <?php echo $casa['hijomenor']; ?></li>
                                            </ul>

                                        </div>
                                        <div class="d-grid gap-1 col-8 mx-auto">
                                            <button type="button" class="btn btn-primary active" data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>


                <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-title text-center">
                                    <h4>Login</h4>
                                </div>
                                <div class="d-flex flex-column text-center">
                                    <form action="controller/ReservacionController.php" method="POST">
                                        <div class="form-group mb-3">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Tu direccion de correo...">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="number" class="form-control" name="idusuario" id="idusuario" placeholder="Número de usuario">
                                        </div>
                                        <input type="hidden" name="idcasa" id="casa" value="">

                                        <input type="submit" class="btn btn-info btn-block btn-round mb-3" value="Login">
                                    </form>

                                    <div class="text-center text-muted delimiter mb-3">o usa tus redes sociales</div>
                                    <div class="d-flex justify-content-center social-buttons mb-3">
                                        <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                                            <i class="fab fa-twitter"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                                            <i class="fab fa-facebook"></i>
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                            <i class="fab fa-linkedin"></i>
                                        </button>
                                        </di>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <div class="signup-section">Aun no eres miembro? <a href="#a" class="text-info"> Ingresar</a>.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        const myModal = document.getElementById('loginModal');


        myModal.addEventListener('shown.bs.modal', (e) => {
            let idCasa = e.relatedTarget.dataset.casaid;
            //asignar el valor a un campo
            document.getElementById('casa').value = idCasa;

        });
    </script>
</body>

</html>