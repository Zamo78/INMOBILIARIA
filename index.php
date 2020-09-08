
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pantalla1_Inicio</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><b>Sistema Inmobiliario Ventas<b></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#modal_login">Iniciar sesión</a></li>
        <li><a href="#" data-toggle="modal" data-target="#modal_registro">Registrate</a></li>
        <li><img src="imagen/usuario6.jpg"></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      <!--modal para iniciar sesión-->
<div class="modal fade bs-example-modal-sm" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
         <h2>Iniciar sesión</h2>
        </div>
        <div class="modal-body">
          <form action="./inc/login.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="control1_nombre">Email</label>
              <input type="text" name="login_email" class="form-control" id="control1_nombre" placeholder="Ingrese su Email" >
            </div>
            <div class="form-group">
              <label for="control1_contraseña">Contraseña</label>
              <input type="password" name="login_contraseña" class="form-control" id="control1_contraseña" placeholder="Ingrese su Clave">
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Entrar">
          </form>
        </div>
    </div>
  </div>
</div>
      <!--modal para registrarse-->
<div class="modal fade bs-example-modal-sm" id="modal_registro" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
         <h2>Regístrate</h2>
        </div>
        <div class="modal-body">
          <form action="./inc/registro.php" method="POST" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="control2_nombre">Usuario</label>
              <input type="text" name="registro_usuario" class="form-control" id="control2_nombre" placeholder="Ingrese su nombre o razon social">
            </div>
            <div class="form-group">
              <label for="control2_celular">Celular</label>
              <input type="number" name="registro_cel" class="form-control" id="control2_celular" placeholder="Ingrese su celular">
            </div>
             <div class="form-group">
              <label for="control2_email">Email</label>
              <input type="email" name="registro_email" class="form-control" id="control2_email" placeholder="Ingrese su email">
            </div>
            <div class="form-group">
              <label for="control2_contraseña">Clave</label>
              <input type="password" name="registro_clave" class="form-control" id="control2_contraseña" placeholder="Ingrese su Clave">
            </div>
            <div class="form-group">
              <label for="control2_confirm_contraseña">Confirmar Clave</label>
              <input type="password" name="registro_conf-clave" class="form-control" id="control2_confirm_contraseña" placeholder="Confirmar su Clave">
            </div>
            <div class="form-group">
              <label for="control2_rol">Tipo Usuario</label>

            <select name="registro_tipo-usuario" class="form-control" id="control2_rol">
              <option value="1">Administrador</option>
              <option value="2">Usuario</option>
            </select>
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Registrar">
          </form>
        </div>
    </div>
  </div>
</div>

<article style="text-align: center;">
   
     
    <h3><b>CONTACTO<b></h3>
  <div class="img-contacto">
    
       <img src="imagen/direccion.jpg" alt="" class="img-contacto">         <b>Dirección: Belgrano 357 Bernal<b>
      
       <img src="imagen/whatsapp.jpg" alt="" class="img-contacto">          WhatsApp: 1151266680

       <img src="imagen/mail.jpg" alt="" class="img-contacto">              Mail: siv@gmail.com
        
    </div>
     <div class="agrupar">
        <header class="header">
    <div class="contenedor-imagenes">
        <img src="imagen/siv2.jpg"> 
    </div>
</article>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>