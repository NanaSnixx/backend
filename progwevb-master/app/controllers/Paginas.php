<?php
class Paginas extends Controller{
    public function __construct(){
        
    }
    public function index(){
        $datos=[
        'titulo'=>'Bienvenidos'
        ];
        $this->view('paginas/dashboard',$datos);
        
    }
    
}

?>