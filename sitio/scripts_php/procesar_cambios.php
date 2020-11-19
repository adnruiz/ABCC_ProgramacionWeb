<?php
	
	include_once("alumnoDAO.php");

	$aDAO = new AlumnoDAO();
	if (isset($_POST) && !empty($_POST)) {
         
	 	$nc = htmlspecialchars($_POST['caja_num_control']);
		$n = htmlspecialchars($_POST['caja_nombre']);
		$pa = htmlspecialchars($_POST['caja_primer_ap']);
		$sa = htmlspecialchars($_POST['caja_segundo_ap']);
		$e = htmlspecialchars($_POST['edad']);
		$s = htmlspecialchars($_POST['semestre']);
		$c = htmlspecialchars($_POST['carrera']);

		$aDAO->cambiar($nc, $n, $pa, $sa, $e, $s, $c);
	 } 
?>