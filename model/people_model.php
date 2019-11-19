<?php
class people_model{
    private $db;
    private $personas;
 
    public function __construct(){
        $this->db=Connection::connect();
        $this->personas=array();
    }
    public function get_personas(){
        $consulta=$this->db->query("select * from pagedata;");
        while($filas=$consulta->fetch_assoc()){
            $this->personas[]=$filas;
        }
        return $this->personas;
    }
}
?>

