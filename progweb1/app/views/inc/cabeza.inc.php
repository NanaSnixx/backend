<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/public/css/solid.css">
    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/public/css/fontawesome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/public/css/custom.css">
    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/public/css/barra.css">
        <title><?php echo NOMBRE_SITIO; ?></title>
        <style>
            .aqua{background-color: aqua}
        </style>
    </head>
    
    <body>
    
    <!-- inicio nuevo -->
    <div class="sidebar-container">
  <div class="sidebar-logo">
     Nombre Software
  </div>
  <ul class="sidebar-navigation">
    <li class="header">MAIN</li>
    <li>
      <a href="<?php echo RUTA_URL; ?>">
        <i class="fa fa-home" aria-hidden="true"></i> Dashboard
      </a>
    </li>
    <li>
      <a href="<?php echo RUTA_URL; ?>/cuentas">
        <i class="fa fa-tachometer" aria-hidden="true"></i> Cuentas
      </a>
    </li>
    
    <li class="header">Transacciones</li>
    <li>
      <a href="#">
        <i class="" aria-hidden="true"></i> Gastos
      </a>
    </li>
    <li>
      <a href="#">
        <i class="" aria-hidden="true"></i> Ingresos
      </a>
    </li>
    <li>
      <a href="#">
        <i class="" aria-hidden="true"></i> Transferencias
      </a>
    </li>
    <li class="header">Categorias</li>
    <li>
      <a href="#">
        <i class="" aria-hidden="true"></i> Gastos
      </a>
    </li>
    <li>
      <a href="#">
        <i class="" aria-hidden="true"></i> Ingresos
      </a>
    </li>
    <li class="header">Usuario</li>
    <li>
      <a href="<?php echo RUTA_URL; ?>/usuarios">
        <i class="fa fa-users" aria-hidden="true"></i> usuarios
      </a>
    </li>
    <li class="header">Reportes</li>
    <li>
      <a href="#">
        <i class="" aria-hidden="true"></i>Gastos
      </a>
    </li>
    <li>
      <a href="#">
        <i class="" aria-hidden="true"></i>Ingresos
      </a>
    </li>
    <li>
      <a href="#">
        <i class="" aria-hidden="true"></i> Estado de cuenta
      </a>
    </li>
  </ul>
</div>
<!-- 
<div class="content-container">

  <div class="container-fluid">

    Sistema contable
    <div class="jumbotron">
      <h1>Navbar example</h1>
      <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
      <p>To see the difference between static and fixed top navbars, just scroll.</p>
      <p>
        <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
      </p>
    </div>

  </div>
</div> -->
<script>

</script>


    <!-- fin inicio -->


        <!-- <div class="container bg-default">
        <div class="row">
            <div class="col-xs-12 colsm-12 col md-12 col-lg-12">
                <h1>Empresas Tecnol&oacute;gicas S.A. de C.V.</h1>
            </div>
        </div>
        
        <nav class="navbar navbar-expand-lg navbar-light aqua">
            <a class="navbar-brand" href="<?php// echo RUTA_URL; ?>"><i class="fa fa-home" style="color:#f00;"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php //echo RUTA_URL; ?>/usuarios">Usuarios</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reportes</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo RUTA_URL; ?>/productos">Productos</a>
                            <a class="dropdown-item" href="#">Empleados</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Otros</a>
                        </div>
                    </li>
                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acceso</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php //echo RUTA_URL; ?>/auths" >Log In</a>
                            <a class="dropdown-item" href="<?php// echo RUTA_URL; ?>/auths/logout">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>   
    </div> -->
    </body>
</html>