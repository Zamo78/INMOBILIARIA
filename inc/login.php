<?php

session_start();
include 'conexion.php';

$email = $_POST['login_email'];
$password = $_POST['login_contraseña'];

if(empty($_SESSION) and isset($_POST['login_email'])){

    function validarUsuario(){
        global $email, $password, $conexion;

        $sql_email = 'SELECT * FROM usuarios WHERE email="'.$email.'" AND passwd="'.$password.'"';
        mysqli_query($conexion, $sql_email) or die  ('<script> alert("Error al validar usuario"); window.location= "../index.php"; </script>'.mysqli_error($conexion));
        echo "<script> window.location= '../index.php'; </script>";
    }

    $campos = array();

    if($email == "" || $password == ""){
        array_push($campos, "Complete todos los campos");
    }

    if(count($campos) > 0){
        echo "<script> alert('Campos incompletos'); window.location= '../index.php';</script>";
    } else{
        validarUsuario();
    }

    

    // if($query1){
    //     echo "<script> alert('login exitoso') </script>";
    // } else{
    //     echo "<script> alert('login fallido') </script>";
    // }

    // header  ('location: ../');
}
// 
//     if (empty($_SESSION) and isset($email)){
//         //se escaparán caracteres peligrosos
//         $nombre_de_usuario=$email;
//         $contraseña_introducida=$password;
//         //se hará la consulta a la base de datos
//         $consulta='select * from usuarios where email="'.$nombre_de_usuario.'"';
//         //si hubo un resultado
//         if ($ejecución_de_la_consulta=$conexion->query($consulta)){
//             //se obtiene la contraseña registrada
//             $contraseña_guardada=$ejecución_de_la_consulta->fetch_assoc();
//             //se compara la contraseña
//             $verificar_contraseña=password_verify($contraseña_introducida,$contraseña_guardada['passwd']);
//             //si el resultado de la comparación ha sido verdadero
//             if ($verificar_contraseña){
//                 //se asigna la sesión y redirecciona
//                 $_SESSION['name']=$nombre_de_usuario;
//                 header ('location: home.php');
//             }//si la contraseña es incorrecta
//             else{
//                 header ('location: ../');
//                 echo "<script> alert('Contraseña incorrecta') </script>";
//             }
//         }//si el usuario no está registrado
//         else{
//             echo "<script> alert('Usuario no registrado') </script>";
//             header ('location: ../');
//         }
//     }//si hay una sesion abierta o no se enviaron datos
//     else{
//         header ('location: ../');
//     }
//se lee la cookie de sesion
// 
// //se establece una conexión a la base de datos
// 
// //se validarán los campos si la sesion aún no está abierta
?>