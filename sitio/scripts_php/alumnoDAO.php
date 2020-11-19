<?php
    
    include('conexion_bd.php');

    class AlumnoDAO{
        private $conexion;
        
        public function __construct(){
            $this->conexion = new ConexionBD();
        }
        
        //Usuario pureba: adnruiz password: 12345
        
        //METODOS PARA ABCC
        
        //----------------------ALTAS-------------------------------
        public function agregarAlumno($nc, $n, $pa, $sa, $e, $s, $c){

            $sql = "INSERT INTO alumnos VALUES ('$nc','$n','$pa','$sa', $e , $s ,'$c')";

            //var_dump($sql);

            if(mysqli_query($this->conexion->getConexion(), $sql)){
               // echo "Perfecto, casi soy ISC :)";
                header('location:../vista/formulario_altas.php');
            }else{
                //echo "No te rindas cabron!!!";
                echo mysqli_error($this->conexion->getConexion());
            }

        }//funcion agregarAlumno

        //----------------------BAJAS-------------------------------
        public function eliminarAlumno($nc){
            $sql = "DELETE FROM alumnos WHERE Num_Control='$nc'";
            //var_dump($sql);
            if(mysqli_query($this->conexion->getConexion(), $sql)){
                //echo "PERFECTO, CASI SOY ISC   =) ";
                //echo "<script> alert('Agregado con EXITO'); </script>";
                header('location:../vista/formulario_bajas.php');
            }else{
                echo "¿SERA MUY TARDE PARA CAMBIAR DE CARRERA?????   =(    ";
                echo mysqli_error($this->conexion->getConexion());
            }
        }//eliminar
        //----------------------CAMBIOS---------------------------------
        public function obtenerCambio($nc){
			$sql="SELECT * FROM alumnos WHERE Num_Control = '$nc'";
			$res=mysqli_query($this->conexion->getConexion(),$sql);
			if($res){
					return $res;
					
				}else{
					echo "Fracaso en la CONSULTA";
					echo mysqli_error($this->conexion->getConexion());
				}
		}
        public function cambiar($nc, $n, $pa, $sa, $e, $s, $c){

				$sql = "UPDATE alumnos SET Nombre_Alumno ='$n', Primer_Ap_Alumno = '$pa', 
				Segundo_Ap_Alumno = '$sa', Edad = '$e', Semetre = '$s', Carrera = '$c' WHERE Num_Control = '$nc'";

				$res=mysqli_query($this->conexion->getConexion(),$sql);
				if($res){
					//echo "Exito";
                    echo "<script> alert('Modificado Correctamente...');</script>";
                    header("location:../vista/formulario_bajas.php");
					
				}else{
					echo "Fracaso";
					echo mysqli_error($this->conexion->getConexion());
				}
		}
        
        //----------------------CONSULTAS-------------------------------
        public function mostrarTodos(){
			$sql = "SELECT * FROM alumnos";
			$res = mysqli_query($this->conexion->getConexion(), $sql); 

			if ($res) {
				//echo "EXITO";
				return $res;
				//header("location:../vista/bajas_cambios.php");
			}else{
				echo "Fracaso al CONSULTAR =( ";
				echo mysqli_error($this->conexion->getConexion());
			}
		}
    }
?>
