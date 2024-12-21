<?php
class Conexion {

    private $host;
    private $user;
    private $password;
    private $dbname;
    private $port;

    public $conexion;

    public function __construct(){
        $datos = $this->datosConection();
        $this->host = $datos['conexion']['server'];
        $this->user = $datos['conexion']['user'];
        $this->password = $datos['conexion']['password'];
        $this->dbname = $datos['conexion']['database'];
        $this->port = $datos['conexion']['port'];

        $this->conexion = pg_connect("host=$this->host port=$this->port dbname=$this->dbname user=$this->user password=$this->password");
        if (!$this->conexion) {
            echo "Error al conectar a PostgreSQL: " . pg_last_error();
        }
    }

    private function datosConection(){ 
        $direccion = dirname(__FILE__);
        $jsonDatos = file_get_contents($direccion."/config");
        return json_decode($jsonDatos, true);
    }

    private function convertirUTF8($array){
        array_walk_recursive($array, function(&$item, $key){
            if(!mb_detect_encoding($item, 'utf-8', true)){
                $item = utf8_encode($item);
            }
        });
        return $array;
    }

    public function obtenerDatos($sqlstr){
        $resultado = pg_query($this->conexion, $sqlstr);
        $resultadoArray = array();
        while ($row = pg_fetch_assoc($resultado)) {
            $resultadoArray[] = $row;
        }
        return $this->convertirUTF8($resultadoArray);
    }
}
?>