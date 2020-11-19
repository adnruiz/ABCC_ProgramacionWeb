<?php 
    include('alumnoDAO.php');
   
    $nc = $_POST['caja_num_control'];
    $n = $_POST['caja_nombre'];
    $pa = $_POST['caja_primer_ap'];
    $sa = $_POST['caja_segundo_ap'];
    $e = $_POST['edad'];
    $s = $_POST['semestre']; //select_semestre
    $c = $_POST['carrera'];

    //SE REQUIERE HACER VALIDACION DE DATOS
    $datos_validos = false;

    if(strlen($nc)>0){
        $datos_validos = true;
    }

    if ($datos_validos) {
        $aDAO = new AlumnoDAO();
        $aDAO->agregarAlumno($nc, $n, $pa, $sa, $e, $s, $c);
    }else{
        
    }
    
    
?>
