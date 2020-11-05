<?php class Productos extends Controller{
    public function __construct(){
        
        $this->productosModel=$this->model('Producto');
    }
    public function index(){
        $productos=$this->productosModel->obtenerProductos();
        
        $datos=[
            'productos'=>$productos  
        ];
       $this->view('paginas/productos/productos',$datos);
    }
    
    public function agregar(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
              'nombre_prod'=> trim($_POST['nombre_prod']),
              'precio'=> $_POST['precio'],
              'foto_prod'=> addslashes(file_get_contents($_FILES['foto_prod']['tmp_name']))               
            ];
            if($this->productosModel->agregarProductos($datos)){
                redireccion('/productos');
            }else{
                
            }
        }
        else{
            $datos=[
              'nombr_prod'=>'',
              'precio'=>'' ,
              'foto_prod'=> '',   
            ];
            $this->view('paginas/productos/agregar',$datos);
        }
        
    }
    public function editar($id){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $datos=[
              'id_prod'=> $id,
              'nombre_prod'=>trim($_POST['nombre_prod']),
              'precio'=> $_POST['precio'],
              'foto_prod'=> addslashes(file_get_contents($_FILES['foto_prod']['tmp_name'])),

            ];
            if($this->productosModel->actualizarProductos($datos)){
                redireccion('/productos');
            }else{
            }
        }
        else{
            $productos=$this->productosModel->obtenerProductosId($id);
        $datos=[
             'id_prod' => $productos['id_prod'],
              'nombre_prod'=> $productos['nombre_prod'],
              'precio'=>  $productos['precio'],
              'foto_prod'=> $productos['foto_prod'],
            ];
        $this->view('paginas/productos/editar',$datos);
        }
    }
    public function borrar($id){
        $productos=$this->productosModel->obtenerProductosId($id);
        $foto=base64_encode($productos['foto_prod']);
                $datos=[
              'id_prod' => $productos['id_prod'],
              'nombre_prod'=> $productos['nombre_prod'],
              'precio'=>  $productos['precio'],
              'foto_prod'=> $foto               
            ];
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if($this->productosModel->borrarProductos($id)){
                    redireccion('/productos');
                }else{
                }
            }
        $this->view('paginas/productos/borrar',$datos);
    }
    
    public function toCsv(){
        $archivo_csv=fopen(RUTA_APP . '/otros/productos'. time() . '.csv','w+');
        $productos=$this->productosModel->obtenerProductos();
        fwrite($archivo_csv,"ID_PROD,NOMBRE_PROD,PRECIO\n");
        foreach($productos as $key=>$productos){
            fwrite($archivo_csv, $productos['id_prod'].','.
                                $productos['nombre_prod'].','.
                                $productos['precio'].','."\n");
        }
        fclose($archivo_csv);
        echo json_encode(['hecho'=>true]);
    }
        public function toXml(){
        $archivo_xml=fopen(RUTA_APP . '/otros/productos'. time() . '.xml','w+');
        $usu=$this->productosModel->obtenerProductos();

        fwrite($archivo_xml,"<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n<productos>\n");
        foreach($usu as $key=>$productos){
            fwrite($archivo_xml , "<productos>\n" .
                                "<id_prod>" . $productos['id_prod'] . "</id_prod>\n" .
                                "<nombre_prod>" . $productos['nombre_prod'] . "</nombre_prod>\n" .
                                "<precio>" . $productos['precio'] . "</precio>\n".
                                "</productos>\n");
        }
        fwrite($archivo_xml,"</productos>");
        fclose($archivo_xml);
        echo json_encode(['hecho'=>true]);
    }
        public function toJson(){
        $archivo_json=fopen(RUTA_APP . '/otros/productos'. time() . '.json','w+');
        $registros=[];
        $productos=$this->productosModel->obtenerProductos();
        foreach($productos as $key=>$productos){
            $registros[]=[
                         'id_prod'=> $productos['id_prod'],
                         'nombre_prod'=> $productos['nombre_prod'],
                         'precio'=> $productos['precio']];
        }
        fwrite($archivo_json,json_encode($registros));
        fclose($archivo_json);
        echo json_encode(['hecho'=>true]);

    }

    public function toPdf(){
        
        $productos=$this->productosModel->obtenerProductos();
        
        foreach($productos as $key=>$productos){
            $registros[]=[
                         'id_prod'=> $productos['id_prod'],
                         'nombre_prod'=> $productos['nombre_prod'],
                         'precio'=> $productos['precio'],
                         'foto_prod'=> base64_encode($productos['foto_prod'])
                         ];
        }
    $datos=['productos'=>$registros, ];
        $this->view('paginas/productos/impresion',$datos);
        
    }
    
}

?>