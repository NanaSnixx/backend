<?php
class Cuenta{
    private $db;
    
    public function __construct(){
        $this->db=new Base;
    }
    public function obtenerCuentas(){
        $resultados=$this->db->query("select * from cuentas ");
        return $resultados;
        
    }
    public function agregarCuenta($datos){
        $bind=array(
                    $datos['Nombre'],
                    $datos['BalanceInicial'],
                    $datos['fecha'],
                    );

        $sql="INSERT INTO cuentas (Nombre, BalanceInicial,fecha) VALUES (?,?,?)";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
    public function obtenerCuentaId($id){
        $bind=array($id);
        $sql="SELECT * FROM cuentas WHERE id=?";
        $renglon =$this->db->queryOne($sql,$bind);
        
        return $renglon;
        
    }
    
    public function actualizarCuenta($datos){
        $bind=array(
                    $datos['Nombre'],
                    $datos['BalanceInicial'],
                    $datos['fecha'],
                    $datos['id']
                    
                    );
        $sql="UPDATE cuentas SET Nombre = ?, BalanceInicial = ?, fecha = ? WHERE id = ?";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
        
    }
    public function borrarCuenta($id){
        $bind=array($id);
        $sql="DELETE FROM cuentas WHERE id = ?";
        $resultado=$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
}

?>