<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/public/css/solid.css">
    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/public/css/fontawesome.css">
    
    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/public/css/custom.css">
    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/public/css/login.css">
    <title>Login</title>
</head>

<body>
    <?php include RUTA_APP . '/views/inc/cabeza.inc.php'?>
    <br>
    <div class="container content-container login-container ">
            <div class="row">
                <div class="col-md-12 login-form-1">
                    <h3>INICIAR SESION</h3>
                    <h6 class="d-flex justify-content-center"> <?php if(isset($datos)) echo $datos['titulo']; ?></h6>
                    <form action="<?php echo RUTA_URL;?>/auths/login" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="correo" name="correo" placeholder="Your Email *" value="Cesar@gmail.com" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Your Password *" value="1111" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                    </form>
                </div>
                <!-- <div class="col-md-6 login-form-2">
                    <h3>Login for Form 2</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div> -->
            </div>
        </div>
<!-- <div class="container">
    
    <br>
    
     <div class="row">
        
            <div class="col-sm-3"></div>
            
                <div class="card " style="background-color: #2574A9;">
                    <div class=card-header>
                        <h4> <?php //if(isset($datos)) echo $datos['titulo']; ?></h4>
                        login <i class="fa fa key text-warning float-right"></i>
                        
                    </div>
                    <div class=card-body>
                        
                        <form action="<?php //echo RUTA_URL;?>/auths/login" method="POST">
                            <div class="form-group">
                                <label for="correo">Direccion de correo</label>
                                <input type="email" class="form-control" id="correo" name="correo" aria-describeby="emailHelp" required placeholder="Email">
                                <small id="emailhelp" class="form-text text-muted">Nunca comparta su contraseña con nadie</small>
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="password" class="form-control" id="password" name="password" required placeholder="Password"> 
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        </form>
                    </div>
                </div>
                <div class="col-sm-3">
                    
            </div>
     </div>
</div> -->
    <?php include RUTA_APP . '/views/inc/footer.inc.php';?>
</body>
</html>
</html>