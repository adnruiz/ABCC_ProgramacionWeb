<?php
    session_start();
    if($_SESSION['autenticado'] == false){
        header("location:../vista/login_usuario.php");
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
    <script src="../scripts_js/altas.js" ></script>
</head>

<body>
    <?php 
        require_once("header.html");
    ?>
   
    <div class="pb-5 pt-5 pl-5 col-lg-7">
        <form class="row g-3" method="post" action="../scripts_php/procesar_altas.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Num. Control</label>
                    <input type="text" class="form-control" id="inputEmail4" name="caja_num_control">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Nombre</label>
                    <input type="text" class="form-control" id="inputPassword4" name="caja_nombre">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Primer apellido</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Solo letras" name="caja_primer_ap">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress2">Segundo apellido</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Solo letras" name="caja_segundo_ap">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">Edad</label>
                <!--    
                    <input name="edad" class="form-control" type="text" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>-->
                    <select id="edad" class="form-control" name="edad" onclick="age(); this.onclick=null;"><option disabled selected hidden selected>Elije tu edad</option></select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Semestre</label>
                    <select id="semestre" class="form-control" name="semestre" onclick="sem(); this.onclick=null;"><option disabled selected hidden selected>Elije semestre</option></select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Carrera</label>
                    <select id="carrera" name="carrera" class="form-control" onclick="carr(); this.onclick=null;"><option disabled selected hidden selected>Elije carrera</option></select>
                </div>
            </div>

            <button type="submit" class="col-md-4 btn btn-primary">Guardar Alumno</button>
        </form>
    </div>
</body>

</html>
