<?php

    include('../scripts_php/conexion_bd_usuarios.php');

    $con = new ConexionBD();
    $conexion = $con->getConexion();
    //var_dump($conexion);

    if($conexion){

        $u = $_POST['caja_username'];
        $p = $_POST['caja_password'];

        //$u_cifrado = sha1($u);
        //$p_cifrado = sha1($p);

        echo $p;

        $sql = "SELECT * FROM usuarios WHERE nombre_usuario='$u' AND contraseña='$p'";

        $res = mysqli_query($conexion, $sql);

        if(mysqli_num_rows($res)==1){
            //echo "<span style='color:green;'> usuario autenticado</span>";
            session_start();
            $_SESSION['autenticado'] = true;
            $_SESSION['usuario'] = $u;
            header("location:../vista/index.html");
        }else{
            header("location:../vista/login_usuario.php");
            //echo "<span style='color:green;'> usuario NO autenticado</span>";
        }

    }

?>