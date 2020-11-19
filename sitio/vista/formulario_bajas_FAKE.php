<?php
    session_start();
    if($_SESSION['autenticado'] == false){
        header("location:../vista/login_usuario.php");
    }
?>

<!doctype html>
<html lang="en">

<head>
    <title>ELIMINAR/MODIFICAR Alumns</title>   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/8fef0f9c42.js" crossorigin="anonymous"></script>

</head>

<body>

    <?php
            require_once('header.html');
        ?>

    <h4 style="background-color: red;
                    color: white; 
                    text-align:center; 
                    padding:15px; 
                    margin-bottom:15px;
                    border: 0px;"> ELIMINAR ALUMNOS</h4>

    <table>

        <tr>
            <th>Num. Control</th>
            <th>Nombre</th>
            <th>Primer Ap.</th>
            <th>Segundo Ap.</th>
            <th>Edad</th>
            <th>Semestre</th>
            <th>Carrera</th>
            <th>ACCIONES</th>
        </tr>

        <?php

                include('../scripts_php/conexion_bd.php');

                $con = new ConexionBD();
                $conexion = $con->getConexion();
                //var_dump($conexion);
                $sql = "SELECT * FROM alumnos";

                $res = mysqli_query($conexion, $sql);
                //var_dump($res);
                

                if(mysqli_num_rows($res)>0){

                            //mysqli_fetch_row
                    while( $fila = mysqli_fetch_assoc($res) ){
                            printf("<tr><td>".$fila['Num_Control']."</td>".
                                        "<td>".$fila['Nombre_Alumno']."</td>".
                                        "<td>".$fila['Primer_Ap_Alumno']."</td>".
                                        "<td>".$fila['Segundo_Ap_Alumno']."</td>".
                                        "<td>".$fila['Edad']."</td>".
                                        "<td>".$fila['Semestre']."</td>".
                                        "<td>".$fila['Carrera']."</td>".
                                "<td> <a href='../scripts_php/procesar_baja.php?nc=%s'>ELIMINAR</a> <td/> </tr>", $fila['Num_Control'] 
                            );
                    }

                }else{
                    //no hay datos
                }

            ?>
    </table>
</body>

</html>
