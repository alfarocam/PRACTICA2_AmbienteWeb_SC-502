<?php
  include_once $_SERVER['DOCUMENT_ROOT'] . '/PRACTICA2/Controller/ConsultaController.php';
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

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
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
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php ShowHeader(); ?>


    <!-- Consulta de Vehículos Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <!-- Columna izquierda: descripción -->
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <h2 class="mb-3 text-danger fw-bold">Consulta de Vehículos</h2>
                            <p class="fs-5 text-muted">
                                En esta sección puede consultar la información de los vehículos registrados en la base
                                de datos del sistema.
                            </p>
                            <p class="fs-6">
                                Ingrese uno o varios criterios de búsqueda en el formulario para filtrar los resultados
                                y presione <strong>Buscar</strong>.
                            </p>
                            <p class="text-secondary small mt-3">
                                Los campos disponibles para consulta son:
                                <strong>Cédula</strong> (del vendedor),
                                <strong>Nombre</strong>,
                                <strong>Marca</strong>,
                                <strong>Modelo</strong> y
                                <strong>Precio</strong>.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Columna derecha: formulario -->
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Cédula del vendedor" id="Cedula" name="Cedula">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Nombre del vendedor" id="Nombre" name="Nombre">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Marca" id="Marca" name="Marca">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Modelo" id="Modelo" name="Modelo">
                                </div>
                            </div>
                            <input type="number" step="0.01" placeholder="Precio" id="Precio" name="Precio">

                            <button type="submit" class="site-btn" id="btnConsultar" name="btnConsultar">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Consulta de Vehículos Section End -->
     
    <div class="row mt-5">
        <div class="col-12">
            <h3>Resultados de la Consulta</h3>
            <?php
        if(isset($_POST["Mensaje"]))
        {
            echo '<div class="alert alert-warning">' . $_POST["Mensaje"] . '</div>';
        }
        
        if($datosVehiculos != null && mysqli_num_rows($datosVehiculos) > 0)
        {
            echo '<table class="table table-striped">';
            echo '<thead><tr><th>Cédula</th><th>Nombre</th><th>Marca</th><th>Modelo</th><th>Precio</th></tr></thead>';
            echo '<tbody>';
            
            while($fila = mysqli_fetch_array($datosVehiculos))
            {
                echo '<tr>';
                echo '<td>' . $fila["Cedula"] . '</td>';
                echo '<td>' . $fila["Nombre"] . '</td>';
                echo '<td>' . $fila["Marca"] . '</td>';
                echo '<td>' . $fila["Modelo"] . '</td>';
                echo '<td>₡' . number_format($fila["Precio"], 2) . '</td>';
                echo '</tr>';
            }
            
            echo '</tbody></table>';
        }
        else
        {
            echo '<p>No hay vehículos para mostrar.</p>';
        }
        ?>
        </div>
    </div>


    <!-- Footer Section Begin -->
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
    <!-- Footer Section End -->


    <!-- Js Plugins -->
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