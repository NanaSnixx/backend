<?php
class Base{
    private $motor=DB_MOTOR;
    private $host=DB_HOST;
    private $user=DB_USUARIO;
    private $password=DB_PASSWORD;
    private $database=DB_NOMBRE;
    
    private $dbh;
    private $stmt;
    private $error;
    
public function __construct(){
    try{
        
        if(!$this->dbh=ADONewConnection($this->motor)){
            throw new Exception('Error al conectarse a motor (Driver)');
        
        }
        elseif(!$this->dbh->PConnect($this->host,$this->user,$this->password,$this->database)){
            throw new Exception('Error al conectarse a base de datos '. $this->database);
        
        }
        $this->dbh->SetFetchMode(ADODB_FETCH_ASSOC);
        return $this->dbh;
    }catch(Exception $e){
        ECHO $e->getMessage();
    };
}

    public function query($sql,$bind=[]){
        $sql=$this->dbh->prepare($sql);
        $resultado=$this->dbh->execute($sql,$bind);
        if(!$resultado->recordCount()){
            $resultado=[];
        }
        return $resultado;
    }
    public function queryOne($sql,$bind=[]){
                $sql=$this->dbh->prepare($sql);
        $resultado= $this->dbh->getRow($sql, $bind);
        //if(!$resultado){
        //    $resultado['msg_error']=true;
        //}
        return $resultado;
    }
    
    public function queryRenglon($sql,$bind=[]){
        $sql=$this->dbh->prepare($sql);
        $resultado = $this->dbh->getRow($sql, $bind);
        return $resultado;
    }

}
?>

