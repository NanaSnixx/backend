<?php
class Auth{
    private $db;
    public function __construct(){
        $this->db=new Base;
        
    }
    
    public function buscarUsuario($datos){
        if(!$this->verificar($datos)){
            $bind=array($datos['correo'],$datos['password']);
            $sql="select * from usuarios where correo=? and password=?";
            $renglon=$this->db->queryRenglon($sql,$bind);
            return $renglon;
        
        }else{
            
        }
        
    }
    public function verificar($datos){
        return empty($datos['correo']) || empty($datos['password']);
    }
}

?>