<?php

class ConexionBD {
    private $conexion;

    private $host = 'localhost:3306';
    private $usuario = 'adanWeb';
    //No utilizar el root y no darle privilegios al usuario
    private $contraseña = '12345';
    private $bd = 'usuarios_escuela_web';

    public function __construct() {
        $this->conexion = mysqli_connect($this->host, $this->usuario, $this->contraseña, $this->bd);
        
        if(!$this->conexion)
            //echo "<span style='color:green;'> Error de conexion</span>";
             die("Error en conexion de usuario". mysqli_connect_error() . mysqli_connect_errno());
        
    }
    
    public function getConexion(){
        return $this->conexion;
        //Meter alguno de los patrones de diseño, podria ser singleton
    }

}

?>