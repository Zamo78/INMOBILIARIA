<?php

$usuario = $_POST['registro_usuario'];
$celular = $_POST['registro_cel'];
$email = $_POST['registro_email'];
$password = password_hash($_POST['registro_clave'], PASSWORD_DEFAULT);
$conf_passwrd = password_hash($_POST['registro_conf-clave'], PASSWORD_DEFAULT);
$tipo_usuario = $_POST['registro_tipo-usuario'];

// /se establece una conexion a la base de datos
include 'conexion.php';
// //si se han enviado datos


if (isset($usuario) and isset($password)) {
    // $usuario=mysqli_real_escape_string($conexion,$_POST['datos_registrar_usuario']);
    // $celular=mysqli_real_escape_string($conexion,$_POST['datos_registrar_celular']);
    // $email=mysqli_real_escape_string($conexion,$_POST['datos_registrar_email']);
    // $contraseña=password_hash($_POST['datos_registrar_contraseña'],PASSWORD_DEFAULT);
    // $contraseña1=password_hash($_POST['datos_registrar_confirm_contraseña'],PASSWORD_DEFAULT);
    // $rol=mysqli_real_escape_string($conexion,$_POST['datos_registrar_rol']);
    $sql = 'INSERT into usuarios(nombre_usuario,celular,email,passwd,tipo_usuario)
              values ("'.$usuario.'", "'.$celular.'", "'.$email.'", "'.$password.'", "'.$tipo_usuario.'")';
    
    
    mysqli_query($conexion,$sql) or die ('<script> alert("Error al registrar") </script>'.mysqli_error($conexion));

    echo '<script> alert("Registro exitoso"); window.location= "../"; </script>  ';

 
}

else{
     //redirección
  echo "<script> window.location= '../'; <script>";
}//si no se enviaron datos

                
//   
// }//si no se enviaron datos   

  

?>