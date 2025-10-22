<?php
function ShowHeader()
{
    $currentPath = $_SERVER['PHP_SELF'];
    if (strpos($currentPath, '/View/') !== false) {
        $rootPath = '../../';
        $imgPath = '../img/';
    } else {
        $rootPath = './';
        $imgPath = './View/img/';
    }
    
    echo '
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="' . $rootPath . 'index.php">
                            <img src="' . $imgPath . 'logo.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="' . $rootPath . 'View/Inicio/Home.php">Home</a></li>
                                <li class="active"><a href="#">Menú</a>
                                    <ul class="dropdown">
                                        <li><a href="' . $rootPath . 'View/RegVendedor/RegVendedor.php">Registro Vendedores</a></li>
                                        <li><a href="' . $rootPath . 'View/RegVehiculo/RegVehiculo.php">Registro Vehículos</a></li>
                                        <li><a href="' . $rootPath . 'View/Consulta/Consulta.php">Consulta Vehículos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="canvas__open">
                            <span class="fa fa-bars"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    ';
}
?>