<?php
class Usuario{
    private $db;
    
    public function __construct(){
        $this->db=new Base;
    }
    public function obtenerUsuarios(){
        $resultados=$this->db->query("select * from usuarios ");
        return $resultados;
        
    }
    public function agregarUsuario($datos){
        $bind=array(
                    $datos['nombre_usuario'],
                    $datos['correo'],
                    $datos['telefono'],
                    $datos['rfc'],
                    $datos['password'],
                    $datos['direccion'],
                    $datos['foto']
                    
                    );
        $sql="INSERT INTO usuarios (nombre_usuario, correo, telefono, rfc, password, direccion, foto) VALUES (?,?,?,?,?,?,?)";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
    public function obtenerUsuarioId($id){
        $bind=array($id);
        $sql="SELECT * FROM usuarios WHERE id=?";
        $renglon =$this->db->queryOne($sql,$bind);
        
        return $renglon;
        
    }
    
    public function actualizarUsuario($datos){
        $bind=array(
                    $datos['nombre'],
                    $datos['correo'],
                    $datos['telefono'],
                    $datos['rfc'],
                    $datos['password'],
                    $datos['direccion'],
                    $datos['foto'],
                    $datos['id']
                    
                    );
        $sql="UPDATE usuarios SET nombre_usuario = ?, correo = ?, telefono = ?, rfc = ?, password = ?, direccion = ?, foto=? WHERE id = ?";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
        
    }
    public function borrarUsuario($id){
        $bind=array($id);
        $sql="DELETE FROM usuarios WHERE id = ?";
        $resultado=$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
}

?>