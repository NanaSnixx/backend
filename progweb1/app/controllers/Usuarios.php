<?php class Usuarios extends Controller{
    public function __construct(){
        
        $this->usuarioModel=$this->model('Usuario');
    }
    public function index(){
        $usuarios=$this->usuarioModel->obtenerUsuarios();
        
        $datos=[
            'usuarios'=>$usuarios  
        ];
       $this->view('paginas/Usuarios/usuarios',$datos);
    }
    
    public function agregar(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
              'nombre'=> trim($_POST['nombre_usuario']),
              'rfc'=> trim($_POST['rfc']),
              'direccion'=> trim($_POST['direccion']),
              'correo'=> trim($_POST['correo']),
              'password'=> sha1($_POST['password']),
              'telefono'=> trim($_POST['telefono']),
              'foto'=> addslashes(file_get_contents($_FILES['foto']['tmp_name']))
                
            ];
            if($this->usuarioModel->agregarUsuario($datos)){
                redireccion('/usuarios');
            }else{
                
            }
        }
        else{
            $datos=[
              'nombre'=>'',
              'rfc'=>'' ,
              'direccion'=>'',
              'correo'=> '',
              'password'=>'',
              'telefono'=> '',
              'foto'=> '',
                
            ];
            $this->view('paginas/usuarios/agregar',$datos);
        }
        
    }
    public function editar($id){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
              'id'=> $id,
              'nombre'=>trim($_POST['nombre']),
              'rfc'=> trim($_POST['rfc']),
              'direccion'=>trim($_POST['direccion']),
              'correo'=> trim($_POST['correo']),
              'password'=>sha1($_POST['password']),
              'telefono'=> trim($_POST['telefono']),
              'foto'=> addslashes(file_get_contents($_FILES['foto']['tmp_name'])),
                
            ];
            if($this->usuarioModel->actualizarUsuario($datos)){
                redireccion('/usuarios');
            }else{
                
            }
            
        }
        else{
            $usuario=$this->usuarioModel->obtenerUsuarioId($id);
        
        $datos=[
             'id' => $usuario['id'],
              'nombre'=> $usuario['nombre_usuario'],
              'rfc'=>  $usuario['rfc'],
              'direccion'=> $usuario['direccion'],
              'correo'=>  $usuario['correo'],
              'password'=> $usuario['password'],
              'telefono'=>  $usuario['telefono'],
              'foto'=> $usuario['foto'],
                
            ];
        $this->view('paginas/usuarios/editar',$datos);
        }
    }
    public function borrar($id){
        $usuario=$this->usuarioModel->obtenerUsuarioId($id);
        $foto=base64_encode($usuario['foto']);
                $datos=[
              'id' => $usuario['id'],
              'nombre'=> $usuario['nombre_usuario'],
              'rfc'=>  $usuario['rfc'],
              'direccion'=> $usuario['direccion'],
              'correo'=>  $usuario['correo'],
              'password'=> "No se puede mostrar",
              'telefono'=>  $usuario['telefono'],
              'foto'=> $foto
                
            ];
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    if($this->usuarioModel->borrarUsuario($id)){
                        redireccion('/usuarios');
                    }else{
                        
                    }
                }
        $this->view('paginas/usuarios/borrar',$datos);
    }
    
    public function toCsv(){
        $archivo_csv=fopen(RUTA_APP . '/otros/usuarios'. time() . '.csv','w+');
        $usuarios=$this->usuarioModel->obtenerUsuarios();
        fwrite($archivo_csv,"ID_Usuario,RFC,NOMBRE,CORREO,DIRECCION,TELEFONO\n");
        foreach($usuarios as $key=>$usuario){
            fwrite($archivo_csv, $usuario['id'].','.
                                $usuario['rfc'].','.
                                $usuario['nombre_usuario'].','.
                                $usuario['correo'].','.
                                $usuario['direccion'].','.
                                $usuario['telefono'].','."\n");
        }
        fclose($archivo_csv);
        echo json_encode(['hecho'=>true]);
        
    }
    
        public function toXml(){
        $archivo_xml=fopen(RUTA_APP . '/otros/usuarios'. time() . '.xml','w+');
        $usu=$this->usuarioModel->obtenerUsuarios();
        
        fwrite($archivo_xml,"<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n<usuarios>\n");
        foreach($usu as $key=>$usuario){
            fwrite($archivo_xml , "<usuario>\n" .
                                "<id>" . $usuario['id'] . "</id>\n" .
                                "<nombre>" . $usuario['nombre_usuario'] . "</nombre>\n" .
                                "<correo>" . $usuario['correo'] . "</correo>\n".
                                "<direccion>" . $usuario['direccion'] . "</direccion>\n".
                                "<telefono>" . $usuario['telefono'] . "</telefono>\n".
                                "</usuario>\n");
        }
        fwrite($archivo_xml,"</usuarios>");
        fclose($archivo_xml);
        echo json_encode(['hecho'=>true]);
        
    }
        public function toJson(){
        $archivo_json=fopen(RUTA_APP . '/otros/usuarios'. time() . '.json','w+');
        $registros=[];
        $usuarios=$this->usuarioModel->obtenerUsuarios();
        
        foreach($usuarios as $key=>$usuario){
            $registros[]=[
                         'id'=> $usuario['id'],
                         'rfc'=> $usuario['rfc'],
                         'nombre'=> $usuario['nombre_usuario'],
                         'correo'=> $usuario['correo'],
                         'direccion'=> $usuario['direccion'],
                         'telefono'=> $usuario['telefono']];
        }
        fwrite($archivo_json,json_encode($registros));
        fclose($archivo_json);
        echo json_encode(['hecho'=>true]);
        
    }
    
    public function toPdf(){
        
        $usuarios=$this->usuarioModel->obtenerUsuarios();
        
        foreach($usuarios as $key=>$usuario){
            $registros[]=[
                         'id'=> $usuario['id'],
                         'rfc'=> $usuario['rfc'],
                         'nombre'=> $usuario['nombre_usuario'],
                         'correo'=> $usuario['correo'],
                         'direccion'=> $usuario['direccion'],
                         'telefono'=> $usuario['telefono'],
                         'foto'=> base64_encode($usuario['foto'])
                         ];
        }
    $datos=['usuarios'=>$registros, ];
        $this->view('paginas/usuarios/impresion',$datos);
        
    }
    
}

?>