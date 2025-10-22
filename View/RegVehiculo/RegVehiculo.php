<?php
  include_once $_SERVER['DOCUMENT_ROOT'] . '/PRACTICA2/Controller/RegVehiculoController.php';
  require_once '../LayoutInterno.php';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HVAC | Template</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php ShowHeader(); ?>

    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <h2>Registro de Vehículos</h2>
                            <p class="fs-5 text-muted">
                                En esta sección puede registrar nuevos vehículos en la base de datos del sistema.
                            </p>
                            <p class="fs-6">
                                Complete los campos del formulario y presione
                                <strong>Guardar</strong> para finalizar el registro.
                            </p>
                            <p class="text-secondary small mt-3">
                                Los campos requeridos son: <strong>Marca</strong>, <strong>Modelo</strong>,
                                <strong>Color</strong>, <strong>Precio</strong> y <strong>Vendedor</strong>
                                (este último puede seleccionarse de una lista desplegable).
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Marca" required id="Marca" name="Marca">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Modelo" required id="Modelo" name="Modelo">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Color" required id="Color" name="Color">
                                </div>
                                <div class="col-lg-6">
                                    <input type="number" step="0.01" placeholder="Precio" required id="Precio"
                                        name="Precio">
                                </div>
                            </div>
                            <select class="form-select mb-3" required name="Vendedor" id="Vendedor">
                                <option value="">Seleccione el vendedor</option>
                                <?php
                                    if($vendedores != null && mysqli_num_rows($vendedores) > 0)
                                    {
                                        while($fila = mysqli_fetch_array($vendedores))
                                        {
                                            echo '<option value="' . $fila["IdVendedor"] . '">' . $fila["Nombre"] . ' - ' . $fila["Cedula"] . '</option>';
                                        }
                                    }
                                    ?>
                            </select>

                            <button type="submit" class="site-btn" id="btnGuardarVehiculo" name="btnGuardarVehiculo">
                                Guardar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <footer class="footer set-bg" data-setbg="../img/footer-bg.jpg">
        <div class="container">
            <div class="footer__contact">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__title">
                            <h2>Práctica 2</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__option">
                            <div class="option__item"><i class=""></i>Camila Alfaro</div>
                            <div class="option__item email"><i class="fa fa-envelope-o"></i> calfaro80839@ufide.ac.cr
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__copyright__text">
                <p>Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            </div>

        </div>
    </footer>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>