<?

class Conexion{

    private $conn;

    function __construct(){
        $this->conn =  new mysqli("localhost", "root", "root", "usuarios");
    }


    /**
     * @return mysqli
     */
    public function getConexion()
    {
        return $this->conn;
    }




}

