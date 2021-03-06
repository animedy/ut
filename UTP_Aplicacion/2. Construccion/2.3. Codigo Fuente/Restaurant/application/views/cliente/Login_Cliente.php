<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pepe Tiburon | Login</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-select.min.css" rel="stylesheet">


</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                
                <img src="<?php echo base_url("assets/img/logo.png"); ?>">

            </div>
            <h3>Bienvenido</h3>
            
            <form id="FormLogin" class="m-t" role="form" data-toggle="validator" method="post" action="<?php echo base_url('Login_cliente/index'); ?>">
                <div class="form-group">
                    <input  type="text" name="login" class="form-control" placeholder="Correo" >
                </div>
                <div class="form-group">
                    <input type="password"  name="password" class="form-control" placeholder="Contraseña" >
                </div>
                <button type="submit" class="btn btn-success block full-width m-b">Login</button>
               
     
                <a data-toggle="modal" class="btn btn-success block full-width m-b" href="<?php echo base_url("cliente/Registrar"); ?>"></i>&nbsp;Registrar</a>  
                   
                  <? echo isset($error)?$error:''; ?>
                  <td>
                  <a data-toggle="modal" class="btn btn-light" href="<?php echo base_url("cliente/Contrasena"); ?>"></i>&nbsp;olvido su contraseña</a>
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            </form>
            <p class="m-t"> <small> &copy; <?php echo date("Y"); ?></small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- Bootstrap Validator -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/validator.js"></script>

</body>

</html>
