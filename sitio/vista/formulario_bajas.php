<?php
    session_start();
    if($_SESSION['autenticado'] == false){
        header("location:../vista/login_usuario.php");
    }
?>

<!doctype html>
<html lang="es-mx">

<head>

    <meta charset="utf-8">

    <!-- Va a adaptar el tamaño dependiendo del dispositivo -->
    <meta name="viewport" content="width-device-width, initial-scale-1">

    <!-- Librería Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="../scripts_js/altas.js" ></script>
    <title>BAJAS/CAMBIOS</title>

</head>
 <?php
            require_once('header.html');
        ?>

<body>

   

    <!-- Contenido De La Página -->

    <div class="container">
        <h1>Tabla Con Filtro</h1>

        <p>Escriba la información que desea buscar en la tabla</p>

        <input class="form-control" id="input1" onkeyup="bus()" type="text" placeholder="Buscar...">
        <br>
        <br>
        <select class="form-control" id="opcion" onclick="bus2(); this.onclick=null;"></select>
       
        <br>
        <br>

        <table class="table table-bordered table-striped" id="tabla1">

            <thead>
                <tr>
                    <td>Numero de Control</td>
                    <td>Nombre(s)</td>
                    <td>Primer Ap.</td>
                    <td>Segundo Ap.</td>
                    <td>Edad</td>
                    <td>Semestre</td>
                    <td>Carrera</td>
                    <td>REALIZAR</td>
                </tr>
            </thead>

            <tbody>
            <tbody>
                <?php 
                        	include_once("../scripts_php/alumnoDAO.php");
							$aDAO = new AlumnoDAO();
							$listaAlumnos=$aDAO->mostrarTodos();

							while ($fila=mysqli_fetch_object($listaAlumnos)){
									$nc = $fila->Num_Control;
									$n = $fila->Nombre_Alumno;
									$pa = $fila->Primer_Ap_Alumno;
									$sa = $fila->Segundo_Ap_Alumno;
									$e = $fila->Edad;
									$s = $fila->Semetre;
									$c = $fila->Carrera;
                                    
								?>
                <tr>
                    <td><?php echo $nc;?></td>
                    <td><?php echo $n;?></td>
                    <td><?php echo $pa;?></td>
                    <td><?php echo $sa;?></td>
                    <td><?php echo $e;?></td>
                    <td><?php echo $s;?></td>
                    <td><?php echo $c;?></td>


                    <td style="text-align: center;">

                        <a href="formulario_modificar.php?nc=<?php echo $nc;?>" class="edit" title="Edición" data-toggle="tooltip">
                            <!-- <i class="material-icons">&#xE254;</i> -->


                            <i class="fa fa-pencil" style="font-size:30px;color:orange;"></i>

                        </a>
                        <a href="../scripts_php/procesar_baja.php?nc=<?php echo $nc;?>" class="delete" title="Eliminación" data-toggle="tooltip">
                            <!-- <i class="material-icons">&#xE872;</i> -->

                            <i class="fa fa-trash" style="font-size:30px;color:red; padding-left: 30px;"></i>
                        </a>
                    </td>
                </tr>
                <?php
							}
                ?>
            </tbody>

        </table>

        <br><br><br><br><br>
    </div>

   <!--
    <script>
        $(document).ready(function() {
            $("#input1").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#tabla1 tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

    </script>
    -->

</body>

</html>
