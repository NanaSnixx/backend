<?php
class Producto{
    private $db;

    public function __construct(){
        $this->db=new Base;
    }
    public function obtenerProductos(){
        $resultados=$this->db->query("select * from productos");
        return $resultados;
    }
    public function agregarProductos($datos){
        $bind=array(
                    $datos['nombre_prod'],
                    $datos['precio'],
                    $datos['foto_prod']
                    );
        $sql="INSERT INTO productos (nombre_prod, precio, foto_prod) VALUES (?,?,?)";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
    public function obtenerProductosId($id){
        $bind=array($id);
        $sql="SELECT * FROM productos WHERE id_prod=?";
        $renglon =$this->db->queryOne($sql,$bind);
        return $renglon;

    }
    public function actualizarProductos($datos){
        $bind=array(
                    $datos['nombre_prod'],
                    $datos['precio'],
                    $datos['foto_prod'],
                    $datos['id_prod']
                    );
        $sql="UPDATE productos SET nombre_prod = ?, precio = ?, foto_prod=? WHERE id_prod = ?";
        $resultado =$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
    public function borrarProductos($id){
        $bind=array($id);
        $sql="DELETE FROM productos WHERE id_prod = ?";
        $resultado=$this->db->query($sql,$bind);
        return (is_array($resultado))?true:false;
    }
}
?>